<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\JournalTransactionV2\JournalTransactionV2GetAllJournalTransactionsCollectionRequest;
use Pionect\VismaSdk\Requests\JournalTransactionV2\JournalTransactionV2GetSpecificJournalTransactionsByjournalTransactionNumberRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector(
        clientId: 'replace',
        clientSecret: 'replace'
    );
});

it('calls the journalTransactionV2getSpecificJournalTransactionsByjournalTransactionNumber method in the JournalTransactionV2 resource', function () {
    Saloon::fake([
        JournalTransactionV2GetSpecificJournalTransactionsByjournalTransactionNumberRequest::class => MockResponse::make([
            'module' => 'Mock value',
            'batchNumber' => 'Mock value',
            'status' => 'Mock value',
            'hold' => true,
            'transactionDate' => '2025-11-22T10:40:04.065Z',
            'postPeriod' => 'Mock value',
            'financialPeriod' => 'Mock value',
            'ledger' => 'Mock value',
            'ledgerDescription' => 'Mock value',
            'currencyId' => 'mock-id-123',
            'exchangeRate' => 3.14,
            'autoReversing' => true,
            'reversingEntry' => true,
            'description' => 'Mock value',
            'originalBatchNumber' => 'Mock value',
            'debitTotal' => 3.14,
            'debitTotalInCurrency' => 3.14,
            'creditTotal' => 3.14,
            'creditTotalInCurrency' => 3.14,
            'controlTotal' => 3.14,
            'controlTotalInCurrency' => 3.14,
            'createVatTransaction' => true,
            'skipVatAmountValidation' => true,
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'transactionCode' => 'Mock value',
            'transactionCodeDescription' => 'Mock value',
            'branch' => 'Mock value',
            'timeStamp' => '2025-11-22T10:40:04.065Z',
            'journalTransactionLines' => [],
            'attachments' => [],
            'errorInfo' => 'Mock value',
            'metadata' => 'Mock value',
        ], 200),
    ]);

    $request = new JournalTransactionV2GetSpecificJournalTransactionsByjournalTransactionNumberRequest(
        journalTransactionNumberId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(JournalTransactionV2GetSpecificJournalTransactionsByjournalTransactionNumberRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->module->toBe('Mock value')
        ->batchNumber->toBe('Mock value')
        ->status->toBe('Mock value')
        ->hold->toBeTrue()
        ->transactionDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->postPeriod->toBe('Mock value')
        ->financialPeriod->toBe('Mock value')
        ->ledger->toBe('Mock value')
        ->ledgerDescription->toBe('Mock value')
        ->currencyId->toBe('mock-id-123')
        ->exchangeRate->toBe(3.14)
        ->autoReversing->toBeTrue()
        ->reversingEntry->toBeTrue()
        ->description->toBe('Mock value')
        ->originalBatchNumber->toBe('Mock value')
        ->debitTotal->toBe(3.14)
        ->debitTotalInCurrency->toBe(3.14)
        ->creditTotal->toBe(3.14)
        ->creditTotalInCurrency->toBe(3.14)
        ->controlTotal->toBe(3.14)
        ->controlTotalInCurrency->toBe(3.14)
        ->createVatTransaction->toBeTrue()
        ->skipVatAmountValidation->toBeTrue()
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->transactionCode->toBe('Mock value')
        ->transactionCodeDescription->toBe('Mock value')
        ->branch->toBe('Mock value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the journalTransactionV2getAllJournalTransactionsCollection method in the JournalTransactionV2 resource', function () {
    Saloon::fake([
        JournalTransactionV2GetAllJournalTransactionsCollectionRequest::class => MockResponse::make([
            0 => [
                'module' => 'Mock value',
                'batchNumber' => 'Mock value',
                'status' => 'Mock value',
                'hold' => true,
                'transactionDate' => '2025-11-22T10:40:04.065Z',
                'postPeriod' => 'Mock value',
                'financialPeriod' => 'Mock value',
                'ledger' => 'Mock value',
                'ledgerDescription' => 'Mock value',
                'currencyId' => 'mock-id-123',
                'exchangeRate' => 3.14,
                'autoReversing' => true,
                'reversingEntry' => true,
                'description' => 'Mock value',
                'originalBatchNumber' => 'Mock value',
                'debitTotal' => 3.14,
                'debitTotalInCurrency' => 3.14,
                'creditTotal' => 3.14,
                'creditTotalInCurrency' => 3.14,
                'controlTotal' => 3.14,
                'controlTotalInCurrency' => 3.14,
                'createVatTransaction' => true,
                'skipVatAmountValidation' => true,
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'transactionCode' => 'Mock value',
                'transactionCodeDescription' => 'Mock value',
                'branch' => 'Mock value',
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'journalTransactionLines' => [],
                'attachments' => [],
                'errorInfo' => 'Mock value',
                'metadata' => 'Mock value',
            ],
            1 => [
                'module' => 'Mock value',
                'batchNumber' => 'Mock value',
                'status' => 'Mock value',
                'hold' => true,
                'transactionDate' => '2025-11-22T10:40:04.065Z',
                'postPeriod' => 'Mock value',
                'financialPeriod' => 'Mock value',
                'ledger' => 'Mock value',
                'ledgerDescription' => 'Mock value',
                'currencyId' => 'mock-id-123',
                'exchangeRate' => 3.14,
                'autoReversing' => true,
                'reversingEntry' => true,
                'description' => 'Mock value',
                'originalBatchNumber' => 'Mock value',
                'debitTotal' => 3.14,
                'debitTotalInCurrency' => 3.14,
                'creditTotal' => 3.14,
                'creditTotalInCurrency' => 3.14,
                'controlTotal' => 3.14,
                'controlTotalInCurrency' => 3.14,
                'createVatTransaction' => true,
                'skipVatAmountValidation' => true,
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'transactionCode' => 'Mock value',
                'transactionCodeDescription' => 'Mock value',
                'branch' => 'Mock value',
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'journalTransactionLines' => [],
                'attachments' => [],
                'errorInfo' => 'Mock value',
                'metadata' => 'Mock value',
            ],
        ], 200),
    ]);

    $request = (new JournalTransactionV2GetAllJournalTransactionsCollectionRequest(periodId: 'test string', lastModifiedDateTime: 'test string', module: 'test string', status: 'test string', expandAttachments: true, branch: 'test string', pageNumber: 123, pageSize: 123));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (JournalTransactionV2GetAllJournalTransactionsCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->module->toBe('Mock value')
        ->batchNumber->toBe('Mock value')
        ->status->toBe('Mock value')
        ->hold->toBeTrue()
        ->transactionDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->postPeriod->toBe('Mock value')
        ->financialPeriod->toBe('Mock value')
        ->ledger->toBe('Mock value')
        ->ledgerDescription->toBe('Mock value')
        ->currencyId->toBe('mock-id-123')
        ->exchangeRate->toBe(3.14)
        ->autoReversing->toBeTrue()
        ->reversingEntry->toBeTrue()
        ->description->toBe('Mock value')
        ->originalBatchNumber->toBe('Mock value')
        ->debitTotal->toBe(3.14)
        ->debitTotalInCurrency->toBe(3.14)
        ->creditTotal->toBe(3.14)
        ->creditTotalInCurrency->toBe(3.14)
        ->controlTotal->toBe(3.14)
        ->controlTotalInCurrency->toBe(3.14)
        ->createVatTransaction->toBeTrue()
        ->skipVatAmountValidation->toBeTrue()
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->transactionCode->toBe('Mock value')
        ->transactionCodeDescription->toBe('Mock value')
        ->branch->toBe('Mock value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});
