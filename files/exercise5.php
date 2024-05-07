<?php
$file = fopen('persons.csv', 'r');
$idToFind = $argv[1];
$user = false;
$header = fgetcsv($file);
while (($row = fgetcsv($file)) !== false) {
    if ($row[0] == $idToFind) {
        echo "ID: {$row[0]}, Name: {$row[1]}, Surname: {$row[2]}, Age: {$row[3]}\n";
        $userFound = true;
        break;
    }
}

fclose($file);
if (!$userFound) {
    echo "User with ID $idToFind not found.\n";
}