#/bin/sh
find cache/ -mtime +2 -exec rm '{}' \;
mkdir cache
