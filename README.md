# subly
a tool to convert subtitles for example netflix ttml format to subrip format
feel free to use distribute and contribute

# Supported formats
webvtt, ttml, subrip, sbv, json, substationalpha

# Phar usage
./subly.phar -i input.xml -o output.srt

or 

php subly.phar -i input.xml -o output.srt

or on system wide installation

subly -i input.xml -o output.srt

# Input and Output format
./subly.phar -i input.xml -if webvtt -o output.srt -of subrip

or

php subly.phar -i input.xml -if webvtt -o output.srt -of subrip

or on system wide installation

subly -i input.xml -if webvtt -o output.srt -of subrip

# System wide installation
$ sudo mv subly.phar /usr/bin/subly

# Credits
https://github.com/thephpleague/climate

https://github.com/MacFJA/PharBuilder