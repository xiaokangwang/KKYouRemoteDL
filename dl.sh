#/bin/sh
cd cache
../youtubedl/youtube-dl $1 > $2
return $?