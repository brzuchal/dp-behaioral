<?php declare(strict_types=1);

namespace Behavioral\ChainOfResponsibility;

interface Logger
{
    public function log(string $message): void;
}
