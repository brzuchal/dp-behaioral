<?php

namespace Behavioral\Iterator;

class Video
{
    public function __construct(
        public readonly string $length,
        public readonly string $title,
    ) {
    }

    public function getTitleAndLength(): string
    {
        return $this->title . ' named ' . $this->length;
    }
}
