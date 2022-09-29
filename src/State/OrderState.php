<?php

namespace Behavioral\State;

interface OrderState
{
    public function proceedToNext(OrderContext $orderContext): void;

    public function getStatus(): OrderStatus;
}
