<?php

// auto-generated

use Pionect\VismaSdk\Requests\CurrencyRateType\CurrencyRateTypeGetAllCollectionRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the currencyRateTypeGetAllCollection method in the CurrencyRateType resource', function () {
    Saloon::fake([
        CurrencyRateTypeGetAllCollectionRequest::class => MockResponse::make([
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

    $request = (new CurrencyRateTypeGetAllCollectionRequest);

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (CurrencyRateTypeGetAllCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->description->toBe('String value')
        ->daysEffective->toBe(42);
});
