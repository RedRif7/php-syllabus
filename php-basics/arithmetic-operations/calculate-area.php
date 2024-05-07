<?php

echo "Geometry Calculator\n";
echo "1. Calculate the Area of a Circle";
echo "2. Calculate the Area of a Rectangle";
echo "3. Calculate the Area of a Triangle";
echo "4. Quit\n";
echo "Enter your choice (1-4) : ";
$choice = readline();
switch ($choice) {
    case 1:
        echo "Enter the circle radius\n";
        $radius = readline();
        $area = pi() * $radius * 2;
        echo "The area of the circle is " . $area . "\n";
        break;
        case 2:
            echo "Enter the rectangle length, then width\n";
            $width = readline();
            $length = readline();
            $area = $length * $width;
            echo "The area of the rectangle is " . $area . "\n";
            break;
            case 3:
                echo "Enter the length of the triangle's base and then the triangle's height\n";
                $base = readline();
                $height = readline();
                $area = $base * $height * 0.5;
                echo "The area of the triangle is " . $area . "\n";
}
