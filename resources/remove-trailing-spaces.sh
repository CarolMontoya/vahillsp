#!/usr/bin/env bash
find . \( -name "*.css" -or -name "*.php" -or -name "*.inc" \) -exec sed -e 's/[   ]*$//' -i '' {} +
git diff --ignore-space-at-eol
