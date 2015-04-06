#!/bin/bash
rm *.jpg
cp ../*.jpg .
for file in $(ls *.jpg)
do
echo "Resizing file " ${file}
convert ${file} -resize 10% ${file}
done
