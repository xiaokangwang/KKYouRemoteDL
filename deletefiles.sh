#/bin/sh
find cache/ -mtime +1 -exec rm '{}' \;
mkdir cache