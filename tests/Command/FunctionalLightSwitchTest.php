<?php declare(strict_types=1);

namespace Behavioral\Tests\Command;

use Behavioral\Command\Lamp;
use Behavioral\Command\LampState;
use Behavioral\Command\LightSwitch;
use Behavioral\Command\TurnOffLampCommand;
use Behavioral\Command\TurnOnLampCommand;
use PHPUnit\Framework\TestCase;

class FunctionalLightSwitchTest extends TestCase
{
    public function testTurnOn(): void
    {
        $lamp = new Lamp();
        $onCommand = new TurnOnLampCommand($lamp);
        $offCommand = new TurnOffLampCommand($lamp);
        $switch = new LightSwitch($onCommand, $offCommand);
        $this->assertEquals(LampState::Off, $lamp->state());
        $switch->turnOn();
        $this->assertEquals(LampState::On, $lamp->state());
    }
}
