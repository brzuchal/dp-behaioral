<?php declare(strict_types=1);

namespace Behavioral\ChainOfResponsibility;

final class FileLogger implements Logger
{
    public function __construct(
        protected string $path,
    ) {
    }

    public function log(string $message): void
    {
        file_put_contents($this->path, $message . PHP_EOL, FILE_APPEND);
    }
}
