<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\FixedAsset\FixedAssetGetAllCollectionRequest;
use Pionect\VismaSdk\Requests\FixedAsset\FixedAssetGetByFixedAssetIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector(
        clientId: 'replace',
        clientSecret: 'replace'
    );
});

it('calls the fixedAssetGetByFixedAssetId method in the FixedAsset resource', function () {
    Saloon::fake([
        FixedAssetGetByFixedAssetIdRequest::class => MockResponse::make([
            'assetId' => 'mock-id-123',
            'recordType' => 'Mock value',
            'parentAssetId' => 'mock-id-123',
            'description' => 'Mock value',
            'classId' => 'mock-id-123',
            'isTangible' => true,
            'quantity' => 3.14,
            'depreciable' => true,
            'usefulLife' => 3.14,
            'accounts' => 'Mock value',
            'details' => 'Mock value',
            'bookBalance' => 'Mock value',
            'location' => 'Mock value',
            'propertyTax' => 'Mock value',
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'errorInfo' => 'Mock value',
            'metadata' => 'Mock value',
        ], 200),
    ]);

    $request = new FixedAssetGetByFixedAssetIdRequest(
        fixedAssetIdId: 'test string',
        expandAccounts: true,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(FixedAssetGetByFixedAssetIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->assetId->toBe('mock-id-123')
        ->recordType->toBe('Mock value')
        ->parentAssetId->toBe('mock-id-123')
        ->description->toBe('Mock value')
        ->classId->toBe('mock-id-123')
        ->isTangible->toBeTrue()
        ->quantity->toBe(3.14)
        ->depreciable->toBeTrue()
        ->usefulLife->toBe(3.14)
        ->accounts->toBe('Mock value')
        ->details->toBe('Mock value')
        ->bookBalance->toBe('Mock value')
        ->location->toBe('Mock value')
        ->propertyTax->toBe('Mock value')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the fixedAssetGetAllCollection method in the FixedAsset resource', function () {
    Saloon::fake([
        FixedAssetGetAllCollectionRequest::class => MockResponse::make([
            0 => [
                'assetId' => 'mock-id-123',
                'recordType' => 'Mock value',
                'parentAssetId' => 'mock-id-123',
                'description' => 'Mock value',
                'classId' => 'mock-id-123',
                'isTangible' => true,
                'quantity' => 3.14,
                'depreciable' => true,
                'usefulLife' => 3.14,
                'accounts' => 'Mock value',
                'details' => 'Mock value',
                'bookBalance' => 'Mock value',
                'location' => 'Mock value',
                'propertyTax' => 'Mock value',
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'Mock value',
                'metadata' => 'Mock value',
            ],
            1 => [
                'assetId' => 'mock-id-123',
                'recordType' => 'Mock value',
                'parentAssetId' => 'mock-id-123',
                'description' => 'Mock value',
                'classId' => 'mock-id-123',
                'isTangible' => true,
                'quantity' => 3.14,
                'depreciable' => true,
                'usefulLife' => 3.14,
                'accounts' => 'Mock value',
                'details' => 'Mock value',
                'bookBalance' => 'Mock value',
                'location' => 'Mock value',
                'propertyTax' => 'Mock value',
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'Mock value',
                'metadata' => 'Mock value',
            ],
        ], 200),
    ]);

    $request = (new FixedAssetGetAllCollectionRequest(assetId: 'test string', classId: 'test string', status: 'test string', fromDate: 'test string', toDate: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', expandAccounts: true, pageNumber: 123, pageSize: 123));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (FixedAssetGetAllCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->assetId->toBe('mock-id-123')
        ->recordType->toBe('Mock value')
        ->parentAssetId->toBe('mock-id-123')
        ->description->toBe('Mock value')
        ->classId->toBe('mock-id-123')
        ->isTangible->toBeTrue()
        ->quantity->toBe(3.14)
        ->depreciable->toBeTrue()
        ->usefulLife->toBe(3.14)
        ->accounts->toBe('Mock value')
        ->details->toBe('Mock value')
        ->bookBalance->toBe('Mock value')
        ->location->toBe('Mock value')
        ->propertyTax->toBe('Mock value')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});
