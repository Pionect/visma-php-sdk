<?php

// Generated 2026-01-30 15:19:40

use Pionect\VismaSdk\Requests\Country\CountryGetCountriesRequest;
use Pionect\VismaSdk\Requests\Country\CountryGetCountryBycountryIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the countryGetCountryBycountryIdRequest method in the Country resource', function () {
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

it('calls the countryGetCountriesRequest method in the Country resource', function () {
    Saloon::fake([
        CountryGetCountriesRequest::class => MockResponse::make([
            0 => [
                'name' => 'String value',
                'errorInfo' => 'String value',
            ],
            1 => [
                'name' => 'String value',
                'errorInfo' => 'String value',
            ],
        ], 200),
    ]);

    $request = new CountryGetCountriesRequest(
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CountryGetCountriesRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toBeArray()
        ->and($collection)->toHaveCount(2);

    $firstItem = $collection[0];

    expect($firstItem)
        ->name->toBe('String value')
        ->errorInfo->toBe('String value');
});
