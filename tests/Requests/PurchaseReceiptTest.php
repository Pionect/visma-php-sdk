<?php

use Pionect\VismaSdk\Dto\PurchaseReceiptOrderLinesListUpdateDto;
use Pionect\VismaSdk\Dto\PurchaseReceiptOrderListUpdateDto;
use Pionect\VismaSdk\Dto\PurchaseReceiptUpdateDto;
use Pionect\VismaSdk\Requests\PurchaseReceipt\PurchaseReceiptAddPurchaseOrderLinesByreceiptNumberRequest;
use Pionect\VismaSdk\Requests\PurchaseReceipt\PurchaseReceiptAddPurchaseOrdersByreceiptNumberRequest;
use Pionect\VismaSdk\Requests\PurchaseReceipt\PurchaseReceiptCancelReceiptByreceiptNumberRequest;
use Pionect\VismaSdk\Requests\PurchaseReceipt\PurchaseReceiptGetAllReceiptBasicRequest;
use Pionect\VismaSdk\Requests\PurchaseReceipt\PurchaseReceiptGetPurchaseReceiptBasicByreceiptNumberRequest;
use Pionect\VismaSdk\Requests\PurchaseReceipt\PurchaseReceiptPostRequest;
use Pionect\VismaSdk\Requests\PurchaseReceipt\PurchaseReceiptPrintPurchaseReceiptByreceiptNumberRequest;
use Pionect\VismaSdk\Requests\PurchaseReceipt\PurchaseReceiptPutByreceiptNumberRequest;
use Pionect\VismaSdk\Requests\PurchaseReceipt\PurchaseReceiptReleaseReceiptByreceiptNumberRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the purchaseReceiptGetPurchaseReceiptBasicByreceiptNumberRequest method in the PurchaseReceipt resource', function () {
    Saloon::fake([
        PurchaseReceiptGetPurchaseReceiptBasicByreceiptNumberRequest::class => MockResponse::make([
            'landedCost' => [],
            'note' => 'String value',
            'timeStamp' => 'String value',
            'receiptType' => 'String value',
            'receiptNbr' => 'String value',
            'hold' => true,
            'status' => 'String value',
            'date' => '2025-11-22T10:40:04+00:00',
            'postPeriod' => 'String value',
            'warehouse' => [
                'description' => 'String value',
            ],
            'supplier' => [
                'internalId' => 42,
                'number' => 'String value',
                'name' => 'String value',
            ],
            'location' => [
                'countryId' => 'mock-id-123',
                'name' => 'String value',
            ],
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
            'branchNumber' => [
                'number' => 'String value',
                'name' => 'String value',
            ],
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

    $request = new PurchaseReceiptGetPurchaseReceiptBasicByreceiptNumberRequest(
        receiptNumber: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(PurchaseReceiptGetPurchaseReceiptBasicByreceiptNumberRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->note->toBe('String value')
        ->timeStamp->toBe('String value')
        ->receiptType->toBe('String value')
        ->receiptNbr->toBe('String value')
        ->hold->toBe(true)
        ->status->toBe('String value')
        ->date->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->postPeriod->toBe('String value')
        ->warehouse->description->toBe('String value')
        ->supplier->internalId->toBe(42)
        ->supplier->number->toBe('String value')
        ->supplier->name->toBe('String value')
        ->location->countryId->toBe('mock-id-123')
        ->location->name->toBe('String value')
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
        ->branchNumber->number->toBe('String value')
        ->branchNumber->name->toBe('String value')
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

it('calls the purchaseReceiptPutByreceiptNumberRequest method in the PurchaseReceipt resource', function () {
    $bodyData = new PurchaseReceiptUpdateDto(
        lines: [],
        landedCost: [],
        note: 'String value',
        receiptType: 'String value',
        receiptNbr: 'String value',
        hold: true,
        date: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        postPeriod: 'String value',
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
        customStr1: 'String value',
        customStr2: 'String value',
        customStr3: 'String value',
        customStr4: 'String value',
        customStr5: 'String value',
        customDec1: 42,
        customDec2: 42,
        customInt1: 42,
        customInt2: 42,
        customDateTimeUtc1: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        timeStamp: 'String value'
    );

    Saloon::fake([
        PurchaseReceiptPutByreceiptNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new PurchaseReceiptPutByreceiptNumberRequest(
        receiptNumber: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(PurchaseReceiptPutByreceiptNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the purchaseReceiptGetAllReceiptBasicRequest method in the PurchaseReceipt resource', function () {
    Saloon::fake([
        PurchaseReceiptGetAllReceiptBasicRequest::class => MockResponse::make([
            0 => [
                'landedCost' => [],
                'note' => 'String value',
                'timeStamp' => 'String value',
                'receiptType' => 'String value',
                'receiptNbr' => 'String value',
                'hold' => true,
                'status' => 'String value',
                'date' => '2025-11-22T10:40:04+00:00',
                'postPeriod' => 'String value',
                'warehouse' => [
                    'description' => 'String value',
                ],
                'supplier' => [
                    'internalId' => 42,
                    'number' => 'String value',
                    'name' => 'String value',
                ],
                'location' => [
                    'countryId' => 'mock-id-123',
                    'name' => 'String value',
                ],
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
                'branchNumber' => [
                    'number' => 'String value',
                    'name' => 'String value',
                ],
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
                'landedCost' => [],
                'note' => 'String value',
                'timeStamp' => 'String value',
                'receiptType' => 'String value',
                'receiptNbr' => 'String value',
                'hold' => true,
                'status' => 'String value',
                'date' => '2025-11-22T10:40:04+00:00',
                'postPeriod' => 'String value',
                'warehouse' => [
                    'description' => 'String value',
                ],
                'supplier' => [
                    'internalId' => 42,
                    'number' => 'String value',
                    'name' => 'String value',
                ],
                'location' => [
                    'countryId' => 'mock-id-123',
                    'name' => 'String value',
                ],
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
                'branchNumber' => [
                    'number' => 'String value',
                    'name' => 'String value',
                ],
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

    $request = new PurchaseReceiptGetAllReceiptBasicRequest(
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

    Saloon::assertSent(PurchaseReceiptGetAllReceiptBasicRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toHaveCount(2);
    expect($collection->first())
        ->note->toBe('String value')
        ->timeStamp->toBe('String value')
        ->receiptType->toBe('String value')
        ->receiptNbr->toBe('String value')
        ->hold->toBe(true)
        ->status->toBe('String value')
        ->date->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->postPeriod->toBe('String value')
        ->warehouse->description->toBe('String value')
        ->supplier->internalId->toBe(42)
        ->supplier->number->toBe('String value')
        ->supplier->name->toBe('String value')
        ->location->countryId->toBe('mock-id-123')
        ->location->name->toBe('String value')
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
        ->branchNumber->number->toBe('String value')
        ->branchNumber->name->toBe('String value')
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

it('calls the purchaseReceiptPostRequest method in the PurchaseReceipt resource', function () {
    $bodyData = new PurchaseReceiptUpdateDto(
        lines: [],
        landedCost: [],
        note: 'String value',
        receiptType: 'String value',
        receiptNbr: 'String value',
        hold: true,
        date: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        postPeriod: 'String value',
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
        customStr1: 'String value',
        customStr2: 'String value',
        customStr3: 'String value',
        customStr4: 'String value',
        customStr5: 'String value',
        customDec1: 42,
        customDec2: 42,
        customInt1: 42,
        customInt2: 42,
        customDateTimeUtc1: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        timeStamp: 'String value'
    );

    Saloon::fake([
        PurchaseReceiptPostRequest::class => MockResponse::make([], 201),
    ]);

    $request = new PurchaseReceiptPostRequest(
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(PurchaseReceiptPostRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the purchaseReceiptPrintPurchaseReceiptByreceiptNumberRequest method in the PurchaseReceipt resource', function () {
    Saloon::fake([
        PurchaseReceiptPrintPurchaseReceiptByreceiptNumberRequest::class => MockResponse::make([
            'landedCost' => [],
            'note' => 'String value',
            'timeStamp' => 'String value',
            'receiptType' => 'String value',
            'receiptNbr' => 'String value',
            'hold' => true,
            'status' => 'String value',
            'date' => '2025-11-22T10:40:04+00:00',
            'postPeriod' => 'String value',
            'warehouse' => [
                'description' => 'String value',
            ],
            'supplier' => [
                'internalId' => 42,
                'number' => 'String value',
                'name' => 'String value',
            ],
            'location' => [
                'countryId' => 'mock-id-123',
                'name' => 'String value',
            ],
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
            'branchNumber' => [
                'number' => 'String value',
                'name' => 'String value',
            ],
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

    $request = new PurchaseReceiptPrintPurchaseReceiptByreceiptNumberRequest(
        receiptNumber: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(PurchaseReceiptPrintPurchaseReceiptByreceiptNumberRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->note->toBe('String value')
        ->timeStamp->toBe('String value')
        ->receiptType->toBe('String value')
        ->receiptNbr->toBe('String value')
        ->hold->toBe(true)
        ->status->toBe('String value')
        ->date->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->postPeriod->toBe('String value')
        ->warehouse->description->toBe('String value')
        ->supplier->internalId->toBe(42)
        ->supplier->number->toBe('String value')
        ->supplier->name->toBe('String value')
        ->location->countryId->toBe('mock-id-123')
        ->location->name->toBe('String value')
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
        ->branchNumber->number->toBe('String value')
        ->branchNumber->name->toBe('String value')
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

it('calls the purchaseReceiptReleaseReceiptByreceiptNumberRequest method in the PurchaseReceipt resource', function () {
    $bodyData = [];

    Saloon::fake([
        PurchaseReceiptReleaseReceiptByreceiptNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new PurchaseReceiptReleaseReceiptByreceiptNumberRequest(
        receiptNumber: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(PurchaseReceiptReleaseReceiptByreceiptNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the purchaseReceiptCancelReceiptByreceiptNumberRequest method in the PurchaseReceipt resource', function () {
    $bodyData = [];

    Saloon::fake([
        PurchaseReceiptCancelReceiptByreceiptNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new PurchaseReceiptCancelReceiptByreceiptNumberRequest(
        receiptNumber: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(PurchaseReceiptCancelReceiptByreceiptNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the purchaseReceiptAddPurchaseOrdersByreceiptNumberRequest method in the PurchaseReceipt resource', function () {
    $bodyData = new PurchaseReceiptOrderListUpdateDto(
        purchaseOrders: []
    );

    Saloon::fake([
        PurchaseReceiptAddPurchaseOrdersByreceiptNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new PurchaseReceiptAddPurchaseOrdersByreceiptNumberRequest(
        receiptNumber: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(PurchaseReceiptAddPurchaseOrdersByreceiptNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the purchaseReceiptAddPurchaseOrderLinesByreceiptNumberRequest method in the PurchaseReceipt resource', function () {
    $bodyData = new PurchaseReceiptOrderLinesListUpdateDto(
        purchaseOrderLines: []
    );

    Saloon::fake([
        PurchaseReceiptAddPurchaseOrderLinesByreceiptNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new PurchaseReceiptAddPurchaseOrderLinesByreceiptNumberRequest(
        receiptNumber: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(PurchaseReceiptAddPurchaseOrderLinesByreceiptNumberRequest::class);

    expect($response->status())->toBe(201);
});
