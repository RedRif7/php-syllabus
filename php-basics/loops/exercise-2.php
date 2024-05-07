<?php

echo "Input number of terms: ";

//todo complete loop to multiply i with itself n times, it is NOT allowed to use built-in pow() function
$i = 2;
$result = 1;
for ($n = 1; $n <= 5; $n++) {
    $result *= $i;
}
echo $result;