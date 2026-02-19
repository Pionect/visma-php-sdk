<?php

use Pionect\VismaSdk\Dto\JournalTransactionUpdateDto;
use Pionect\VismaSdk\Enums\JournalTransactionLineModuleEnum;
use Pionect\VismaSdk\Enums\JournalTransactionStatusEnum;
use Pionect\VismaSdk\Requests\JournalTransactionV2\JournalTransactionV2AddHeaderAttachmentBymodulejournalTransactionNumberRequest;
use Pionect\VismaSdk\Requests\JournalTransactionV2\JournalTransactionV2AddLineAttachmentBymodulejournalTransactionNumberlineNumberRequest;
use Pionect\VismaSdk\Requests\JournalTransactionV2\JournalTransactionV2GetAllJournalTransactionsRequest;
use Pionect\VismaSdk\Requests\JournalTransactionV2\JournalTransactionV2GetSpecificJournalTransactionsByjournalTransactionNumberRequest;
use Pionect\VismaSdk\Requests\JournalTransactionV2\JournalTransactionV2PostRequest;
use Pionect\VismaSdk\Requests\JournalTransactionV2\JournalTransactionV2PutByjournalTransactionNumberRequest;
use Pionect\VismaSdk\Requests\JournalTransactionV2\JournalTransactionV2ReleaseJournalTransactionByjournalTransactionNumberRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the journalTransactionV2getSpecificJournalTransactionsByjournalTransactionNumberRequest method in the JournalTransactionV2 resource', function () {
    Saloon::fake([
        JournalTransactionV2GetSpecificJournalTransactionsByjournalTransactionNumberRequest::class => MockResponse::make([
            'module' => 'ModuleGL',
            'batchNumber' => 'String value',
            'status' => 'Hold',
            'hold' => true,
            'transactionDate' => '2025-11-22T10:40:04+00:00',
            'postPeriod' => 'String value',
            'financialPeriod' => 'String value',
            'ledger' => 'String value',
            'ledgerDescription' => 'String value',
            'currencyId' => 'mock-id-123',
            'exchangeRate' => 42,
            'autoReversing' => true,
            'reversingEntry' => true,
            'description' => 'String value',
            'originalBatchNumber' => 'String value',
            'debitTotal' => 42,
            'debitTotalInCurrency' => 42,
            'creditTotal' => 42,
            'creditTotalInCurrency' => 42,
            'controlTotal' => 42,
            'controlTotalInCurrency' => 42,
            'createVatTransaction' => true,
            'skipVatAmountValidation' => true,
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'transactionCode' => 'String value',
            'transactionCodeDescription' => 'String value',
            'branch' => 'String value',
            'timeStamp' => 'String value',
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
        ->module->toEqual(JournalTransactionLineModuleEnum::MODULE_GL)
        ->batchNumber->toBe('String value')
        ->status->toEqual(JournalTransactionStatusEnum::HOLD)
        ->hold->toBe(true)
        ->transactionDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->postPeriod->toBe('String value')
        ->financialPeriod->toBe('String value')
        ->ledger->toBe('String value')
        ->ledgerDescription->toBe('String value')
        ->currencyId->toBe('mock-id-123')
        ->exchangeRate->toBe(42)
        ->autoReversing->toBe(true)
        ->reversingEntry->toBe(true)
        ->description->toBe('String value')
        ->originalBatchNumber->toBe('String value')
        ->debitTotal->toBe(42)
        ->debitTotalInCurrency->toBe(42)
        ->creditTotal->toBe(42)
        ->creditTotalInCurrency->toBe(42)
        ->controlTotal->toBe(42)
        ->controlTotalInCurrency->toBe(42)
        ->createVatTransaction->toBe(true)
        ->skipVatAmountValidation->toBe(true)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->transactionCode->toBe('String value')
        ->transactionCodeDescription->toBe('String value')
        ->branch->toBe('String value')
        ->timeStamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the journalTransactionV2putByjournalTransactionNumberRequest method in the JournalTransactionV2 resource', function () {
    $bodyData = new JournalTransactionUpdateDto(
        batchNumber: 'String value',
        hold: true,
        transactionDate: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        postPeriod: 'String value',
        financialPeriod: 'String value',
        ledger: 'String value',
        currencyId: 'mock-id-123',
        exchangeRate: 42,
        autoReversing: true,
        description: 'String value',
        controlTotalInCurrency: 42,
        createVatTransaction: true,
        skipVatAmountValidation: true,
        transactionCode: 'String value',
        branch: 'String value',
        overrideNumberSeries: true,
        journalTransactionLines: []
    );

    Saloon::fake([
        JournalTransactionV2PutByjournalTransactionNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new JournalTransactionV2PutByjournalTransactionNumberRequest(
        journalTransactionNumber: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(JournalTransactionV2PutByjournalTransactionNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the journalTransactionV2getAllJournalTransactionsRequest method in the JournalTransactionV2 resource', function () {
    Saloon::fake([
        JournalTransactionV2GetAllJournalTransactionsRequest::class => MockResponse::make([
            0 => [
                'module' => 'ModuleGL',
                'batchNumber' => 'String value',
                'status' => 'Hold',
                'hold' => true,
                'transactionDate' => '2025-11-22T10:40:04+00:00',
                'postPeriod' => 'String value',
                'financialPeriod' => 'String value',
                'ledger' => 'String value',
                'ledgerDescription' => 'String value',
                'currencyId' => 'mock-id-123',
                'exchangeRate' => 42,
                'autoReversing' => true,
                'reversingEntry' => true,
                'description' => 'String value',
                'originalBatchNumber' => 'String value',
                'debitTotal' => 42,
                'debitTotalInCurrency' => 42,
                'creditTotal' => 42,
                'creditTotalInCurrency' => 42,
                'controlTotal' => 42,
                'controlTotalInCurrency' => 42,
                'createVatTransaction' => true,
                'skipVatAmountValidation' => true,
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'transactionCode' => 'String value',
                'transactionCodeDescription' => 'String value',
                'branch' => 'String value',
                'timeStamp' => 'String value',
                'journalTransactionLines' => [],
                'attachments' => [],
                'errorInfo' => 'String value',
            ],
            1 => [
                'module' => 'ModuleGL',
                'batchNumber' => 'String value',
                'status' => 'Hold',
                'hold' => true,
                'transactionDate' => '2025-11-22T10:40:04+00:00',
                'postPeriod' => 'String value',
                'financialPeriod' => 'String value',
                'ledger' => 'String value',
                'ledgerDescription' => 'String value',
                'currencyId' => 'mock-id-123',
                'exchangeRate' => 42,
                'autoReversing' => true,
                'reversingEntry' => true,
                'description' => 'String value',
                'originalBatchNumber' => 'String value',
                'debitTotal' => 42,
                'debitTotalInCurrency' => 42,
                'creditTotal' => 42,
                'creditTotalInCurrency' => 42,
                'controlTotal' => 42,
                'controlTotalInCurrency' => 42,
                'createVatTransaction' => true,
                'skipVatAmountValidation' => true,
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'transactionCode' => 'String value',
                'transactionCodeDescription' => 'String value',
                'branch' => 'String value',
                'timeStamp' => 'String value',
                'journalTransactionLines' => [],
                'attachments' => [],
                'errorInfo' => 'String value',
            ],
        ], 200),
    ]);

    $request = new JournalTransactionV2GetAllJournalTransactionsRequest(
        periodId: 'test string',
        lastModifiedDateTime: 'test string',
        module: 'test string',
        status: 'test string',
        expandAttachments: true,
        branch: 'test string',
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(JournalTransactionV2GetAllJournalTransactionsRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toHaveCount(2);
    expect($collection->first())
        ->module->toEqual(JournalTransactionLineModuleEnum::MODULE_GL)
        ->batchNumber->toBe('String value')
        ->status->toEqual(JournalTransactionStatusEnum::HOLD)
        ->hold->toBe(true)
        ->transactionDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->postPeriod->toBe('String value')
        ->financialPeriod->toBe('String value')
        ->ledger->toBe('String value')
        ->ledgerDescription->toBe('String value')
        ->currencyId->toBe('mock-id-123')
        ->exchangeRate->toBe(42)
        ->autoReversing->toBe(true)
        ->reversingEntry->toBe(true)
        ->description->toBe('String value')
        ->originalBatchNumber->toBe('String value')
        ->debitTotal->toBe(42)
        ->debitTotalInCurrency->toBe(42)
        ->creditTotal->toBe(42)
        ->creditTotalInCurrency->toBe(42)
        ->controlTotal->toBe(42)
        ->controlTotalInCurrency->toBe(42)
        ->createVatTransaction->toBe(true)
        ->skipVatAmountValidation->toBe(true)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->transactionCode->toBe('String value')
        ->transactionCodeDescription->toBe('String value')
        ->branch->toBe('String value')
        ->timeStamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the journalTransactionV2postRequest method in the JournalTransactionV2 resource', function () {
    $bodyData = new JournalTransactionUpdateDto(
        batchNumber: 'String value',
        hold: true,
        transactionDate: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        postPeriod: 'String value',
        financialPeriod: 'String value',
        ledger: 'String value',
        currencyId: 'mock-id-123',
        exchangeRate: 42,
        autoReversing: true,
        description: 'String value',
        controlTotalInCurrency: 42,
        createVatTransaction: true,
        skipVatAmountValidation: true,
        transactionCode: 'String value',
        branch: 'String value',
        overrideNumberSeries: true,
        journalTransactionLines: []
    );

    Saloon::fake([
        JournalTransactionV2PostRequest::class => MockResponse::make([], 201),
    ]);

    $request = new JournalTransactionV2PostRequest(
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(JournalTransactionV2PostRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the journalTransactionV2releaseJournalTransactionByjournalTransactionNumberRequest method in the JournalTransactionV2 resource', function () {
    $bodyData = [];

    Saloon::fake([
        JournalTransactionV2ReleaseJournalTransactionByjournalTransactionNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new JournalTransactionV2ReleaseJournalTransactionByjournalTransactionNumberRequest(
        journalTransactionNumber: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(JournalTransactionV2ReleaseJournalTransactionByjournalTransactionNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the journalTransactionV2addHeaderAttachmentBymodulejournalTransactionNumberRequest method in the JournalTransactionV2 resource', function () {
    $bodyData = [];

    Saloon::fake([
        JournalTransactionV2AddHeaderAttachmentBymodulejournalTransactionNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new JournalTransactionV2AddHeaderAttachmentBymodulejournalTransactionNumberRequest(
        module: 'test string',
        journalTransactionNumber: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(JournalTransactionV2AddHeaderAttachmentBymodulejournalTransactionNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the journalTransactionV2addLineAttachmentBymodulejournalTransactionNumberlineNumberRequest method in the JournalTransactionV2 resource', function () {
    $bodyData = [];

    Saloon::fake([
        JournalTransactionV2AddLineAttachmentBymodulejournalTransactionNumberlineNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new JournalTransactionV2AddLineAttachmentBymodulejournalTransactionNumberlineNumberRequest(
        module: 'test string',
        journalTransactionNumber: 'test string',
        lineNumber: 123,
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(JournalTransactionV2AddLineAttachmentBymodulejournalTransactionNumberlineNumberRequest::class);

    expect($response->status())->toBe(201);
});
