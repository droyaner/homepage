#!/bin/bash
rm *.jpg
cp ../*.jpg .
for file in $(ls *.jpg)
do
echo "Resizing file " ${file}
convert ${file} -resize 3% ${file}
done
