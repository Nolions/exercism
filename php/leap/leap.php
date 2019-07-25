<?php

/**
 * check is leap year
 *
 * @param int $year
 * @return bool
 */
function isLeap(int $year): bool
{
    return ($year % 4 == 0 && $year % 100 != 00 || $year % 400 == 0) ? true : false;
}