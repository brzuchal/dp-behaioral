<?php

namespace Behavioral\Iterator;

class VideoDB implements \Countable, \Iterator
{
    private array $videos = [];

    private int $currentVideo = 0;

    public function addVideo(Video $video)
    {
        $this->videos[] = $video;
    }

    public function removeVideo(Video $videoToRemove)
    {
        foreach ($this->videos as $key => $video) {
            if ($video->getTitleAndLength() === $videoToRemove->getTitleAndLength()) {
                unset($this->videos[$key]);
            }
        }

        $this->videos = array_values($this->videos);
    }

    public function count(): int
    {
        return count($this->videos);
    }

    public function current(): Video
    {
        return $this->videos[$this->currentVideo];
    }

    public function key(): int
    {
        return $this->currentVideo;
    }

    public function next(): void
    {
        $this->currentVideo++;
    }

    public function rewind(): void
    {
        $this->currentVideo = 0;
    }

    public function valid(): bool
    {
        return isset($this->videos[$this->currentVideo]);
    }
}
