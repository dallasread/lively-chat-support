#!/usr/bin/env ruby

PATH = "/Users/dread/Apps/remetric"

Dir.chdir(PATH) do
  `ruby zipper.rb --production`
end

Dir.glob("#{PATH}/*") do |filename|
  next if /zip|LICENSE|readme/ =~ filename
  `cp #{filename} remetric/#{File.basename(filename)}`
end

Dir.chdir(PATH) do
  `ruby zipper.rb --development`
end
