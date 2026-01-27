<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\PurchaseReceiptV2\PurchaseReceiptV2GetAllReceiptsCollectionRequest;
use Pionect\VismaSdk\Requests\PurchaseReceiptV2\PurchaseReceiptV2GetPurchaseReceiptByreceiptNumberRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the purchaseReceiptV2getPurchaseReceiptByreceiptNumber method in the PurchaseReceiptV2 resource', function () {
    Saloon::fake([
        PurchaseReceiptV2GetPurchaseReceiptByreceiptNumberRequest::class => MockResponse::make([
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
        ], 200),
    ]);

    $request = new PurchaseReceiptV2GetPurchaseReceiptByreceiptNumberRequest(
        receiptNumberId: 'test string',
        includeCustomFreeFields: true,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(PurchaseReceiptV2GetPurchaseReceiptByreceiptNumberRequest::class);

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
        ->errorInfo->toBe('String value');
});

it('calls the purchaseReceiptV2getAllReceiptsCollection method in the PurchaseReceiptV2 resource', function () {
    Saloon::fake([
        PurchaseReceiptV2GetAllReceiptsCollectionRequest::class => MockResponse::make([
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
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
        ], 200),
    ]);

    $request = (new PurchaseReceiptV2GetAllReceiptsCollectionRequest(receiptType: 'test string', status: 'test string', greaterThanValue: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', supplier: 'test string', poOrderNbr: 'test string', expandNote: true, branch: 'test string', finPeriod: 'test string', receiptDate: 'test string', receiptDateCondition: 'test string', dueDate: 'test string', dueDateCondition: 'test string', includeCustomFreeFields: true, pageNumber: 123, pageSize: 123));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (PurchaseReceiptV2GetAllReceiptsCollectionRequest $request) {
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
        ->errorInfo->toBe('String value');
});
