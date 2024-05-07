<?php
$first_word = readline("Enter first word: ");
$second_word = readline("Enter second word: ");
$totalLength = 30;
$dotsNeeded = $totalLength - (strlen($first_word) + strlen($second_word));
if ($dotsNeeded < 0) {
    echo "both words are over 30 letters long.\n";
}
echo $first_word;
for ($i = 0; $i <= $dotsNeeded; $i++) {
    echo ".";
}
echo $second_word . "\n";
echo $dotsNeeded;