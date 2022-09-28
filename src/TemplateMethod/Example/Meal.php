<?php

namespace Behavioral\TemplateMethod\Example;

abstract class Meal
{
    private $activities = [];

    final public function complete()
    {
        $this->activities[] = $this->getComponents();
        $this->activities[] = $this->mix();
        $getMoreSpices = $this->putMoreSpices();

        if ($getMoreSpices !== null) {
            $this->activities[] = $getMoreSpices;
        }

        $this->activities[] = $this->prepare();
        $this->activities[] = $this->eat();
    }

    abstract protected function prepare(): string;
    abstract protected function eat(): string;

    protected function putMoreSpices()
    {
        return null;
    }

    private function mix(): string
    {
        return 'Mix component';
    }

    private function getComponents(): string
    {
        return 'Get components';
    }

    public function getActivities(): array
    {
        return $this->activities;
    }
}
