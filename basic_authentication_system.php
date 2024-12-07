<?php

define("USERNAME" , "Niloy");
define("PASSWORD" , "12345");

echo "Enter username: ";
$inputUsername = readline();
echo "Enter password :";
$inputPassword = readline();

if ($inputUsername === USERNAME && $inputPassword === PASSWORD){
    echo "Login Successful ";
}else{
    echo "Wrong username or password";
}
