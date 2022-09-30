<?php declare(strict_types=1);

namespace Behavioral\Command;

final class TurnOffLampCommand implements Command
{
    public function __construct(
        protected Lamp $lamp,
    ) {
    }

    public function execute(): void
    {
        $this->lamp->powerOff();
    }
}
