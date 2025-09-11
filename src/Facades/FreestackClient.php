<?php

namespace Inmanturbo\FreestackClient\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Inmanturbo\FreestackClient\FreestackClient
 */
class FreestackClient extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Inmanturbo\FreestackClient\FreestackClient::class;
    }
}
