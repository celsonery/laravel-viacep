<?php

namespace CelsoNery\ViaCep\Console;

use Illuminate\Console\Command;

class InstallCommand extends Command
{
    protected $signature = 'viacep:install';

    protected $description = 'Install ViaCEP package';

    public function handle()
    {
        $this->call('vendor:publish', ['--tag' => 'viacep-config']);
        $this->info('Package ViaCEP installed successfully!');
    }
}
