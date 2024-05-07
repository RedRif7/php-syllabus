<?php
function employeePay($salary, $hours)
{
    $hourlyWage = 8.00;
    $basePayTime = 40;
    $maxHours = 60;

    if ($salary < $hourlyWage || $hours > $maxHours) {
        echo "Employee pay is too low or too many hours! \n";
    }
    if($salary >= $hourlyWage && $basePayTime > $hours){
        $pay = $salary * $basePayTime;
        echo "Employee has earned $pay\n";
    }elseif($salary > $hourlyWage && $basePayTime < $hours && $hours < $maxHours) {
        $otHours = $hours - $basePayTime;
        $pay = ($salary * $otHours * 1.5) + $salary * $basePayTime;
        echo "Employee has earned $pay\n";
    }
}
employeePay(8.20,47);


