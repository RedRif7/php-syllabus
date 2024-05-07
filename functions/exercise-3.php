<?php
$personsAge = [
    [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 41
        ],
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 32
        ],
        [
            "name" => "Jack",
            "surname" => "Doe",
            "age" => 17
        ]
    ]
];

function checkIf18($personsAge){
    for($i=0; $i<count($personsAge[0]); $i++){
        if($personsAge[0][$i]["age"] >= 18){
            echo $personsAge[0][$i]["name"] . " " . $personsAge[0][$i]["surname"] . " is above 18" . " \n";
        }else{
            echo $personsAge[0][$i]["name"] . " " . $personsAge[0][$i]["surname"] . " is under 18" . " \n";
        }
    }
}
checkIf18($personsAge);