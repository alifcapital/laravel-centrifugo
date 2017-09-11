<?php

namespace Alif\Centrifugo;

use Illuminate\Support\Facades\Facade;

class CentrifugoFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'centrifugo';
    }
}