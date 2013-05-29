#!/usr/bin/env bash
rsync -avz --delete-after --exclude .git --exclude resources --exclude error_log -e ssh . vahillsp@vahillspool.org:~/www
rsync -avz --delete-after --exclude script-kiddie-config.php --exclude BadAttemptList.txt -e ssh resources/script-kiddie vahillsp@vahillspool.org:~/
