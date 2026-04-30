<?php

use CelsoNery\ViaCep\ViaCepService;
use Illuminate\Support\Facades\Http;

test('service returns json', function () {
    Http::fake([
        '*' => Http::response(['ok' => true], 200),
    ]);

    $service = new ViaCepService;
    $result = $service->get('00100001');

    expect($result)->toBe(['ok' => true]);
});
