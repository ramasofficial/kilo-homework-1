<?php

declare(strict_types=1);

namespace App\Kata3;

use App\Kata2\PriceCalculatorInterface;

class DiscountStrategy
{
    private PriceCalculatorInterface $strategy;

    public function execute(float $price, float $discount, float $tax): float
    {
        return $this->strategy->calculate($price, $discount, $tax);
    }

    public function setStrategy(PriceCalculatorInterface $strategy): self
    {
        $this->strategy = $strategy;

        return $this;
    }
}
