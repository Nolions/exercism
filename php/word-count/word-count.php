<?php

function wordCount(string $str)
{
    $str = preg_replace(['/[^a-zA-Z0-9]+/', '/\s\s/'], ' ', mb_strtolower($str));
    $arr = explode(" ", $str);

    $wordCountArr = [];
    foreach ($arr as $word) {
        if (isset($wordCountArr[$word])) {
            $wordCountArr[$word]++;
        } else if(!empty($word)) {
            $wordCountArr[$word] = 1;
        }
    }

    return $wordCountArr;
}