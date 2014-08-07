#!/bin/bash

USER=root
DB=c0wshedyoga
OUT=sql

eval $( ./find-mysql.sh )

mkdir -p "$OUT"

echo 'SHOW TABLES' | $MYSQL -u$USER $DB | tail -n +2 | \
  while read tbl; do 
    echo "Dumping $tbl to $OUT/$tbl.sql"
    $MYSQLDUMP --skip-extended-insert --skip-dump-date -uroot rf "$tbl" > "$OUT/$tbl.sql"; 
  done

# vim:ts=2:sw=2:sts=2:et:ft=sh

