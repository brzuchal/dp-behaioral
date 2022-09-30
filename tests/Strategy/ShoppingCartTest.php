<?php

namespace Behavioral\Tests\Strategy;

use Behavioral\Strategy\CreditCardStrategy;
use Behavioral\Strategy\Item;
use Behavioral\Strategy\PayPalStrategy;
use Behavioral\Strategy\ShoppingCart;
use PHPUnit\Framework\TestCase;

class ShoppingCartTest extends TestCase
{
    public function testPayByPayPal(): void
    {
        $cart = new ShoppingCart();

		$item1 = new Item("1234",10);
		$item2 = new Item("5678",40);

		$cart->addItem($item1);
		$cart->addItem($item2);

        $this->expectOutputString('50 paid using Paypal.');
		$cart->pay(new PayPalStrategy("myemail@example.com", "mypwd"));
    }

    public function testPayByCreditCard(): void
    {
        $cart = new ShoppingCart();
        $item1 = new Item("1234",10);
        $item2 = new Item("5678",40);

        $cart->addItem($item1);
        $cart->addItem($item2);

        $this->expectOutputString('50 paid with credit/debit card');
        $cart->pay(new CreditCardStrategy("Pankaj Kumar", "1234567890123456", "786", "12/15"));
    }
}
