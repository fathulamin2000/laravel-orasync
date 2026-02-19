<?php

namespace Fathulamin2000\LaravelOrasync\Facades;

use Illuminate\Support\Facades\Facade;

class OraSync extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'orasync';
    }
}
