<?php

use Pionect\VismaSdk\Enums\FixedAssetRegisterStatusEnum;
use Pionect\VismaSdk\Enums\FixedAssetTransactionOriginEnum;
use Pionect\VismaSdk\Enums\FixedAssetTransactionTransactionTypeEnum;
use Pionect\VismaSdk\Requests\FixedAssetTransaction\FixedAssetTransactionGetAllRequest;
use Pionect\VismaSdk\Requests\FixedAssetTransaction\FixedAssetTransactionGetByRefNoRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the fixedAssetTransactionGetByRefNoRequest method in the FixedAssetTransaction resource', function () {
    Saloon::fake([
        FixedAssetTransactionGetByRefNoRequest::class => MockResponse::make([
            'refNo' => 'String value',
            'lineNo' => 42,
            'branchId' => 'mock-id-123',
            'origin' => 'Adjustment',
            'assetId' => 'mock-id-123',
            'transactionDescription' => 'String value',
            'bookId' => 'mock-id-123',
            'transactionType' => 'PurchasingPlus',
            'accounts' => [
                'debitAccountId' => 'mock-id-123',
                'debitSubAccountId' => 'mock-id-123',
                'creditAccountId' => 'mock-id-123',
                'creditSubAccountId' => 'mock-id-123',
            ],
            'transactionAmount' => 42,
            'batchNo' => 'String value',
            'transactionPeriodId' => 'mock-id-123',
            'transactionDate' => '2025-11-22T10:40:04+00:00',
            'register' => [
                'documentDate' => '2025-11-22T10:40:04+00:00',
                'status' => 'Balanced',
                'hold' => true,
            ],
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new FixedAssetTransactionGetByRefNoRequest(
        refNo: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(FixedAssetTransactionGetByRefNoRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->refNo->toBe('String value')
        ->lineNo->toBe(42)
        ->branchId->toBe('mock-id-123')
        ->origin->toEqual(FixedAssetTransactionOriginEnum::ADJUSTMENT)
        ->assetId->toBe('mock-id-123')
        ->transactionDescription->toBe('String value')
        ->bookId->toBe('mock-id-123')
        ->transactionType->toEqual(FixedAssetTransactionTransactionTypeEnum::PURCHASING_PLUS)
        ->accounts->debitAccountId->toBe('mock-id-123')
        ->accounts->debitSubAccountId->toBe('mock-id-123')
        ->accounts->creditAccountId->toBe('mock-id-123')
        ->accounts->creditSubAccountId->toBe('mock-id-123')
        ->transactionAmount->toBe(42)
        ->batchNo->toBe('String value')
        ->transactionPeriodId->toBe('mock-id-123')
        ->transactionDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->register->documentDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->register->status->toEqual(FixedAssetRegisterStatusEnum::BALANCED)
        ->register->hold->toBe(true)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->errorInfo->toBe('String value');
});

it('calls the fixedAssetTransactionGetAllRequest method in the FixedAssetTransaction resource', function () {
    Saloon::fake([
        FixedAssetTransactionGetAllRequest::class => MockResponse::make([
            0 => [
                'refNo' => 'String value',
                'lineNo' => 42,
                'branchId' => 'mock-id-123',
                'origin' => 'Adjustment',
                'assetId' => 'mock-id-123',
                'transactionDescription' => 'String value',
                'bookId' => 'mock-id-123',
                'transactionType' => 'PurchasingPlus',
                'accounts' => [
                    'debitAccountId' => 'mock-id-123',
                    'debitSubAccountId' => 'mock-id-123',
                    'creditAccountId' => 'mock-id-123',
                    'creditSubAccountId' => 'mock-id-123',
                ],
                'transactionAmount' => 42,
                'batchNo' => 'String value',
                'transactionPeriodId' => 'mock-id-123',
                'transactionDate' => '2025-11-22T10:40:04+00:00',
                'register' => [
                    'documentDate' => '2025-11-22T10:40:04+00:00',
                    'status' => 'Balanced',
                    'hold' => true,
                ],
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'errorInfo' => 'String value',
            ],
            1 => [
                'refNo' => 'String value',
                'lineNo' => 42,
                'branchId' => 'mock-id-123',
                'origin' => 'Adjustment',
                'assetId' => 'mock-id-123',
                'transactionDescription' => 'String value',
                'bookId' => 'mock-id-123',
                'transactionType' => 'PurchasingPlus',
                'accounts' => [
                    'debitAccountId' => 'mock-id-123',
                    'debitSubAccountId' => 'mock-id-123',
                    'creditAccountId' => 'mock-id-123',
                    'creditSubAccountId' => 'mock-id-123',
                ],
                'transactionAmount' => 42,
                'batchNo' => 'String value',
                'transactionPeriodId' => 'mock-id-123',
                'transactionDate' => '2025-11-22T10:40:04+00:00',
                'register' => [
                    'documentDate' => '2025-11-22T10:40:04+00:00',
                    'status' => 'Balanced',
                    'hold' => true,
                ],
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'errorInfo' => 'String value',
            ],
        ], 200),
    ]);

    $request = new FixedAssetTransactionGetAllRequest(
        refNo: 'test string',
        assetId: 'test string',
        bookId: 'test string',
        fromPeriod: 'test string',
        toPeriod: 'test string',
        accountId: 'test string',
        subAccountId: 'test string',
        status: 'test string',
        transactionType: 'test string',
        transactionFromDate: 'test string',
        transactionToDate: 'test string',
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(FixedAssetTransactionGetAllRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toHaveCount(2);
    expect($collection->first())
        ->refNo->toBe('String value')
        ->lineNo->toBe(42)
        ->branchId->toBe('mock-id-123')
        ->origin->toEqual(FixedAssetTransactionOriginEnum::ADJUSTMENT)
        ->assetId->toBe('mock-id-123')
        ->transactionDescription->toBe('String value')
        ->bookId->toBe('mock-id-123')
        ->transactionType->toEqual(FixedAssetTransactionTransactionTypeEnum::PURCHASING_PLUS)
        ->accounts->debitAccountId->toBe('mock-id-123')
        ->accounts->debitSubAccountId->toBe('mock-id-123')
        ->accounts->creditAccountId->toBe('mock-id-123')
        ->accounts->creditSubAccountId->toBe('mock-id-123')
        ->transactionAmount->toBe(42)
        ->batchNo->toBe('String value')
        ->transactionPeriodId->toBe('mock-id-123')
        ->transactionDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->register->documentDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->register->status->toEqual(FixedAssetRegisterStatusEnum::BALANCED)
        ->register->hold->toBe(true)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->errorInfo->toBe('String value');
});
