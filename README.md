# SlimboxThumbs
This extension is forked from [Mediawiki Extension:SlimboxThumbs](http://www.mediawiki.org/wiki/Extension:SlimboxThumbs)

This extension includes a copy of Slimbox. It has one small modification: caption is animated together with image container, instead of original annoying consecutive animation. Also "autoloader" is removed from slimbox2.js, and there is an additional slimboxthumbs.js file.

## Requirements
MediaWiki 1.24.0 or higher

## Installation
1. Command
 ```bash
    git clone https://github.com/wiki-chan/SlimboxThumbs.git
```
 in `$IP/extensions`

2. Enable the extension by adding this line to your LocalSettings.php:
 ```php
    wfLoadExtension( "SlimboxThumbs" ); 
```
