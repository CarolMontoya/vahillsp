#!/usr/bin/env bash
rsync -avz --delete-after --exclude .git --exclude resources -e ssh . vahillsp@vahillspool.org:~/www
rsync -avz --delete-after -e ssh resources/script-kiddie vahillsp@vahillspool.org:~/script-kiddie
