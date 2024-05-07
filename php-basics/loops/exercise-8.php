<?php
class NumberSquare{
public static function numSquare($min, $max){
    for ($i = $min; $i <= $max; $i++) {
        for ($j = $i; $j <= $max; $j++) {
            echo $j;
        }
        for ($j = $min; $j < $i; $j++) {
            echo $j;
        }
        echo "\n";
    }
    }
}
$min = readline("Enter min value : ");
$max = readline("Enter max value : ");

NumberSquare::numSquare($min,$max);