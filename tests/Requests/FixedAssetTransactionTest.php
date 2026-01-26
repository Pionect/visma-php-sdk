<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\FixedAssetTransaction\FixedAssetTransactionGetAllCollectionRequest;
use Pionect\VismaSdk\Requests\FixedAssetTransaction\FixedAssetTransactionGetByRefNoRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector(
        clientId: 'replace',
        clientSecret: 'replace'
    );
});

it('calls the fixedAssetTransactionGetByRefNo method in the FixedAssetTransaction resource', function () {
    Saloon::fake([
        FixedAssetTransactionGetByRefNoRequest::class => MockResponse::make([
            'refNo' => 'Mock value',
            'lineNo' => 42,
            'branchId' => 'mock-id-123',
            'origin' => 'Mock value',
            'assetId' => 'mock-id-123',
            'transactionDescription' => 'Mock value',
            'bookId' => 'mock-id-123',
            'transactionType' => 'Mock value',
            'accounts' => 'Mock value',
            'transactionAmount' => 3.14,
            'batchNo' => 'Mock value',
            'transactionPeriodId' => 'mock-id-123',
            'transactionDate' => '2025-11-22T10:40:04.065Z',
            'register' => 'Mock value',
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'errorInfo' => 'Mock value',
            'metadata' => 'Mock value',
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
        ->refNo->toBe('Mock value')
        ->lineNo->toBe(42)
        ->branchId->toBe('mock-id-123')
        ->origin->toBe('Mock value')
        ->assetId->toBe('mock-id-123')
        ->transactionDescription->toBe('Mock value')
        ->bookId->toBe('mock-id-123')
        ->transactionType->toBe('Mock value')
        ->accounts->toBe('Mock value')
        ->transactionAmount->toBe(3.14)
        ->batchNo->toBe('Mock value')
        ->transactionPeriodId->toBe('mock-id-123')
        ->transactionDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->register->toBe('Mock value')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the fixedAssetTransactionGetAllCollection method in the FixedAssetTransaction resource', function () {
    Saloon::fake([
        FixedAssetTransactionGetAllCollectionRequest::class => MockResponse::make([
            0 => [
                'refNo' => 'Mock value',
                'lineNo' => 42,
                'branchId' => 'mock-id-123',
                'origin' => 'Mock value',
                'assetId' => 'mock-id-123',
                'transactionDescription' => 'Mock value',
                'bookId' => 'mock-id-123',
                'transactionType' => 'Mock value',
                'accounts' => 'Mock value',
                'transactionAmount' => 3.14,
                'batchNo' => 'Mock value',
                'transactionPeriodId' => 'mock-id-123',
                'transactionDate' => '2025-11-22T10:40:04.065Z',
                'register' => 'Mock value',
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'Mock value',
                'metadata' => 'Mock value',
            ],
            1 => [
                'refNo' => 'Mock value',
                'lineNo' => 42,
                'branchId' => 'mock-id-123',
                'origin' => 'Mock value',
                'assetId' => 'mock-id-123',
                'transactionDescription' => 'Mock value',
                'bookId' => 'mock-id-123',
                'transactionType' => 'Mock value',
                'accounts' => 'Mock value',
                'transactionAmount' => 3.14,
                'batchNo' => 'Mock value',
                'transactionPeriodId' => 'mock-id-123',
                'transactionDate' => '2025-11-22T10:40:04.065Z',
                'register' => 'Mock value',
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'Mock value',
                'metadata' => 'Mock value',
            ],
        ], 200),
    ]);

    $request = (new FixedAssetTransactionGetAllCollectionRequest(refNo: 'test string', assetId: 'test string', bookId: 'test string', fromPeriod: 'test string', toPeriod: 'test string', accountId: 'test string', subAccountId: 'test string', status: 'test string', transactionType: 'test string', transactionFromDate: 'test string', transactionToDate: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', pageNumber: 123, pageSize: 123));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (FixedAssetTransactionGetAllCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->refNo->toBe('Mock value')
        ->lineNo->toBe(42)
        ->branchId->toBe('mock-id-123')
        ->origin->toBe('Mock value')
        ->assetId->toBe('mock-id-123')
        ->transactionDescription->toBe('Mock value')
        ->bookId->toBe('mock-id-123')
        ->transactionType->toBe('Mock value')
        ->accounts->toBe('Mock value')
        ->transactionAmount->toBe(3.14)
        ->batchNo->toBe('Mock value')
        ->transactionPeriodId->toBe('mock-id-123')
        ->transactionDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->register->toBe('Mock value')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});
