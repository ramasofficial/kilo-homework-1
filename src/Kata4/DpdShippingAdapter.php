<?php

declare(strict_types=1);

namespace App\Kata4;

use App\Kata1\AbstractCostDecorator;
use App\Kata1\CostInterface;

class DpdShippingAdapter extends AbstractCostDecorator
{
    public function __construct(
        private DpdShippingProvider $dpdShippingProvider,
        CostInterface $cost
    ) {
        parent::__construct($cost);
    }

    public function cost(): float
    {
        return $this->dpdShippingProvider->ourCost() + $this->cost->cost();
    }
}
