#!/usr/bin/env bash
java -jar $(dirname $0)/yuicompressor-2.4.7.jar  --type css -o $(dirname $0)/../css/vahillspool.min.css $(dirname $0)/../css/vahillspool.css
