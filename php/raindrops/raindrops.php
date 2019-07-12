<?php

function raindrops(int $num): string
{
    $factors = factors($num);
    $data = "";
    foreach ($factors as $key => $factor) {
        $data = $data . convertToRaindrop($factor);
    }

    if ($data == "") {
        return (string)$num;
    }
    return $data;
}

function convertToRaindrop(int $factor): string
{
    $raindrop = "";
    switch ($factor) {
        case 3:
            $raindrop = "Pling";
            break;
        case 5:
            $raindrop = "Plang";
            break;
        case 7:
            $raindrop = "Plong";
            break;
    }
    return $raindrop;
}


function factors(int $num): array
{
    $factors = [];
    for ($i = 1; $i <= abs($num); $i++) {
        if ($num % $i == 0) {
            $factors[] = $i;
        }
    }
    return $factors;
}