<?php

use Pionect\VismaSdk\Dto\CashTransactionUpdateDto;
use Pionect\VismaSdk\Dto\ReverseCashTransactionActionDto;
use Pionect\VismaSdk\Requests\CashTransaction\CashTransactionCreateAttachmentByreferenceNbrRequest;
use Pionect\VismaSdk\Requests\CashTransaction\CashTransactionCreateCashTransactionRequest;
use Pionect\VismaSdk\Requests\CashTransaction\CashTransactionGetAllRequest;
use Pionect\VismaSdk\Requests\CashTransaction\CashTransactionGetByreferenceNbrRequest;
use Pionect\VismaSdk\Requests\CashTransaction\CashTransactionPutByreferenceNbrRequest;
use Pionect\VismaSdk\Requests\CashTransaction\CashTransactionReleaseByreferenceNbrRequest;
use Pionect\VismaSdk\Requests\CashTransaction\CashTransactionReverseByreferenceNbrRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the cashTransactionGetByreferenceNbrRequest method in the CashTransaction resource', function () {
    Saloon::fake([
        CashTransactionGetByreferenceNbrRequest::class => MockResponse::make([
            'tranType' => 'String value',
            'referenceNbr' => 'String value',
            'status' => 'String value',
            'hold' => true,
            'tranDate' => '2025-11-22T10:40:04+00:00',
            'finPeriod' => 'String value',
            'financialPeriod' => 'String value',
            'cashAccount' => [
                'type' => 'String value',
                'number' => 'String value',
                'description' => 'String value',
            ],
            'currency' => 'String value',
            'entryType' => [
                'description' => 'String value',
            ],
            'disbReceipt' => 'String value',
            'documentRef' => 'String value',
            'owner' => [
                'internalId' => 'mock-id-123',
                'number' => 'String value',
                'name' => 'String value',
            ],
            'description' => 'String value',
            'amount' => 42,
            'vatTaxableTotal' => 42,
            'vatExemptTotal' => 42,
            'taxTotal' => 42,
            'controlTotal' => 42,
            'taxAmount' => 42,
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'transactionDetails' => [],
            'taxDetails' => [],
            'financialsDetail' => [
                'batchNumber' => 'String value',
                'branch' => [
                    'number' => 'String value',
                    'name' => 'String value',
                ],
                'cleared' => true,
                'clearDate' => '2025-11-22T10:40:04+00:00',
                'taxZone' => [
                    'description' => 'String value',
                    'defaultVatCategory' => 'String value',
                    'defaultTaxCategory' => [
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'errorInfo' => 'String value',
                ],
                'taxCalcMode' => 'String value',
            ],
            'timeStamp' => 'String value',
        ], 200),
    ]);

    $request = new CashTransactionGetByreferenceNbrRequest(
        referenceNbr: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CashTransactionGetByreferenceNbrRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->tranType->toBe('String value')
        ->referenceNbr->toBe('String value')
        ->status->toBe('String value')
        ->hold->toBe(true)
        ->tranDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->finPeriod->toBe('String value')
        ->financialPeriod->toBe('String value')
        ->cashAccount->type->toBe('String value')
        ->cashAccount->number->toBe('String value')
        ->cashAccount->description->toBe('String value')
        ->currency->toBe('String value')
        ->entryType->description->toBe('String value')
        ->disbReceipt->toBe('String value')
        ->documentRef->toBe('String value')
        ->owner->internalId->toBe('mock-id-123')
        ->owner->number->toBe('String value')
        ->owner->name->toBe('String value')
        ->description->toBe('String value')
        ->amount->toBe(42)
        ->vatTaxableTotal->toBe(42)
        ->vatExemptTotal->toBe(42)
        ->taxTotal->toBe(42)
        ->controlTotal->toBe(42)
        ->taxAmount->toBe(42)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->financialsDetail->batchNumber->toBe('String value')
        ->financialsDetail->branch->number->toBe('String value')
        ->financialsDetail->branch->name->toBe('String value')
        ->financialsDetail->cleared->toBe(true)
        ->financialsDetail->clearDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->financialsDetail->taxZone->description->toBe('String value')
        ->financialsDetail->taxZone->defaultVatCategory->toBe('String value')
        ->financialsDetail->taxZone->defaultTaxCategory->number->toBe('String value')
        ->financialsDetail->taxZone->defaultTaxCategory->description->toBe('String value')
        ->financialsDetail->taxZone->errorInfo->toBe('String value')
        ->financialsDetail->taxCalcMode->toBe('String value')
        ->timeStamp->toBe('String value');
});

