<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\Carrier\CarrierGetAllCarriersCollectionRequest;
use Pionect\VismaSdk\Requests\Carrier\CarrierGetCarrierBycarrierNameRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the carrierGetCarrierBycarrierName method in the Carrier resource', function () {
    Saloon::fake([
        CarrierGetCarrierBycarrierNameRequest::class => MockResponse::make([
            'carrierId' => 'mock-id-123',
            'carrierDescription' => 'String value',
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
        ], 200),
    ]);

    $request = new CarrierGetCarrierBycarrierNameRequest(
        carrierNameId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CarrierGetCarrierBycarrierNameRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->carrierId->toBe('mock-id-123')
        ->carrierDescription->toBe('String value')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'));
});

it('calls the carrierGetAllCarriersCollection method in the Carrier resource', function () {
    Saloon::fake([
        CarrierGetAllCarriersCollectionRequest::class => MockResponse::make([
            0 => [
                'carrierId' => 'mock-id-123',
                'carrierDescription' => 'String value',
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
            1 => [
                'carrierId' => 'mock-id-123',
                'carrierDescription' => 'String value',
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
        ], 200),
    ]);

    $request = (new CarrierGetAllCarriersCollectionRequest(numberToRead: 123, skipRecords: 123, lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', pageNumber: 123, pageSize: 123));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (CarrierGetAllCarriersCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->carrierId->toBe('mock-id-123')
        ->carrierDescription->toBe('String value')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'));
});
