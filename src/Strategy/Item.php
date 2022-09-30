<?php declare(strict_types=1);

namespace Behavioral\Strategy;

final class Item
{
	public function __construct(
        public readonly string $sku,
        public readonly int $cost,
        protected int $qty = 1,
        protected int|null $discount = null,
    ) {
	}

    public function changeQty(int $qty): void
    {
        if ($qty < 1) {
            throw new \RuntimeException('New qty cannot be less than 1');
        }

        $this->qty = $qty;
    }

    public function totalCost(): int
    {
        if ($this->discount === null) {
            return $this->cost;
        }

        return $this->cost - $this->discount;
    }

    public function applyDiscount(DiscountStrategy $discountStrategy): void
    {
        $this->discount = $discountStrategy->discount($this);
    }
}
