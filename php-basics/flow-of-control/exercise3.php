<?php
$number = readline("Enter number: ");
if ($number > 0) {
    $length = strlen($number);
    echo "$number length is $length \n";
}else{
    echo "Number is negative";
}
