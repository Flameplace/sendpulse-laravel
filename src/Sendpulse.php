<?php

namespace Flameplace\Sendpulse;

use Sendpulse\RestApi\ApiClient;
use Sendpulse\RestApi\Storage\SessionStorage;

class Sendpulse
{
    protected $api;

    public function __construct()
    {
        $this->api = new ApiClient(config('sendpulse.api_user_id'), config('sendpulse.api_secret'), new SessionStorage());
    }

    public function __call($method, $parameters)
    {
        return  $this->api->$method(...$parameters);
    }
}
