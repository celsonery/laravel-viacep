<?php

namespace CelsoNery\ViaCep\Providers;

use CelsoNery\ViaCep\Console\InstallCommand;
use CelsoNery\ViaCep\ViaCepService;
use Illuminate\Support\ServiceProvider;

class ViaCepServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../../config/viacep.php',
            'viacep'
        );

        $this->app->singleton('viacep', function ($app) {
            return new ViaCepService;
        });
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../../config/viacep.php' => config_path('viacep.php'),
        ], 'viacep-config');

        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallCommand::class,
            ]);
        }
    }
}
