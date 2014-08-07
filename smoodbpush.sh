#!/bin/bash

./smoodump.sh && git add sql && git commit -m 'Database snapshot' && git push