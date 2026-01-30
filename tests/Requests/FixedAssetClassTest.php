<?php

use Pionect\VismaSdk\Requests\FixedAssetClass\FixedAssetClassGetAllRequest;
use Pionect\VismaSdk\Requests\FixedAssetClass\FixedAssetClassGetByClassIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the fixedAssetClassGetByClassIdRequest method in the FixedAssetClass resource', function () {
    Saloon::fake([
        FixedAssetClassGetByClassIdRequest::class => MockResponse::make([
            'classId' => 'mock-id-123',
            'recordType' => 'String value',
            'description' => 'String value',
            'active' => true,
            'assetTypeId' => 'mock-id-123',
            'isTangible' => true,
            'depreciable' => true,
            'usefulLife' => 42,
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
        ->active->toBe(true)
        ->assetTypeId->toBe('mock-id-123')
        ->isTangible->toBe(true)
        ->depreciable->toBe(true)
        ->usefulLife->toBe(42)
        ->acceleratedDepreciation->toBe(true)
        ->bookSettings->toBeNull()
        ->accounts->toBeNull()
        ->subAccountMask->toBe('String value')
        ->accumulatedDepreciationSubAccountMask->toBe('String value')
        ->depreciatedExpenseSubAccountMask->toBe('String value')
        ->proceedSubAccountMask->toBe('String value')
        ->gainLossSubAccountMask->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the fixedAssetClassGetAllRequest method in the FixedAssetClass resource', function () {
    Saloon::fake([
        FixedAssetClassGetAllRequest::class => MockResponse::make([
            0 => [
                'classId' => 'mock-id-123',
                'recordType' => 'String value',
                'description' => 'String value',
                'active' => true,
                'assetTypeId' => 'mock-id-123',
                'isTangible' => true,
                'depreciable' => true,
                'usefulLife' => 42,
                'acceleratedDepreciation' => true,
                'bookSettings' => null,
                'accounts' => null,
                'subAccountMask' => 'String value',
                'accumulatedDepreciationSubAccountMask' => 'String value',
                'depreciatedExpenseSubAccountMask' => 'String value',
                'proceedSubAccountMask' => 'String value',
                'gainLossSubAccountMask' => 'String value',
                'errorInfo' => 'String value',
            ],
            1 => [
                'classId' => 'mock-id-123',
                'recordType' => 'String value',
                'description' => 'String value',
                'active' => true,
                'assetTypeId' => 'mock-id-123',
                'isTangible' => true,
                'depreciable' => true,
                'usefulLife' => 42,
                'acceleratedDepreciation' => true,
                'bookSettings' => null,
                'accounts' => null,
                'subAccountMask' => 'String value',
                'accumulatedDepreciationSubAccountMask' => 'String value',
                'depreciatedExpenseSubAccountMask' => 'String value',
                'proceedSubAccountMask' => 'String value',
                'gainLossSubAccountMask' => 'String value',
                'errorInfo' => 'String value',
            ],
        ], 200),
    ]);

    $request = new FixedAssetClassGetAllRequest(
        classId: 'test string',
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(FixedAssetClassGetAllRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toHaveCount(2);
    expect($collection->first())
        ->classId->toBe('mock-id-123')
        ->recordType->toBe('String value')
        ->description->toBe('String value')
        ->active->toBe(true)
        ->assetTypeId->toBe('mock-id-123')
        ->isTangible->toBe(true)
        ->depreciable->toBe(true)
        ->usefulLife->toBe(42)
        ->acceleratedDepreciation->toBe(true)
        ->bookSettings->toBeNull()
        ->accounts->toBeNull()
        ->subAccountMask->toBe('String value')
        ->accumulatedDepreciationSubAccountMask->toBe('String value')
        ->depreciatedExpenseSubAccountMask->toBe('String value')
        ->proceedSubAccountMask->toBe('String value')
        ->gainLossSubAccountMask->toBe('String value')
        ->errorInfo->toBe('String value');
});
