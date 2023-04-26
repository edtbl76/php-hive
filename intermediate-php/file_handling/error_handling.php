<?php

$home = file_get_contents("home.html");
if (!$home) {
    echo "File not found";
} else {
    echo $home;
}