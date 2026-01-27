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
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the purchaseReceiptGetPurchaseReceiptBasicByreceiptNumber method in the PurchaseReceipt resource', function () {
    Saloon::fake([
        PurchaseReceiptGetPurchaseReceiptBasicByreceiptNumberRequest::class => MockResponse::make([
            'landedCost' => [],
            'note' => 'String value',
            'timeStamp' => '2025-11-22T10:40:04.065Z',
            'receiptType' => 'String value',
            'receiptNbr' => 'String value',
            'hold' => true,
            'status' => 'String value',
            'date' => '2025-11-22T10:40:04.065Z',
            'postPeriod' => 'String value',
            'warehouse' => null,
            'supplier' => null,
            'location' => null,
            'currency' => 'String value',
            'exchangeRate' => 3.14,
            'createBill' => true,
            'supplierRef' => 'String value',
            'totalQty' => 3.14,
            'controlQty' => 3.14,
            'vatExemptTotal' => 3.14,
            'vatTaxableTotal' => 3.14,
            'totalAmt' => 3.14,
            'controlTotal' => 3.14,
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'branchNumber' => null,
            'lines' => [],
            'dueDate' => '2025-11-22T10:40:04.065Z',
            'customStr1' => 'String value',
            'customStr2' => 'String value',
            'customStr3' => 'String value',
            'customStr4' => 'String value',
            'customStr5' => 'String value',
            'customDec1' => 3.14,
            'customDec2' => 3.14,
            'customInt1' => 42,
            'customInt2' => 42,
            'customDateTimeUtc1' => '2025-11-22T10:40:04.065Z',
            'errorInfo' => 'String value',
            'id' => 'mock-id-123',
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
        ->note->toBe('String value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->receiptType->toBe('String value')
        ->receiptNbr->toBe('String value')
        ->hold->toBeTrue()
        ->status->toBe('String value')
        ->date->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->postPeriod->toBe('String value')
        ->warehouse->toBeNull()
        ->supplier->toBeNull()
        ->location->toBeNull()
        ->currency->toBe('String value')
        ->exchangeRate->toBe(3.14)
        ->createBill->toBeTrue()
        ->supplierRef->toBe('String value')
        ->totalQty->toBe(3.14)
        ->controlQty->toBe(3.14)
        ->vatExemptTotal->toBe(3.14)
        ->vatTaxableTotal->toBe(3.14)
        ->totalAmt->toBe(3.14)
        ->controlTotal->toBe(3.14)
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->branchNumber->toBeNull()
        ->dueDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->customStr1->toBe('String value')
        ->customStr2->toBe('String value')
        ->customStr3->toBe('String value')
        ->customStr4->toBe('String value')
        ->customStr5->toBe('String value')
        ->customDec1->toBe(3.14)
        ->customDec2->toBe(3.14)
        ->customInt1->toBe(42)
        ->customInt2->toBe(42)
        ->customDateTimeUtc1->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('String value')
        ->id->toBe('mock-id-123');
});

it('calls the purchaseReceiptGetAllReceiptBasicCollection method in the PurchaseReceipt resource', function () {
    Saloon::fake([
        PurchaseReceiptGetAllReceiptBasicCollectionRequest::class => MockResponse::make([
            0 => [
                'landedCost' => [],
                'note' => 'String value',
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'receiptType' => 'String value',
                'receiptNbr' => 'String value',
                'hold' => true,
                'status' => 'String value',
                'date' => '2025-11-22T10:40:04.065Z',
                'postPeriod' => 'String value',
                'warehouse' => null,
                'supplier' => null,
                'location' => null,
                'currency' => 'String value',
                'exchangeRate' => 3.14,
                'createBill' => true,
                'supplierRef' => 'String value',
                'totalQty' => 3.14,
                'controlQty' => 3.14,
                'vatExemptTotal' => 3.14,
                'vatTaxableTotal' => 3.14,
                'totalAmt' => 3.14,
                'controlTotal' => 3.14,
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'branchNumber' => null,
                'lines' => [],
                'dueDate' => '2025-11-22T10:40:04.065Z',
                'customStr1' => 'String value',
                'customStr2' => 'String value',
                'customStr3' => 'String value',
                'customStr4' => 'String value',
                'customStr5' => 'String value',
                'customDec1' => 3.14,
                'customDec2' => 3.14,
                'customInt1' => 42,
                'customInt2' => 42,
                'customDateTimeUtc1' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'String value',
                'id' => 'mock-id-123',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
            1 => [
                'landedCost' => [],
                'note' => 'String value',
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'receiptType' => 'String value',
                'receiptNbr' => 'String value',
                'hold' => true,
                'status' => 'String value',
                'date' => '2025-11-22T10:40:04.065Z',
                'postPeriod' => 'String value',
                'warehouse' => null,
                'supplier' => null,
                'location' => null,
                'currency' => 'String value',
                'exchangeRate' => 3.14,
                'createBill' => true,
                'supplierRef' => 'String value',
                'totalQty' => 3.14,
                'controlQty' => 3.14,
                'vatExemptTotal' => 3.14,
                'vatTaxableTotal' => 3.14,
                'totalAmt' => 3.14,
                'controlTotal' => 3.14,
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'branchNumber' => null,
                'lines' => [],
                'dueDate' => '2025-11-22T10:40:04.065Z',
                'customStr1' => 'String value',
                'customStr2' => 'String value',
                'customStr3' => 'String value',
                'customStr4' => 'String value',
                'customStr5' => 'String value',
                'customDec1' => 3.14,
                'customDec2' => 3.14,
                'customInt1' => 42,
                'customInt2' => 42,
                'customDateTimeUtc1' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'String value',
                'id' => 'mock-id-123',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
        ], 200),
    ]);

    $request = (new PurchaseReceiptGetAllReceiptBasicCollectionRequest(receiptType: 'test string', status: 'test string', greaterThanValue: 'test string', numberToRead: 123, skipRecords: 123, lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', supplier: 'test string', poOrderNbr: 'test string', branch: 'test string', finPeriod: 'test string', receiptDate: 'test string', receiptDateCondition: 'test string', dueDate: 'test string', dueDateCondition: 'test string', includeCustomFreeFields: true, pageNumber: 123, pageSize: 123));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (PurchaseReceiptGetAllReceiptBasicCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->note->toBe('String value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->receiptType->toBe('String value')
        ->receiptNbr->toBe('String value')
        ->hold->toBeTrue()
        ->status->toBe('String value')
        ->date->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->postPeriod->toBe('String value')
        ->warehouse->toBeNull()
        ->supplier->toBeNull()
        ->location->toBeNull()
        ->currency->toBe('String value')
        ->exchangeRate->toBe(3.14)
        ->createBill->toBeTrue()
        ->supplierRef->toBe('String value')
        ->totalQty->toBe(3.14)
        ->controlQty->toBe(3.14)
        ->vatExemptTotal->toBe(3.14)
        ->vatTaxableTotal->toBe(3.14)
        ->totalAmt->toBe(3.14)
        ->controlTotal->toBe(3.14)
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->branchNumber->toBeNull()
        ->dueDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->customStr1->toBe('String value')
        ->customStr2->toBe('String value')
        ->customStr3->toBe('String value')
        ->customStr4->toBe('String value')
        ->customStr5->toBe('String value')
        ->customDec1->toBe(3.14)
        ->customDec2->toBe(3.14)
        ->customInt1->toBe(42)
        ->customInt2->toBe(42)
        ->customDateTimeUtc1->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('String value')
        ->id->toBe('mock-id-123');
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
