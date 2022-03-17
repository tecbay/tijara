<?php

namespace App\Domain\Manufacturing\Reactors;

use App\Reactors\EventHappened;
use Illuminate\Contracts\Queue\ShouldQueue;
use Spatie\EventSourcing\EventHandlers\Reactors\Reactor;

class ProductCreatedReactor extends Reactor implements ShouldQueue
{
    public function onEventHappened(EventHappened $event)
    {
    }
}
