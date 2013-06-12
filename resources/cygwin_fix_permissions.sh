#!/usr/bin/env bash
find $(dirname $0)/../ -path resources -prune -o -type f -exec chmod 644 {} +
find $(dirname $0)/../ -path resources -prune -o -type d -exec chmod 755 {} +
find $(dirname $0)/../ -path resources -prune -o -exec chown Carsten:Users {} +
