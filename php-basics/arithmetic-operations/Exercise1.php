<?php
function check15($num1, $num2){
    if($num1 ===15 || $num2 === 15){
        echo "True\n";
        return true;

    }
    if($num1 + $num2 === 15 || abs($num1 - $num2) === 15){
        echo "True\n";
        return true;
    }
    echo "False\n";
    return false;

}

check15(15,30);