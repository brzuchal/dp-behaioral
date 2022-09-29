<?php declare(strict_types=1);

namespace Behavioral\State;

final class CreatedState implements OrderState
{
    public function proceedToNext(OrderContext $orderContext): void
    {
        $orderContext->setState(new ShippedState());
    }

    public function getStatus(): OrderStatus
    {
        return OrderStatus::Created;
    }
}
