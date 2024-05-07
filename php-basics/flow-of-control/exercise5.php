<?php
function if_phoneNumber($userString)
{
//$userString = readline("Enter phone number in strings");
    $result = "";
    $userString = strtoupper($userString);
    $length = strlen($userString);
    for ($i = 0; $i < $length; $i++) {
        $string = $userString[$i];
        if ($string == "A" || $string == "B" || $string == "C") {
            $result .= "2";
        } elseif ($string == "D" || $string == "E" || $string == "F") {
            $result .= "3";
        } elseif ($string == "G" || $string == "H" || $string == "I") {
            $result .= "4";
        } elseif ($string == "J" || $string == "K" || $string == "L") {
            $result .= "5";
        } elseif ($string == "M" || $string == "N" || $string == "O") {
            $result .= "6";
        } elseif ($string == "P" || $string == "Q" || $string == "R" || $string == "S") {
            $result .= "7";
        } elseif ($string == "T" || $string == "U" || $string == "V") {
            $result .= "8";
        } elseif ($string == "W" || $string == "X" || $string == "Y" || $string == "Z") {
            $result .= "9";
        } else {
            $result .= $string;
        }
    }
    return $result;
}
$userString = readline("Enter phone number in strings");
echo if_phoneNumber($userString);

function switch_phoneNumber($userString)
{
    $result = "";
    $userString = strtoupper($userString);
    $length = strlen($userString);
    for ($i = 0; $i < $length; $i++) {
        $string = $userString[$i];
        switch ($string) {
        case "A":
        case "B":
        case "C":
            $result .= 2;
            break;
        case "D":
        case "E":
        case "F":
            $result .= 3;
            break;
        case "G":
        case "H":
        case "I":
            $result .= 4;
            break;
        case "J":
        case "K":
        case "L":
            $result .= 5;
            break;
            case 'M':
            case 'N':
            case 'O':
                $result .= "6";
                break;
            case 'P':
            case 'Q':
            case 'R':
            case 'S':
                $result .= "7";
                break;
            case 'T':
            case 'U':
            case 'V':
                $result .= "8";
                break;
            case 'W':
            case 'X':
            case 'Y':
            case 'Z':
                $result .= "9";
                break;
            default:
                $result .= $string;
        }
    }
    return $result;
}
$userString = readline("Enter phone number in strings");
echo switch_phoneNumber($userString);
