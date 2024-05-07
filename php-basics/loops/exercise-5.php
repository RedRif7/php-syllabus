<?php
$points = 0;
$randomNumber = 1;
$playerInput = "";

while($randomNumber != 0 || $playerInput != "stop"){

    $playerInput = readline("Roll or Stop? ");
    $randomNumber = random_int(0, 6);

        if ($playerInput == "stop") {
        echo "You rolled $randomNumber!\n";
        echo "Your total points in the end are $points";
        exit;
    }elseif ($randomNumber === 0) {
        echo "You rolled a 0, you lost";
        exit;
    }elseif($playerInput == "roll") {
            echo "You rolled $randomNumber!\n";
            $points += $randomNumber;
            echo "Your total points are " . $points . "\n";
        }
}