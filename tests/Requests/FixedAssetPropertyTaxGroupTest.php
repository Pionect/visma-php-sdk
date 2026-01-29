<?php

// auto-generated

use Pionect\VismaSdk\Requests\FixedAssetPropertyTaxGroup\FixedAssetPropertyTaxGroupGetAllCollectionRequest;
use Pionect\VismaSdk\Requests\FixedAssetPropertyTaxGroup\FixedAssetPropertyTaxGroupGetByPropertyTaxIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the fixedAssetPropertyTaxGroupGetByPropertyTaxId method in the FixedAssetPropertyTaxGroup resource', function () {
    Saloon::fake([
        FixedAssetPropertyTaxGroupGetByPropertyTaxIdRequest::class => MockResponse::make([
            'propertyTaxId' => 'mock-id-123',
            'description' => 'String value',
            'active' => true,
            'details' => [],
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new FixedAssetPropertyTaxGroupGetByPropertyTaxIdRequest(
        propertyTaxId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(FixedAssetPropertyTaxGroupGetByPropertyTaxIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->propertyTaxId->toBe('mock-id-123')
        ->description->toBe('String value')
        ->active->toBeTrue()
        ->errorInfo->toBe('String value');
});

it('calls the fixedAssetPropertyTaxGroupGetAllCollection method in the FixedAssetPropertyTaxGroup resource', function () {
    Saloon::fake([
        FixedAssetPropertyTaxGroupGetAllCollectionRequest::class => MockResponse::make([
            0 => [
                'propertyTaxId' => 'mock-id-123',
                'description' => 'String value',
                'active' => true,
                'details' => [],
                'errorInfo' => 'String value',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
            1 => [
                'propertyTaxId' => 'mock-id-123',
                'description' => 'String value',
                'active' => true,
                'details' => [],
                'errorInfo' => 'String value',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
        ], 200),
    ]);

    $request = (new FixedAssetPropertyTaxGroupGetAllCollectionRequest(propertyTaxId: 'test string', active: true, pageNumber: 123, pageSize: 123));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (FixedAssetPropertyTaxGroupGetAllCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->propertyTaxId->toBe('mock-id-123')
        ->description->toBe('String value')
        ->active->toBeTrue()
        ->errorInfo->toBe('String value');
});
