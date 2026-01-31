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
            'bookSettings' => [
                'bookId' => 'mock-id-123',
                'depreciationMethodId' => 'mock-id-123',
            ],
            'accounts' => [
                'accountId' => 'mock-id-123',
                'subAccountId' => 'mock-id-123',
                'accrualAccountId' => 'mock-id-123',
                'accrualSubAccountId' => 'mock-id-123',
                'accumulatedDepreciationAccountId' => 'mock-id-123',
                'accumulatedDepreciationSubAccountId' => 'mock-id-123',
                'depreciatedExpenseAccountId' => 'mock-id-123',
                'depreciatedExpenseSubAccountId' => 'mock-id-123',
                'disposalAccountId' => 'mock-id-123',
                'disposalSubAccountId' => 'mock-id-123',
                'gainAccountId' => 'mock-id-123',
                'gainSubAccountId' => 'mock-id-123',
                'lossAccountId' => 'mock-id-123',
                'lossSubAccountId' => 'mock-id-123',
                'debitAccountId' => 'mock-id-123',
                'debitSubAccountId' => 'mock-id-123',
                'creditAccountId' => 'mock-id-123',
                'creditSubAccountId' => 'mock-id-123',
            ],
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
        ->bookSettings->bookId->toBe('mock-id-123')
        ->bookSettings->depreciationMethodId->toBe('mock-id-123')
        ->accounts->accountId->toBe('mock-id-123')
        ->accounts->subAccountId->toBe('mock-id-123')
        ->accounts->accrualAccountId->toBe('mock-id-123')
        ->accounts->accrualSubAccountId->toBe('mock-id-123')
        ->accounts->accumulatedDepreciationAccountId->toBe('mock-id-123')
        ->accounts->accumulatedDepreciationSubAccountId->toBe('mock-id-123')
        ->accounts->depreciatedExpenseAccountId->toBe('mock-id-123')
        ->accounts->depreciatedExpenseSubAccountId->toBe('mock-id-123')
        ->accounts->disposalAccountId->toBe('mock-id-123')
        ->accounts->disposalSubAccountId->toBe('mock-id-123')
        ->accounts->gainAccountId->toBe('mock-id-123')
        ->accounts->gainSubAccountId->toBe('mock-id-123')
        ->accounts->lossAccountId->toBe('mock-id-123')
        ->accounts->lossSubAccountId->toBe('mock-id-123')
        ->accounts->debitAccountId->toBe('mock-id-123')
        ->accounts->debitSubAccountId->toBe('mock-id-123')
        ->accounts->creditAccountId->toBe('mock-id-123')
        ->accounts->creditSubAccountId->toBe('mock-id-123')
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
                'bookSettings' => [
                    'bookId' => 'mock-id-123',
                    'depreciationMethodId' => 'mock-id-123',
                ],
                'accounts' => [
                    'accountId' => 'mock-id-123',
                    'subAccountId' => 'mock-id-123',
                    'accrualAccountId' => 'mock-id-123',
                    'accrualSubAccountId' => 'mock-id-123',
                    'accumulatedDepreciationAccountId' => 'mock-id-123',
                    'accumulatedDepreciationSubAccountId' => 'mock-id-123',
                    'depreciatedExpenseAccountId' => 'mock-id-123',
                    'depreciatedExpenseSubAccountId' => 'mock-id-123',
                    'disposalAccountId' => 'mock-id-123',
                    'disposalSubAccountId' => 'mock-id-123',
                    'gainAccountId' => 'mock-id-123',
                    'gainSubAccountId' => 'mock-id-123',
                    'lossAccountId' => 'mock-id-123',
                    'lossSubAccountId' => 'mock-id-123',
                    'debitAccountId' => 'mock-id-123',
                    'debitSubAccountId' => 'mock-id-123',
                    'creditAccountId' => 'mock-id-123',
                    'creditSubAccountId' => 'mock-id-123',
                ],
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
                'bookSettings' => [
                    'bookId' => 'mock-id-123',
                    'depreciationMethodId' => 'mock-id-123',
                ],
                'accounts' => [
                    'accountId' => 'mock-id-123',
                    'subAccountId' => 'mock-id-123',
                    'accrualAccountId' => 'mock-id-123',
                    'accrualSubAccountId' => 'mock-id-123',
                    'accumulatedDepreciationAccountId' => 'mock-id-123',
                    'accumulatedDepreciationSubAccountId' => 'mock-id-123',
                    'depreciatedExpenseAccountId' => 'mock-id-123',
                    'depreciatedExpenseSubAccountId' => 'mock-id-123',
                    'disposalAccountId' => 'mock-id-123',
                    'disposalSubAccountId' => 'mock-id-123',
                    'gainAccountId' => 'mock-id-123',
                    'gainSubAccountId' => 'mock-id-123',
                    'lossAccountId' => 'mock-id-123',
                    'lossSubAccountId' => 'mock-id-123',
                    'debitAccountId' => 'mock-id-123',
                    'debitSubAccountId' => 'mock-id-123',
                    'creditAccountId' => 'mock-id-123',
                    'creditSubAccountId' => 'mock-id-123',
                ],
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
        ->bookSettings->bookId->toBe('mock-id-123')
        ->bookSettings->depreciationMethodId->toBe('mock-id-123')
        ->accounts->accountId->toBe('mock-id-123')
        ->accounts->subAccountId->toBe('mock-id-123')
        ->accounts->accrualAccountId->toBe('mock-id-123')
        ->accounts->accrualSubAccountId->toBe('mock-id-123')
        ->accounts->accumulatedDepreciationAccountId->toBe('mock-id-123')
        ->accounts->accumulatedDepreciationSubAccountId->toBe('mock-id-123')
        ->accounts->depreciatedExpenseAccountId->toBe('mock-id-123')
        ->accounts->depreciatedExpenseSubAccountId->toBe('mock-id-123')
        ->accounts->disposalAccountId->toBe('mock-id-123')
        ->accounts->disposalSubAccountId->toBe('mock-id-123')
        ->accounts->gainAccountId->toBe('mock-id-123')
        ->accounts->gainSubAccountId->toBe('mock-id-123')
        ->accounts->lossAccountId->toBe('mock-id-123')
        ->accounts->lossSubAccountId->toBe('mock-id-123')
        ->accounts->debitAccountId->toBe('mock-id-123')
        ->accounts->debitSubAccountId->toBe('mock-id-123')
        ->accounts->creditAccountId->toBe('mock-id-123')
        ->accounts->creditSubAccountId->toBe('mock-id-123')
        ->subAccountMask->toBe('String value')
        ->accumulatedDepreciationSubAccountMask->toBe('String value')
        ->depreciatedExpenseSubAccountMask->toBe('String value')
        ->proceedSubAccountMask->toBe('String value')
        ->gainLossSubAccountMask->toBe('String value')
        ->errorInfo->toBe('String value');
});
