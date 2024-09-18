<?php

declare(strict_types=1);

function czk(float $amount, ?string $suffix = ' Kč')
{
    return number_format(
        num: round($amount),
        thousands_separator: ' '
    ).$suffix;
}