it('calls the cashTransactionPutByreferenceNbrRequest method in the CashTransaction resource', function () {
    $bodyData = new CashTransactionUpdateDto(
        referenceNumber: 'String value',
        hold: true,
        tranDate: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        finanacialPeriod: 'String value',
        financialPeriod: 'String value',
        description: 'String value',
        cashAccount: 'String value',
        entryType: 'String value',
        documentRef: 'String value',
        controlTotal: 42,
        vatAmount: 42,
        vatZone: 'String value',
        taxCalculationMode: 'String value',
        overrideNumberSeries: true,
        cashTransactionDetails: [],
        cashTransactionTaxDetails: []
    );

    Saloon::fake([
        CashTransactionPutByreferenceNbrRequest::class => MockResponse::make([], 201),
    ]);

    $request = new CashTransactionPutByreferenceNbrRequest(
        referenceNbr: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CashTransactionPutByreferenceNbrRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the cashTransactionGetAllRequest method in the CashTransaction resource', function () {
    Saloon::fake([
        CashTransactionGetAllRequest::class => MockResponse::make([
            0 => [
                'tranType' => 'String value',
                'referenceNbr' => 'String value',
                'status' => 'String value',
                'hold' => true,
                'tranDate' => '2025-11-22T10:40:04+00:00',
                'finPeriod' => 'String value',
                'financialPeriod' => 'String value',
                'cashAccount' => [
                    'type' => 'String value',
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'currency' => 'String value',
                'entryType' => [
                    'description' => 'String value',
                ],
                'disbReceipt' => 'String value',
                'documentRef' => 'String value',
                'owner' => [
                    'internalId' => 'mock-id-123',
                    'number' => 'String value',
                    'name' => 'String value',
                ],
                'description' => 'String value',
                'amount' => 42,
                'vatTaxableTotal' => 42,
                'vatExemptTotal' => 42,
                'taxTotal' => 42,
                'controlTotal' => 42,
                'taxAmount' => 42,
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'transactionDetails' => [],
                'taxDetails' => [],
                'financialsDetail' => [
                    'batchNumber' => 'String value',
                    'branch' => [
                        'number' => 'String value',
                        'name' => 'String value',
                    ],
                    'cleared' => true,
                    'clearDate' => '2025-11-22T10:40:04+00:00',
                    'taxZone' => [
                        'description' => 'String value',
                        'defaultVatCategory' => 'String value',
                        'defaultTaxCategory' => [
                            'number' => 'String value',
                            'description' => 'String value',
                        ],
                        'errorInfo' => 'String value',
                    ],
                    'taxCalcMode' => 'String value',
                ],
                'timeStamp' => 'String value',
            ],
            1 => [
                'tranType' => 'String value',
                'referenceNbr' => 'String value',
                'status' => 'String value',
                'hold' => true,
                'tranDate' => '2025-11-22T10:40:04+00:00',
                'finPeriod' => 'String value',
                'financialPeriod' => 'String value',
                'cashAccount' => [
                    'type' => 'String value',
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'currency' => 'String value',
                'entryType' => [
                    'description' => 'String value',
                ],
                'disbReceipt' => 'String value',
                'documentRef' => 'String value',
                'owner' => [
                    'internalId' => 'mock-id-123',
                    'number' => 'String value',
                    'name' => 'String value',
                ],
                'description' => 'String value',
                'amount' => 42,
                'vatTaxableTotal' => 42,
                'vatExemptTotal' => 42,
                'taxTotal' => 42,
                'controlTotal' => 42,
                'taxAmount' => 42,
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'transactionDetails' => [],
                'taxDetails' => [],
                'financialsDetail' => [
                    'batchNumber' => 'String value',
                    'branch' => [
                        'number' => 'String value',
                        'name' => 'String value',
                    ],
                    'cleared' => true,
                    'clearDate' => '2025-11-22T10:40:04+00:00',
                    'taxZone' => [
                        'description' => 'String value',
                        'defaultVatCategory' => 'String value',
                        'defaultTaxCategory' => [
                            'number' => 'String value',
                            'description' => 'String value',
                        ],
                        'errorInfo' => 'String value',
                    ],
                    'taxCalcMode' => 'String value',
                ],
                'timeStamp' => 'String value',
            ],
        ], 200),
    ]);

    $request = new CashTransactionGetAllRequest(
        numberToRead: 123,
        skipRecords: 123,
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CashTransactionGetAllRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toHaveCount(2);
    expect($collection->first())
        ->tranType->toBe('String value')
        ->referenceNbr->toBe('String value')
        ->status->toBe('String value')
        ->hold->toBe(true)
        ->tranDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->finPeriod->toBe('String value')
        ->financialPeriod->toBe('String value')
        ->cashAccount->type->toBe('String value')
        ->cashAccount->number->toBe('String value')
        ->cashAccount->description->toBe('String value')
        ->currency->toBe('String value')
        ->entryType->description->toBe('String value')
        ->disbReceipt->toBe('String value')
        ->documentRef->toBe('String value')
        ->owner->internalId->toBe('mock-id-123')
        ->owner->number->toBe('String value')
        ->owner->name->toBe('String value')
        ->description->toBe('String value')
        ->amount->toBe(42)
        ->vatTaxableTotal->toBe(42)
        ->vatExemptTotal->toBe(42)
        ->taxTotal->toBe(42)
        ->controlTotal->toBe(42)
        ->taxAmount->toBe(42)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->financialsDetail->batchNumber->toBe('String value')
        ->financialsDetail->branch->number->toBe('String value')
        ->financialsDetail->branch->name->toBe('String value')
        ->financialsDetail->cleared->toBe(true)
        ->financialsDetail->clearDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->financialsDetail->taxZone->description->toBe('String value')
        ->financialsDetail->taxZone->defaultVatCategory->toBe('String value')
        ->financialsDetail->taxZone->defaultTaxCategory->number->toBe('String value')
        ->financialsDetail->taxZone->defaultTaxCategory->description->toBe('String value')
        ->financialsDetail->taxZone->errorInfo->toBe('String value')
        ->financialsDetail->taxCalcMode->toBe('String value')
        ->timeStamp->toBe('String value');
});

it('calls the cashTransactionCreateCashTransactionRequest method in the CashTransaction resource', function () {
    $bodyData = new CashTransactionUpdateDto(
        referenceNumber: 'String value',
        hold: true,
        tranDate: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        finanacialPeriod: 'String value',
        financialPeriod: 'String value',
        description: 'String value',
        cashAccount: 'String value',
        entryType: 'String value',
        documentRef: 'String value',
        controlTotal: 42,
        vatAmount: 42,
        vatZone: 'String value',
        taxCalculationMode: 'String value',
        overrideNumberSeries: true,
        cashTransactionDetails: [],
        cashTransactionTaxDetails: []
    );

    Saloon::fake([
        CashTransactionCreateCashTransactionRequest::class => MockResponse::make([], 201),
    ]);

    $request = new CashTransactionCreateCashTransactionRequest(
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CashTransactionCreateCashTransactionRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the cashTransactionReleaseByreferenceNbrRequest method in the CashTransaction resource', function () {
    $bodyData = [];

    Saloon::fake([
        CashTransactionReleaseByreferenceNbrRequest::class => MockResponse::make([], 201),
    ]);

    $request = new CashTransactionReleaseByreferenceNbrRequest(
        referenceNbr: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CashTransactionReleaseByreferenceNbrRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the cashTransactionReverseByreferenceNbrRequest method in the CashTransaction resource', function () {
    $bodyData = new ReverseCashTransactionActionDto(
        returnCashTransaction: true
    );

    Saloon::fake([
        CashTransactionReverseByreferenceNbrRequest::class => MockResponse::make([], 201),
    ]);

    $request = new CashTransactionReverseByreferenceNbrRequest(
        referenceNbr: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CashTransactionReverseByreferenceNbrRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the cashTransactionCreateAttachmentByreferenceNbrRequest method in the CashTransaction resource', function () {
    $bodyData = [];

    Saloon::fake([
        CashTransactionCreateAttachmentByreferenceNbrRequest::class => MockResponse::make([], 201),
    ]);

    $request = new CashTransactionCreateAttachmentByreferenceNbrRequest(
        referenceNbr: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CashTransactionCreateAttachmentByreferenceNbrRequest::class);

    expect($response->status())->toBe(201);
});
