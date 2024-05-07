<?php
class AsciiFigure
{
    public static function figure($size)
    {
        for ($i = 0; $i < $size; $i++) {
            for ($j = 0; $j < 2 * ($size - $i); $j++) {
                echo "/";
            }
            for ($j = 0; $j < 4 * $i; $j++) {
                echo "*";
            }
            for ($j = 0; $j < 2 * ($size - $i); $j++) {
                echo "\\";
            }
            echo "\n";
        }
    }
}
AsciiFigure::figure(5);