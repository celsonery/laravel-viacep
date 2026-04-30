<?php

namespace CelsoNery\ViaCep;

use Illuminate\Support\Facades\Http;

class ViaCepService
{
    protected string $baseUrl;

    public function __construct()
    {
        $this->baseUrl = config('viacep.base_url');
    }

    public function get(string $cep)
    {
        $cep = preg_replace('/[^0-9]/', '', $cep);

        if (strlen($cep) != 8) {
            throw new \Exception('Invalid cep size!');
        }

        return Http::timeout(config('viacep.timeout'))
            ->get("{$this->baseUrl}/{$cep}/json/")
            ->throw()
            ->json();
    }
}
