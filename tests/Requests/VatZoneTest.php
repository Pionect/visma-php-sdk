<?php

// auto-generated

use Pionect\VismaSdk\Requests\VatZone\VatZoneGetVatZoneByvatZoneIdRequest;
use Pionect\VismaSdk\Requests\VatZone\VatZoneGetVatZonesCollectionRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the vatZoneGetVatZoneByvatZoneId method in the VatZone resource', function () {
    Saloon::fake([
        VatZoneGetVatZoneByvatZoneIdRequest::class => MockResponse::make([
            'description' => 'String value',
            'defaultVatCategory' => 'String value',
            'defaultTaxCategory' => null,
            'errorInfo' => 'String value',
            'id' => 'mock-id-123',
        ], 200),
    ]);

    $request = new VatZoneGetVatZoneByvatZoneIdRequest(
        vatZoneIdId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(VatZoneGetVatZoneByvatZoneIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->description->toBe('String value')
        ->defaultVatCategory->toBe('String value')
        ->defaultTaxCategory->toBeNull()
        ->errorInfo->toBe('String value')
        ->id->toBe('mock-id-123');
});

it('calls the vatZoneGetVatZonesCollection method in the VatZone resource', function () {
    Saloon::fake([
        VatZoneGetVatZonesCollectionRequest::class => MockResponse::make([
            0 => [
                'description' => 'String value',
                'defaultVatCategory' => 'String value',
                'defaultTaxCategory' => null,
                'errorInfo' => 'String value',
                'id' => 'mock-id-123',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
            1 => [
                'description' => 'String value',
                'defaultVatCategory' => 'String value',
                'defaultTaxCategory' => null,
                'errorInfo' => 'String value',
                'id' => 'mock-id-123',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
        ], 200),
    ]);

    $request = (new VatZoneGetVatZonesCollectionRequest(pageNumber: 123, pageSize: 123));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (VatZoneGetVatZonesCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->description->toBe('String value')
        ->defaultVatCategory->toBe('String value')
        ->defaultTaxCategory->toBeNull()
        ->errorInfo->toBe('String value')
        ->id->toBe('mock-id-123');
});
