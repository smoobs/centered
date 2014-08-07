#!/bin/bash

. ./config.sh

eval $( ./find-mysql.sh )

for tbl in "$OUT"/wp_*.sql; do
  echo "Loading $tbl"
  cat "$tbl" | perl domhack.pl $INDOM $OUTDOM | $MYSQL -u$USER $DB
done

# vim:ts=2:sw=2:sts=2:et:ft=sh

