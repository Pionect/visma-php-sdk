<?php

// auto-generated

use Pionect\VismaSdk\Requests\FixedAssetClass\FixedAssetClassGetAllCollectionRequest;
use Pionect\VismaSdk\Requests\FixedAssetClass\FixedAssetClassGetByClassIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the fixedAssetClassGetByClassId method in the FixedAssetClass resource', function () {
    Saloon::fake([
        FixedAssetClassGetByClassIdRequest::class => MockResponse::make([
            'classId' => 'mock-id-123',
            'recordType' => 'String value',
            'description' => 'String value',
            'active' => true,
            'assetTypeId' => 'mock-id-123',
            'isTangible' => true,
            'depreciable' => true,
            'usefulLife' => 3.14,
            'acceleratedDepreciation' => true,
            'bookSettings' => null,
            'accounts' => null,
            'subAccountMask' => 'String value',
            'accumulatedDepreciationSubAccountMask' => 'String value',
            'depreciatedExpenseSubAccountMask' => 'String value',
            'proceedSubAccountMask' => 'String value',
            'gainLossSubAccountMask' => 'String value',
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new FixedAssetClassGetByClassIdRequest(
        classId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(FixedAssetClassGetByClassIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->classId->toBe('mock-id-123')
        ->recordType->toBe('String value')
        ->description->toBe('String value')
        ->active->toBeTrue()
        ->assetTypeId->toBe('mock-id-123')
        ->isTangible->toBeTrue()
        ->depreciable->toBeTrue()
        ->usefulLife->toBe(3.14)
        ->acceleratedDepreciation->toBeTrue()
        ->bookSettings->toBeNull()
        ->accounts->toBeNull()
        ->subAccountMask->toBe('String value')
        ->accumulatedDepreciationSubAccountMask->toBe('String value')
        ->depreciatedExpenseSubAccountMask->toBe('String value')
        ->proceedSubAccountMask->toBe('String value')
        ->gainLossSubAccountMask->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the fixedAssetClassGetAllCollection method in the FixedAssetClass resource', function () {
    Saloon::fake([
        FixedAssetClassGetAllCollectionRequest::class => MockResponse::make([
            0 => [
                'classId' => 'mock-id-123',
                'recordType' => 'String value',
                'description' => 'String value',
                'active' => true,
                'assetTypeId' => 'mock-id-123',
                'isTangible' => true,
                'depreciable' => true,
                'usefulLife' => 3.14,
                'acceleratedDepreciation' => true,
                'bookSettings' => null,
                'accounts' => null,
                'subAccountMask' => 'String value',
                'accumulatedDepreciationSubAccountMask' => 'String value',
                'depreciatedExpenseSubAccountMask' => 'String value',
                'proceedSubAccountMask' => 'String value',
                'gainLossSubAccountMask' => 'String value',
                'errorInfo' => 'String value',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
            1 => [
                'classId' => 'mock-id-123',
                'recordType' => 'String value',
                'description' => 'String value',
                'active' => true,
                'assetTypeId' => 'mock-id-123',
                'isTangible' => true,
                'depreciable' => true,
                'usefulLife' => 3.14,
                'acceleratedDepreciation' => true,
                'bookSettings' => null,
                'accounts' => null,
                'subAccountMask' => 'String value',
                'accumulatedDepreciationSubAccountMask' => 'String value',
                'depreciatedExpenseSubAccountMask' => 'String value',
                'proceedSubAccountMask' => 'String value',
                'gainLossSubAccountMask' => 'String value',
                'errorInfo' => 'String value',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
        ], 200),
    ]);

    $request = (new FixedAssetClassGetAllCollectionRequest(classId: 'test string', pageNumber: 123, pageSize: 123));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (FixedAssetClassGetAllCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->classId->toBe('mock-id-123')
        ->recordType->toBe('String value')
        ->description->toBe('String value')
        ->active->toBeTrue()
        ->assetTypeId->toBe('mock-id-123')
        ->isTangible->toBeTrue()
        ->depreciable->toBeTrue()
        ->usefulLife->toBe(3.14)
        ->acceleratedDepreciation->toBeTrue()
        ->bookSettings->toBeNull()
        ->accounts->toBeNull()
        ->subAccountMask->toBe('String value')
        ->accumulatedDepreciationSubAccountMask->toBe('String value')
        ->depreciatedExpenseSubAccountMask->toBe('String value')
        ->proceedSubAccountMask->toBe('String value')
        ->gainLossSubAccountMask->toBe('String value')
        ->errorInfo->toBe('String value');
});
