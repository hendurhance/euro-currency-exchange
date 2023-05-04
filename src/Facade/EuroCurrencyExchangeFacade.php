<?php

/*
* This file is part of the Euro Currency Exchange package.
*
* (c) Josiah Endurance <hendurhance.dev@gmail.com>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace Martian\EuroCurrencyExchange\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * 
 * @see \Martian\EuroCurrencyExchange\Classes\Builder
 */
class EuroCurrencyExchangeFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'euro-currency-exchange';
    }
}
