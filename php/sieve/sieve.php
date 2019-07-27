<?php

function sieve(int $sieve)
{
    $num = 2;
    $range = range(2, $sieve);
    $primes = array_combine($range, $range);

    while ($num * $num < $sieve) {
        for ($i = $num; $i <= $sieve; $i += $num) {
            if ($i == $num) {
                continue;
            }
            unset($primes[$i]);
        }
        $num = next($primes);
    }
    return $primes;
}