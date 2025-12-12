<?php

namespace EvgPak\StrUtils\Facades;

use Illuminate\Support\Facades\Facade;

class StrUtils extends Facade
{
    protected static function getFacadeAccessor()
    {
        // This must match the string used in the bind() method in the ServiceProvider
        return 'str-utils';
    }
}
