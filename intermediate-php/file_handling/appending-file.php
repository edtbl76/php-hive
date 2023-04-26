<?php

$pets_file = fopen("cool-pets.txt", "a");
fwrite($pets_file, "Gravy");
fclose($pets_file);

$pets_file = fopen("cool-pets.txt", "r");
$size = filesize("cool-pets.txt");
$pets_text = fread($pets_file, $size);
echo $pets_text;
fclose($pets_file);