<?php
$array = [4,7,20,10.10,"CODELEX"];
for($i = 0; $i < count($array); $i++){
    echo $array[$i] . " \n";
}
echo count($array) . "\n";

function doubleInt($array){
    for($i = 0; $i < count($array); $i++) {
        if (is_int($array[$i])){
            $array[$i] *= 2;
            echo $array[$i] . " \n";
        }else{
            echo $array[$i] . " \n";
        }
    }
}
doubleInt($array);