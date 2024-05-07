<?php
function number_only($num1, $num2){
    if(is_int($num1) && is_int($num2)){
        echo $num1 . " * " . $num2 . " = " . $num1*$num2. "\n";
    }else{
        echo "One of the values is not an integer \n";
    }
}

number_only(6,5);