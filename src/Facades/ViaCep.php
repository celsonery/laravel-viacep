<?php

namespace CelsoNery\ViaCep\Facades;

use Illuminate\Support\Facades\Facade;

class ViaCep extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'viacep';
    }
}
