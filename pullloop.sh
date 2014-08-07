#!/bin/bash

. ./config.sh

eval $( ./find-mysql.sh )

flag='/tmp/rf-data.flag'
while ssleep 10; do
  git pull
  if [ -e "$flag" ]; then
    prev=$( cat "$flag" )
    head=$( cat .git/refs/heads/master )
    git diff --numstat $prev..$head | awk -e '{ print $3 }' | grep '^sql/' | while read tbl; do
      echo "Loading $tbl"
      cat "$tbl" | perl domhack.pl $INDOM $OUTDOM | $MYSQL -u$USER $DB
    done
  fi
  cp .git/refs/heads/master "$flag"
done

# vim:ts=2:sw=2:sts=2:et:ft=sh

