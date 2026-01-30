<?php

// Generated 2026-01-30 15:19:40

use Pionect\VismaSdk\Requests\FixedAsset\FixedAssetGetAllRequest;
use Pionect\VismaSdk\Requests\FixedAsset\FixedAssetGetByFixedAssetIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the fixedAssetGetByFixedAssetIdRequest method in the FixedAsset resource', function () {
    Saloon::fake([
        FixedAssetGetByFixedAssetIdRequest::class => MockResponse::make([
            'assetId' => 'mock-id-123',
            'recordType' => 'String value',
            'parentAssetId' => 'mock-id-123',
            'description' => 'String value',
            'classId' => 'mock-id-123',
            'isTangible' => true,
            'quantity' => 42,
            'depreciable' => true,
            'usefulLife' => 42,
            'accounts' => null,
            'details' => null,
            'bookBalance' => null,
            'location' => null,
            'propertyTax' => null,
            'type' => null,
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new FixedAssetGetByFixedAssetIdRequest(
        fixedAssetId: 'test string',
        expandAccounts: true,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(FixedAssetGetByFixedAssetIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->assetId->toBe('mock-id-123')
        ->recordType->toBe('String value')
        ->parentAssetId->toBe('mock-id-123')
        ->description->toBe('String value')
        ->classId->toBe('mock-id-123')
        ->isTangible->toBe(true)
        ->quantity->toBe(42)
        ->depreciable->toBe(true)
        ->usefulLife->toBe(42)
        ->accounts->toBeNull()
        ->details->toBeNull()
        ->bookBalance->toBeNull()
        ->location->toBeNull()
        ->propertyTax->toBeNull()
        ->type->toBeNull()
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->errorInfo->toBe('String value');
});

it('calls the fixedAssetGetAllRequest method in the FixedAsset resource', function () {
    Saloon::fake([
        FixedAssetGetAllRequest::class => MockResponse::make([
            0 => [
                'assetId' => 'mock-id-123',
                'recordType' => 'String value',
                'parentAssetId' => 'mock-id-123',
                'description' => 'String value',
                'classId' => 'mock-id-123',
                'isTangible' => true,
                'quantity' => 42,
                'depreciable' => true,
                'usefulLife' => 42,
                'accounts' => null,
                'details' => null,
                'bookBalance' => null,
                'location' => null,
                'propertyTax' => null,
                'type' => null,
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'errorInfo' => 'String value',
            ],
            1 => [
                'assetId' => 'mock-id-123',
                'recordType' => 'String value',
                'parentAssetId' => 'mock-id-123',
                'description' => 'String value',
                'classId' => 'mock-id-123',
                'isTangible' => true,
                'quantity' => 42,
                'depreciable' => true,
                'usefulLife' => 42,
                'accounts' => null,
                'details' => null,
                'bookBalance' => null,
                'location' => null,
                'propertyTax' => null,
                'type' => null,
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'errorInfo' => 'String value',
            ],
        ], 200),
    ]);

    $request = new FixedAssetGetAllRequest(
        assetId: 'test string',
        classId: 'test string',
        status: 'test string',
        fromDate: 'test string',
        toDate: 'test string',
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        expandAccounts: true,
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(FixedAssetGetAllRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toBeArray()
        ->and($collection)->toHaveCount(2);

    $firstItem = $collection[0];

    expect($firstItem)
        ->assetId->toBe('mock-id-123')
        ->recordType->toBe('String value')
        ->parentAssetId->toBe('mock-id-123')
        ->description->toBe('String value')
        ->classId->toBe('mock-id-123')
        ->isTangible->toBe(true)
        ->quantity->toBe(42)
        ->depreciable->toBe(true)
        ->usefulLife->toBe(42)
        ->accounts->toBeNull()
        ->details->toBeNull()
        ->bookBalance->toBeNull()
        ->location->toBeNull()
        ->propertyTax->toBeNull()
        ->type->toBeNull()
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->errorInfo->toBe('String value');
});
