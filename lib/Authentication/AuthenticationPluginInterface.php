<?php

namespace Progrupa\Azure\Authentication;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\HandlerStack;

interface AuthenticationPluginInterface
{
    /**
     * Attach appropriate authentication middleware to the stack
     * @param HandlerStack $stack
     */
    public function attach (ClientInterface $client);
}
