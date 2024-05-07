<?php
$fruits = [
    [
        "fruit" => "Apple",
        "weight" => 30
    ],
    [
        "fruit" => "Banana",
        "weight" => 2
    ],
    [
        "fruit" => "Pear",
        "weight" => 4
    ],
    [
        "fruit" => "Watermelon",
        "weight" => 11
    ]
];

$shippingCost = [
    "fruitWeightOver" => 2,
    "fruitWeightUnder" => 1
];


function checkWeight($weight) {
    return $weight > 10;
}

foreach ($fruits as $fruit) {
    $fruitName = $fruit["fruit"];
    $fruitWeight = $fruit["weight"];

    $isOver10kg = checkWeight($fruitWeight);
    $shippingCostPerKg = $isOver10kg ? $shippingCost["fruitWeightOver"] : $shippingCost["fruitWeightUnder"];

    echo "$fruitName weight is - $fruitWeight kg, shipping Cost - $shippingCostPerKg euros \n";
}