<?php

namespace App\Processor;

use App\Interfaces\EventInterface;

class EventProcessor
{
    public function __construct()
    {
    }

    public function process(EventInterface $event): void
    {
        $event->process();
    }

    public function revert(EventInterface $event): void
    {
        $event->revert();
    }
}
