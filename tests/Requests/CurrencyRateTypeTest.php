<?php

// auto-generated

use Pionect\VismaSdk\Requests\CurrencyRateType\CurrencyRateTypeGetAllCollectionRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector(
        clientId: 'replace',
        clientSecret: 'replace'
    );
});

it('calls the currencyRateTypeGetAllCollection method in the CurrencyRateType resource', function () {
    Saloon::fake([
        CurrencyRateTypeGetAllCollectionRequest::class => MockResponse::make([
            0 => [
                'description' => 'Mock value',
                'daysEffective' => 42,
            ],
            1 => [
                'description' => 'Mock value',
                'daysEffective' => 42,
            ],
        ], 200),
    ]);

    $request = (new CurrencyRateTypeGetAllCollectionRequest);

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (CurrencyRateTypeGetAllCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->description->toBe('Mock value')
        ->daysEffective->toBe(42);
});
