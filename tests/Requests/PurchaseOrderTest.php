<?php

// Generated 2026-01-30 15:19:40
use Pionect\VismaSdk\Dto\PurchaseOrderUpdateDto;
use Pionect\VismaSdk\Requests\PurchaseOrder\PurchaseOrderCreatePurchaseReceiptFromPurchaseOrderBypurchaseorderNbrRequest;
use Pionect\VismaSdk\Requests\PurchaseOrder\PurchaseOrderGetAllOrderRequest;
use Pionect\VismaSdk\Requests\PurchaseOrder\PurchaseOrderGetOrderBypurchaseOrderNumberRequest;
use Pionect\VismaSdk\Requests\PurchaseOrder\PurchaseOrderPostRequest;
use Pionect\VismaSdk\Requests\PurchaseOrder\PurchaseOrderPutBypurchaseOrderNumberRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the purchaseOrderGetOrderBypurchaseOrderNumberRequest method in the PurchaseOrder resource', function () {
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
            'openQuantity' => 42,
            'openBalance' => 42,
            'orderType' => 'String value',
            'orderNbr' => 'String value',
            'hold' => true,
            'status' => 'String value',
            'date' => '2025-11-22T10:40:04+00:00',
            'promisedOn' => '2025-11-22T10:40:04+00:00',
            'description' => 'String value',
            'supplier' => null,
            'location' => null,
            'owner' => null,
            'currency' => 'String value',
            'supplierRef' => 'String value',
            'exchangeRate' => 42,
            'lineTotal' => 42,
            'lineTotalInBaseCurrency' => 42,
            'vatExemptTotal' => 42,
            'vatExemptTotalInBaseCurrency' => 42,
            'taxTotal' => 42,
            'taxTotalInBaseCurrency' => 42,
            'orderTotal' => 42,
            'orderTotalInBaseCurrency' => 42,
            'controlTotal' => 42,
            'controlTotalInBaseCurrency' => 42,
            'branch' => null,
            'lines' => [],
            'taxDetails' => [],
            'purchaseReceipts' => [],
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'note' => 'String value',
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
            'timeStamp' => 'String value',
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new PurchaseOrderGetOrderBypurchaseOrderNumberRequest(
        purchaseOrderNumber: 'test string',
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
        ->dontPrint->toBe(true)
        ->printed->toBe(true)
        ->dontEmail->toBe(true)
        ->emailed->toBe(true)
        ->openQuantity->toBe(42)
        ->openBalance->toBe(42)
        ->orderType->toBe('String value')
        ->orderNbr->toBe('String value')
        ->hold->toBe(true)
        ->status->toBe('String value')
        ->date->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->promisedOn->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->description->toBe('String value')
        ->supplier->toBeNull()
        ->location->toBeNull()
        ->owner->toBeNull()
        ->currency->toBe('String value')
        ->supplierRef->toBe('String value')
        ->exchangeRate->toBe(42)
        ->lineTotal->toBe(42)
        ->lineTotalInBaseCurrency->toBe(42)
        ->vatExemptTotal->toBe(42)
        ->vatExemptTotalInBaseCurrency->toBe(42)
        ->taxTotal->toBe(42)
        ->taxTotalInBaseCurrency->toBe(42)
        ->orderTotal->toBe(42)
        ->orderTotalInBaseCurrency->toBe(42)
        ->controlTotal->toBe(42)
        ->controlTotalInBaseCurrency->toBe(42)
        ->branch->toBeNull()
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->note->toBe('String value')
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
        ->timeStamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the purchaseOrderPutBypurchaseOrderNumberRequest method in the PurchaseOrder resource', function () {
    $bodyData = new PurchaseOrderUpdateDto(
        shippingDestinationType: 'String value',
        shipTo: 'String value',
        shippingLocation: 'String value',
        shippingContact: null,
        shippingAddress: null,
        fobPoint: 'String value',
        shipVia: 'String value',
        shipTerms: 'String value',
        remitContact: null,
        remitAddress: null,
        terms: 'String value',
        supplierVatZone: 'String value',
        discountDetails: [],
        dontPrint: true,
        dontEmail: true,
        orderType: 'String value',
        orderNumber: 'String value',
        hold: true,
        date: '2025-11-22T10:40:04+00:00',
        promisedOn: '2025-11-22T10:40:04+00:00',
        description: 'String value',
        supplier: null,
        location: 'String value',
        gln: null,
        vatRegistrationId: null,
        owner: 'String value',
        currency: 'String value',
        exchangeRate: 42,
        supplierRef: 'String value',
        controlTotal: 42,
        branch: 'String value',
        lines: [],
        changeDatesOnLines: true,
        note: 'String value',
        overrideNumberSeries: true,
        customStr1: null,
        customStr2: null,
        customStr3: null,
        customStr4: null,
        customStr5: null,
        customDec1: null,
        customDec2: null,
        customInt1: null,
        customInt2: null,
        customDateTimeUtc1: '2025-11-22T10:40:04+00:00',
        timeStamp: 'String value'
    );

    Saloon::fake([
        PurchaseOrderPutBypurchaseOrderNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new PurchaseOrderPutBypurchaseOrderNumberRequest(
        purchaseOrderNumber: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(PurchaseOrderPutBypurchaseOrderNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the purchaseOrderGetAllOrderRequest method in the PurchaseOrder resource', function () {
    Saloon::fake([
        PurchaseOrderGetAllOrderRequest::class => MockResponse::make([
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
                'openQuantity' => 42,
                'openBalance' => 42,
                'orderType' => 'String value',
                'orderNbr' => 'String value',
                'hold' => true,
                'status' => 'String value',
                'date' => '2025-11-22T10:40:04+00:00',
                'promisedOn' => '2025-11-22T10:40:04+00:00',
                'description' => 'String value',
                'supplier' => null,
                'location' => null,
                'owner' => null,
                'currency' => 'String value',
                'supplierRef' => 'String value',
                'exchangeRate' => 42,
                'lineTotal' => 42,
                'lineTotalInBaseCurrency' => 42,
                'vatExemptTotal' => 42,
                'vatExemptTotalInBaseCurrency' => 42,
                'taxTotal' => 42,
                'taxTotalInBaseCurrency' => 42,
                'orderTotal' => 42,
                'orderTotalInBaseCurrency' => 42,
                'controlTotal' => 42,
                'controlTotalInBaseCurrency' => 42,
                'branch' => null,
                'lines' => [],
                'taxDetails' => [],
                'purchaseReceipts' => [],
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'note' => 'String value',
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
                'timeStamp' => 'String value',
                'errorInfo' => 'String value',
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
                'openQuantity' => 42,
                'openBalance' => 42,
                'orderType' => 'String value',
                'orderNbr' => 'String value',
                'hold' => true,
                'status' => 'String value',
                'date' => '2025-11-22T10:40:04+00:00',
                'promisedOn' => '2025-11-22T10:40:04+00:00',
                'description' => 'String value',
                'supplier' => null,
                'location' => null,
                'owner' => null,
                'currency' => 'String value',
                'supplierRef' => 'String value',
                'exchangeRate' => 42,
                'lineTotal' => 42,
                'lineTotalInBaseCurrency' => 42,
                'vatExemptTotal' => 42,
                'vatExemptTotalInBaseCurrency' => 42,
                'taxTotal' => 42,
                'taxTotalInBaseCurrency' => 42,
                'orderTotal' => 42,
                'orderTotalInBaseCurrency' => 42,
                'controlTotal' => 42,
                'controlTotalInBaseCurrency' => 42,
                'branch' => null,
                'lines' => [],
                'taxDetails' => [],
                'purchaseReceipts' => [],
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'note' => 'String value',
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
                'timeStamp' => 'String value',
                'errorInfo' => 'String value',
            ],
        ], 200),
    ]);

    $request = new PurchaseOrderGetAllOrderRequest(
        greaterThanValue: 'test string',
        numberToRead: 123,
        skipRecords: 123,
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        orderType: 'test string',
        orderStatus: 'test string',
        supplier: 'test string',
        branch: 'test string',
        orderDate: 'test string',
        orderDateCondition: 'test string',
        deliveryDate: 'test string',
        deliveryDateCondition: 'test string',
        includeCustomFreeFields: true,
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(PurchaseOrderGetAllOrderRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toBeArray()
        ->and($collection)->toHaveCount(2);

    $firstItem = $collection[0];

    expect($firstItem)
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
        ->dontPrint->toBe(true)
        ->printed->toBe(true)
        ->dontEmail->toBe(true)
        ->emailed->toBe(true)
        ->openQuantity->toBe(42)
        ->openBalance->toBe(42)
        ->orderType->toBe('String value')
        ->orderNbr->toBe('String value')
        ->hold->toBe(true)
        ->status->toBe('String value')
        ->date->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->promisedOn->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->description->toBe('String value')
        ->supplier->toBeNull()
        ->location->toBeNull()
        ->owner->toBeNull()
        ->currency->toBe('String value')
        ->supplierRef->toBe('String value')
        ->exchangeRate->toBe(42)
        ->lineTotal->toBe(42)
        ->lineTotalInBaseCurrency->toBe(42)
        ->vatExemptTotal->toBe(42)
        ->vatExemptTotalInBaseCurrency->toBe(42)
        ->taxTotal->toBe(42)
        ->taxTotalInBaseCurrency->toBe(42)
        ->orderTotal->toBe(42)
        ->orderTotalInBaseCurrency->toBe(42)
        ->controlTotal->toBe(42)
        ->controlTotalInBaseCurrency->toBe(42)
        ->branch->toBeNull()
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->note->toBe('String value')
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
        ->timeStamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the purchaseOrderPostRequest method in the PurchaseOrder resource', function () {
    $bodyData = new PurchaseOrderUpdateDto(
        shippingDestinationType: 'String value',
        shipTo: 'String value',
        shippingLocation: 'String value',
        shippingContact: null,
        shippingAddress: null,
        fobPoint: 'String value',
        shipVia: 'String value',
        shipTerms: 'String value',
        remitContact: null,
        remitAddress: null,
        terms: 'String value',
        supplierVatZone: 'String value',
        discountDetails: [],
        dontPrint: true,
        dontEmail: true,
        orderType: 'String value',
        orderNumber: 'String value',
        hold: true,
        date: '2025-11-22T10:40:04+00:00',
        promisedOn: '2025-11-22T10:40:04+00:00',
        description: 'String value',
        supplier: null,
        location: 'String value',
        gln: null,
        vatRegistrationId: null,
        owner: 'String value',
        currency: 'String value',
        exchangeRate: 42,
        supplierRef: 'String value',
        controlTotal: 42,
        branch: 'String value',
        lines: [],
        changeDatesOnLines: true,
        note: 'String value',
        overrideNumberSeries: true,
        customStr1: null,
        customStr2: null,
        customStr3: null,
        customStr4: null,
        customStr5: null,
        customDec1: null,
        customDec2: null,
        customInt1: null,
        customInt2: null,
        customDateTimeUtc1: '2025-11-22T10:40:04+00:00',
        timeStamp: 'String value'
    );

    Saloon::fake([
        PurchaseOrderPostRequest::class => MockResponse::make([], 201),
    ]);

    $request = new PurchaseOrderPostRequest(
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(PurchaseOrderPostRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the purchaseOrderCreatePurchaseReceiptFromPurchaseOrderBypurchaseorderNbrRequest method in the PurchaseOrder resource', function () {
    $bodyData = new PurchaseOrderUpdateDto(
        shippingDestinationType: 'String value',
        shipTo: 'String value',
        shippingLocation: 'String value',
        shippingContact: null,
        shippingAddress: null,
        fobPoint: 'String value',
        shipVia: 'String value',
        shipTerms: 'String value',
        remitContact: null,
        remitAddress: null,
        terms: 'String value',
        supplierVatZone: 'String value',
        discountDetails: [],
        dontPrint: true,
        dontEmail: true,
        orderType: 'String value',
        orderNumber: 'String value',
        hold: true,
        date: '2025-11-22T10:40:04+00:00',
        promisedOn: '2025-11-22T10:40:04+00:00',
        description: 'String value',
        supplier: null,
        location: 'String value',
        gln: null,
        vatRegistrationId: null,
        owner: 'String value',
        currency: 'String value',
        exchangeRate: 42,
        supplierRef: 'String value',
        controlTotal: 42,
        branch: 'String value',
        lines: [],
        changeDatesOnLines: true,
        note: 'String value',
        overrideNumberSeries: true,
        customStr1: null,
        customStr2: null,
        customStr3: null,
        customStr4: null,
        customStr5: null,
        customDec1: null,
        customDec2: null,
        customInt1: null,
        customInt2: null,
        customDateTimeUtc1: '2025-11-22T10:40:04+00:00',
        timeStamp: 'String value'
    );

    Saloon::fake([
        PurchaseOrderCreatePurchaseReceiptFromPurchaseOrderBypurchaseorderNbrRequest::class => MockResponse::make([], 201),
    ]);

    $request = new PurchaseOrderCreatePurchaseReceiptFromPurchaseOrderBypurchaseorderNbrRequest(
        purchaseorderNbr: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(PurchaseOrderCreatePurchaseReceiptFromPurchaseOrderBypurchaseorderNbrRequest::class);

    expect($response->status())->toBe(201);
});
