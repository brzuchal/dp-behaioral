<?php

namespace Behavioral\Observer\Example;

class CodeObserver implements \SplObserver
{
    private $changedCode = [];


    public function update(\SplSubject $subject)
    {
        $this->changedCode[] = clone $subject;
    }

    public function getChangedCode(): array
    {
        return $this->changedCode;
    }
}
