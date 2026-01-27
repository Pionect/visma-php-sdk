<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\PurchaseOrder\PurchaseOrderGetAllOrderCollectionRequest;
use Pionect\VismaSdk\Requests\PurchaseOrder\PurchaseOrderGetOrderBypurchaseOrderNumberRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the purchaseOrderGetOrderBypurchaseOrderNumber method in the PurchaseOrder resource', function () {
    Saloon::fake([
        PurchaseOrderGetOrderBypurchaseOrderNumberRequest::class => MockResponse::make([
            'shippingDestinationType' => 'String value',
            'shipTo' => null,
            'shippingLocation' => null,
            'warehouse' => null,
            'shippingContact' => null,
            'shippingAddress' => null,
            'fobPoint' => 'String value',
            'shipVia' => 'String value',
            'shipTerms' => 'String value',
            'remitContact' => null,
            'remitAddress' => null,
            'terms' => null,
            'supplierVatZone' => null,
            'discountDetails' => [],
            'salesOrderType' => 'String value',
            'salesOrderNbr' => 'String value',
            'requisitionRefNbr' => 'String value',
            'paymentRefNbr' => 'String value',
            'workgroupId' => 42,
            'dontPrint' => true,
            'printed' => true,
            'dontEmail' => true,
            'emailed' => true,
            'openQuantity' => 3.14,
            'openBalance' => 3.14,
            'orderType' => 'String value',
            'orderNbr' => 'String value',
            'hold' => true,
            'status' => 'String value',
            'date' => '2025-11-22T10:40:04.065Z',
            'promisedOn' => '2025-11-22T10:40:04.065Z',
            'description' => 'String value',
            'supplier' => null,
            'location' => null,
            'owner' => null,
            'currency' => 'String value',
            'supplierRef' => 'String value',
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
            'branch' => null,
            'lines' => [],
            'taxDetails' => [],
            'purchaseReceipts' => [],
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'note' => 'String value',
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
            'timeStamp' => '2025-11-22T10:40:04.065Z',
            'errorInfo' => 'String value',
            'id' => 'mock-id-123',
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
        ->shippingDestinationType->toBe('String value')
        ->shipTo->toBeNull()
        ->shippingLocation->toBeNull()
        ->warehouse->toBeNull()
        ->shippingContact->toBeNull()
        ->shippingAddress->toBeNull()
        ->fobPoint->toBe('String value')
        ->shipVia->toBe('String value')
        ->shipTerms->toBe('String value')
        ->remitContact->toBeNull()
        ->remitAddress->toBeNull()
        ->terms->toBeNull()
        ->supplierVatZone->toBeNull()
        ->salesOrderType->toBe('String value')
        ->salesOrderNbr->toBe('String value')
        ->requisitionRefNbr->toBe('String value')
        ->paymentRefNbr->toBe('String value')
        ->workgroupId->toBe(42)
        ->dontPrint->toBeTrue()
        ->printed->toBeTrue()
        ->dontEmail->toBeTrue()
        ->emailed->toBeTrue()
        ->openQuantity->toBe(3.14)
        ->openBalance->toBe(3.14)
        ->orderType->toBe('String value')
        ->orderNbr->toBe('String value')
        ->hold->toBeTrue()
        ->status->toBe('String value')
        ->date->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->promisedOn->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->description->toBe('String value')
        ->supplier->toBeNull()
        ->location->toBeNull()
        ->owner->toBeNull()
        ->currency->toBe('String value')
        ->supplierRef->toBe('String value')
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
        ->branch->toBeNull()
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->note->toBe('String value')
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
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('String value')
        ->id->toBe('mock-id-123');
});

it('calls the purchaseOrderGetAllOrderCollection method in the PurchaseOrder resource', function () {
    Saloon::fake([
        PurchaseOrderGetAllOrderCollectionRequest::class => MockResponse::make([
            0 => [
                'shippingDestinationType' => 'String value',
                'shipTo' => null,
                'shippingLocation' => null,
                'warehouse' => null,
                'shippingContact' => null,
                'shippingAddress' => null,
                'fobPoint' => 'String value',
                'shipVia' => 'String value',
                'shipTerms' => 'String value',
                'remitContact' => null,
                'remitAddress' => null,
                'terms' => null,
                'supplierVatZone' => null,
                'discountDetails' => [],
                'salesOrderType' => 'String value',
                'salesOrderNbr' => 'String value',
                'requisitionRefNbr' => 'String value',
                'paymentRefNbr' => 'String value',
                'workgroupId' => 42,
                'dontPrint' => true,
                'printed' => true,
                'dontEmail' => true,
                'emailed' => true,
                'openQuantity' => 3.14,
                'openBalance' => 3.14,
                'orderType' => 'String value',
                'orderNbr' => 'String value',
                'hold' => true,
                'status' => 'String value',
                'date' => '2025-11-22T10:40:04.065Z',
                'promisedOn' => '2025-11-22T10:40:04.065Z',
                'description' => 'String value',
                'supplier' => null,
                'location' => null,
                'owner' => null,
                'currency' => 'String value',
                'supplierRef' => 'String value',
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
                'branch' => null,
                'lines' => [],
                'taxDetails' => [],
                'purchaseReceipts' => [],
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'note' => 'String value',
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
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'String value',
                'id' => 'mock-id-123',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
            1 => [
                'shippingDestinationType' => 'String value',
                'shipTo' => null,
                'shippingLocation' => null,
                'warehouse' => null,
                'shippingContact' => null,
                'shippingAddress' => null,
                'fobPoint' => 'String value',
                'shipVia' => 'String value',
                'shipTerms' => 'String value',
                'remitContact' => null,
                'remitAddress' => null,
                'terms' => null,
                'supplierVatZone' => null,
                'discountDetails' => [],
                'salesOrderType' => 'String value',
                'salesOrderNbr' => 'String value',
                'requisitionRefNbr' => 'String value',
                'paymentRefNbr' => 'String value',
                'workgroupId' => 42,
                'dontPrint' => true,
                'printed' => true,
                'dontEmail' => true,
                'emailed' => true,
                'openQuantity' => 3.14,
                'openBalance' => 3.14,
                'orderType' => 'String value',
                'orderNbr' => 'String value',
                'hold' => true,
                'status' => 'String value',
                'date' => '2025-11-22T10:40:04.065Z',
                'promisedOn' => '2025-11-22T10:40:04.065Z',
                'description' => 'String value',
                'supplier' => null,
                'location' => null,
                'owner' => null,
                'currency' => 'String value',
                'supplierRef' => 'String value',
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
                'branch' => null,
                'lines' => [],
                'taxDetails' => [],
                'purchaseReceipts' => [],
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'note' => 'String value',
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
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'String value',
                'id' => 'mock-id-123',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
        ], 200),
    ]);

    $request = (new PurchaseOrderGetAllOrderCollectionRequest(greaterThanValue: 'test string', numberToRead: 123, skipRecords: 123, lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', orderType: 'test string', orderStatus: 'test string', supplier: 'test string', branch: 'test string', orderDate: 'test string', orderDateCondition: 'test string', deliveryDate: 'test string', deliveryDateCondition: 'test string', includeCustomFreeFields: true, pageNumber: 123, pageSize: 123));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (PurchaseOrderGetAllOrderCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->shippingDestinationType->toBe('String value')
        ->shipTo->toBeNull()
        ->shippingLocation->toBeNull()
        ->warehouse->toBeNull()
        ->shippingContact->toBeNull()
        ->shippingAddress->toBeNull()
        ->fobPoint->toBe('String value')
        ->shipVia->toBe('String value')
        ->shipTerms->toBe('String value')
        ->remitContact->toBeNull()
        ->remitAddress->toBeNull()
        ->terms->toBeNull()
        ->supplierVatZone->toBeNull()
        ->salesOrderType->toBe('String value')
        ->salesOrderNbr->toBe('String value')
        ->requisitionRefNbr->toBe('String value')
        ->paymentRefNbr->toBe('String value')
        ->workgroupId->toBe(42)
        ->dontPrint->toBeTrue()
        ->printed->toBeTrue()
        ->dontEmail->toBeTrue()
        ->emailed->toBeTrue()
        ->openQuantity->toBe(3.14)
        ->openBalance->toBe(3.14)
        ->orderType->toBe('String value')
        ->orderNbr->toBe('String value')
        ->hold->toBeTrue()
        ->status->toBe('String value')
        ->date->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->promisedOn->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->description->toBe('String value')
        ->supplier->toBeNull()
        ->location->toBeNull()
        ->owner->toBeNull()
        ->currency->toBe('String value')
        ->supplierRef->toBe('String value')
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
        ->branch->toBeNull()
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->note->toBe('String value')
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
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('String value')
        ->id->toBe('mock-id-123');
});
