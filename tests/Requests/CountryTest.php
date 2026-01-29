<?php

// auto-generated

use Pionect\VismaSdk\Requests\Country\CountryGetCountriesCollectionRequest;
use Pionect\VismaSdk\Requests\Country\CountryGetCountryBycountryIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the countryGetCountryBycountryId method in the Country resource', function () {
    Saloon::fake([
        CountryGetCountryBycountryIdRequest::class => MockResponse::make([
            'name' => 'String value',
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new CountryGetCountryBycountryIdRequest(
        countryId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CountryGetCountryBycountryIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->name->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the countryGetCountriesCollection method in the Country resource', function () {
    Saloon::fake([
        CountryGetCountriesCollectionRequest::class => MockResponse::make([
            0 => [
                'name' => 'String value',
                'errorInfo' => 'String value',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
            1 => [
                'name' => 'String value',
                'errorInfo' => 'String value',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
        ], 200),
    ]);

    $request = (new CountryGetCountriesCollectionRequest(pageNumber: 123, pageSize: 123));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (CountryGetCountriesCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->name->toBe('String value')
        ->errorInfo->toBe('String value');
});
