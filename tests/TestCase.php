<?php

namespace CelsoNery\ViaCep\Tests;

use CelsoNery\ViaCep\Providers\ViaCepServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            ViaCepServiceProvider::class,
        ];
    }
}
