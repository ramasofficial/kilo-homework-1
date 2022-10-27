<?php

declare(strict_types=1);

namespace App\Kata2;

use App\Kata1\Discount;
use App\Kata1\Price;
use App\Kata1\Shipping;

class PriceCalculator implements PriceCalculatorInterface
{
    public function calculate(float $price, float $discount, float $tax): float
    {
        return (new Shipping($tax, new Discount($discount, new Price($price))))->cost();
    }
}
