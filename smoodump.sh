#!/bin/bash

USER=root
DB=rf
OUT=sql

eval $( ./find-mysql.sh )

echo 'SHOW TABLES' | $MYSQL -u$USER $DB | tail -n +2 | \
  while read tbl; do 
    echo "Dumping $tbl to $OUT/$tbl.sql"
    $MYSQLDUMP --skip-extended-insert --skip-dump-date -uroot rf "$tbl" > "$OUT/$tbl.sql"; 
  done

# vim:ts=2:sw=2:sts=2:et:ft=sh

