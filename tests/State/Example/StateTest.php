<?php

namespace Behavioral\Tests\State\Example;

use Behavioral\Observer\Example\CodeObserver;
use Behavioral\Observer\Example\CodeOnGit;
use Behavioral\State\Example\ContextOrder;
use Behavioral\State\Example\PrepareOrder;
use PHPUnit\Framework\TestCase;

class StateTest extends TestCase
{
    public function testPreparedOrder()
    {
        $order = new PrepareOrder();
        $contextOrder = new ContextOrder();
        $contextOrder->setState($order);
        $contextOrder->delivered();

        $this->assertEquals('send', $contextOrder->getStatus());
    }

    public function testShippedOrder()
    {
        $order = new PrepareOrder();
        $contextOrder = new ContextOrder();
        $contextOrder->setState($order);
        $contextOrder->delivered();
        $contextOrder->delivered();

        $this->assertEquals('completed', $contextOrder->getStatus());
    }
}
