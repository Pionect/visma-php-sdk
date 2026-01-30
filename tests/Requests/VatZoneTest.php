<?php

// Generated 2026-01-30 15:19:40

use Pionect\VismaSdk\Requests\VatZone\VatZoneGetVatZoneByvatZoneIdRequest;
use Pionect\VismaSdk\Requests\VatZone\VatZoneGetVatZonesRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the vatZoneGetVatZoneByvatZoneIdRequest method in the VatZone resource', function () {
    Saloon::fake([
        VatZoneGetVatZoneByvatZoneIdRequest::class => MockResponse::make([
            'description' => 'String value',
            'defaultVatCategory' => 'String value',
            'defaultTaxCategory' => null,
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new VatZoneGetVatZoneByvatZoneIdRequest(
        vatZoneId: 'test string',
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
        ->errorInfo->toBe('String value');
});

it('calls the vatZoneGetVatZonesRequest method in the VatZone resource', function () {
    Saloon::fake([
        VatZoneGetVatZonesRequest::class => MockResponse::make([
            0 => [
                'description' => 'String value',
                'defaultVatCategory' => 'String value',
                'defaultTaxCategory' => null,
                'errorInfo' => 'String value',
            ],
            1 => [
                'description' => 'String value',
                'defaultVatCategory' => 'String value',
                'defaultTaxCategory' => null,
                'errorInfo' => 'String value',
            ],
        ], 200),
    ]);

    $request = new VatZoneGetVatZonesRequest(
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(VatZoneGetVatZonesRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toBeArray()
        ->and($collection)->toHaveCount(2);

    $firstItem = $collection[0];

    expect($firstItem)
        ->description->toBe('String value')
        ->defaultVatCategory->toBe('String value')
        ->defaultTaxCategory->toBeNull()
        ->errorInfo->toBe('String value');
});
