<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\JournalTransactionV2\JournalTransactionV2GetAllJournalTransactionsCollectionRequest;
use Pionect\VismaSdk\Requests\JournalTransactionV2\JournalTransactionV2GetSpecificJournalTransactionsByjournalTransactionNumberRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the journalTransactionV2getSpecificJournalTransactionsByjournalTransactionNumber method in the JournalTransactionV2 resource', function () {
    Saloon::fake([
        JournalTransactionV2GetSpecificJournalTransactionsByjournalTransactionNumberRequest::class => MockResponse::make([
            'module' => 'String value',
            'batchNumber' => 'String value',
            'status' => 'String value',
            'hold' => true,
            'transactionDate' => '2025-11-22T10:40:04.065Z',
            'postPeriod' => 'String value',
            'financialPeriod' => 'String value',
            'ledger' => 'String value',
            'ledgerDescription' => 'String value',
            'currencyId' => 'mock-id-123',
            'exchangeRate' => 3.14,
            'autoReversing' => true,
            'reversingEntry' => true,
            'description' => 'String value',
            'originalBatchNumber' => 'String value',
            'debitTotal' => 3.14,
            'debitTotalInCurrency' => 3.14,
            'creditTotal' => 3.14,
            'creditTotalInCurrency' => 3.14,
            'controlTotal' => 3.14,
            'controlTotalInCurrency' => 3.14,
            'createVatTransaction' => true,
            'skipVatAmountValidation' => true,
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'transactionCode' => 'String value',
            'transactionCodeDescription' => 'String value',
            'branch' => 'String value',
            'timeStamp' => '2025-11-22T10:40:04.065Z',
            'journalTransactionLines' => [],
            'attachments' => [],
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new JournalTransactionV2GetSpecificJournalTransactionsByjournalTransactionNumberRequest(
        journalTransactionNumber: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(JournalTransactionV2GetSpecificJournalTransactionsByjournalTransactionNumberRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->module->toBe('String value')
        ->batchNumber->toBe('String value')
        ->status->toBe('String value')
        ->hold->toBeTrue()
        ->transactionDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->postPeriod->toBe('String value')
        ->financialPeriod->toBe('String value')
        ->ledger->toBe('String value')
        ->ledgerDescription->toBe('String value')
        ->currencyId->toBe('mock-id-123')
        ->exchangeRate->toBe(3.14)
        ->autoReversing->toBeTrue()
        ->reversingEntry->toBeTrue()
        ->description->toBe('String value')
        ->originalBatchNumber->toBe('String value')
        ->debitTotal->toBe(3.14)
        ->debitTotalInCurrency->toBe(3.14)
        ->creditTotal->toBe(3.14)
        ->creditTotalInCurrency->toBe(3.14)
        ->controlTotal->toBe(3.14)
        ->controlTotalInCurrency->toBe(3.14)
        ->createVatTransaction->toBeTrue()
        ->skipVatAmountValidation->toBeTrue()
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->transactionCode->toBe('String value')
        ->transactionCodeDescription->toBe('String value')
        ->branch->toBe('String value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('String value');
});

it('calls the journalTransactionV2getAllJournalTransactionsCollection method in the JournalTransactionV2 resource', function () {
    Saloon::fake([
        JournalTransactionV2GetAllJournalTransactionsCollectionRequest::class => MockResponse::make([
            0 => [
                'module' => 'String value',
                'batchNumber' => 'String value',
                'status' => 'String value',
                'hold' => true,
                'transactionDate' => '2025-11-22T10:40:04.065Z',
                'postPeriod' => 'String value',
                'financialPeriod' => 'String value',
                'ledger' => 'String value',
                'ledgerDescription' => 'String value',
                'currencyId' => 'mock-id-123',
                'exchangeRate' => 3.14,
                'autoReversing' => true,
                'reversingEntry' => true,
                'description' => 'String value',
                'originalBatchNumber' => 'String value',
                'debitTotal' => 3.14,
                'debitTotalInCurrency' => 3.14,
                'creditTotal' => 3.14,
                'creditTotalInCurrency' => 3.14,
                'controlTotal' => 3.14,
                'controlTotalInCurrency' => 3.14,
                'createVatTransaction' => true,
                'skipVatAmountValidation' => true,
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'transactionCode' => 'String value',
                'transactionCodeDescription' => 'String value',
                'branch' => 'String value',
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'journalTransactionLines' => [],
                'attachments' => [],
                'errorInfo' => 'String value',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
            1 => [
                'module' => 'String value',
                'batchNumber' => 'String value',
                'status' => 'String value',
                'hold' => true,
                'transactionDate' => '2025-11-22T10:40:04.065Z',
                'postPeriod' => 'String value',
                'financialPeriod' => 'String value',
                'ledger' => 'String value',
                'ledgerDescription' => 'String value',
                'currencyId' => 'mock-id-123',
                'exchangeRate' => 3.14,
                'autoReversing' => true,
                'reversingEntry' => true,
                'description' => 'String value',
                'originalBatchNumber' => 'String value',
                'debitTotal' => 3.14,
                'debitTotalInCurrency' => 3.14,
                'creditTotal' => 3.14,
                'creditTotalInCurrency' => 3.14,
                'controlTotal' => 3.14,
                'controlTotalInCurrency' => 3.14,
                'createVatTransaction' => true,
                'skipVatAmountValidation' => true,
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'transactionCode' => 'String value',
                'transactionCodeDescription' => 'String value',
                'branch' => 'String value',
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'journalTransactionLines' => [],
                'attachments' => [],
                'errorInfo' => 'String value',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
        ], 200),
    ]);

    $request = (new JournalTransactionV2GetAllJournalTransactionsCollectionRequest(periodId: 'test string', lastModifiedDateTime: 'test string', module: 'test string', status: 'test string', expandAttachments: true, branch: 'test string', pageNumber: 123, pageSize: 123));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (JournalTransactionV2GetAllJournalTransactionsCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->module->toBe('String value')
        ->batchNumber->toBe('String value')
        ->status->toBe('String value')
        ->hold->toBeTrue()
        ->transactionDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->postPeriod->toBe('String value')
        ->financialPeriod->toBe('String value')
        ->ledger->toBe('String value')
        ->ledgerDescription->toBe('String value')
        ->currencyId->toBe('mock-id-123')
        ->exchangeRate->toBe(3.14)
        ->autoReversing->toBeTrue()
        ->reversingEntry->toBeTrue()
        ->description->toBe('String value')
        ->originalBatchNumber->toBe('String value')
        ->debitTotal->toBe(3.14)
        ->debitTotalInCurrency->toBe(3.14)
        ->creditTotal->toBe(3.14)
        ->creditTotalInCurrency->toBe(3.14)
        ->controlTotal->toBe(3.14)
        ->controlTotalInCurrency->toBe(3.14)
        ->createVatTransaction->toBeTrue()
        ->skipVatAmountValidation->toBeTrue()
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->transactionCode->toBe('String value')
        ->transactionCodeDescription->toBe('String value')
        ->branch->toBe('String value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('String value');
});
