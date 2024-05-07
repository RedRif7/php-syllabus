<?php
$text = fopen('exercise4', 'r');
while($line = fgets($text)){
    $array = explode(',', $line);
    $name = trim($array[0]);
    $surname = trim($array[1]);
    $age = trim($array[2]);

    echo "Name : $name, Surname : $surname, Age : $age \n";
}
fclose($text);