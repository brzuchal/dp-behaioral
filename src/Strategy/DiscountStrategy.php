<?php declare(strict_types=1);

namespace Behavioral\Strategy;

interface DiscountStrategy
{
    public function discount(Item $item): int|null;
}
