#!/usr/bin/env bash
find $(dirname $0)/../ \( -iname "*.png" -o -iname "*.gif" -o -iname "*.bmp" \) -exec optipng.exe -o7 -clobber -fix -preserve {} +
