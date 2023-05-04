<?php

/*
* This file is part of the Euro Currency Exchange package.
*
* (c) Josiah Endurance <hendurhance.dev@gmail.com>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

use Martian\EuroCurrencyExchange\Classes\Builder;

if (!config('euro-currency-exchange.route_disabled')) {
   (new Builder())->routes();
}