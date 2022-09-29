<?php declare(strict_types=1);

namespace Behavioral\State;

class ShippedState implements OrderState
{
    public function proceedToNext(OrderContext $orderContext): void
    {
        $orderContext->setState(new CompletedState());
    }

    public function getStatus(): OrderStatus
    {
        return OrderStatus::Shipped;
    }
}
