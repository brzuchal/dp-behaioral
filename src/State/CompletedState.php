<?php declare(strict_types=1);

namespace Behavioral\State;

final class CompletedState implements OrderState
{
    public function proceedToNext(OrderContext $orderContext): void
    {
        // nothing more to do
    }

    public function getStatus(): OrderStatus
    {
        return OrderStatus::Completed;
    }
}
