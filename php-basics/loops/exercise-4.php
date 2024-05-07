<?php
function fizzBuzz($n) {
    for ($i = 1; $i<=$n; $i++){
        if($i%5 === 0 && $i%3 === 0){
            echo "fizzbuzz ";
        }else if($i%5 === 0){
            echo "buzz ";
        }else if($i%3 === 0){
            echo "fizz ";
        }else{
            echo "$i ";
        }
    }
}

fizzBuzz(100);