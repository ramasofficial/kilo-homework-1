<?php

declare(strict_types=1);

namespace App\Kata1;

abstract class AbstractCostDecorator implements CostInterface
{
    public function __construct(protected CostInterface $cost)
    {
    }
}
