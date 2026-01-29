<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\FixedAsset\FixedAssetGetAllCollectionRequest;
use Pionect\VismaSdk\Requests\FixedAsset\FixedAssetGetByFixedAssetIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the fixedAssetGetByFixedAssetId method in the FixedAsset resource', function () {
    Saloon::fake([
        FixedAssetGetByFixedAssetIdRequest::class => MockResponse::make([
            'assetId' => 'mock-id-123',
            'recordType' => 'String value',
            'parentAssetId' => 'mock-id-123',
            'description' => 'String value',
            'classId' => 'mock-id-123',
            'isTangible' => true,
            'quantity' => 3.14,
            'depreciable' => true,
            'usefulLife' => 3.14,
            'accounts' => null,
            'details' => null,
            'bookBalance' => null,
            'location' => null,
            'propertyTax' => null,
            'type' => null,
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
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
        ->isTangible->toBeTrue()
        ->quantity->toBe(3.14)
        ->depreciable->toBeTrue()
        ->usefulLife->toBe(3.14)
        ->accounts->toBeNull()
        ->details->toBeNull()
        ->bookBalance->toBeNull()
        ->location->toBeNull()
        ->propertyTax->toBeNull()
        ->type->toBeNull()
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('String value');
});

it('calls the fixedAssetGetAllCollection method in the FixedAsset resource', function () {
    Saloon::fake([
        FixedAssetGetAllCollectionRequest::class => MockResponse::make([
            0 => [
                'assetId' => 'mock-id-123',
                'recordType' => 'String value',
                'parentAssetId' => 'mock-id-123',
                'description' => 'String value',
                'classId' => 'mock-id-123',
                'isTangible' => true,
                'quantity' => 3.14,
                'depreciable' => true,
                'usefulLife' => 3.14,
                'accounts' => null,
                'details' => null,
                'bookBalance' => null,
                'location' => null,
                'propertyTax' => null,
                'type' => null,
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'String value',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
            1 => [
                'assetId' => 'mock-id-123',
                'recordType' => 'String value',
                'parentAssetId' => 'mock-id-123',
                'description' => 'String value',
                'classId' => 'mock-id-123',
                'isTangible' => true,
                'quantity' => 3.14,
                'depreciable' => true,
                'usefulLife' => 3.14,
                'accounts' => null,
                'details' => null,
                'bookBalance' => null,
                'location' => null,
                'propertyTax' => null,
                'type' => null,
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'String value',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
        ], 200),
    ]);

    $request = (new FixedAssetGetAllCollectionRequest(assetId: 'test string', classId: 'test string', status: 'test string', fromDate: 'test string', toDate: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', expandAccounts: true, pageNumber: 123, pageSize: 123));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (FixedAssetGetAllCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->assetId->toBe('mock-id-123')
        ->recordType->toBe('String value')
        ->parentAssetId->toBe('mock-id-123')
        ->description->toBe('String value')
        ->classId->toBe('mock-id-123')
        ->isTangible->toBeTrue()
        ->quantity->toBe(3.14)
        ->depreciable->toBeTrue()
        ->usefulLife->toBe(3.14)
        ->accounts->toBeNull()
        ->details->toBeNull()
        ->bookBalance->toBeNull()
        ->location->toBeNull()
        ->propertyTax->toBeNull()
        ->type->toBeNull()
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('String value');
});
