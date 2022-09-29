<?php

namespace Behavioral\State;

final class OrderContext
{
    private OrderState $state;

    public static function create(): OrderContext
    {
        $order = new self();
        $order->state = new CreatedState();

        return $order;
    }

    public function setState(OrderState $state): void
    {
        $this->state = $state;
    }

    public function proceedToNext(): void
    {
        $this->state->proceedToNext($this);
    }

    public function getStatus(): OrderStatus
    {
        return $this->state->getStatus();
    }
}
