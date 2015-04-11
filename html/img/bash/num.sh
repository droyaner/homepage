#!/bin/bash

i="1"
for File in $(ls *.JPG)
do
  if test ${i} -ge 100
    then mv ${File} ${i}.jpg
  elif test ${i} -ge 10
    then mv ${File} 0${i}.jpg
  else mv ${File} 00${i}.jpg
  fi
  i=$((i+1));# Hohzählen
done
