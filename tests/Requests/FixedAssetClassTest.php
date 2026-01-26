<?php

// auto-generated

use Pionect\VismaSdk\Requests\FixedAssetClass\FixedAssetClassGetAllCollectionRequest;
use Pionect\VismaSdk\Requests\FixedAssetClass\FixedAssetClassGetByClassIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector(
        clientId: 'replace',
        clientSecret: 'replace'
    );
});

it('calls the fixedAssetClassGetByClassId method in the FixedAssetClass resource', function () {
    Saloon::fake([
        FixedAssetClassGetByClassIdRequest::class => MockResponse::make([
            'classId' => 'mock-id-123',
            'recordType' => 'Mock value',
            'description' => 'Mock value',
            'active' => true,
            'assetTypeId' => 'mock-id-123',
            'isTangible' => true,
            'depreciable' => true,
            'usefulLife' => 3.14,
            'acceleratedDepreciation' => true,
            'bookSettings' => 'Mock value',
            'accounts' => 'Mock value',
            'subAccountMask' => 'Mock value',
            'accumulatedDepreciationSubAccountMask' => 'Mock value',
            'depreciatedExpenseSubAccountMask' => 'Mock value',
            'proceedSubAccountMask' => 'Mock value',
            'gainLossSubAccountMask' => 'Mock value',
            'errorInfo' => 'Mock value',
            'metadata' => 'Mock value',
        ], 200),
    ]);

    $request = new FixedAssetClassGetByClassIdRequest(
        classIdId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(FixedAssetClassGetByClassIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->classId->toBe('mock-id-123')
        ->recordType->toBe('Mock value')
        ->description->toBe('Mock value')
        ->active->toBeTrue()
        ->assetTypeId->toBe('mock-id-123')
        ->isTangible->toBeTrue()
        ->depreciable->toBeTrue()
        ->usefulLife->toBe(3.14)
        ->acceleratedDepreciation->toBeTrue()
        ->bookSettings->toBe('Mock value')
        ->accounts->toBe('Mock value')
        ->subAccountMask->toBe('Mock value')
        ->accumulatedDepreciationSubAccountMask->toBe('Mock value')
        ->depreciatedExpenseSubAccountMask->toBe('Mock value')
        ->proceedSubAccountMask->toBe('Mock value')
        ->gainLossSubAccountMask->toBe('Mock value')
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the fixedAssetClassGetAllCollection method in the FixedAssetClass resource', function () {
    Saloon::fake([
        FixedAssetClassGetAllCollectionRequest::class => MockResponse::make([
            0 => [
                'classId' => 'mock-id-123',
                'recordType' => 'Mock value',
                'description' => 'Mock value',
                'active' => true,
                'assetTypeId' => 'mock-id-123',
                'isTangible' => true,
                'depreciable' => true,
                'usefulLife' => 3.14,
                'acceleratedDepreciation' => true,
                'bookSettings' => 'Mock value',
                'accounts' => 'Mock value',
                'subAccountMask' => 'Mock value',
                'accumulatedDepreciationSubAccountMask' => 'Mock value',
                'depreciatedExpenseSubAccountMask' => 'Mock value',
                'proceedSubAccountMask' => 'Mock value',
                'gainLossSubAccountMask' => 'Mock value',
                'errorInfo' => 'Mock value',
                'metadata' => 'Mock value',
            ],
            1 => [
                'classId' => 'mock-id-123',
                'recordType' => 'Mock value',
                'description' => 'Mock value',
                'active' => true,
                'assetTypeId' => 'mock-id-123',
                'isTangible' => true,
                'depreciable' => true,
                'usefulLife' => 3.14,
                'acceleratedDepreciation' => true,
                'bookSettings' => 'Mock value',
                'accounts' => 'Mock value',
                'subAccountMask' => 'Mock value',
                'accumulatedDepreciationSubAccountMask' => 'Mock value',
                'depreciatedExpenseSubAccountMask' => 'Mock value',
                'proceedSubAccountMask' => 'Mock value',
                'gainLossSubAccountMask' => 'Mock value',
                'errorInfo' => 'Mock value',
                'metadata' => 'Mock value',
            ],
        ], 200),
    ]);

    $request = (new FixedAssetClassGetAllCollectionRequest(classId: 'test string', pageNumber: 123, pageSize: 123));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (FixedAssetClassGetAllCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->classId->toBe('mock-id-123')
        ->recordType->toBe('Mock value')
        ->description->toBe('Mock value')
        ->active->toBeTrue()
        ->assetTypeId->toBe('mock-id-123')
        ->isTangible->toBeTrue()
        ->depreciable->toBeTrue()
        ->usefulLife->toBe(3.14)
        ->acceleratedDepreciation->toBeTrue()
        ->bookSettings->toBe('Mock value')
        ->accounts->toBe('Mock value')
        ->subAccountMask->toBe('Mock value')
        ->accumulatedDepreciationSubAccountMask->toBe('Mock value')
        ->depreciatedExpenseSubAccountMask->toBe('Mock value')
        ->proceedSubAccountMask->toBe('Mock value')
        ->gainLossSubAccountMask->toBe('Mock value')
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});
