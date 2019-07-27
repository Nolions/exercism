<?php

function detectAnagrams(string $word, array $candidates): array
{
    $data = [];

    $chars = array_count_values(str_split(strtoupper($word)));
    ksort($chars);

    foreach ($candidates as $candidate) {
        $candidateChars = array_count_values(str_split(strtoupper($candidate)));
        ksort($candidateChars);
        if ($chars === $candidateChars && strtoupper($word) != strtoupper($candidate)) {
            array_push($data, $candidate);
        }
    }

    return $data;
}