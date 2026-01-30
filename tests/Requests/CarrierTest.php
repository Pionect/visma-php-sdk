<?php

// Generated 2026-01-30 15:19:40

use Pionect\VismaSdk\Requests\Carrier\CarrierGetAllCarriersRequest;
use Pionect\VismaSdk\Requests\Carrier\CarrierGetCarrierBycarrierNameRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the carrierGetCarrierBycarrierNameRequest method in the Carrier resource', function () {
    Saloon::fake([
        CarrierGetCarrierBycarrierNameRequest::class => MockResponse::make([
            'carrierId' => 'mock-id-123',
            'carrierDescription' => 'String value',
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
        ], 200),
    ]);

    $request = new CarrierGetCarrierBycarrierNameRequest(
        carrierName: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CarrierGetCarrierBycarrierNameRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->carrierId->toBe('mock-id-123')
        ->carrierDescription->toBe('String value')
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'));
});

it('calls the carrierGetAllCarriersRequest method in the Carrier resource', function () {
    Saloon::fake([
        CarrierGetAllCarriersRequest::class => MockResponse::make([
            0 => [
                'carrierId' => 'mock-id-123',
                'carrierDescription' => 'String value',
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            ],
            1 => [
                'carrierId' => 'mock-id-123',
                'carrierDescription' => 'String value',
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            ],
        ], 200),
    ]);

    $request = new CarrierGetAllCarriersRequest(
        numberToRead: 123,
        skipRecords: 123,
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CarrierGetAllCarriersRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toBeArray()
        ->and($collection)->toHaveCount(2);

    $firstItem = $collection[0];

    expect($firstItem)
        ->carrierId->toBe('mock-id-123')
        ->carrierDescription->toBe('String value')
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'));
});
