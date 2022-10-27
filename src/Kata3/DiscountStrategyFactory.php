<?php

declare(strict_types=1);

namespace App\Kata3;

use App\Kata2\FreeShippingCalculator;
use App\Kata2\PriceCalculator;

class DiscountStrategyFactory
{
    public function build(bool $isTuesday): DiscountStrategy
    {
        $strategy = new DiscountStrategy();

        return $isTuesday ? $strategy->setStrategy(new FreeShippingCalculator()) : $strategy->setStrategy(new PriceCalculator());
    }
}
