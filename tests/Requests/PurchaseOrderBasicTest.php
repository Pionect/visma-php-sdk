<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\PurchaseOrderBasic\PurchaseOrderBasicGetAllOrderBasicCollectionRequest;
use Pionect\VismaSdk\Requests\PurchaseOrderBasic\PurchaseOrderBasicGetPurchaseOrderBasicBypurchaseOrderNumberRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector(
        clientId: 'replace',
        clientSecret: 'replace'
    );
});

it('calls the purchaseOrderBasicGetPurchaseOrderBasicBypurchaseOrderNumber method in the PurchaseOrderBasic resource', function () {
    Saloon::fake([
        PurchaseOrderBasicGetPurchaseOrderBasicBypurchaseOrderNumberRequest::class => MockResponse::make([
            'orderType' => 'Mock value',
            'orderNbr' => 'Mock value',
            'hold' => true,
            'status' => 'Mock value',
            'date' => '2025-11-22T10:40:04.065Z',
            'promisedOn' => '2025-11-22T10:40:04.065Z',
            'description' => 'Mock value',
            'supplier' => 'Mock value',
            'location' => 'Mock value',
            'owner' => 'Mock value',
            'currency' => 'Mock value',
            'supplierRef' => 'Mock value',
            'exchangeRate' => 3.14,
            'lineTotal' => 3.14,
            'lineTotalInBaseCurrency' => 3.14,
            'vatExemptTotal' => 3.14,
            'vatExemptTotalInBaseCurrency' => 3.14,
            'taxTotal' => 3.14,
            'taxTotalInBaseCurrency' => 3.14,
            'orderTotal' => 3.14,
            'orderTotalInBaseCurrency' => 3.14,
            'controlTotal' => 3.14,
            'controlTotalInBaseCurrency' => 3.14,
            'branch' => 'Mock value',
            'lines' => [],
            'taxDetails' => [],
            'purchaseReceipts' => [],
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'note' => 'Mock value',
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
            'timeStamp' => '2025-11-22T10:40:04.065Z',
            'errorInfo' => 'Mock value',
            'metadata' => 'Mock value',
        ], 200),
    ]);

    $request = new PurchaseOrderBasicGetPurchaseOrderBasicBypurchaseOrderNumberRequest(
        purchaseOrderNumberId: 'test string',
        includeCustomFreeFields: true,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(PurchaseOrderBasicGetPurchaseOrderBasicBypurchaseOrderNumberRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->orderType->toBe('Mock value')
        ->orderNbr->toBe('Mock value')
        ->hold->toBeTrue()
        ->status->toBe('Mock value')
        ->date->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->promisedOn->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->description->toBe('Mock value')
        ->supplier->toBe('Mock value')
        ->location->toBe('Mock value')
        ->owner->toBe('Mock value')
        ->currency->toBe('Mock value')
        ->supplierRef->toBe('Mock value')
        ->exchangeRate->toBe(3.14)
        ->lineTotal->toBe(3.14)
        ->lineTotalInBaseCurrency->toBe(3.14)
        ->vatExemptTotal->toBe(3.14)
        ->vatExemptTotalInBaseCurrency->toBe(3.14)
        ->taxTotal->toBe(3.14)
        ->taxTotalInBaseCurrency->toBe(3.14)
        ->orderTotal->toBe(3.14)
        ->orderTotalInBaseCurrency->toBe(3.14)
        ->controlTotal->toBe(3.14)
        ->controlTotalInBaseCurrency->toBe(3.14)
        ->branch->toBe('Mock value')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->note->toBe('Mock value')
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
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the purchaseOrderBasicGetAllOrderBasicCollection method in the PurchaseOrderBasic resource', function () {
    Saloon::fake([
        PurchaseOrderBasicGetAllOrderBasicCollectionRequest::class => MockResponse::make([
            0 => [
                'orderType' => 'Mock value',
                'orderNbr' => 'Mock value',
                'hold' => true,
                'status' => 'Mock value',
                'date' => '2025-11-22T10:40:04.065Z',
                'promisedOn' => '2025-11-22T10:40:04.065Z',
                'description' => 'Mock value',
                'supplier' => 'Mock value',
                'location' => 'Mock value',
                'owner' => 'Mock value',
                'currency' => 'Mock value',
                'supplierRef' => 'Mock value',
                'exchangeRate' => 3.14,
                'lineTotal' => 3.14,
                'lineTotalInBaseCurrency' => 3.14,
                'vatExemptTotal' => 3.14,
                'vatExemptTotalInBaseCurrency' => 3.14,
                'taxTotal' => 3.14,
                'taxTotalInBaseCurrency' => 3.14,
                'orderTotal' => 3.14,
                'orderTotalInBaseCurrency' => 3.14,
                'controlTotal' => 3.14,
                'controlTotalInBaseCurrency' => 3.14,
                'branch' => 'Mock value',
                'lines' => [],
                'taxDetails' => [],
                'purchaseReceipts' => [],
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'note' => 'Mock value',
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
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'Mock value',
                'metadata' => 'Mock value',
            ],
            1 => [
                'orderType' => 'Mock value',
                'orderNbr' => 'Mock value',
                'hold' => true,
                'status' => 'Mock value',
                'date' => '2025-11-22T10:40:04.065Z',
                'promisedOn' => '2025-11-22T10:40:04.065Z',
                'description' => 'Mock value',
                'supplier' => 'Mock value',
                'location' => 'Mock value',
                'owner' => 'Mock value',
                'currency' => 'Mock value',
                'supplierRef' => 'Mock value',
                'exchangeRate' => 3.14,
                'lineTotal' => 3.14,
                'lineTotalInBaseCurrency' => 3.14,
                'vatExemptTotal' => 3.14,
                'vatExemptTotalInBaseCurrency' => 3.14,
                'taxTotal' => 3.14,
                'taxTotalInBaseCurrency' => 3.14,
                'orderTotal' => 3.14,
                'orderTotalInBaseCurrency' => 3.14,
                'controlTotal' => 3.14,
                'controlTotalInBaseCurrency' => 3.14,
                'branch' => 'Mock value',
                'lines' => [],
                'taxDetails' => [],
                'purchaseReceipts' => [],
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'note' => 'Mock value',
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
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'Mock value',
                'metadata' => 'Mock value',
            ],
        ], 200),
    ]);

    $request = (new PurchaseOrderBasicGetAllOrderBasicCollectionRequest(greaterThanValue: 'test string', numberToRead: 123, skipRecords: 123, lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', orderType: 'test string', orderStatus: 'test string', supplier: 'test string', branch: 'test string', orderDate: 'test string', orderDateCondition: 'test string', deliveryDate: 'test string', deliveryDateCondition: 'test string', includeCustomFreeFields: true, pageNumber: 123, pageSize: 123));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (PurchaseOrderBasicGetAllOrderBasicCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->orderType->toBe('Mock value')
        ->orderNbr->toBe('Mock value')
        ->hold->toBeTrue()
        ->status->toBe('Mock value')
        ->date->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->promisedOn->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->description->toBe('Mock value')
        ->supplier->toBe('Mock value')
        ->location->toBe('Mock value')
        ->owner->toBe('Mock value')
        ->currency->toBe('Mock value')
        ->supplierRef->toBe('Mock value')
        ->exchangeRate->toBe(3.14)
        ->lineTotal->toBe(3.14)
        ->lineTotalInBaseCurrency->toBe(3.14)
        ->vatExemptTotal->toBe(3.14)
        ->vatExemptTotalInBaseCurrency->toBe(3.14)
        ->taxTotal->toBe(3.14)
        ->taxTotalInBaseCurrency->toBe(3.14)
        ->orderTotal->toBe(3.14)
        ->orderTotalInBaseCurrency->toBe(3.14)
        ->controlTotal->toBe(3.14)
        ->controlTotalInBaseCurrency->toBe(3.14)
        ->branch->toBe('Mock value')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->note->toBe('Mock value')
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
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});
