#!/bin/bash

export USER=root
export DB=c0wshedyoga
export OUT=sql
export INDOM=centered.co.uk
export OUTDOM=centered.tthtesting.co.uk
export FLAG='/tmp/centred-data.flag'

if [ -e config-local.sh ]; then
  source config-local.sh
fi

# vim:ts=2:sw=2:sts=2:et:ft=sh

