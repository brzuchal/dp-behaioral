<?php declare(strict_types=1);

namespace Behavioral\Strategy;

interface PaymentStrategy
{
    public function pay(int $amount): void;
}
