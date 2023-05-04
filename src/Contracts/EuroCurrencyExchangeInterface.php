<?php

/*
* This file is part of the Euro Currency Exchange package.
*
* (c) Josiah Endurance <hendurhance.dev@gmail.com>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace Martian\EuroCurrencyExchange\Contracts;

interface EuroCurrencyExchangeInterface
{
    /**
     * Get the amount
     * 
     * @return float
     */
    public function getAmount(): float;

    /**
     * Get currency
     * 
     * @return string
     */
    public function getCurrency(): string;

    /**
     * Get rate
     * 
     * @return float
     */
    public function getRate(): float;

    /**
     * Get the converted amount
     * 
     * @return float
     */
    public function getConvertedAmount(): float;

    /**
     * Get converted currency
     * 
     * @return string
     */
    public function getConvertedCurrency(): string;
}