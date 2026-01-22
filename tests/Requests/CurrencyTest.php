<?php

// auto-generated

use Pionect\VismaSdk\Requests\Currency\CurrencyGetAllCollectionRequest;
use Pionect\VismaSdk\Requests\Currency\CurrencyGetSpecificCurrencyBycuryIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the currencyGetSpecificCurrencyBycuryId method in the Currency resource', function () {
    Saloon::fake([
        CurrencyGetSpecificCurrencyBycuryIdRequest::class => MockResponse::make([
            'data' => [
                'type' => 'currencies',
                'id' => 'mock-id-123',
                'attributes' => [
                    'description' => 'Mock value',
                    'symbol' => 'Mock value',
                    'isBaseCurrency' => true,
                    'decimalPrecision' => 42,
                    'isUsedForAccounting' => true,
                ],
            ],
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
        ->isBaseCurrency->toBe(true)
        ->decimalPrecision->toBe(42)
        ->isUsedForAccounting->toBe(true);
});

it('calls the currencyGetAllCollection method in the Currency resource', function () {
    Saloon::fake([
        CurrencyGetAllCollectionRequest::class => MockResponse::make([
            'data' => [
                0 => [
                    'type' => 'currencies',
                    'id' => 'mock-id-1',
                    'attributes' => [
                        'description' => 'Mock value',
                        'symbol' => 'Mock value',
                        'isBaseCurrency' => true,
                        'decimalPrecision' => 42,
                        'isUsedForAccounting' => true,
                    ],
                ],
                1 => [
                    'type' => 'currencies',
                    'id' => 'mock-id-2',
                    'attributes' => [
                        'description' => 'Mock value',
                        'symbol' => 'Mock value',
                        'isBaseCurrency' => true,
                        'decimalPrecision' => 42,
                        'isUsedForAccounting' => true,
                    ],
                ],
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
        ->isBaseCurrency->toBe(true)
        ->decimalPrecision->toBe(42)
        ->isUsedForAccounting->toBe(true);
});
