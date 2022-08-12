<?php

namespace Webjhin\Crossadmin\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * The Crossadmin facade.
 *
 * @package webjhin/crossadmin
 * @author  neonterra <neonterras@gmail.com>
 */
class Crossadmin extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'crossadmin';
    }
}
