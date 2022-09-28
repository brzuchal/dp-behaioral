<?php

namespace Behavioral\Iterator;

class Video
{
    private $title;
    private $length;

    public function __construct(string $length, string $title)
    {
        $this->title = $title;
        $this->length = $length;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getLength(): string
    {
        return $this->length;
    }

    public function getTitleAndLength(): string
    {
        return $this->getTitle().' named '.$this->getLength();
    }
}
