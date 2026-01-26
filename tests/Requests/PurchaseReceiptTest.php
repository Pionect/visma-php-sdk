<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\PurchaseReceipt\PurchaseReceiptAddPurchaseOrderLinesByreceiptNumberRequest;
use Pionect\VismaSdk\Requests\PurchaseReceipt\PurchaseReceiptAddPurchaseOrdersByreceiptNumberRequest;
use Pionect\VismaSdk\Requests\PurchaseReceipt\PurchaseReceiptGetAllReceiptBasicCollectionRequest;
use Pionect\VismaSdk\Requests\PurchaseReceipt\PurchaseReceiptGetPurchaseReceiptBasicByreceiptNumberRequest;
use Pionect\VismaSdk\Requests\PurchaseReceipt\PurchaseReceiptReleaseReceiptByreceiptNumberRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Http\Request;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector(
        clientId: 'replace',
        clientSecret: 'replace'
    );
});

it('calls the purchaseReceiptGetPurchaseReceiptBasicByreceiptNumber method in the PurchaseReceipt resource', function () {
    Saloon::fake([
        PurchaseReceiptGetPurchaseReceiptBasicByreceiptNumberRequest::class => MockResponse::make([
            'landedCost' => [],
            'note' => 'Mock value',
            'timeStamp' => '2025-11-22T10:40:04.065Z',
            'receiptType' => 'Mock value',
            'receiptNbr' => 'Mock value',
            'hold' => true,
            'status' => 'Mock value',
            'date' => '2025-11-22T10:40:04.065Z',
            'postPeriod' => 'Mock value',
            'warehouse' => 'Mock value',
            'supplier' => 'Mock value',
            'location' => 'Mock value',
            'currency' => 'Mock value',
            'exchangeRate' => 3.14,
            'createBill' => true,
            'supplierRef' => 'Mock value',
            'totalQty' => 3.14,
            'controlQty' => 3.14,
            'vatExemptTotal' => 3.14,
            'vatTaxableTotal' => 3.14,
            'totalAmt' => 3.14,
            'controlTotal' => 3.14,
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'branchNumber' => 'Mock value',
            'lines' => [],
            'dueDate' => '2025-11-22T10:40:04.065Z',
            'customStr1' => 'Mock value',
            'customStr2' => 'Mock value',
            'customStr3' => 'Mock value',
            'customStr4' => 'Mock value',
            'customStr5' => 'Mock value',
            'customDec1' => 3.14,
            'customDec2' => 3.14,
            'customInt1' => 42,
            'customInt2' => 42,
            'customDateTimeUtc1' => '2025-11-22T10:40:04.065Z',
            'errorInfo' => 'Mock value',
            'metadata' => 'Mock value',
        ], 200),
    ]);

    $request = new PurchaseReceiptGetPurchaseReceiptBasicByreceiptNumberRequest(
        receiptNumberId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(PurchaseReceiptGetPurchaseReceiptBasicByreceiptNumberRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->note->toBe('Mock value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->receiptType->toBe('Mock value')
        ->receiptNbr->toBe('Mock value')
        ->hold->toBeTrue()
        ->status->toBe('Mock value')
        ->date->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->postPeriod->toBe('Mock value')
        ->warehouse->toBe('Mock value')
        ->supplier->toBe('Mock value')
        ->location->toBe('Mock value')
        ->currency->toBe('Mock value')
        ->exchangeRate->toBe(3.14)
        ->createBill->toBeTrue()
        ->supplierRef->toBe('Mock value')
        ->totalQty->toBe(3.14)
        ->controlQty->toBe(3.14)
        ->vatExemptTotal->toBe(3.14)
        ->vatTaxableTotal->toBe(3.14)
        ->totalAmt->toBe(3.14)
        ->controlTotal->toBe(3.14)
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->branchNumber->toBe('Mock value')
        ->dueDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->customStr1->toBe('Mock value')
        ->customStr2->toBe('Mock value')
        ->customStr3->toBe('Mock value')
        ->customStr4->toBe('Mock value')
        ->customStr5->toBe('Mock value')
        ->customDec1->toBe(3.14)
        ->customDec2->toBe(3.14)
        ->customInt1->toBe(42)
        ->customInt2->toBe(42)
        ->customDateTimeUtc1->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the purchaseReceiptGetAllReceiptBasicCollection method in the PurchaseReceipt resource', function () {
    Saloon::fake([
        PurchaseReceiptGetAllReceiptBasicCollectionRequest::class => MockResponse::make([
            0 => [
                'landedCost' => [],
                'note' => 'Mock value',
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'receiptType' => 'Mock value',
                'receiptNbr' => 'Mock value',
                'hold' => true,
                'status' => 'Mock value',
                'date' => '2025-11-22T10:40:04.065Z',
                'postPeriod' => 'Mock value',
                'warehouse' => 'Mock value',
                'supplier' => 'Mock value',
                'location' => 'Mock value',
                'currency' => 'Mock value',
                'exchangeRate' => 3.14,
                'createBill' => true,
                'supplierRef' => 'Mock value',
                'totalQty' => 3.14,
                'controlQty' => 3.14,
                'vatExemptTotal' => 3.14,
                'vatTaxableTotal' => 3.14,
                'totalAmt' => 3.14,
                'controlTotal' => 3.14,
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'branchNumber' => 'Mock value',
                'lines' => [],
                'dueDate' => '2025-11-22T10:40:04.065Z',
                'customStr1' => 'Mock value',
                'customStr2' => 'Mock value',
                'customStr3' => 'Mock value',
                'customStr4' => 'Mock value',
                'customStr5' => 'Mock value',
                'customDec1' => 3.14,
                'customDec2' => 3.14,
                'customInt1' => 42,
                'customInt2' => 42,
                'customDateTimeUtc1' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'Mock value',
                'metadata' => 'Mock value',
            ],
            1 => [
                'landedCost' => [],
                'note' => 'Mock value',
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'receiptType' => 'Mock value',
                'receiptNbr' => 'Mock value',
                'hold' => true,
                'status' => 'Mock value',
                'date' => '2025-11-22T10:40:04.065Z',
                'postPeriod' => 'Mock value',
                'warehouse' => 'Mock value',
                'supplier' => 'Mock value',
                'location' => 'Mock value',
                'currency' => 'Mock value',
                'exchangeRate' => 3.14,
                'createBill' => true,
                'supplierRef' => 'Mock value',
                'totalQty' => 3.14,
                'controlQty' => 3.14,
                'vatExemptTotal' => 3.14,
                'vatTaxableTotal' => 3.14,
                'totalAmt' => 3.14,
                'controlTotal' => 3.14,
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'branchNumber' => 'Mock value',
                'lines' => [],
                'dueDate' => '2025-11-22T10:40:04.065Z',
                'customStr1' => 'Mock value',
                'customStr2' => 'Mock value',
                'customStr3' => 'Mock value',
                'customStr4' => 'Mock value',
                'customStr5' => 'Mock value',
                'customDec1' => 3.14,
                'customDec2' => 3.14,
                'customInt1' => 42,
                'customInt2' => 42,
                'customDateTimeUtc1' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'Mock value',
                'metadata' => 'Mock value',
            ],
        ], 200),
    ]);

    $request = (new PurchaseReceiptGetAllReceiptBasicCollectionRequest(receiptType: 'test string', status: 'test string', greaterThanValue: 'test string', numberToRead: 123, skipRecords: 123, lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', supplier: 'test string', poOrderNbr: 'test string', branch: 'test string', finPeriod: 'test string', receiptDate: 'test string', receiptDateCondition: 'test string', dueDate: 'test string', dueDateCondition: 'test string', includeCustomFreeFields: true, pageNumber: 123, pageSize: 123));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (PurchaseReceiptGetAllReceiptBasicCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->note->toBe('Mock value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->receiptType->toBe('Mock value')
        ->receiptNbr->toBe('Mock value')
        ->hold->toBeTrue()
        ->status->toBe('Mock value')
        ->date->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->postPeriod->toBe('Mock value')
        ->warehouse->toBe('Mock value')
        ->supplier->toBe('Mock value')
        ->location->toBe('Mock value')
        ->currency->toBe('Mock value')
        ->exchangeRate->toBe(3.14)
        ->createBill->toBeTrue()
        ->supplierRef->toBe('Mock value')
        ->totalQty->toBe(3.14)
        ->controlQty->toBe(3.14)
        ->vatExemptTotal->toBe(3.14)
        ->vatTaxableTotal->toBe(3.14)
        ->totalAmt->toBe(3.14)
        ->controlTotal->toBe(3.14)
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->branchNumber->toBe('Mock value')
        ->dueDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->customStr1->toBe('Mock value')
        ->customStr2->toBe('Mock value')
        ->customStr3->toBe('Mock value')
        ->customStr4->toBe('Mock value')
        ->customStr5->toBe('Mock value')
        ->customDec1->toBe(3.14)
        ->customDec2->toBe(3.14)
        ->customInt1->toBe(42)
        ->customInt2->toBe(42)
        ->customDateTimeUtc1->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the purchaseReceiptReleaseReceiptByreceiptNumber method in the PurchaseReceipt resource', function () {
    $mockClient = Saloon::fake([
        PurchaseReceiptReleaseReceiptByreceiptNumberRequest::class => MockResponse::make([], 200),
    ]);

    // Create DTO with sample data
    $dto = \Pionect\VismaSdk\Dto\ReleasePurchaseReceiptActionResultDto::factory()->state([
        'actionId' => 'action_id-123',
        'actionResult' => 'test value',
        'errorInfo' => 'test value',
    ])->make();

    $request = new PurchaseReceiptReleaseReceiptByreceiptNumberRequest(receiptNumberId: 'receipt_number_id-123', data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(PurchaseReceiptReleaseReceiptByreceiptNumberRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->toHaveKey('data')
            ->data->type->toBe('purchaseReceipts')
            ->data->attributes->scoped(fn ($attributes) => $attributes
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value')
            ->errorInfo->toBe('test value')
            );

        return true;
    });
});

it('calls the purchaseReceiptAddPurchaseOrdersByreceiptNumber method in the PurchaseReceipt resource', function () {
    $mockClient = Saloon::fake([
        PurchaseReceiptAddPurchaseOrdersByreceiptNumberRequest::class => MockResponse::make([], 200),
    ]);

    // Create DTO with sample data
    $dto = \Pionect\VismaSdk\Dto\AddOrdersToPurchaseReceiptActionResultDto::factory()->state([
        'actionId' => 'action_id-123',
        'actionResult' => 'test value',
        'errorInfo' => 'test value',
    ])->make();

    $request = new PurchaseReceiptAddPurchaseOrdersByreceiptNumberRequest(receiptNumberId: 'receipt_number_id-123', data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(PurchaseReceiptAddPurchaseOrdersByreceiptNumberRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->toHaveKey('data')
            ->data->type->toBe('purchaseReceipts')
            ->data->attributes->scoped(fn ($attributes) => $attributes
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value')
            ->errorInfo->toBe('test value')
            );

        return true;
    });
});

it('calls the purchaseReceiptAddPurchaseOrderLinesByreceiptNumber method in the PurchaseReceipt resource', function () {
    $mockClient = Saloon::fake([
        PurchaseReceiptAddPurchaseOrderLinesByreceiptNumberRequest::class => MockResponse::make([], 200),
    ]);

    // Create DTO with sample data
    $dto = \Pionect\VismaSdk\Dto\AddOrderLinesToPurchaseReceiptActionResultDto::factory()->state([
        'actionId' => 'action_id-123',
        'actionResult' => 'test value',
        'errorInfo' => 'test value',
    ])->make();

    $request = new PurchaseReceiptAddPurchaseOrderLinesByreceiptNumberRequest(receiptNumberId: 'receipt_number_id-123', data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(PurchaseReceiptAddPurchaseOrderLinesByreceiptNumberRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->toHaveKey('data')
            ->data->type->toBe('purchaseReceipts')
            ->data->attributes->scoped(fn ($attributes) => $attributes
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value')
            ->errorInfo->toBe('test value')
            );

        return true;
    });
});
