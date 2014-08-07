#!/bin/bash

USER=root
DB=rf
OUT=sql

eval $( ./find-mysql.sh )

for tbl in "$OUT"/{fs,wp}_*.sql; do
  echo "Loading $tbl"
  cat "$tbl" | perl domhack.pl rf.fenkle rf.tthtesting.co.uk | $MYSQL -u$USER $DB
done

# vim:ts=2:sw=2:sts=2:et:ft=sh

