<?php

// Generated 2026-01-30 14:10:14

use Pionect\VismaSdk\Requests\Currency\CurrencyGetAllRequest;
use Pionect\VismaSdk\Requests\Currency\CurrencyGetSpecificCurrencyBycuryIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the currencyGetSpecificCurrencyBycuryIdRequest method in the Currency resource', function () {
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
        curyId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CurrencyGetSpecificCurrencyBycuryIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->description->toBe('String value')
        ->symbol->toBe('String value')
        ->isBaseCurrency->toBe(true)
        ->decimalPrecision->toBe(42)
        ->isUsedForAccounting->toBe(true);
});

it('calls the currencyGetAllRequest method in the Currency resource', function () {
    Saloon::fake([
        CurrencyGetAllRequest::class => MockResponse::make([
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

    $request = new CurrencyGetAllRequest(
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CurrencyGetAllRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toBeArray()
        ->and($collection)->toHaveCount(2);

    $firstItem = $collection[0];

    expect($firstItem)
        ->description->toBe('String value')
        ->symbol->toBe('String value')
        ->isBaseCurrency->toBe(true)
        ->decimalPrecision->toBe(42)
        ->isUsedForAccounting->toBe(true);
});
