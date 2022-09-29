<?php

namespace Behavioral\Tests\Command;

use Behavioral\Command\Command;
use Behavioral\Command\LightSwitch;
use PHPUnit\Framework\TestCase;

class LightSwitchTest extends TestCase
{
    public function testPowerOn(): void
    {
        $onCommand = $this->createMock(Command::class);
        $offCommand = $this->createMock(Command::class);
        $switch = new LightSwitch($onCommand, $offCommand);
        $onCommand->expects($this->once())
            ->method('execute');
        $offCommand->expects($this->never())
            ->method('execute');
        $switch->turnOn();
    }

    public function testPowerOff(): void
    {
        $onCommand = $this->createMock(Command::class);
        $offCommand = $this->createMock(Command::class);
        $switch = new LightSwitch($onCommand, $offCommand);
        $this->markTestIncomplete('complete test');
    }

    public function testFunctionalPowerOn(): void
    {
        $this->markTestIncomplete('implement missing commands and write functional test');
    }
}
