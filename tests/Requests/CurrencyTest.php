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
            'description' => 'String value',
            'symbol' => 'String value',
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
        ->description->toBe('String value')
        ->symbol->toBe('String value')
        ->isBaseCurrency->toBeTrue()
        ->decimalPrecision->toBe(42)
        ->isUsedForAccounting->toBeTrue();
});

it('calls the currencyGetAllCollection method in the Currency resource', function () {
    Saloon::fake([
        CurrencyGetAllCollectionRequest::class => MockResponse::make([
            0 => [
                'description' => 'String value',
                'symbol' => 'String value',
                'isBaseCurrency' => true,
                'decimalPrecision' => 42,
                'isUsedForAccounting' => true,
            ],
            1 => [
                'description' => 'String value',
                'symbol' => 'String value',
                'isBaseCurrency' => true,
                'decimalPrecision' => 42,
                'isUsedForAccounting' => true,
            ],
        ], 200),
    ]);

    $request = (new CurrencyGetAllCollectionRequest);

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (CurrencyGetAllCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->description->toBe('String value')
        ->symbol->toBe('String value')
        ->isBaseCurrency->toBeTrue()
        ->decimalPrecision->toBe(42)
        ->isUsedForAccounting->toBeTrue();
});
