<?php
$result = rand(1,100);
$userNumber = readLine("Enter your number: ");
if($result > $userNumber){
    echo "Too low!\n";
}elseif ($result < $userNumber){
    echo "Too high!\n";
}
    echo "U guessed the exact number\n";
echo "The number was $result \n";