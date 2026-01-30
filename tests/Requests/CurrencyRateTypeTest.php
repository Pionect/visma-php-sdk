<?php

// Generated 2026-01-30 14:10:14
use Pionect\VismaSdk\Dto\CurrencyRateTypeDto;
use Pionect\VismaSdk\Requests\CurrencyRateType\CurrencyRateTypeGetAllRequest;
use Pionect\VismaSdk\Requests\CurrencyRateType\CurrencyRateTypePostRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the currencyRateTypeGetAllRequest method in the CurrencyRateType resource', function () {
    Saloon::fake([
        CurrencyRateTypeGetAllRequest::class => MockResponse::make([
            0 => [
                'description' => 'String value',
                'daysEffective' => 42,
            ],
            1 => [
                'description' => 'String value',
                'daysEffective' => 42,
            ],
        ], 200),
    ]);

    $request = new CurrencyRateTypeGetAllRequest(
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CurrencyRateTypeGetAllRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toBeArray()
        ->and($collection)->toHaveCount(2);

    $firstItem = $collection[0];

    expect($firstItem)
        ->description->toBe('String value')
        ->daysEffective->toBe(42);
});

it('calls the currencyRateTypePostRequest method in the CurrencyRateType resource', function () {
    $bodyData = new CurrencyRateTypeDto(
        description: 'String value',
        daysEffective: 42
    );

    Saloon::fake([
        CurrencyRateTypePostRequest::class => MockResponse::make([], 201),
    ]);

    $request = new CurrencyRateTypePostRequest(
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CurrencyRateTypePostRequest::class);

    expect($response->status())->toBe(201);
});
