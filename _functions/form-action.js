// @ts-check
// NETLIFY function to call a github repository-dispatch Web hook
// when a form submission occurs

const { debug } = require('console')
const https = require('https')
const { isArray } = require('util')
const { v1: uuidv1 } = require('uuid') // use v1, time-based so unique each call

// GitHub dispatch web hook handler used to trigger the workflow
const GITHUB_DISPATCH_EVENT = 'form-submission'

function callGitHubWebhook(formData) {
  const repository = formData['repository'];
  if (!repository) {
    return {
    statusCode: 500,
    body: `Missing repository for GitHub Action`,
  }}
  const GITHUB_URI = `/repos/w3c/${repository}/dispatches`

  // clone and clean up data
  const data = {...formData}; // NB shallow copy. Semicolon as next line starts with [
  ['success', 'failure'].forEach((prop) => {delete data[prop]})

  const reqBody = `{
        "event_type": "${GITHUB_DISPATCH_EVENT}",
        "client_payload": {
          "form":
            ${JSON.stringify(data)}
          }
    }`

  const options = {
    hostname: 'api.github.com',
    port: 443,
    path: GITHUB_URI,
    method: 'POST',
    headers: {
      'User-Agent': `W3C WAI Website ${repository}`,
      Accept: 'application/vnd.github.v3+json',
      'Content-Type': 'application/json',
      Authorization: `Bearer ${process.env.GITHUB_PAT}`,
      'Content-Length': reqBody.length,
    },
  }

  return new Promise((resolve, reject) => {
    const req = https.request(options, (res) => {
      let respBody = ''
      res.on('data', (chunk) => (respBody += chunk.toString()))
      res.on('end', () => {
        resolve({
          statusCode: res.statusCode,
          headers: res.headers,
          body: respBody,
        })
      })
    })

    req.on('error', (error) => {
      console.error(error)
      reject({
        statusCode: 500,
        body: `Error calling GitHub action - ${error}`,
      })
    })

    req.write(reqBody)
    req.end()
  })
}

function formEncodedToPOJO(formEncoded) {
  const form = new URLSearchParams(formEncoded)
  return Array.from(form.keys()).reduce((result, key) => {
    const isArrayKey = key.endsWith('[]')
    const targetKey = isArrayKey ? key.slice(0, -2) : key
    result[targetKey] = ((result[targetKey] && !Array.isArray(result[targetKey]))) ? // 2nd checkbox with this key
      form.getAll(targetKey) :
      (isArrayKey) ? form.getAll(key) : form.get(key)
    return result
  }, {})
}


exports.handler = async function (event, context) {
  const response = (code, redir, body) =>
    ({ statusCode: redir ? 303 : code,     // this is the correct redirect code, UA will GET
      headers: { ...{"content-type": "application/json", "Access-Control-Allow-Origin": "*"}, ...(redir ? { "Location": redir } : {}) },
      body: body ? JSON.stringify(body, null, '  ') : ''
  })

  const mkURI = (path) => path ? `${event.headers.origin}${path}` : null
  if (event.httpMethod !== 'POST') {
    console.error(`Invalid http method: ${event.httpMethod}`)
    return { statusCode: 405, body: 'Method Not Allowed' }
  }

  const contentType = event.headers['content-type']
  if (contentType !== 'application/x-www-form-urlencoded') {
    console.error(`Content incorrect type: ${event.headers['content-type']}`)
    return { statusCode: 415, body: 'Unsupported Media Type' }
  }

  const formData = formEncodedToPOJO(event.body)

  // new id if not in form - v1 date based to avoid duplications
  formData['submission_ref'] = formData['submission_ref'] || uuidv1()
  formData['submission_date'] = (new Date).toISOString()

  console.info(`Processing form ${formData['repository']}/${formData['form_name']} ${formData['submission_ref']}`)

  // uncomment following to stop GitHub action processing
  return response(200, mkURI(formData['success']), formData )

 // Invoke GitHub Action
  const res = await callGitHubWebhook(formData)
  const success = res.statusCode >= 200 && res.statusCode <= 299
  if (!success) {
    console.error(`GitHub returned failure: ${res.statusCode}, ${res.body}`)
    return response(res.statusCode, mkURI(formData['failure']), {"error": "GitHub Action failed with ${res.statusCode}, ${res.body}"})
  }

  return response(200, mkURI(formData['success']), formData )
}