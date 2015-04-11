#!/bin/bash
rm *.jpg
cp ../../../ImageOrginal/wohnung/*.jpg .
for file in $(ls *.jpg)
do
echo "Resizing file " ${file}
convert ${file} -resize 1920x1920 ${file}
done
