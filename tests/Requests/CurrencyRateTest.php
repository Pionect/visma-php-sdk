<?php

use Pionect\VismaSdk\Dto\CreateCurrencyRateDto;
use Pionect\VismaSdk\Dto\UpdateCurrencyRateDto;
use Pionect\VismaSdk\Requests\CurrencyRate\CurrencyRateGetAllRequest;
use Pionect\VismaSdk\Requests\CurrencyRate\CurrencyRatePostCurrencyRateRequest;
use Pionect\VismaSdk\Requests\CurrencyRate\CurrencyRatePutCurrencyRateBycurrencyRateIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the currencyRateGetAllRequest method in the CurrencyRate resource', function () {
    Saloon::fake([
        CurrencyRateGetAllRequest::class => MockResponse::make([
            0 => [
                'fromCurrencyId' => 'mock-id-123',
                'toCurrencyId' => 'mock-id-123',
                'rateType' => 'String value',
                'rate' => 42,
                'effectiveDate' => '2025-11-22T10:40:04+00:00',
                'multDiv' => 'String value',
                'rateReciprocal' => 42,
                'timeStamp' => 'String value',
            ],
            1 => [
                'fromCurrencyId' => 'mock-id-123',
                'toCurrencyId' => 'mock-id-123',
                'rateType' => 'String value',
                'rate' => 42,
                'effectiveDate' => '2025-11-22T10:40:04+00:00',
                'multDiv' => 'String value',
                'rateReciprocal' => 42,
                'timeStamp' => 'String value',
            ],
        ], 200),
    ]);

    $request = new CurrencyRateGetAllRequest(
        fromDate: 'test string',
        toDate: 'test string',
        fromCurrency: 'test string',
        toCurrency: 'test string',
        rateType: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CurrencyRateGetAllRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toHaveCount(2);
    expect($collection->first())
        ->fromCurrencyId->toBe('mock-id-123')
        ->toCurrencyId->toBe('mock-id-123')
        ->rateType->toBe('String value')
        ->rate->toBe(42)
        ->effectiveDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->multDiv->toBe('String value')
        ->rateReciprocal->toBe(42)
        ->timeStamp->toBe('String value');
});

it('calls the currencyRatePostCurrencyRateRequest method in the CurrencyRate resource', function () {
    $bodyData = new CreateCurrencyRateDto(
        fromCurrencyId: 'mock-id-123',
        toCurrencyId: 'mock-id-123',
        rateType: 'String value',
        effectiveDate: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        rate: 42,
        multDiv: 'String value'
    );

    Saloon::fake([
        CurrencyRatePostCurrencyRateRequest::class => MockResponse::make([], 201),
    ]);

    $request = new CurrencyRatePostCurrencyRateRequest(
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CurrencyRatePostCurrencyRateRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the currencyRatePutCurrencyRateBycurrencyRateIdRequest method in the CurrencyRate resource', function () {
    $bodyData = new UpdateCurrencyRateDto(
        rate: 42,
        multDiv: 'String value'
    );

    Saloon::fake([
        CurrencyRatePutCurrencyRateBycurrencyRateIdRequest::class => MockResponse::make([], 201),
    ]);

    $request = new CurrencyRatePutCurrencyRateBycurrencyRateIdRequest(
        currencyRateId: 123,
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CurrencyRatePutCurrencyRateBycurrencyRateIdRequest::class);

    expect($response->status())->toBe(201);
});
