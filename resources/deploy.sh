#!/usr/bin/env bash
rsync -avz --delete-after --exclude .git --exclude resources -e ssh . vahillsp@vahillspool.org:~/www
rsync -avz --delete-after --exclude resources/script-kiddie/resources/script-kiddie-config.php -e ssh resources/script-kiddie vahillsp@vahillspool.org:~/script-kiddie
