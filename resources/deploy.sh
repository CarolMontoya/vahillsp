#!/usr/bin/env bash
rsync -avz --delete-after --exclude .git --exclude resources -e ssh . vahillsp@vahillspool.org:~/www
