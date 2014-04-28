#!/usr/bin/env bash
rsync -avz --delete-after --exclude .git --exclude resources --exclude error_log --exclude BadAttemptList.txt -e ssh . vahillsp@direct.vahillspool.org:~/www
rsync -avz --delete-after --exclude script-kiddie-config.php --exclude BadAttemptList.txt -e ssh resources/script-kiddie vahillsp@direct.vahillspool.org:~/
