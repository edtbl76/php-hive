<?php

$user_response = file_get_contents("https://randomuser.me/api/?results=10");
echo $user_response;
