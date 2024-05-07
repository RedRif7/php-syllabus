<?php
$day = readline("Write day number 0-6");
if($day = 0){
    echo "Sunday";
}elseif ($day = 1) {
    echo "Monday";
}elseif ($day = 2) {
    echo "Tuesday";
}elseif ($day = 3) {
    echo "Wednesday";
}elseif ($day = 4) {
    echo "Thursday";
}elseif ($day = 5) {
    echo "Friday";
}elseif ($day = 6) {
    echo "Saturday";
}else{
    echo "Invalid day";
}


switch ($day) {
    case 0:
        echo "Sunday";
        break;
        case 1:
            echo "Monday";
            break;
            case 2:
                echo "Tuesday";
                break;
                case 3:
                    echo "Wednesday";
                    break;
                    case 4:
                        echo "Thursday";
                        break;
                        case 5:
                            echo "Friday";
                            break;
                            case 6:
                                echo "Saturday";
                                break;
    default:
        echo "Invalid day";
}