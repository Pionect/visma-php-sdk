<?php

use Pionect\VismaSdk\Dto\PurchaseReceiptBasicUpdateDto;
use Pionect\VismaSdk\Requests\PurchaseReceiptBasic\PurchaseReceiptBasicGetAllReceiptBasicRequest;
use Pionect\VismaSdk\Requests\PurchaseReceiptBasic\PurchaseReceiptBasicGetPurchaseReceiptBasicByreceiptNumberRequest;
use Pionect\VismaSdk\Requests\PurchaseReceiptBasic\PurchaseReceiptBasicPostRequest;
use Pionect\VismaSdk\Requests\PurchaseReceiptBasic\PurchaseReceiptBasicPutByreceiptNumberRequest;
use Pionect\VismaSdk\Requests\PurchaseReceiptBasic\PurchaseReceiptBasicReleaseInvoiceByreceiptNumberRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the purchaseReceiptBasicGetPurchaseReceiptBasicByreceiptNumberRequest method in the PurchaseReceiptBasic resource', function () {
    Saloon::fake([
        PurchaseReceiptBasicGetPurchaseReceiptBasicByreceiptNumberRequest::class => MockResponse::make([
            'timeStamp' => 'String value',
            'receiptType' => 'String value',
            'receiptNbr' => 'String value',
            'hold' => true,
            'status' => 'String value',
            'date' => '2025-11-22T10:40:04+00:00',
            'postPeriod' => 'String value',
            'warehouse' => null,
            'supplier' => null,
            'location' => null,
            'currency' => 'String value',
            'exchangeRate' => 42,
            'createBill' => true,
            'supplierRef' => 'String value',
            'totalQty' => 42,
            'controlQty' => 42,
            'vatExemptTotal' => 42,
            'vatTaxableTotal' => 42,
            'totalAmt' => 42,
            'controlTotal' => 42,
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'branchNumber' => null,
            'lines' => [],
            'dueDate' => '2025-11-22T10:40:04+00:00',
            'customStr1' => 'String value',
            'customStr2' => 'String value',
            'customStr3' => 'String value',
            'customStr4' => 'String value',
            'customStr5' => 'String value',
            'customDec1' => 42,
            'customDec2' => 42,
            'customInt1' => 42,
            'customInt2' => 42,
            'customDateTimeUtc1' => '2025-11-22T10:40:04+00:00',
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new PurchaseReceiptBasicGetPurchaseReceiptBasicByreceiptNumberRequest(
        receiptNumber: 'test string',
        includeCustomFreeFields: true,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(PurchaseReceiptBasicGetPurchaseReceiptBasicByreceiptNumberRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->timeStamp->toBe('String value')
        ->receiptType->toBe('String value')
        ->receiptNbr->toBe('String value')
        ->hold->toBe(true)
        ->status->toBe('String value')
        ->date->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->postPeriod->toBe('String value')
        ->warehouse->toBeNull()
        ->supplier->toBeNull()
        ->location->toBeNull()
        ->currency->toBe('String value')
        ->exchangeRate->toBe(42)
        ->createBill->toBe(true)
        ->supplierRef->toBe('String value')
        ->totalQty->toBe(42)
        ->controlQty->toBe(42)
        ->vatExemptTotal->toBe(42)
        ->vatTaxableTotal->toBe(42)
        ->totalAmt->toBe(42)
        ->controlTotal->toBe(42)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->branchNumber->toBeNull()
        ->dueDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->customStr1->toBe('String value')
        ->customStr2->toBe('String value')
        ->customStr3->toBe('String value')
        ->customStr4->toBe('String value')
        ->customStr5->toBe('String value')
        ->customDec1->toBe(42)
        ->customDec2->toBe(42)
        ->customInt1->toBe(42)
        ->customInt2->toBe(42)
        ->customDateTimeUtc1->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->errorInfo->toBe('String value');
});

it('calls the purchaseReceiptBasicPutByreceiptNumberRequest method in the PurchaseReceiptBasic resource', function () {
    $bodyData = new PurchaseReceiptBasicUpdateDto(
        lines: [],
        receiptType: 'String value',
        receiptNbr: 'String value',
        hold: true,
        date: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        postPeriod: null,
        warehouseId: 'mock-id-123',
        supplierId: 'mock-id-123',
        locationId: 'mock-id-123',
        currency: 'String value',
        exchangeRate: 42,
        createBill: true,
        supplierRef: 'String value',
        controlQty: 42,
        controlAmount: 42,
        branchNumber: 'String value',
        customStr1: null,
        customStr2: null,
        customStr3: null,
        customStr4: null,
        customStr5: null,
        customDec1: null,
        customDec2: null,
        customInt1: null,
        customInt2: null,
        customDateTimeUtc1: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        timeStamp: 'String value'
    );

    Saloon::fake([
        PurchaseReceiptBasicPutByreceiptNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new PurchaseReceiptBasicPutByreceiptNumberRequest(
        receiptNumber: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(PurchaseReceiptBasicPutByreceiptNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the purchaseReceiptBasicGetAllReceiptBasicRequest method in the PurchaseReceiptBasic resource', function () {
    Saloon::fake([
        PurchaseReceiptBasicGetAllReceiptBasicRequest::class => MockResponse::make([
            0 => [
                'timeStamp' => 'String value',
                'receiptType' => 'String value',
                'receiptNbr' => 'String value',
                'hold' => true,
                'status' => 'String value',
                'date' => '2025-11-22T10:40:04+00:00',
                'postPeriod' => 'String value',
                'warehouse' => null,
                'supplier' => null,
                'location' => null,
                'currency' => 'String value',
                'exchangeRate' => 42,
                'createBill' => true,
                'supplierRef' => 'String value',
                'totalQty' => 42,
                'controlQty' => 42,
                'vatExemptTotal' => 42,
                'vatTaxableTotal' => 42,
                'totalAmt' => 42,
                'controlTotal' => 42,
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'branchNumber' => null,
                'lines' => [],
                'dueDate' => '2025-11-22T10:40:04+00:00',
                'customStr1' => 'String value',
                'customStr2' => 'String value',
                'customStr3' => 'String value',
                'customStr4' => 'String value',
                'customStr5' => 'String value',
                'customDec1' => 42,
                'customDec2' => 42,
                'customInt1' => 42,
                'customInt2' => 42,
                'customDateTimeUtc1' => '2025-11-22T10:40:04+00:00',
                'errorInfo' => 'String value',
            ],
            1 => [
                'timeStamp' => 'String value',
                'receiptType' => 'String value',
                'receiptNbr' => 'String value',
                'hold' => true,
                'status' => 'String value',
                'date' => '2025-11-22T10:40:04+00:00',
                'postPeriod' => 'String value',
                'warehouse' => null,
                'supplier' => null,
                'location' => null,
                'currency' => 'String value',
                'exchangeRate' => 42,
                'createBill' => true,
                'supplierRef' => 'String value',
                'totalQty' => 42,
                'controlQty' => 42,
                'vatExemptTotal' => 42,
                'vatTaxableTotal' => 42,
                'totalAmt' => 42,
                'controlTotal' => 42,
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'branchNumber' => null,
                'lines' => [],
                'dueDate' => '2025-11-22T10:40:04+00:00',
                'customStr1' => 'String value',
                'customStr2' => 'String value',
                'customStr3' => 'String value',
                'customStr4' => 'String value',
                'customStr5' => 'String value',
                'customDec1' => 42,
                'customDec2' => 42,
                'customInt1' => 42,
                'customInt2' => 42,
                'customDateTimeUtc1' => '2025-11-22T10:40:04+00:00',
                'errorInfo' => 'String value',
            ],
        ], 200),
    ]);

    $request = new PurchaseReceiptBasicGetAllReceiptBasicRequest(
        receiptType: 'test string',
        status: 'test string',
        greaterThanValue: 'test string',
        numberToRead: 123,
        skipRecords: 123,
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        supplier: 'test string',
        poOrderNbr: 'test string',
        branch: 'test string',
        finPeriod: 'test string',
        receiptDate: 'test string',
        receiptDateCondition: 'test string',
        dueDate: 'test string',
        dueDateCondition: 'test string',
        includeCustomFreeFields: true,
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(PurchaseReceiptBasicGetAllReceiptBasicRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toHaveCount(2);
    expect($collection->first())
        ->timeStamp->toBe('String value')
        ->receiptType->toBe('String value')
        ->receiptNbr->toBe('String value')
        ->hold->toBe(true)
        ->status->toBe('String value')
        ->date->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->postPeriod->toBe('String value')
        ->warehouse->toBeNull()
        ->supplier->toBeNull()
        ->location->toBeNull()
        ->currency->toBe('String value')
        ->exchangeRate->toBe(42)
        ->createBill->toBe(true)
        ->supplierRef->toBe('String value')
        ->totalQty->toBe(42)
        ->controlQty->toBe(42)
        ->vatExemptTotal->toBe(42)
        ->vatTaxableTotal->toBe(42)
        ->totalAmt->toBe(42)
        ->controlTotal->toBe(42)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->branchNumber->toBeNull()
        ->dueDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->customStr1->toBe('String value')
        ->customStr2->toBe('String value')
        ->customStr3->toBe('String value')
        ->customStr4->toBe('String value')
        ->customStr5->toBe('String value')
        ->customDec1->toBe(42)
        ->customDec2->toBe(42)
        ->customInt1->toBe(42)
        ->customInt2->toBe(42)
        ->customDateTimeUtc1->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->errorInfo->toBe('String value');
});

it('calls the purchaseReceiptBasicPostRequest method in the PurchaseReceiptBasic resource', function () {
    $bodyData = new PurchaseReceiptBasicUpdateDto(
        lines: [],
        receiptType: 'String value',
        receiptNbr: 'String value',
        hold: true,
        date: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        postPeriod: null,
        warehouseId: 'mock-id-123',
        supplierId: 'mock-id-123',
        locationId: 'mock-id-123',
        currency: 'String value',
        exchangeRate: 42,
        createBill: true,
        supplierRef: 'String value',
        controlQty: 42,
        controlAmount: 42,
        branchNumber: 'String value',
        customStr1: null,
        customStr2: null,
        customStr3: null,
        customStr4: null,
        customStr5: null,
        customDec1: null,
        customDec2: null,
        customInt1: null,
        customInt2: null,
        customDateTimeUtc1: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        timeStamp: 'String value'
    );

    Saloon::fake([
        PurchaseReceiptBasicPostRequest::class => MockResponse::make([], 201),
    ]);

    $request = new PurchaseReceiptBasicPostRequest(
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(PurchaseReceiptBasicPostRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the purchaseReceiptBasicReleaseInvoiceByreceiptNumberRequest method in the PurchaseReceiptBasic resource', function () {
    $bodyData = [];

    Saloon::fake([
        PurchaseReceiptBasicReleaseInvoiceByreceiptNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new PurchaseReceiptBasicReleaseInvoiceByreceiptNumberRequest(
        receiptNumber: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(PurchaseReceiptBasicReleaseInvoiceByreceiptNumberRequest::class);

    expect($response->status())->toBe(201);
});
