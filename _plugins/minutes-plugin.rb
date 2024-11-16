require 'json'
require 'net/http'
require 'uri'

module Jekyll
  class MinutesFetcher < Generator
    def generate(site)
      start_time = Time.now
      minutesUri = URI('https://w3.org/WAI/minutes-json.php?start_date=1998-12-01')
      data = JSON.parse(Net::HTTP.get(minutesUri))
      site.data['minutes']['groups'].each do |id, channels|
        groupMinutes = []
        for channel in channels do
          next unless data[channel]
          data[channel].each do |date, details|
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