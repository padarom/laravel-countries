<?php

namespace Lykegenes\LaravelCountries\Tests;

class TestCase extends \Orchestra\Testbench\TestCase
{
    /**
     * @var Lykegenes\LaravelCountries\Countries
     */
    protected $countries;

    public function setUp()
    {
        parent::setUp();

        $this->countries = $this->app->make('countries');
    }

    /**
     * Get package providers.
     *
     * @param \Illuminate\Foundation\Application $app
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            \Lykegenes\LaravelCountries\ServiceProvider::class,
        ];
    }

    protected function getPackageAliases($app)
    {
        return [
            'Countries' => \Lykegenes\LaravelCountries\Facades\Countries::class,
        ];
    }
}
