#/bin/sh
cd cache
../youtubedl/youtube-dl --id -c -i --no-mtime $1 > $2
exit $?
