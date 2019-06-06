#!/bin/bash

INPUT_DIR="input"

for file in $(/bin/ls $INPUT_DIR); do
	echo "Processing:"$file
	eval ./other_magic.sh $file
done
