<?php

namespace Laravel-crown\Laravel-crown;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Test\Test\Skeleton\SkeletonClass
 */
class Laravel-crownFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-crown';
    }
}
