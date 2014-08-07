#!/bin/bash

. ./config.sh

eval $( ./find-mysql.sh )

while ssleep 10; do
  git pull
  if [ -e "$FLAG" ]; then
    prev=$( cat "$FLAG" )
    head=$( cat .git/refs/heads/master )
    git diff --numstat $prev..$head | awk -e '{ print $3 }' | grep '^sql/' | while read tbl; do
      echo "Loading $tbl"
      cat "$tbl" | perl domhack.pl $INDOM $OUTDOM | $MYSQL -u$USER $DB
    done
  fi
  cp .git/refs/heads/master "$FLAG"
done

# vim:ts=2:sw=2:sts=2:et:ft=sh

