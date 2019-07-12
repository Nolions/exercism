<?php

function distance(string $strandA, string $strandB): int
{
    if (!checkLength($strandA, $strandB)) throw new InvalidArgumentException("DNA strands must be of equal length.");
    $count = 0;
    for ($i = 0; $i < strlen($strandA); $i++) {
        if (!checkCharacter(substr($strandA, $i, 1), substr("$strandB", $i, 1))) {
            $count += 1;
        }
    }

    return $count;
}

function checkLength(string $str_1, string $str_2)
{
    return strlen($str_1) == strlen($str_2) ? true : false;
}

function checkCharacter(string $char_1, string $char_2): bool
{
    return ($char_1 == $char_2) ? true : false;
}
