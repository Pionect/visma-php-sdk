<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\PackagingType\PackagingTypeGetAllPackagingTypesCollectionRequest;
use Pionect\VismaSdk\Requests\PackagingType\PackagingTypeGetByboxIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the packagingTypeGetByboxId method in the PackagingType resource', function () {
    Saloon::fake([
        PackagingTypeGetByboxIdRequest::class => MockResponse::make([
            'data' => [
                'type' => 'packagingTypes',
                'id' => 'mock-id-123',
                'attributes' => [
                    'boxId' => 'mock-id-123',
                    'description' => 'Mock value',
                    'boxWeight' => 3.14,
                    'maxWeight' => 3.14,
                    'weightUoM' => 'Mock value',
                    'maxVolume' => 3.14,
                    'volumeUoM' => 'Mock value',
                    'length' => 42,
                    'width' => 42,
                    'height' => 42,
                    'activeByDefault' => true,
                    'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                    'metadata' => 'Mock value',
                ],
            ],
        ], 200),
    ]);

    $request = new PackagingTypeGetByboxIdRequest(
        boxIdId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(PackagingTypeGetByboxIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->boxId->toBe('mock-id-123')
        ->description->toBe('Mock value')
        ->boxWeight->toBe(3.14)
        ->maxWeight->toBe(3.14)
        ->weightUoM->toBe('Mock value')
        ->maxVolume->toBe(3.14)
        ->volumeUoM->toBe('Mock value')
        ->length->toBe(42)
        ->width->toBe(42)
        ->height->toBe(42)
        ->activeByDefault->toBe(true)
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->metadata->toBe('Mock value');
});

it('calls the packagingTypeGetAllPackagingTypesCollection method in the PackagingType resource', function () {
    Saloon::fake([
        PackagingTypeGetAllPackagingTypesCollectionRequest::class => MockResponse::make([
            'data' => [
                0 => [
                    'type' => 'packagingTypes',
                    'id' => 'mock-id-1',
                    'attributes' => [
                        'boxId' => 'mock-id-123',
                        'description' => 'Mock value',
                        'boxWeight' => 3.14,
                        'maxWeight' => 3.14,
                        'weightUoM' => 'Mock value',
                        'maxVolume' => 3.14,
                        'volumeUoM' => 'Mock value',
                        'length' => 42,
                        'width' => 42,
                        'height' => 42,
                        'activeByDefault' => true,
                        'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                        'metadata' => 'Mock value',
                    ],
                ],
                1 => [
                    'type' => 'packagingTypes',
                    'id' => 'mock-id-2',
                    'attributes' => [
                        'boxId' => 'mock-id-123',
                        'description' => 'Mock value',
                        'boxWeight' => 3.14,
                        'maxWeight' => 3.14,
                        'weightUoM' => 'Mock value',
                        'maxVolume' => 3.14,
                        'volumeUoM' => 'Mock value',
                        'length' => 42,
                        'width' => 42,
                        'height' => 42,
                        'activeByDefault' => true,
                        'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                        'metadata' => 'Mock value',
                    ],
                ],
            ],
        ], 200),
    ]);

    $request = (new PackagingTypeGetAllPackagingTypesCollectionRequest(greaterThanValue: 'test string', numberToRead: 123, skipRecords: 123, orderBy: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', pageNumber: 123, pageSize: 123));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (PackagingTypeGetAllPackagingTypesCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->boxId->toBe('mock-id-123')
        ->description->toBe('Mock value')
        ->boxWeight->toBe(3.14)
        ->maxWeight->toBe(3.14)
        ->weightUoM->toBe('Mock value')
        ->maxVolume->toBe(3.14)
        ->volumeUoM->toBe('Mock value')
        ->length->toBe(42)
        ->width->toBe(42)
        ->height->toBe(42)
        ->activeByDefault->toBe(true)
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->metadata->toBe('Mock value');
});
