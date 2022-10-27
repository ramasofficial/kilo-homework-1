<?php

declare(strict_types=1);

namespace App\Kata1;

class Discount extends AbstractCostDecorator
{
    public function __construct(private float $discount, CostInterface $cost)
    {
        parent::__construct($cost);
    }

    public function cost(): float
    {
        return ($this->cost->cost() * (1 - $this->discount / $this->cost->cost()));
    }
}
