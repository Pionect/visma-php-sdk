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
            'data' => [
                'type' => 'purchaseReceiptV2s',
                'id' => 'mock-id-123',
                'attributes' => [
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
            ],
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
        ->note->toBe('Mock value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->receiptType->toBe('Mock value')
        ->receiptNbr->toBe('Mock value')
        ->hold->toBe(true)
        ->status->toBe('Mock value')
        ->date->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->postPeriod->toBe('Mock value')
        ->warehouse->toBe('Mock value')
        ->supplier->toBe('Mock value')
        ->location->toBe('Mock value')
        ->currency->toBe('Mock value')
        ->exchangeRate->toBe(3.14)
        ->createBill->toBe(true)
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

it('calls the purchaseReceiptV2getAllReceiptsCollection method in the PurchaseReceiptV2 resource', function () {
    Saloon::fake([
        PurchaseReceiptV2GetAllReceiptsCollectionRequest::class => MockResponse::make([
            'data' => [
                0 => [
                    'type' => 'purchaseReceiptV2s',
                    'id' => 'mock-id-1',
                    'attributes' => [
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
                ],
                1 => [
                    'type' => 'purchaseReceiptV2s',
                    'id' => 'mock-id-2',
                    'attributes' => [
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
                ],
            ],
        ], 200),
    ]);

    $request = (new PurchaseReceiptV2GetAllReceiptsCollectionRequest(receiptType: 'test string', status: 'test string', greaterThanValue: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', supplier: 'test string', poOrderNbr: 'test string', expandNote: true, branch: 'test string', finPeriod: 'test string', receiptDate: 'test string', receiptDateCondition: 'test string', dueDate: 'test string', dueDateCondition: 'test string', includeCustomFreeFields: true, pageNumber: 123, pageSize: 123));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (PurchaseReceiptV2GetAllReceiptsCollectionRequest $request) {
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
        ->hold->toBe(true)
        ->status->toBe('Mock value')
        ->date->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->postPeriod->toBe('Mock value')
        ->warehouse->toBe('Mock value')
        ->supplier->toBe('Mock value')
        ->location->toBe('Mock value')
        ->currency->toBe('Mock value')
        ->exchangeRate->toBe(3.14)
        ->createBill->toBe(true)
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
