<?php

namespace Behavioral\Observer\Example;

class CodeObserver implements \SplObserver
{
    private $changedCode = [];


    public function update(\SplSubject $subject): void
    {
        $this->changedCode[] = clone $subject;
    }

    public function getChangedCode(): array
    {
        return $this->changedCode;
    }
}
