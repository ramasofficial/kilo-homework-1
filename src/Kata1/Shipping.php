<?php

declare(strict_types=1);

namespace App\Kata1;

class Shipping extends AbstractCostDecorator
{
    public function __construct(private float $shippingPrice, CostInterface $cost)
    {
        parent::__construct($cost);
    }

    public function cost(): float
    {
        return $this->cost->cost() + $this->shippingPrice;
    }
}
