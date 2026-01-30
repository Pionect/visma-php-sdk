<?php

use Pionect\VismaSdk\Dto\CashTransactionUpdateDto;
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
            'cashAccount' => null,
            'currency' => 'String value',
            'entryType' => null,
            'disbReceipt' => 'String value',
            'documentRef' => 'String value',
            'owner' => null,
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
            'financialsDetail' => null,
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
        ->cashAccount->toBeNull()
        ->currency->toBe('String value')
        ->entryType->toBeNull()
        ->disbReceipt->toBe('String value')
        ->documentRef->toBe('String value')
        ->owner->toBeNull()
        ->description->toBe('String value')
        ->amount->toBe(42)
        ->vatTaxableTotal->toBe(42)
        ->vatExemptTotal->toBe(42)
        ->taxTotal->toBe(42)
        ->controlTotal->toBe(42)
        ->taxAmount->toBe(42)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->financialsDetail->toBeNull()
        ->timeStamp->toBe('String value');
});

it('calls the cashTransactionPutByreferenceNbrRequest method in the CashTransaction resource', function () {
    $bodyData = new CashTransactionUpdateDto(
        referenceNumber: 'String value',
        hold: true,
        tranDate: '2025-11-22T10:40:04+00:00',
        finanacialPeriod: null,
        financialPeriod: null,
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
                'cashAccount' => null,
                'currency' => 'String value',
                'entryType' => null,
                'disbReceipt' => 'String value',
                'documentRef' => 'String value',
                'owner' => null,
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
                'financialsDetail' => null,
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
                'cashAccount' => null,
                'currency' => 'String value',
                'entryType' => null,
                'disbReceipt' => 'String value',
                'documentRef' => 'String value',
                'owner' => null,
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
                'financialsDetail' => null,
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

    expect($collection)->toBeArray()
        ->and($collection)->toHaveCount(2);

    $firstItem = $collection[0];

    expect($firstItem)
        ->tranType->toBe('String value')
        ->referenceNbr->toBe('String value')
        ->status->toBe('String value')
        ->hold->toBe(true)
        ->tranDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->finPeriod->toBe('String value')
        ->financialPeriod->toBe('String value')
        ->cashAccount->toBeNull()
        ->currency->toBe('String value')
        ->entryType->toBeNull()
        ->disbReceipt->toBe('String value')
        ->documentRef->toBe('String value')
        ->owner->toBeNull()
        ->description->toBe('String value')
        ->amount->toBe(42)
        ->vatTaxableTotal->toBe(42)
        ->vatExemptTotal->toBe(42)
        ->taxTotal->toBe(42)
        ->controlTotal->toBe(42)
        ->taxAmount->toBe(42)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->financialsDetail->toBeNull()
        ->timeStamp->toBe('String value');
});

it('calls the cashTransactionCreateCashTransactionRequest method in the CashTransaction resource', function () {
    $bodyData = new CashTransactionUpdateDto(
        referenceNumber: 'String value',
        hold: true,
        tranDate: '2025-11-22T10:40:04+00:00',
        finanacialPeriod: null,
        financialPeriod: null,
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
    $bodyData = new CashTransactionUpdateDto(
        referenceNumber: 'String value',
        hold: true,
        tranDate: '2025-11-22T10:40:04+00:00',
        finanacialPeriod: null,
        financialPeriod: null,
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
    $bodyData = new CashTransactionUpdateDto(
        referenceNumber: 'String value',
        hold: true,
        tranDate: '2025-11-22T10:40:04+00:00',
        finanacialPeriod: null,
        financialPeriod: null,
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
    $bodyData = new CashTransactionUpdateDto(
        referenceNumber: 'String value',
        hold: true,
        tranDate: '2025-11-22T10:40:04+00:00',
        finanacialPeriod: null,
        financialPeriod: null,
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
