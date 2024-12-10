require 'json'
require 'net/http'
require 'uri'

module Jekyll
  class MinutesFetcher < Generator
    def generate(site)
      start_time = Time.now
      limit = 10000
      requested_channels = []
      site.data['minutes']['groups'].each {|id, channels| requested_channels.push(*channels)}

      minutesUri =
        URI("https://www.w3.org/services/meeting-minutes?format=json&num=#{limit}&channels=#{requested_channels.uniq().join(',')}")
      data = JSON.parse(Net::HTTP.get(minutesUri))
      grouped_data = {}
      data.each do |entry|
        entry['topics'].select! {|topic| topic['title'] != nil}
        entry['topics'].each do |topic|
          topic['title'].encode!('UTF-8', invalid: :replace, replace: '')
        end
        if (entry['resolutions'])
          entry['resolutions'].each do |resolution|
            resolution['topic'].encode!('UTF-8', invalid: :replace, replace: '') if resolution['topic']
          end
        end
        grouped_data[entry['channel']] = {} unless grouped_data[entry['channel']]
        grouped_data[entry['channel']]["#{entry['yyyy']}-#{entry['mm']}-#{entry['dd']}"] = {
          'href' => entry['href'],
          'title' => entry['title'],
          'resolutions' => entry['resolutions'],
          'topics' => entry['topics']
        }
      end

      site.data['minutes']['groups'].each do |id, channels|
        groupMinutes = []
        for channel in channels do
          next unless grouped_data[channel]
          grouped_data[channel].each do |date, details|
            groupMinutes.push(details.merge({channel_id: channel, date: date}))
          end
        end
        groupMinutes.sort_by! {|details| Date.parse(details[:date])}
        groupMinutes.reverse!
        
        site.data['minutes'][id] = {}
        for details in groupMinutes do
          site.data['minutes'][id][details[:date] + '-' + details[:channel_id]] =
            details.except(:channel_id, :date)
        end
      end
      $stdout.puts('Fetched meeting minutes data in ' + (Time.now - start_time).to_s + ' seconds')
    end
  end
end