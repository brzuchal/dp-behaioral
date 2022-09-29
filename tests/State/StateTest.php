<?php

namespace Behavioral\Tests\State;

use Behavioral\State\OrderContext;
use Behavioral\State\OrderStatus;
use PHPUnit\Framework\TestCase;

class StateTest extends TestCase
{
    public function testIsCreatedWithStateCreated(): void
    {
        $orderContext = OrderContext::create();

        $this->assertSame(OrderStatus::Created, $orderContext->getStatus());
    }

    public function testCanProceedToStateShipped(): void
    {
        $contextOrder = OrderContext::create();
        $contextOrder->proceedToNext();

        $this->assertSame(OrderStatus::Shipped, $contextOrder->getStatus());
    }

    public function testCanProceedToStateDone(): void
    {
        $contextOrder = OrderContext::create();
        $contextOrder->proceedToNext();
        $contextOrder->proceedToNext();

        $this->assertSame(OrderStatus::Completed, $contextOrder->getStatus());
    }

    public function testStateDoneIsTheLastPossibleState(): void
    {
        $contextOrder = OrderContext::create();
        $contextOrder->proceedToNext();
        $contextOrder->proceedToNext();
        $contextOrder->proceedToNext();

        $this->assertSame(OrderStatus::Completed, $contextOrder->getStatus());
    }

    public function testCanProceedToStatePending(): void
    {
        $this->markTestIncomplete('implement Pending state between Created and Shipped');
        $contextOrder = OrderContext::create();
        $contextOrder->proceedToNext();
        $contextOrder->proceedToNext(); // implement Pending state

        $this->assertSame(OrderStatus::Pending, $contextOrder->getStatus());
    }

}
