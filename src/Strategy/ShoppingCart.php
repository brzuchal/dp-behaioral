<?php declare(strict_types=1);

namespace Behavioral\Strategy;

final class ShoppingCart
{
    public function __construct(
        protected array $items = [],
    ) {
	}

    public function addItem(Item $item): void
    {
        $this->items[] = $item;
    }

	public function removeItem(Item $item): void
    {
        foreach ($this->items as $index => $existingItem) {
            if ($existingItem->sku !== $item->sku) {
                continue;
            }

            unset($this->items[$index]);
        }
    }

	public function calculateTotal(): int
    {
        return array_sum(array_map(
            static fn (Item $item) => $item->totalCost(),
            $this->items,
        ));
	}

	public function pay(PaymentStrategy $paymentMethod): void
    {
        $amount = $this->calculateTotal();
		$paymentMethod->pay($amount);
	}
}
