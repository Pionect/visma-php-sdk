<?php

// auto-generated

use Pionect\VismaSdk\Requests\Country\CountryGetCountriesCollectionRequest;
use Pionect\VismaSdk\Requests\Country\CountryGetCountryBycountryIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector(
        clientId: 'replace',
        clientSecret: 'replace'
    );
});

it('calls the countryGetCountryBycountryId method in the Country resource', function () {
    Saloon::fake([
        CountryGetCountryBycountryIdRequest::class => MockResponse::make([
            'name' => 'Mock value',
            'errorInfo' => 'Mock value',
            'metadata' => 'Mock value',
        ], 200),
    ]);

    $request = new CountryGetCountryBycountryIdRequest(
        countryIdId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CountryGetCountryBycountryIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->name->toBe('Mock value')
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the countryGetCountriesCollection method in the Country resource', function () {
    Saloon::fake([
        CountryGetCountriesCollectionRequest::class => MockResponse::make([
            0 => [
                'name' => 'Mock value',
                'errorInfo' => 'Mock value',
                'metadata' => 'Mock value',
            ],
            1 => [
                'name' => 'Mock value',
                'errorInfo' => 'Mock value',
                'metadata' => 'Mock value',
            ],
        ], 200),
    ]);

    $request = (new CountryGetCountriesCollectionRequest(pageNumber: 123, pageSize: 123));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (CountryGetCountriesCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->name->toBe('Mock value')
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});
