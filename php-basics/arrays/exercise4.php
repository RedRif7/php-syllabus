<?php
$array1 = [];
$array2 = [];
for ($i = 0; $i < 10; $i++) {
    $random_number = rand(1, 100);
    $array1[] = $random_number;
}
$array2 = $array1;
$array1[count($array1) - 1] = -7;
echo "Array 1: ";
foreach ($array1 as $num) {
    echo $num . " ";
}
echo "\n";

echo "Array 2: ";
foreach ($array2 as $num) {
    echo $num . " ";
}
echo "\n";