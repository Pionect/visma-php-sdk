<?php

// auto-generated

use Pionect\VismaSdk\Requests\VatZone\VatZoneGetVatZoneByvatZoneIdRequest;
use Pionect\VismaSdk\Requests\VatZone\VatZoneGetVatZonesCollectionRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector(
        clientId: 'replace',
        clientSecret: 'replace'
    );
});

it('calls the vatZoneGetVatZoneByvatZoneId method in the VatZone resource', function () {
    Saloon::fake([
        VatZoneGetVatZoneByvatZoneIdRequest::class => MockResponse::make([
            'description' => 'Mock value',
            'defaultVatCategory' => 'Mock value',
            'defaultTaxCategory' => 'Mock value',
            'errorInfo' => 'Mock value',
            'metadata' => 'Mock value',
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
        ->description->toBe('Mock value')
        ->defaultVatCategory->toBe('Mock value')
        ->defaultTaxCategory->toBe('Mock value')
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the vatZoneGetVatZonesCollection method in the VatZone resource', function () {
    Saloon::fake([
        VatZoneGetVatZonesCollectionRequest::class => MockResponse::make([
            0 => [
                'description' => 'Mock value',
                'defaultVatCategory' => 'Mock value',
                'defaultTaxCategory' => 'Mock value',
                'errorInfo' => 'Mock value',
                'metadata' => 'Mock value',
            ],
            1 => [
                'description' => 'Mock value',
                'defaultVatCategory' => 'Mock value',
                'defaultTaxCategory' => 'Mock value',
                'errorInfo' => 'Mock value',
                'metadata' => 'Mock value',
            ],
        ], 200),
    ]);

    $request = (new VatZoneGetVatZonesCollectionRequest(pageNumber: 123, pageSize: 123));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (VatZoneGetVatZonesCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->description->toBe('Mock value')
        ->defaultVatCategory->toBe('Mock value')
        ->defaultTaxCategory->toBe('Mock value')
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});
