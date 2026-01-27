<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\PurchaseReceiptBasic\PurchaseReceiptBasicGetAllReceiptBasicCollectionRequest;
use Pionect\VismaSdk\Requests\PurchaseReceiptBasic\PurchaseReceiptBasicGetPurchaseReceiptBasicByreceiptNumberRequest;
use Pionect\VismaSdk\Requests\PurchaseReceiptBasic\PurchaseReceiptBasicReleaseInvoiceByreceiptNumberRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Http\Request;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the purchaseReceiptBasicGetPurchaseReceiptBasicByreceiptNumber method in the PurchaseReceiptBasic resource', function () {
    Saloon::fake([
        PurchaseReceiptBasicGetPurchaseReceiptBasicByreceiptNumberRequest::class => MockResponse::make([
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

    $request = new PurchaseReceiptBasicGetPurchaseReceiptBasicByreceiptNumberRequest(
        receiptNumberId: 'test string',
        includeCustomFreeFields: true,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(PurchaseReceiptBasicGetPurchaseReceiptBasicByreceiptNumberRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
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

it('calls the purchaseReceiptBasicGetAllReceiptBasicCollection method in the PurchaseReceiptBasic resource', function () {
    Saloon::fake([
        PurchaseReceiptBasicGetAllReceiptBasicCollectionRequest::class => MockResponse::make([
            0 => [
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

    $request = (new PurchaseReceiptBasicGetAllReceiptBasicCollectionRequest(receiptType: 'test string', status: 'test string', greaterThanValue: 'test string', numberToRead: 123, skipRecords: 123, lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', supplier: 'test string', poOrderNbr: 'test string', branch: 'test string', finPeriod: 'test string', receiptDate: 'test string', receiptDateCondition: 'test string', dueDate: 'test string', dueDateCondition: 'test string', includeCustomFreeFields: true, pageNumber: 123, pageSize: 123));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (PurchaseReceiptBasicGetAllReceiptBasicCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
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

it('calls the purchaseReceiptBasicReleaseInvoiceByreceiptNumber method in the PurchaseReceiptBasic resource', function () {
    $mockClient = Saloon::fake([
        PurchaseReceiptBasicReleaseInvoiceByreceiptNumberRequest::class => MockResponse::make([], 200),
    ]);

    // Create DTO with sample data
    $dto = \Pionect\VismaSdk\Dto\ReleasePurchaseReceiptActionResultDto::factory()->state([
        'actionId' => 'action_id-123',
        'actionResult' => 'test value',
        'errorInfo' => 'test value',
    ])->make();

    $request = new PurchaseReceiptBasicReleaseInvoiceByreceiptNumberRequest(receiptNumberId: 'receipt_number_id-123', data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(PurchaseReceiptBasicReleaseInvoiceByreceiptNumberRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->toHaveKey('data')
            ->data->type->toBe('purchaseReceiptBasics')
            ->data->attributes->scoped(fn ($attributes) => $attributes
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value')
            ->errorInfo->toBe('test value')
            );

        return true;
    });
});
