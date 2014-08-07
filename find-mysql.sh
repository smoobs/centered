#!/bin/bash

for prog in mysql mysqldump; do
  for try in "/c/xampp/mysql/bin/$prog" "/usr/bin/$prog"; do
    if [ -x "$try" ]; then
      var=$( echo "$prog" | tr '[a-z]' '[A-Z]' )
      echo "$var='$try'"
      break
    fi
  done
done

# vim:ts=2:sw=2:sts=2:et:ft=sh

