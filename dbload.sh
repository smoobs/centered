#!/bin/bash

. ./config.sh

echo "INDOM:  $INDOM"
echo "OUTDOM: $OUTDOM"

eval $( ./find-mysql.sh )

for tbl in "$OUT"/wp_*.sql; do
  echo "Loading $tbl"
  cat "$tbl" | perl domhack.pl $INDOM $OUTDOM | perl domhack.pl 'C:\Users\Smoo\Documents\001 - centered\centered\' '/opt/centred/' | $MYSQL -u$USER $DB
done

# vim:ts=2:sw=2:sts=2:et:ft=sh

