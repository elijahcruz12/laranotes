<?php

namespace Elijahcruz\Laranote;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Elijahcruz\Laranote\Skeleton\SkeletonClass
 */
class LaranoteFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laranotes';
    }
}
