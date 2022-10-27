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

        if ($isTuesday) {
            return $strategy->setStrategy(new FreeShippingCalculator());
        }

        return $strategy->setStrategy(new PriceCalculator());
    }
}
