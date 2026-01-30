<?php

use Pionect\VismaSdk\Requests\FixedAssetPropertyTaxGroup\FixedAssetPropertyTaxGroupGetAllRequest;
use Pionect\VismaSdk\Requests\FixedAssetPropertyTaxGroup\FixedAssetPropertyTaxGroupGetByPropertyTaxIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the fixedAssetPropertyTaxGroupGetByPropertyTaxIdRequest method in the FixedAssetPropertyTaxGroup resource', function () {
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
        ->active->toBe(true)
        ->errorInfo->toBe('String value');
});

it('calls the fixedAssetPropertyTaxGroupGetAllRequest method in the FixedAssetPropertyTaxGroup resource', function () {
    Saloon::fake([
        FixedAssetPropertyTaxGroupGetAllRequest::class => MockResponse::make([
            0 => [
                'propertyTaxId' => 'mock-id-123',
                'description' => 'String value',
                'active' => true,
                'details' => [],
                'errorInfo' => 'String value',
            ],
            1 => [
                'propertyTaxId' => 'mock-id-123',
                'description' => 'String value',
                'active' => true,
                'details' => [],
                'errorInfo' => 'String value',
            ],
        ], 200),
    ]);

    $request = new FixedAssetPropertyTaxGroupGetAllRequest(
        propertyTaxId: 'test string',
        active: true,
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(FixedAssetPropertyTaxGroupGetAllRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toHaveCount(2);
    expect($collection->first())
        ->propertyTaxId->toBe('mock-id-123')
        ->description->toBe('String value')
        ->active->toBe(true)
        ->errorInfo->toBe('String value');
});
