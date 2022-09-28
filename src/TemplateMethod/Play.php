<?php

namespace Behavioral\TemplateMethod;

abstract class Play
{
    private $activities = [];

    final public function complete()
    {
        $this->activities[] = $this->getBall();
        $this->activities[] = $this->groupPlayers();
        $getMoreSpices = $this->doExtraActivities();

        if ($getMoreSpices !== null) {
            $this->activities[] = $getMoreSpices;
        }

        $this->activities[] = $this->preparePitch();
        $this->activities[] = $this->play();
    }

    abstract protected function preparePitch(): string;
    abstract protected function play(): string;

    protected function doExtraActivities()
    {
        return null;
    }

    private function groupPlayers(): string
    {
        return 'Group players';
    }

    private function getBall(): string
    {
        return 'Get ball';
    }

    public function getActivities(): array
    {
        return $this->activities;
    }
}
