#!/usr/bin/env bash
rsync -avz --delete-after --exclude .git --exclude .bzr --exclude resources -e ssh . vahillsp@vahillspool.org:~/www
