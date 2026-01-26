<?php

// auto-generated

use Pionect\VismaSdk\Requests\FixedAssetPropertyTaxGroup\FixedAssetPropertyTaxGroupGetAllCollectionRequest;
use Pionect\VismaSdk\Requests\FixedAssetPropertyTaxGroup\FixedAssetPropertyTaxGroupGetByPropertyTaxIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector(
        clientId: 'replace',
        clientSecret: 'replace'
    );
});

it('calls the fixedAssetPropertyTaxGroupGetByPropertyTaxId method in the FixedAssetPropertyTaxGroup resource', function () {
    Saloon::fake([
        FixedAssetPropertyTaxGroupGetByPropertyTaxIdRequest::class => MockResponse::make([
            'propertyTaxId' => 'mock-id-123',
            'description' => 'Mock value',
            'active' => true,
            'details' => [],
            'errorInfo' => 'Mock value',
            'metadata' => 'Mock value',
        ], 200),
    ]);

    $request = new FixedAssetPropertyTaxGroupGetByPropertyTaxIdRequest(
        propertyTaxIdId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(FixedAssetPropertyTaxGroupGetByPropertyTaxIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->propertyTaxId->toBe('mock-id-123')
        ->description->toBe('Mock value')
        ->active->toBeTrue()
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the fixedAssetPropertyTaxGroupGetAllCollection method in the FixedAssetPropertyTaxGroup resource', function () {
    Saloon::fake([
        FixedAssetPropertyTaxGroupGetAllCollectionRequest::class => MockResponse::make([
            0 => [
                'propertyTaxId' => 'mock-id-123',
                'description' => 'Mock value',
                'active' => true,
                'details' => [],
                'errorInfo' => 'Mock value',
                'metadata' => 'Mock value',
            ],
            1 => [
                'propertyTaxId' => 'mock-id-123',
                'description' => 'Mock value',
                'active' => true,
                'details' => [],
                'errorInfo' => 'Mock value',
                'metadata' => 'Mock value',
            ],
        ], 200),
    ]);

    $request = (new FixedAssetPropertyTaxGroupGetAllCollectionRequest(propertyTaxId: 'test string', active: true, pageNumber: 123, pageSize: 123));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (FixedAssetPropertyTaxGroupGetAllCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->propertyTaxId->toBe('mock-id-123')
        ->description->toBe('Mock value')
        ->active->toBeTrue()
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});
