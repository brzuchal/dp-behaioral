<?php declare(strict_types=1);

namespace Behavioral\Strategy;

final class CreditCardStrategy implements PaymentStrategy
{
	public function __construct(
        protected readonly string $nm,
        protected readonly string $ccNum,
        protected readonly string $cvv,
        protected readonly string $expiryDate
    ) {
	}

	public function pay(int $amount): void
    {
        print("{$amount} paid with credit/debit card");
    }
}
