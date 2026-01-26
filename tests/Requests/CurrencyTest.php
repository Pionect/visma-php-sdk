<?php

// auto-generated

use Pionect\VismaSdk\Requests\Currency\CurrencyGetAllCollectionRequest;
use Pionect\VismaSdk\Requests\Currency\CurrencyGetSpecificCurrencyBycuryIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector(
        clientId: 'replace',
        clientSecret: 'replace'
    );
});

it('calls the currencyGetSpecificCurrencyBycuryId method in the Currency resource', function () {
    Saloon::fake([
        CurrencyGetSpecificCurrencyBycuryIdRequest::class => MockResponse::make([
            'description' => 'Mock value',
            'symbol' => 'Mock value',
            'isBaseCurrency' => true,
            'decimalPrecision' => 42,
            'isUsedForAccounting' => true,
        ], 200),
    ]);

    $request = new CurrencyGetSpecificCurrencyBycuryIdRequest(
        curyIdId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CurrencyGetSpecificCurrencyBycuryIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->description->toBe('Mock value')
        ->symbol->toBe('Mock value')
        ->isBaseCurrency->toBeTrue()
        ->decimalPrecision->toBe(42)
        ->isUsedForAccounting->toBeTrue();
});

it('calls the currencyGetAllCollection method in the Currency resource', function () {
    Saloon::fake([
        CurrencyGetAllCollectionRequest::class => MockResponse::make([
            0 => [
                'description' => 'Mock value',
                'symbol' => 'Mock value',
                'isBaseCurrency' => true,
                'decimalPrecision' => 42,
                'isUsedForAccounting' => true,
            ],
            1 => [
                'description' => 'Mock value',
                'symbol' => 'Mock value',
                'isBaseCurrency' => true,
                'decimalPrecision' => 42,
                'isUsedForAccounting' => true,
            ],
        ], 200),
    ]);

    $request = (new CurrencyGetAllCollectionRequest);

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (CurrencyGetAllCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->description->toBe('Mock value')
        ->symbol->toBe('Mock value')
        ->isBaseCurrency->toBeTrue()
        ->decimalPrecision->toBe(42)
        ->isUsedForAccounting->toBeTrue();
});
