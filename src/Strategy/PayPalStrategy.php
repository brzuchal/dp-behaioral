<?php declare(strict_types=1);

namespace Behavioral\Strategy;

final class PayPalStrategy implements PaymentStrategy
{
	public function __construct(
        protected readonly string $email,
        protected readonly string $pwd
    ) {
	}

	public function pay(int $amount): void
    {
        print("{$amount} paid using Paypal.");
    }
}
