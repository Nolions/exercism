<?php

function sieve(int $number): array
{
    if ($number < 2) {
        return [];
    }

    $sieve = [];
    for ($i = 2; $i <= $number; $i++) {
        $isSieve = true;
        for ($j = 2; $j < $i; $j++) {
            if ($i % $j == 0) {
                $isSieve = false;
                break;
            }
        }

        if ($isSieve) {
            $sieve[] = $i;
        }
    }

    return $sieve;
}
