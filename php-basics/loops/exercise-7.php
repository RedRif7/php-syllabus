<?php
class RollTwoDice{
    public static function userNum($choice){
        echo "Desired sum = $choice \n";
        $result = 0;
        while($choice != $result){
            $diceOne = rand(1,6);
            $diceTwo = rand(1,6);
            $result = $diceOne + $diceTwo;
            echo "$diceOne and $diceTwo = $result\n";
        }
    }
}
RollTwoDice::userNum(5);