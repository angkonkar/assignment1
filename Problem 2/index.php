<?php

$contents = file_get_contents('file.txt');

$contents = trim($contents);

$words = explode(" ", $contents);

echo "Total words in the file: ".count($words);