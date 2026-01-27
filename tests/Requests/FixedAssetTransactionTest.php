<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\FixedAssetTransaction\FixedAssetTransactionGetAllCollectionRequest;
use Pionect\VismaSdk\Requests\FixedAssetTransaction\FixedAssetTransactionGetByRefNoRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the fixedAssetTransactionGetByRefNo method in the FixedAssetTransaction resource', function () {
    Saloon::fake([
        FixedAssetTransactionGetByRefNoRequest::class => MockResponse::make([
            'refNo' => 'String value',
            'lineNo' => 42,
            'branchId' => 'mock-id-123',
            'origin' => 'String value',
            'assetId' => 'mock-id-123',
            'transactionDescription' => 'String value',
            'bookId' => 'mock-id-123',
            'transactionType' => 'String value',
            'accounts' => null,
            'transactionAmount' => 3.14,
            'batchNo' => 'String value',
            'transactionPeriodId' => 'mock-id-123',
            'transactionDate' => '2025-11-22T10:40:04.065Z',
            'register' => null,
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'errorInfo' => 'String value',
            'id' => 'mock-id-123',
        ], 200),
    ]);

    $request = new FixedAssetTransactionGetByRefNoRequest(
        refNoId: 'test string',
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
        ->origin->toBe('String value')
        ->assetId->toBe('mock-id-123')
        ->transactionDescription->toBe('String value')
        ->bookId->toBe('mock-id-123')
        ->transactionType->toBe('String value')
        ->accounts->toBeNull()
        ->transactionAmount->toBe(3.14)
        ->batchNo->toBe('String value')
        ->transactionPeriodId->toBe('mock-id-123')
        ->transactionDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->register->toBeNull()
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('String value')
        ->id->toBe('mock-id-123');
});

it('calls the fixedAssetTransactionGetAllCollection method in the FixedAssetTransaction resource', function () {
    Saloon::fake([
        FixedAssetTransactionGetAllCollectionRequest::class => MockResponse::make([
            0 => [
                'refNo' => 'String value',
                'lineNo' => 42,
                'branchId' => 'mock-id-123',
                'origin' => 'String value',
                'assetId' => 'mock-id-123',
                'transactionDescription' => 'String value',
                'bookId' => 'mock-id-123',
                'transactionType' => 'String value',
                'accounts' => null,
                'transactionAmount' => 3.14,
                'batchNo' => 'String value',
                'transactionPeriodId' => 'mock-id-123',
                'transactionDate' => '2025-11-22T10:40:04.065Z',
                'register' => null,
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'String value',
                'id' => 'mock-id-123',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
            1 => [
                'refNo' => 'String value',
                'lineNo' => 42,
                'branchId' => 'mock-id-123',
                'origin' => 'String value',
                'assetId' => 'mock-id-123',
                'transactionDescription' => 'String value',
                'bookId' => 'mock-id-123',
                'transactionType' => 'String value',
                'accounts' => null,
                'transactionAmount' => 3.14,
                'batchNo' => 'String value',
                'transactionPeriodId' => 'mock-id-123',
                'transactionDate' => '2025-11-22T10:40:04.065Z',
                'register' => null,
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'String value',
                'id' => 'mock-id-123',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
        ], 200),
    ]);

    $request = (new FixedAssetTransactionGetAllCollectionRequest(refNo: 'test string', assetId: 'test string', bookId: 'test string', fromPeriod: 'test string', toPeriod: 'test string', accountId: 'test string', subAccountId: 'test string', status: 'test string', transactionType: 'test string', transactionFromDate: 'test string', transactionToDate: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', pageNumber: 123, pageSize: 123));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (FixedAssetTransactionGetAllCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->refNo->toBe('String value')
        ->lineNo->toBe(42)
        ->branchId->toBe('mock-id-123')
        ->origin->toBe('String value')
        ->assetId->toBe('mock-id-123')
        ->transactionDescription->toBe('String value')
        ->bookId->toBe('mock-id-123')
        ->transactionType->toBe('String value')
        ->accounts->toBeNull()
        ->transactionAmount->toBe(3.14)
        ->batchNo->toBe('String value')
        ->transactionPeriodId->toBe('mock-id-123')
        ->transactionDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->register->toBeNull()
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('String value')
        ->id->toBe('mock-id-123');
});
