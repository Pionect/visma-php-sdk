<?php

use Pionect\VismaSdk\Dto\CreatePurchaseReceiptActionDto;
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
            'shipTo' => [
                'internalId' => 42,
                'number' => 'String value',
                'name' => 'String value',
            ],
            'shippingLocation' => [
                'name' => 'String value',
            ],
            'warehouse' => [
                'description' => 'String value',
            ],
            'shippingContact' => [
                'overrideContact' => true,
                'contactId' => 42,
                'name' => 'String value',
                'attention' => 'String value',
                'email' => 'test@example.com',
                'web' => 'String value',
                'phone1' => 'String value',
                'phone2' => 'String value',
                'fax' => 'String value',
            ],
            'shippingAddress' => [
                'overrideAddress' => true,
                'addressId' => 42,
                'addressLine1' => 'String value',
                'addressLine2' => 'String value',
                'addressLine3' => 'String value',
                'postalCode' => 'String value',
                'city' => 'String value',
                'country' => [
                    'name' => 'String value',
                    'errorInfo' => 'String value',
                ],
                'county' => [
                    'name' => 'String value',
                ],
            ],
            'fobPoint' => 'String value',
            'shipVia' => 'String value',
            'shipTerms' => 'String value',
            'remitContact' => [
                'overrideContact' => true,
                'contactId' => 42,
                'name' => 'String value',
                'attention' => 'String value',
                'email' => 'test@example.com',
                'web' => 'String value',
                'phone1' => 'String value',
                'phone2' => 'String value',
                'fax' => 'String value',
            ],
            'remitAddress' => [
                'overrideAddress' => true,
                'addressId' => 42,
                'addressLine1' => 'String value',
                'addressLine2' => 'String value',
                'addressLine3' => 'String value',
                'postalCode' => 'String value',
                'city' => 'String value',
                'country' => [
                    'name' => 'String value',
                    'errorInfo' => 'String value',
                ],
                'county' => [
                    'name' => 'String value',
                ],
            ],
            'terms' => [
                'description' => 'String value',
            ],
            'supplierVatZone' => [
                'description' => 'String value',
                'defaultVatCategory' => 'String value',
                'defaultTaxCategory' => [
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'errorInfo' => 'String value',
            ],
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
            'supplier' => [
                'internalId' => 42,
                'number' => 'String value',
                'name' => 'String value',
            ],
            'location' => [
                'name' => 'String value',
            ],
            'owner' => [
                'name' => 'String value',
            ],
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
            'branch' => [
                'number' => 'String value',
                'name' => 'String value',
            ],
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
        ->shipTo->internalId->toBe(42)
        ->shipTo->number->toBe('String value')
        ->shipTo->name->toBe('String value')
        ->shippingLocation->name->toBe('String value')
        ->warehouse->description->toBe('String value')
        ->shippingContact->overrideContact->toBe(true)
        ->shippingContact->contactId->toBe(42)
        ->shippingContact->name->toBe('String value')
        ->shippingContact->attention->toBe('String value')
        ->shippingContact->email->toBe('test@example.com')
        ->shippingContact->web->toBe('String value')
        ->shippingContact->phone1->toBe('String value')
        ->shippingContact->phone2->toBe('String value')
        ->shippingContact->fax->toBe('String value')
        ->shippingAddress->overrideAddress->toBe(true)
        ->shippingAddress->addressId->toBe(42)
        ->shippingAddress->addressLine1->toBe('String value')
        ->shippingAddress->addressLine2->toBe('String value')
        ->shippingAddress->addressLine3->toBe('String value')
        ->shippingAddress->postalCode->toBe('String value')
        ->shippingAddress->city->toBe('String value')
        ->shippingAddress->country->name->toBe('String value')
        ->shippingAddress->country->errorInfo->toBe('String value')
        ->shippingAddress->county->name->toBe('String value')
        ->fobPoint->toBe('String value')
        ->shipVia->toBe('String value')
        ->shipTerms->toBe('String value')
        ->remitContact->overrideContact->toBe(true)
        ->remitContact->contactId->toBe(42)
        ->remitContact->name->toBe('String value')
        ->remitContact->attention->toBe('String value')
        ->remitContact->email->toBe('test@example.com')
        ->remitContact->web->toBe('String value')
        ->remitContact->phone1->toBe('String value')
        ->remitContact->phone2->toBe('String value')
        ->remitContact->fax->toBe('String value')
        ->remitAddress->overrideAddress->toBe(true)
        ->remitAddress->addressId->toBe(42)
        ->remitAddress->addressLine1->toBe('String value')
        ->remitAddress->addressLine2->toBe('String value')
        ->remitAddress->addressLine3->toBe('String value')
        ->remitAddress->postalCode->toBe('String value')
        ->remitAddress->city->toBe('String value')
        ->remitAddress->country->name->toBe('String value')
        ->remitAddress->country->errorInfo->toBe('String value')
        ->remitAddress->county->name->toBe('String value')
        ->terms->description->toBe('String value')
        ->supplierVatZone->description->toBe('String value')
        ->supplierVatZone->defaultVatCategory->toBe('String value')
        ->supplierVatZone->defaultTaxCategory->number->toBe('String value')
        ->supplierVatZone->defaultTaxCategory->description->toBe('String value')
        ->supplierVatZone->errorInfo->toBe('String value')
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
        ->supplier->internalId->toBe(42)
        ->supplier->number->toBe('String value')
        ->supplier->name->toBe('String value')
        ->location->name->toBe('String value')
        ->owner->name->toBe('String value')
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
        ->branch->number->toBe('String value')
        ->branch->name->toBe('String value')
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
        date: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        promisedOn: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        description: 'String value',
        supplier: 'String value',
        location: 'String value',
        gln: 'String value',
        vatRegistrationId: 'mock-id-123',
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
        customStr1: 'String value',
        customStr2: 'String value',
        customStr3: 'String value',
        customStr4: 'String value',
        customStr5: 'String value',
        customDec1: 42,
        customDec2: 42,
        customInt1: 42,
        customInt2: 42,
        customDateTimeUtc1: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
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
                'shipTo' => [
                    'internalId' => 42,
                    'number' => 'String value',
                    'name' => 'String value',
                ],
                'shippingLocation' => [
                    'name' => 'String value',
                ],
                'warehouse' => [
                    'description' => 'String value',
                ],
                'shippingContact' => [
                    'overrideContact' => true,
                    'contactId' => 42,
                    'name' => 'String value',
                    'attention' => 'String value',
                    'email' => 'test@example.com',
                    'web' => 'String value',
                    'phone1' => 'String value',
                    'phone2' => 'String value',
                    'fax' => 'String value',
                ],
                'shippingAddress' => [
                    'overrideAddress' => true,
                    'addressId' => 42,
                    'addressLine1' => 'String value',
                    'addressLine2' => 'String value',
                    'addressLine3' => 'String value',
                    'postalCode' => 'String value',
                    'city' => 'String value',
                    'country' => [
                        'name' => 'String value',
                        'errorInfo' => 'String value',
                    ],
                    'county' => [
                        'name' => 'String value',
                    ],
                ],
                'fobPoint' => 'String value',
                'shipVia' => 'String value',
                'shipTerms' => 'String value',
                'remitContact' => [
                    'overrideContact' => true,
                    'contactId' => 42,
                    'name' => 'String value',
                    'attention' => 'String value',
                    'email' => 'test@example.com',
                    'web' => 'String value',
                    'phone1' => 'String value',
                    'phone2' => 'String value',
                    'fax' => 'String value',
                ],
                'remitAddress' => [
                    'overrideAddress' => true,
                    'addressId' => 42,
                    'addressLine1' => 'String value',
                    'addressLine2' => 'String value',
                    'addressLine3' => 'String value',
                    'postalCode' => 'String value',
                    'city' => 'String value',
                    'country' => [
                        'name' => 'String value',
                        'errorInfo' => 'String value',
                    ],
                    'county' => [
                        'name' => 'String value',
                    ],
                ],
                'terms' => [
                    'description' => 'String value',
                ],
                'supplierVatZone' => [
                    'description' => 'String value',
                    'defaultVatCategory' => 'String value',
                    'defaultTaxCategory' => [
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'errorInfo' => 'String value',
                ],
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
                'supplier' => [
                    'internalId' => 42,
                    'number' => 'String value',
                    'name' => 'String value',
                ],
                'location' => [
                    'name' => 'String value',
                ],
                'owner' => [
                    'name' => 'String value',
                ],
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
                'branch' => [
                    'number' => 'String value',
                    'name' => 'String value',
                ],
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
                'shipTo' => [
                    'internalId' => 42,
                    'number' => 'String value',
                    'name' => 'String value',
                ],
                'shippingLocation' => [
                    'name' => 'String value',
                ],
                'warehouse' => [
                    'description' => 'String value',
                ],
                'shippingContact' => [
                    'overrideContact' => true,
                    'contactId' => 42,
                    'name' => 'String value',
                    'attention' => 'String value',
                    'email' => 'test@example.com',
                    'web' => 'String value',
                    'phone1' => 'String value',
                    'phone2' => 'String value',
                    'fax' => 'String value',
                ],
                'shippingAddress' => [
                    'overrideAddress' => true,
                    'addressId' => 42,
                    'addressLine1' => 'String value',
                    'addressLine2' => 'String value',
                    'addressLine3' => 'String value',
                    'postalCode' => 'String value',
                    'city' => 'String value',
                    'country' => [
                        'name' => 'String value',
                        'errorInfo' => 'String value',
                    ],
                    'county' => [
                        'name' => 'String value',
                    ],
                ],
                'fobPoint' => 'String value',
                'shipVia' => 'String value',
                'shipTerms' => 'String value',
                'remitContact' => [
                    'overrideContact' => true,
                    'contactId' => 42,
                    'name' => 'String value',
                    'attention' => 'String value',
                    'email' => 'test@example.com',
                    'web' => 'String value',
                    'phone1' => 'String value',
                    'phone2' => 'String value',
                    'fax' => 'String value',
                ],
                'remitAddress' => [
                    'overrideAddress' => true,
                    'addressId' => 42,
                    'addressLine1' => 'String value',
                    'addressLine2' => 'String value',
                    'addressLine3' => 'String value',
                    'postalCode' => 'String value',
                    'city' => 'String value',
                    'country' => [
                        'name' => 'String value',
                        'errorInfo' => 'String value',
                    ],
                    'county' => [
                        'name' => 'String value',
                    ],
                ],
                'terms' => [
                    'description' => 'String value',
                ],
                'supplierVatZone' => [
                    'description' => 'String value',
                    'defaultVatCategory' => 'String value',
                    'defaultTaxCategory' => [
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'errorInfo' => 'String value',
                ],
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
                'supplier' => [
                    'internalId' => 42,
                    'number' => 'String value',
                    'name' => 'String value',
                ],
                'location' => [
                    'name' => 'String value',
                ],
                'owner' => [
                    'name' => 'String value',
                ],
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
                'branch' => [
                    'number' => 'String value',
                    'name' => 'String value',
                ],
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

    expect($collection)->toHaveCount(2);
    expect($collection->first())
        ->shippingDestinationType->toBe('String value')
        ->shipTo->internalId->toBe(42)
        ->shipTo->number->toBe('String value')
        ->shipTo->name->toBe('String value')
        ->shippingLocation->name->toBe('String value')
        ->warehouse->description->toBe('String value')
        ->shippingContact->overrideContact->toBe(true)
        ->shippingContact->contactId->toBe(42)
        ->shippingContact->name->toBe('String value')
        ->shippingContact->attention->toBe('String value')
        ->shippingContact->email->toBe('test@example.com')
        ->shippingContact->web->toBe('String value')
        ->shippingContact->phone1->toBe('String value')
        ->shippingContact->phone2->toBe('String value')
        ->shippingContact->fax->toBe('String value')
        ->shippingAddress->overrideAddress->toBe(true)
        ->shippingAddress->addressId->toBe(42)
        ->shippingAddress->addressLine1->toBe('String value')
        ->shippingAddress->addressLine2->toBe('String value')
        ->shippingAddress->addressLine3->toBe('String value')
        ->shippingAddress->postalCode->toBe('String value')
        ->shippingAddress->city->toBe('String value')
        ->shippingAddress->country->name->toBe('String value')
        ->shippingAddress->country->errorInfo->toBe('String value')
        ->shippingAddress->county->name->toBe('String value')
        ->fobPoint->toBe('String value')
        ->shipVia->toBe('String value')
        ->shipTerms->toBe('String value')
        ->remitContact->overrideContact->toBe(true)
        ->remitContact->contactId->toBe(42)
        ->remitContact->name->toBe('String value')
        ->remitContact->attention->toBe('String value')
        ->remitContact->email->toBe('test@example.com')
        ->remitContact->web->toBe('String value')
        ->remitContact->phone1->toBe('String value')
        ->remitContact->phone2->toBe('String value')
        ->remitContact->fax->toBe('String value')
        ->remitAddress->overrideAddress->toBe(true)
        ->remitAddress->addressId->toBe(42)
        ->remitAddress->addressLine1->toBe('String value')
        ->remitAddress->addressLine2->toBe('String value')
        ->remitAddress->addressLine3->toBe('String value')
        ->remitAddress->postalCode->toBe('String value')
        ->remitAddress->city->toBe('String value')
        ->remitAddress->country->name->toBe('String value')
        ->remitAddress->country->errorInfo->toBe('String value')
        ->remitAddress->county->name->toBe('String value')
        ->terms->description->toBe('String value')
        ->supplierVatZone->description->toBe('String value')
        ->supplierVatZone->defaultVatCategory->toBe('String value')
        ->supplierVatZone->defaultTaxCategory->number->toBe('String value')
        ->supplierVatZone->defaultTaxCategory->description->toBe('String value')
        ->supplierVatZone->errorInfo->toBe('String value')
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
        ->supplier->internalId->toBe(42)
        ->supplier->number->toBe('String value')
        ->supplier->name->toBe('String value')
        ->location->name->toBe('String value')
        ->owner->name->toBe('String value')
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
        ->branch->number->toBe('String value')
        ->branch->name->toBe('String value')
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
        date: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        promisedOn: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        description: 'String value',
        supplier: 'String value',
        location: 'String value',
        gln: 'String value',
        vatRegistrationId: 'mock-id-123',
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
        customStr1: 'String value',
        customStr2: 'String value',
        customStr3: 'String value',
        customStr4: 'String value',
        customStr5: 'String value',
        customDec1: 42,
        customDec2: 42,
        customInt1: 42,
        customInt2: 42,
        customDateTimeUtc1: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
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
    $bodyData = new CreatePurchaseReceiptActionDto(
        orderType: 'String value'
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
