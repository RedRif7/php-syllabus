<?php

function calculateBodyMass($weight, $height){
$normalHeight = $height * 0.3937;
$normalWeight = $weight * 2.2;

$bmi = $normalWeight * 703 / pow($normalHeight, 2);
if($bmi < 18.5){
    echo "Person is underweight with the mass of $bmi \n";
}
if($bmi > 18.5 && $bmi < 25){
    echo "Person is optimal with the mass of $bmi \n";
}else{
    echo "Person is overweight with the mass of $bmi \n";
}
}
calculateBodyMass(96,189);