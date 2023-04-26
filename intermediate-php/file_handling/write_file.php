<?php

$bands_file = fopen("my-bands.txt", "w");
fwrite($bands_file, "Deep Purple");
fclose($bands_file);

$size = filesize("my-bands.txt");
$bands_read = fopen("my-bands.txt", "r");
$bands_text = fread($bands_read, $size);
echo $bands_text;

fclose($bands_read);