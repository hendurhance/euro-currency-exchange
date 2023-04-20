<?php

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
