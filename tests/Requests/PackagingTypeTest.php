<?php

// Generated 2026-01-30 15:19:40

use Pionect\VismaSdk\Requests\PackagingType\PackagingTypeGetAllPackagingTypesRequest;
use Pionect\VismaSdk\Requests\PackagingType\PackagingTypeGetByboxIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the packagingTypeGetByboxIdRequest method in the PackagingType resource', function () {
    Saloon::fake([
        PackagingTypeGetByboxIdRequest::class => MockResponse::make([
            'boxId' => 'mock-id-123',
            'description' => 'String value',
            'boxWeight' => 42,
            'maxWeight' => 42,
            'weightUoM' => 'String value',
            'maxVolume' => 42,
            'volumeUoM' => 'String value',
            'length' => 42,
            'width' => 42,
            'height' => 42,
            'activeByDefault' => true,
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
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
        ->boxWeight->toBe(42)
        ->maxWeight->toBe(42)
        ->weightUoM->toBe('String value')
        ->maxVolume->toBe(42)
        ->volumeUoM->toBe('String value')
        ->length->toBe(42)
        ->width->toBe(42)
        ->height->toBe(42)
        ->activeByDefault->toBe(true)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'));
});

it('calls the packagingTypeGetAllPackagingTypesRequest method in the PackagingType resource', function () {
    Saloon::fake([
        PackagingTypeGetAllPackagingTypesRequest::class => MockResponse::make([
            0 => [
                'boxId' => 'mock-id-123',
                'description' => 'String value',
                'boxWeight' => 42,
                'maxWeight' => 42,
                'weightUoM' => 'String value',
                'maxVolume' => 42,
                'volumeUoM' => 'String value',
                'length' => 42,
                'width' => 42,
                'height' => 42,
                'activeByDefault' => true,
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            ],
            1 => [
                'boxId' => 'mock-id-123',
                'description' => 'String value',
                'boxWeight' => 42,
                'maxWeight' => 42,
                'weightUoM' => 'String value',
                'maxVolume' => 42,
                'volumeUoM' => 'String value',
                'length' => 42,
                'width' => 42,
                'height' => 42,
                'activeByDefault' => true,
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            ],
        ], 200),
    ]);

    $request = new PackagingTypeGetAllPackagingTypesRequest(
        greaterThanValue: 'test string',
        numberToRead: 123,
        skipRecords: 123,
        orderBy: 'test string',
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(PackagingTypeGetAllPackagingTypesRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toBeArray()
        ->and($collection)->toHaveCount(2);

    $firstItem = $collection[0];

    expect($firstItem)
        ->boxId->toBe('mock-id-123')
        ->description->toBe('String value')
        ->boxWeight->toBe(42)
        ->maxWeight->toBe(42)
        ->weightUoM->toBe('String value')
        ->maxVolume->toBe(42)
        ->volumeUoM->toBe('String value')
        ->length->toBe(42)
        ->width->toBe(42)
        ->height->toBe(42)
        ->activeByDefault->toBe(true)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'));
});
