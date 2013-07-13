#!/usr/bin/env bash
mkdir -p thumbnails && find . -type f -depth 1 -exec convert -define jpeg:size=200x200 {} -thumbnail 60x60\^ -gravity center -extent 60x60 thumbnails/{} \;
img_path=$(pwd | sed 's/.*\/vahillsp\///')
for i in *
do
  if [[ -f "$i" ]]; then
    file "$i" | grep -q "image data" && echo "<a href=\"${img_path}/$i\" rel=\"prettyPhoto[pp_gal]\" title=\"Swim team pictures\"><img src=\"${img_path}/thumbnails/$i\" width=\"60\" height=\"60\" alt=\"Swim team pictures\" /></a>"
fi
done
