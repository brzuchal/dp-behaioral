<?php declare(strict_types=1);

namespace Behavioral\Command;

final class Lamp
{
    protected LampState $state = LampState::Off;

    public function powerOn(): void
    {
        $this->state = LampState::On;
    }

    public function powerOff(): void
    {
        $this->state = LampState::Off;
    }

    public function state(): LampState
    {
        return $this->state;
    }
}
