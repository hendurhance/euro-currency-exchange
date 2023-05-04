<?php

/*
* This file is part of the Euro Currency Exchange package.
*
* (c) Josiah Endurance <hendurhance.dev@gmail.com>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace Martian\EuroCurrencyExchange\Tests\Unit\Classes;

use Martian\EuroCurrencyExchange\Tests\TestCase;
use Martian\EuroCurrencyExchange\Classes\Builder;
use Illuminate\Support\Facades\Config;

class BuilderTest extends TestCase
{
    /**
     * Test the Builder class
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
    }

    /**
     * Test the Builder class
     * 
     * @return void
     */
    public function test_builder_class()
    {
        $builder = new Builder();
        $this->assertInstanceOf(Builder::class, $builder);
    }

    /**
     * Test the Builder class
     * 
     * @return void
     */
    public function test_builder_class_with_config()
    {
        $builder = new Builder();
        $this->assertInstanceOf(Builder::class, $builder);
        $this->assertEquals(Config::get('euro-currency-exchange.url'), $builder->getUrl());
        $this->assertEquals(Config::get('euro-currency-exchange.cache_ttl'), $builder->getCacheTtl());
        $this->assertEquals(Config::get('euro-currency-exchange.cache_base_key'), $builder->getCacheBaseKey());
        $this->assertEquals(Config::get('euro-currency-exchange.currencies'), $builder->getCurrencies());
    }

    /**
     * Test the Builder class
     * 
     * @return void
     */
    public function test_builder_class_with_config_and_overrides()
    {
        $builder = new Builder();
        $builder->setUrl('https://www.example.com');
        $builder->setCacheTtl(3600);
        $builder->setCacheBaseKey('euro-currency-exchange');
        $this->assertInstanceOf(Builder::class, $builder);
        $this->assertEquals('https://www.example.com', $builder->getUrl());
        $this->assertEquals(3600, $builder->getCacheTtl());
        $this->assertEquals('euro-currency-exchange', $builder->getCacheBaseKey());
    }
}