#!/bin/bash

. ./config.sh

echo "INDOM:  $INDOM"
echo "OUTDOM: $OUTDOM"
COOKED="sql.cooked"
mkdir -p "$COOKED"

eval $( ./find-mysql.sh )

for tbl in "$OUT"/wp_*.sql; do
  echo "Cooking $tbl"
  cat "$tbl" | perl domhack.pl $INDOM $OUTDOM | perl domhack.pl 'C:\Users\Smoo\Documents\001 - centered\centered\' '/opt/centred/' > "$COOKED/$( basename "$tbl" )"
done

# vim:ts=2:sw=2:sts=2:et:ft=sh

