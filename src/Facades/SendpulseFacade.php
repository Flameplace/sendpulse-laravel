<?php

namespace Flameplace\Sendpulse\Facades;

use Illuminate\Support\Facades\Facade;

class SendpulseFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'sendpulse';
    }
}
