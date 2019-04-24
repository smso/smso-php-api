<?php

namespace smso\smso;

use Illuminate\Support\Facades\Facade;

/**
 * @see \smso\smso\Skeleton\SkeletonClass
 */
class SmsoFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'smso-client';
    }
}
