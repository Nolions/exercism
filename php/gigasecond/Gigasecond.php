<?php

/**
 * Calculate the time after 1,000,000,000(10^9) after seconds.
 *
 * @param DateTimeImmutable $dateTime
 * @return DateTimeImmutable
 * @throws Exception
 */
function from(DateTimeImmutable $dateTime): DateTimeImmutable
{
    return $dateTime->add(new DateInterval('PT1000000000S'));
}