<?php
$a = -9.81; //Acceleration
$t = 10; //Time
$vi = 0; //Initial velocity
$xi = 0; //Initial position

$x = 0.5 * ($a * pow($t,2)) + ($vi * $t) + $xi;
echo "$x m";