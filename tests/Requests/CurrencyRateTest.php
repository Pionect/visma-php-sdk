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
            0 => [
                'fromCurrencyId' => 'mock-id-123',
                'toCurrencyId' => 'mock-id-123',
                'rateType' => 'String value',
                'rate' => 3.14,
                'effectiveDate' => '2025-11-22T10:40:04.065Z',
                'multDiv' => 'String value',
                'rateReciprocal' => 3.14,
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'id' => 'mock-id-123',
            ],
            1 => [
                'fromCurrencyId' => 'mock-id-123',
                'toCurrencyId' => 'mock-id-123',
                'rateType' => 'String value',
                'rate' => 3.14,
                'effectiveDate' => '2025-11-22T10:40:04.065Z',
                'multDiv' => 'String value',
                'rateReciprocal' => 3.14,
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'id' => 'mock-id-123',
            ],
        ], 200),
    ]);

    $request = (new CurrencyRateGetAllCollectionRequest(fromDate: 'test string', toDate: 'test string', fromCurrency: 'test string', toCurrency: 'test string', rateType: 'test string'));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (CurrencyRateGetAllCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->fromCurrencyId->toBe('mock-id-123')
        ->toCurrencyId->toBe('mock-id-123')
        ->rateType->toBe('String value')
        ->rate->toBe(3.14)
        ->effectiveDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->multDiv->toBe('String value')
        ->rateReciprocal->toBe(3.14)
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->id->toBe('mock-id-123');
});
