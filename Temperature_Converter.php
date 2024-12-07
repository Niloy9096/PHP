<?php

echo "Enter temperature = ";
$temperature = (float) readline();

define("FACTOR", 9/5);
define("OFFSET", 32);


echo "Convert to (1: fahrenheit, 2: celsius): ";
$choice = (int) readline();

switch ($choice) {
case 1:
$result = $temperature * FACTOR + OFFSET;
echo "Temperature in Fahrenheit: $result";
break;

case 2:
$result = ($temperature - OFFSET) / FACTOR;
echo "Temperature in Celsius: $result";
break;

default:
echo "Invalid!";
break;
}