<?php declare(strict_types=1);

namespace Behavioral\Command;

class LightSwitch
{
    public function __construct(
        protected Command $switchOn,
        protected Command $switchOff,
    ) {
    }

    public function turnOn(): void
    {
        $this->switchOn->execute();
    }

    public function turnOff(): void
    {
        $this->switchOff->execute();
    }
}
