<?php namespace Sukohi\Hilt\Facades;

use Illuminate\Support\Facades\Facade;

class Hilt extends Facade {

    /**
    * Get the registered name of the component.
    *
    * @return string
    */
    protected static function getFacadeAccessor() { return 'hilt'; }

}