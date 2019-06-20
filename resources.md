---
title: "WAI Resources"
permalink: /resources/
parent: /
lang: en
ref: /resources/
github:
  repository: w3c/wai-website
  path: resources.md
feedbackmail: wai@w3.org
footer: |
---

{% assign planning=site.pages | where: "ref", "/planning/" | where: "lang", page.lang %}

## {{planning.first.title}}

{{planning.first.content }}
