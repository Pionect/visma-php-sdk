<?php

use Pionect\VismaSdk\Requests\PurchaseReceiptV2\PurchaseReceiptV2GetAllReceiptsRequest;
use Pionect\VismaSdk\Requests\PurchaseReceiptV2\PurchaseReceiptV2GetPurchaseReceiptByreceiptNumberRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the purchaseReceiptV2getPurchaseReceiptByreceiptNumberRequest method in the PurchaseReceiptV2 resource', function () {
    Saloon::fake([
        PurchaseReceiptV2GetPurchaseReceiptByreceiptNumberRequest::class => MockResponse::make([
            'landedCost' => [],
            'note' => 'String value',
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

    $request = new PurchaseReceiptV2GetPurchaseReceiptByreceiptNumberRequest(
        receiptNumber: 'test string',
        includeCustomFreeFields: true,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(PurchaseReceiptV2GetPurchaseReceiptByreceiptNumberRequest::class);

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

it('calls the purchaseReceiptV2getAllReceiptsRequest method in the PurchaseReceiptV2 resource', function () {
    Saloon::fake([
        PurchaseReceiptV2GetAllReceiptsRequest::class => MockResponse::make([
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
                'landedCost' => [],
                'note' => 'String value',
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

    $request = new PurchaseReceiptV2GetAllReceiptsRequest(
        receiptType: 'test string',
        status: 'test string',
        greaterThanValue: 'test string',
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        supplier: 'test string',
        poOrderNbr: 'test string',
        expandNote: true,
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

    Saloon::assertSent(PurchaseReceiptV2GetAllReceiptsRequest::class);

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
