<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\CurrencyRate\CurrencyRateGetAllCollectionRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the currencyRateGetAllCollection method in the CurrencyRate resource', function () {
    Saloon::fake([
        CurrencyRateGetAllCollectionRequest::class => MockResponse::make([
            'data' => [
                0 => [
                    'type' => 'currencyRates',
                    'id' => 'mock-id-1',
                    'attributes' => [
                        'fromCurrencyId' => 'mock-id-123',
                        'toCurrencyId' => 'mock-id-123',
                        'rateType' => 'Mock value',
                        'rate' => 3.14,
                        'effectiveDate' => '2025-11-22T10:40:04.065Z',
                        'multDiv' => 'Mock value',
                        'rateReciprocal' => 3.14,
                        'timeStamp' => '2025-11-22T10:40:04.065Z',
                    ],
                ],
                1 => [
                    'type' => 'currencyRates',
                    'id' => 'mock-id-2',
                    'attributes' => [
                        'fromCurrencyId' => 'mock-id-123',
                        'toCurrencyId' => 'mock-id-123',
                        'rateType' => 'Mock value',
                        'rate' => 3.14,
                        'effectiveDate' => '2025-11-22T10:40:04.065Z',
                        'multDiv' => 'Mock value',
                        'rateReciprocal' => 3.14,
                        'timeStamp' => '2025-11-22T10:40:04.065Z',
                    ],
                ],
            ],
        ], 200),
    ]);

    $request = (new CurrencyRateGetAllCollectionRequest(fromDate: 'test string', toDate: 'test string', fromCurrency: 'test string', toCurrency: 'test string', rateType: 'test string'));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (CurrencyRateGetAllCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->fromCurrencyId->toBe('mock-id-123')
        ->toCurrencyId->toBe('mock-id-123')
        ->rateType->toBe('Mock value')
        ->rate->toBe(3.14)
        ->effectiveDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->multDiv->toBe('Mock value')
        ->rateReciprocal->toBe(3.14)
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'));
});
