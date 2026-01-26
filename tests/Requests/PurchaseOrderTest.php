<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\PurchaseOrder\PurchaseOrderGetAllOrderCollectionRequest;
use Pionect\VismaSdk\Requests\PurchaseOrder\PurchaseOrderGetOrderBypurchaseOrderNumberRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector(
        clientId: 'replace',
        clientSecret: 'replace'
    );
});

it('calls the purchaseOrderGetOrderBypurchaseOrderNumber method in the PurchaseOrder resource', function () {
    Saloon::fake([
        PurchaseOrderGetOrderBypurchaseOrderNumberRequest::class => MockResponse::make([
            'shippingDestinationType' => 'Mock value',
            'shipTo' => 'Mock value',
            'shippingLocation' => 'Mock value',
            'warehouse' => 'Mock value',
            'shippingContact' => 'Mock value',
            'shippingAddress' => 'Mock value',
            'fobPoint' => 'Mock value',
            'shipVia' => 'Mock value',
            'shipTerms' => 'Mock value',
            'remitContact' => 'Mock value',
            'remitAddress' => 'Mock value',
            'terms' => 'Mock value',
            'supplierVatZone' => 'Mock value',
            'discountDetails' => [],
            'salesOrderType' => 'Mock value',
            'salesOrderNbr' => 'Mock value',
            'requisitionRefNbr' => 'Mock value',
            'paymentRefNbr' => 'Mock value',
            'workgroupId' => 42,
            'dontPrint' => true,
            'printed' => true,
            'dontEmail' => true,
            'emailed' => true,
            'openQuantity' => 3.14,
            'openBalance' => 3.14,
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

    $request = new PurchaseOrderGetOrderBypurchaseOrderNumberRequest(
        purchaseOrderNumberId: 'test string',
        includeCustomFreeFields: true,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(PurchaseOrderGetOrderBypurchaseOrderNumberRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->shippingDestinationType->toBe('Mock value')
        ->shipTo->toBe('Mock value')
        ->shippingLocation->toBe('Mock value')
        ->warehouse->toBe('Mock value')
        ->shippingContact->toBe('Mock value')
        ->shippingAddress->toBe('Mock value')
        ->fobPoint->toBe('Mock value')
        ->shipVia->toBe('Mock value')
        ->shipTerms->toBe('Mock value')
        ->remitContact->toBe('Mock value')
        ->remitAddress->toBe('Mock value')
        ->terms->toBe('Mock value')
        ->supplierVatZone->toBe('Mock value')
        ->salesOrderType->toBe('Mock value')
        ->salesOrderNbr->toBe('Mock value')
        ->requisitionRefNbr->toBe('Mock value')
        ->paymentRefNbr->toBe('Mock value')
        ->workgroupId->toBe(42)
        ->dontPrint->toBeTrue()
        ->printed->toBeTrue()
        ->dontEmail->toBeTrue()
        ->emailed->toBeTrue()
        ->openQuantity->toBe(3.14)
        ->openBalance->toBe(3.14)
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

it('calls the purchaseOrderGetAllOrderCollection method in the PurchaseOrder resource', function () {
    Saloon::fake([
        PurchaseOrderGetAllOrderCollectionRequest::class => MockResponse::make([
            0 => [
                'shippingDestinationType' => 'Mock value',
                'shipTo' => 'Mock value',
                'shippingLocation' => 'Mock value',
                'warehouse' => 'Mock value',
                'shippingContact' => 'Mock value',
                'shippingAddress' => 'Mock value',
                'fobPoint' => 'Mock value',
                'shipVia' => 'Mock value',
                'shipTerms' => 'Mock value',
                'remitContact' => 'Mock value',
                'remitAddress' => 'Mock value',
                'terms' => 'Mock value',
                'supplierVatZone' => 'Mock value',
                'discountDetails' => [],
                'salesOrderType' => 'Mock value',
                'salesOrderNbr' => 'Mock value',
                'requisitionRefNbr' => 'Mock value',
                'paymentRefNbr' => 'Mock value',
                'workgroupId' => 42,
                'dontPrint' => true,
                'printed' => true,
                'dontEmail' => true,
                'emailed' => true,
                'openQuantity' => 3.14,
                'openBalance' => 3.14,
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
                'shippingDestinationType' => 'Mock value',
                'shipTo' => 'Mock value',
                'shippingLocation' => 'Mock value',
                'warehouse' => 'Mock value',
                'shippingContact' => 'Mock value',
                'shippingAddress' => 'Mock value',
                'fobPoint' => 'Mock value',
                'shipVia' => 'Mock value',
                'shipTerms' => 'Mock value',
                'remitContact' => 'Mock value',
                'remitAddress' => 'Mock value',
                'terms' => 'Mock value',
                'supplierVatZone' => 'Mock value',
                'discountDetails' => [],
                'salesOrderType' => 'Mock value',
                'salesOrderNbr' => 'Mock value',
                'requisitionRefNbr' => 'Mock value',
                'paymentRefNbr' => 'Mock value',
                'workgroupId' => 42,
                'dontPrint' => true,
                'printed' => true,
                'dontEmail' => true,
                'emailed' => true,
                'openQuantity' => 3.14,
                'openBalance' => 3.14,
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

    $request = (new PurchaseOrderGetAllOrderCollectionRequest(greaterThanValue: 'test string', numberToRead: 123, skipRecords: 123, lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', orderType: 'test string', orderStatus: 'test string', supplier: 'test string', branch: 'test string', orderDate: 'test string', orderDateCondition: 'test string', deliveryDate: 'test string', deliveryDateCondition: 'test string', includeCustomFreeFields: true, pageNumber: 123, pageSize: 123));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (PurchaseOrderGetAllOrderCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->shippingDestinationType->toBe('Mock value')
        ->shipTo->toBe('Mock value')
        ->shippingLocation->toBe('Mock value')
        ->warehouse->toBe('Mock value')
        ->shippingContact->toBe('Mock value')
        ->shippingAddress->toBe('Mock value')
        ->fobPoint->toBe('Mock value')
        ->shipVia->toBe('Mock value')
        ->shipTerms->toBe('Mock value')
        ->remitContact->toBe('Mock value')
        ->remitAddress->toBe('Mock value')
        ->terms->toBe('Mock value')
        ->supplierVatZone->toBe('Mock value')
        ->salesOrderType->toBe('Mock value')
        ->salesOrderNbr->toBe('Mock value')
        ->requisitionRefNbr->toBe('Mock value')
        ->paymentRefNbr->toBe('Mock value')
        ->workgroupId->toBe(42)
        ->dontPrint->toBeTrue()
        ->printed->toBeTrue()
        ->dontEmail->toBeTrue()
        ->emailed->toBeTrue()
        ->openQuantity->toBe(3.14)
        ->openBalance->toBe(3.14)
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
