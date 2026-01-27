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
            'boxId' => 'mock-id-123',
            'description' => 'String value',
            'boxWeight' => 3.14,
            'maxWeight' => 3.14,
            'weightUoM' => 'String value',
            'maxVolume' => 3.14,
            'volumeUoM' => 'String value',
            'length' => 42,
            'width' => 42,
            'height' => 42,
            'activeByDefault' => true,
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'id' => 'mock-id-123',
        ], 200),
    ]);

    $request = new PackagingTypeGetByboxIdRequest(
        boxId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(PackagingTypeGetByboxIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->boxId->toBe('mock-id-123')
        ->description->toBe('String value')
        ->boxWeight->toBe(3.14)
        ->maxWeight->toBe(3.14)
        ->weightUoM->toBe('String value')
        ->maxVolume->toBe(3.14)
        ->volumeUoM->toBe('String value')
        ->length->toBe(42)
        ->width->toBe(42)
        ->height->toBe(42)
        ->activeByDefault->toBeTrue()
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->id->toBe('mock-id-123');
});

it('calls the packagingTypeGetAllPackagingTypesCollection method in the PackagingType resource', function () {
    Saloon::fake([
        PackagingTypeGetAllPackagingTypesCollectionRequest::class => MockResponse::make([
            0 => [
                'boxId' => 'mock-id-123',
                'description' => 'String value',
                'boxWeight' => 3.14,
                'maxWeight' => 3.14,
                'weightUoM' => 'String value',
                'maxVolume' => 3.14,
                'volumeUoM' => 'String value',
                'length' => 42,
                'width' => 42,
                'height' => 42,
                'activeByDefault' => true,
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'id' => 'mock-id-123',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
            1 => [
                'boxId' => 'mock-id-123',
                'description' => 'String value',
                'boxWeight' => 3.14,
                'maxWeight' => 3.14,
                'weightUoM' => 'String value',
                'maxVolume' => 3.14,
                'volumeUoM' => 'String value',
                'length' => 42,
                'width' => 42,
                'height' => 42,
                'activeByDefault' => true,
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'id' => 'mock-id-123',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
        ], 200),
    ]);

    $request = (new PackagingTypeGetAllPackagingTypesCollectionRequest(greaterThanValue: 'test string', numberToRead: 123, skipRecords: 123, orderBy: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', pageNumber: 123, pageSize: 123));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (PackagingTypeGetAllPackagingTypesCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->boxId->toBe('mock-id-123')
        ->description->toBe('String value')
        ->boxWeight->toBe(3.14)
        ->maxWeight->toBe(3.14)
        ->weightUoM->toBe('String value')
        ->maxVolume->toBe(3.14)
        ->volumeUoM->toBe('String value')
        ->length->toBe(42)
        ->width->toBe(42)
        ->height->toBe(42)
        ->activeByDefault->toBeTrue()
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->id->toBe('mock-id-123');
});
