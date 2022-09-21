<?php

function calcTacts(int $number)
{
    $red = 1;
    $green = 1;
    $red_amount = 0;
    for ($i = 0; $i < $number; $i++) {
        $red_amount = $green * 4;
        $green = $green * 3;
        $green += $red * 7;
        $red = $red * 5;
        $red = $red + $red_amount;
        echo "<br>";
    }
    return $red + $green;
}