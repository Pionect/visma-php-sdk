<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\SalesOrder\SalesOrderCancelSalesOrderBysaleOrderNumberRequest;
use Pionect\VismaSdk\Requests\SalesOrder\SalesOrderCreateShipmentActionBysaleOrderNumberRequest;
use Pionect\VismaSdk\Requests\SalesOrder\SalesOrderGetAllOrdersCollectionRequest;
use Pionect\VismaSdk\Requests\SalesOrder\SalesOrderGetByorderNbrRequest;
use Pionect\VismaSdk\Requests\SalesOrder\SalesOrderGetOrderByTypeByorderTypeorderNbrRequest;
use Pionect\VismaSdk\Requests\SalesOrder\SalesOrderGetRotrutbyorderTypeorderNbrRequest;
use Pionect\VismaSdk\Requests\SalesOrder\SalesOrderReopenSalesOrderBysalesOrderNumberRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Http\Request;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the salesOrderGetByorderNbr method in the SalesOrder resource', function () {
    Saloon::fake([
        SalesOrderGetByorderNbrRequest::class => MockResponse::make([
            'data' => [
                'type' => 'salesOrders',
                'id' => 'mock-id-123',
                'attributes' => [
                    'projectCd' => 'Mock value',
                    'printDescriptionOnInvoice' => true,
                    'printNoteOnExternalDocuments' => true,
                    'printNoteOnInternalDocuments' => true,
                    'soBillingContact' => 'Mock value',
                    'soBillingAddress' => 'Mock value',
                    'customerVatzone' => 'Mock value',
                    'invoiceSeparately' => true,
                    'invoiceNbr' => 'Mock value',
                    'invoiceDate' => '2025-11-22T10:40:04.065Z',
                    'terms' => 'Mock value',
                    'dueDate' => '2025-11-22T10:40:04.065Z',
                    'cashDiscountDate' => '2025-11-22T10:40:04.065Z',
                    'postPeriod' => 'Mock value',
                    'salesPerson' => 'Mock value',
                    'commissionPercent' => 'Mock value',
                    'commissionAmount' => 'Mock value',
                    'commissionableAmount' => 'Mock value',
                    'owner' => 'Mock value',
                    'origOrderType' => 'Mock value',
                    'origOrderNbr' => 'Mock value',
                    'soShippingContact' => 'Mock value',
                    'soShippingAddress' => 'Mock value',
                    'schedShipment' => '2025-11-22T10:40:04.065Z',
                    'shipSeparately' => true,
                    'shipComplete' => 'Mock value',
                    'cancelBy' => '2025-11-22T10:40:04.065Z',
                    'canceled' => true,
                    'preferredWarehouse' => 'Mock value',
                    'shipVia' => 'Mock value',
                    'fobPoint' => 'Mock value',
                    'priority' => 42,
                    'shippingTerms' => 'Mock value',
                    'shippingZone' => 'Mock value',
                    'residentialDelivery' => true,
                    'saturdayDelivery' => true,
                    'insurance' => true,
                    'transactionType' => 'Mock value',
                    'paymentMethod' => 'Mock value',
                    'cashAccount' => 'Mock value',
                    'paymentRef' => 'Mock value',
                    'isRotRutDeductible' => true,
                    'emailed' => true,
                    'lines' => [],
                    'shipments' => [],
                    'orderType' => 'Mock value',
                    'orderNo' => 'Mock value',
                    'status' => 'Mock value',
                    'hold' => true,
                    'date' => '2025-11-22T10:40:04.065Z',
                    'requestOn' => '2025-11-22T10:40:04.065Z',
                    'customerOrder' => 'Mock value',
                    'customerRefNo' => 'Mock value',
                    'customer' => 'Mock value',
                    'contactId' => 42,
                    'location' => 'Mock value',
                    'currency' => 'Mock value',
                    'description' => 'Mock value',
                    'orderTotal' => 3.14,
                    'orderTotalInBaseCurrency' => 3.14,
                    'vatTaxableTotal' => 3.14,
                    'vatTaxableTotalInBaseCurrency' => 3.14,
                    'vatExemptTotal' => 3.14,
                    'vatExemptTotalInBaseCurrency' => 3.14,
                    'taxTotal' => 3.14,
                    'taxTotalInBaseCurrency' => 3.14,
                    'exchangeRate' => 3.14,
                    'discountTotal' => 3.14,
                    'discountTotalInBaseCurrency' => 3.14,
                    'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                    'branchNumber' => 'Mock value',
                    'note' => 'Mock value',
                    'attachments' => [],
                    'errorInfo' => 'Mock value',
                    'metadata' => 'Mock value',
                ],
            ],
        ], 200),
    ]);

    $request = new SalesOrderGetByorderNbrRequest(
        orderNbrId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderGetByorderNbrRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->projectCd->toBe('Mock value')
        ->printDescriptionOnInvoice->toBe(true)
        ->printNoteOnExternalDocuments->toBe(true)
        ->printNoteOnInternalDocuments->toBe(true)
        ->soBillingContact->toBe('Mock value')
        ->soBillingAddress->toBe('Mock value')
        ->customerVatzone->toBe('Mock value')
        ->invoiceSeparately->toBe(true)
        ->invoiceNbr->toBe('Mock value')
        ->invoiceDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->terms->toBe('Mock value')
        ->dueDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->cashDiscountDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->postPeriod->toBe('Mock value')
        ->salesPerson->toBe('Mock value')
        ->commissionPercent->toBe('Mock value')
        ->commissionAmount->toBe('Mock value')
        ->commissionableAmount->toBe('Mock value')
        ->owner->toBe('Mock value')
        ->origOrderType->toBe('Mock value')
        ->origOrderNbr->toBe('Mock value')
        ->soShippingContact->toBe('Mock value')
        ->soShippingAddress->toBe('Mock value')
        ->schedShipment->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->shipSeparately->toBe(true)
        ->shipComplete->toBe('Mock value')
        ->cancelBy->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->canceled->toBe(true)
        ->preferredWarehouse->toBe('Mock value')
        ->shipVia->toBe('Mock value')
        ->fobPoint->toBe('Mock value')
        ->priority->toBe(42)
        ->shippingTerms->toBe('Mock value')
        ->shippingZone->toBe('Mock value')
        ->residentialDelivery->toBe(true)
        ->saturdayDelivery->toBe(true)
        ->insurance->toBe(true)
        ->transactionType->toBe('Mock value')
        ->paymentMethod->toBe('Mock value')
        ->cashAccount->toBe('Mock value')
        ->paymentRef->toBe('Mock value')
        ->isRotRutDeductible->toBe(true)
        ->emailed->toBe(true)
        ->orderType->toBe('Mock value')
        ->orderNo->toBe('Mock value')
        ->status->toBe('Mock value')
        ->hold->toBe(true)
        ->date->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->requestOn->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->customerOrder->toBe('Mock value')
        ->customerRefNo->toBe('Mock value')
        ->customer->toBe('Mock value')
        ->contactId->toBe(42)
        ->location->toBe('Mock value')
        ->currency->toBe('Mock value')
        ->description->toBe('Mock value')
        ->orderTotal->toBe(3.14)
        ->orderTotalInBaseCurrency->toBe(3.14)
        ->vatTaxableTotal->toBe(3.14)
        ->vatTaxableTotalInBaseCurrency->toBe(3.14)
        ->vatExemptTotal->toBe(3.14)
        ->vatExemptTotalInBaseCurrency->toBe(3.14)
        ->taxTotal->toBe(3.14)
        ->taxTotalInBaseCurrency->toBe(3.14)
        ->exchangeRate->toBe(3.14)
        ->discountTotal->toBe(3.14)
        ->discountTotalInBaseCurrency->toBe(3.14)
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->branchNumber->toBe('Mock value')
        ->note->toBe('Mock value')
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the salesOrderGetOrderByTypeByorderTypeorderNbr method in the SalesOrder resource', function () {
    Saloon::fake([
        SalesOrderGetOrderByTypeByorderTypeorderNbrRequest::class => MockResponse::make([
            'data' => [
                'type' => 'salesOrders',
                'id' => 'mock-id-123',
                'attributes' => [
                    'projectCd' => 'Mock value',
                    'printDescriptionOnInvoice' => true,
                    'printNoteOnExternalDocuments' => true,
                    'printNoteOnInternalDocuments' => true,
                    'soBillingContact' => 'Mock value',
                    'soBillingAddress' => 'Mock value',
                    'customerVatzone' => 'Mock value',
                    'invoiceSeparately' => true,
                    'invoiceNbr' => 'Mock value',
                    'invoiceDate' => '2025-11-22T10:40:04.065Z',
                    'terms' => 'Mock value',
                    'dueDate' => '2025-11-22T10:40:04.065Z',
                    'cashDiscountDate' => '2025-11-22T10:40:04.065Z',
                    'postPeriod' => 'Mock value',
                    'salesPerson' => 'Mock value',
                    'commissionPercent' => 'Mock value',
                    'commissionAmount' => 'Mock value',
                    'commissionableAmount' => 'Mock value',
                    'owner' => 'Mock value',
                    'origOrderType' => 'Mock value',
                    'origOrderNbr' => 'Mock value',
                    'soShippingContact' => 'Mock value',
                    'soShippingAddress' => 'Mock value',
                    'schedShipment' => '2025-11-22T10:40:04.065Z',
                    'shipSeparately' => true,
                    'shipComplete' => 'Mock value',
                    'cancelBy' => '2025-11-22T10:40:04.065Z',
                    'canceled' => true,
                    'preferredWarehouse' => 'Mock value',
                    'shipVia' => 'Mock value',
                    'fobPoint' => 'Mock value',
                    'priority' => 42,
                    'shippingTerms' => 'Mock value',
                    'shippingZone' => 'Mock value',
                    'residentialDelivery' => true,
                    'saturdayDelivery' => true,
                    'insurance' => true,
                    'transactionType' => 'Mock value',
                    'paymentMethod' => 'Mock value',
                    'cashAccount' => 'Mock value',
                    'paymentRef' => 'Mock value',
                    'isRotRutDeductible' => true,
                    'emailed' => true,
                    'lines' => [],
                    'shipments' => [],
                    'orderType' => 'Mock value',
                    'orderNo' => 'Mock value',
                    'status' => 'Mock value',
                    'hold' => true,
                    'date' => '2025-11-22T10:40:04.065Z',
                    'requestOn' => '2025-11-22T10:40:04.065Z',
                    'customerOrder' => 'Mock value',
                    'customerRefNo' => 'Mock value',
                    'customer' => 'Mock value',
                    'contactId' => 42,
                    'location' => 'Mock value',
                    'currency' => 'Mock value',
                    'description' => 'Mock value',
                    'orderTotal' => 3.14,
                    'orderTotalInBaseCurrency' => 3.14,
                    'vatTaxableTotal' => 3.14,
                    'vatTaxableTotalInBaseCurrency' => 3.14,
                    'vatExemptTotal' => 3.14,
                    'vatExemptTotalInBaseCurrency' => 3.14,
                    'taxTotal' => 3.14,
                    'taxTotalInBaseCurrency' => 3.14,
                    'exchangeRate' => 3.14,
                    'discountTotal' => 3.14,
                    'discountTotalInBaseCurrency' => 3.14,
                    'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                    'branchNumber' => 'Mock value',
                    'note' => 'Mock value',
                    'attachments' => [],
                    'errorInfo' => 'Mock value',
                    'metadata' => 'Mock value',
                ],
            ],
        ], 200),
    ]);

    $request = new SalesOrderGetOrderByTypeByorderTypeorderNbrRequest(
        orderTypeId: 'test string',
        orderNbrId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderGetOrderByTypeByorderTypeorderNbrRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->projectCd->toBe('Mock value')
        ->printDescriptionOnInvoice->toBe(true)
        ->printNoteOnExternalDocuments->toBe(true)
        ->printNoteOnInternalDocuments->toBe(true)
        ->soBillingContact->toBe('Mock value')
        ->soBillingAddress->toBe('Mock value')
        ->customerVatzone->toBe('Mock value')
        ->invoiceSeparately->toBe(true)
        ->invoiceNbr->toBe('Mock value')
        ->invoiceDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->terms->toBe('Mock value')
        ->dueDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->cashDiscountDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->postPeriod->toBe('Mock value')
        ->salesPerson->toBe('Mock value')
        ->commissionPercent->toBe('Mock value')
        ->commissionAmount->toBe('Mock value')
        ->commissionableAmount->toBe('Mock value')
        ->owner->toBe('Mock value')
        ->origOrderType->toBe('Mock value')
        ->origOrderNbr->toBe('Mock value')
        ->soShippingContact->toBe('Mock value')
        ->soShippingAddress->toBe('Mock value')
        ->schedShipment->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->shipSeparately->toBe(true)
        ->shipComplete->toBe('Mock value')
        ->cancelBy->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->canceled->toBe(true)
        ->preferredWarehouse->toBe('Mock value')
        ->shipVia->toBe('Mock value')
        ->fobPoint->toBe('Mock value')
        ->priority->toBe(42)
        ->shippingTerms->toBe('Mock value')
        ->shippingZone->toBe('Mock value')
        ->residentialDelivery->toBe(true)
        ->saturdayDelivery->toBe(true)
        ->insurance->toBe(true)
        ->transactionType->toBe('Mock value')
        ->paymentMethod->toBe('Mock value')
        ->cashAccount->toBe('Mock value')
        ->paymentRef->toBe('Mock value')
        ->isRotRutDeductible->toBe(true)
        ->emailed->toBe(true)
        ->orderType->toBe('Mock value')
        ->orderNo->toBe('Mock value')
        ->status->toBe('Mock value')
        ->hold->toBe(true)
        ->date->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->requestOn->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->customerOrder->toBe('Mock value')
        ->customerRefNo->toBe('Mock value')
        ->customer->toBe('Mock value')
        ->contactId->toBe(42)
        ->location->toBe('Mock value')
        ->currency->toBe('Mock value')
        ->description->toBe('Mock value')
        ->orderTotal->toBe(3.14)
        ->orderTotalInBaseCurrency->toBe(3.14)
        ->vatTaxableTotal->toBe(3.14)
        ->vatTaxableTotalInBaseCurrency->toBe(3.14)
        ->vatExemptTotal->toBe(3.14)
        ->vatExemptTotalInBaseCurrency->toBe(3.14)
        ->taxTotal->toBe(3.14)
        ->taxTotalInBaseCurrency->toBe(3.14)
        ->exchangeRate->toBe(3.14)
        ->discountTotal->toBe(3.14)
        ->discountTotalInBaseCurrency->toBe(3.14)
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->branchNumber->toBe('Mock value')
        ->note->toBe('Mock value')
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the salesOrderGetRotrutbyorderTypeorderNbr method in the SalesOrder resource', function () {
    Saloon::fake([
        SalesOrderGetRotrutbyorderTypeorderNbrRequest::class => MockResponse::make([
            'data' => [
                'type' => 'salesOrders',
                'id' => 'mock-id-123',
                'attributes' => [
                    'distributedAutomaticaly' => true,
                    'appartment' => 'Mock value',
                    'estate' => 'Mock value',
                    'organizationNbr' => 'Mock value',
                    'distribution' => [],
                ],
            ],
        ], 200),
    ]);

    $request = new SalesOrderGetRotrutbyorderTypeorderNbrRequest(
        orderTypeId: 'test string',
        orderNbrId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderGetRotrutbyorderTypeorderNbrRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->distributedAutomaticaly->toBe(true)
        ->appartment->toBe('Mock value')
        ->estate->toBe('Mock value')
        ->organizationNbr->toBe('Mock value');
});

it('calls the salesOrderGetAllOrdersCollection method in the SalesOrder resource', function () {
    Saloon::fake([
        SalesOrderGetAllOrdersCollectionRequest::class => MockResponse::make([
            'data' => [
                0 => [
                    'type' => 'salesOrders',
                    'id' => 'mock-id-1',
                    'attributes' => [
                        'projectCd' => 'Mock value',
                        'printDescriptionOnInvoice' => true,
                        'printNoteOnExternalDocuments' => true,
                        'printNoteOnInternalDocuments' => true,
                        'soBillingContact' => 'Mock value',
                        'soBillingAddress' => 'Mock value',
                        'customerVatzone' => 'Mock value',
                        'invoiceSeparately' => true,
                        'invoiceNbr' => 'Mock value',
                        'invoiceDate' => '2025-11-22T10:40:04.065Z',
                        'terms' => 'Mock value',
                        'dueDate' => '2025-11-22T10:40:04.065Z',
                        'cashDiscountDate' => '2025-11-22T10:40:04.065Z',
                        'postPeriod' => 'Mock value',
                        'salesPerson' => 'Mock value',
                        'commissionPercent' => 'Mock value',
                        'commissionAmount' => 'Mock value',
                        'commissionableAmount' => 'Mock value',
                        'owner' => 'Mock value',
                        'origOrderType' => 'Mock value',
                        'origOrderNbr' => 'Mock value',
                        'soShippingContact' => 'Mock value',
                        'soShippingAddress' => 'Mock value',
                        'schedShipment' => '2025-11-22T10:40:04.065Z',
                        'shipSeparately' => true,
                        'shipComplete' => 'Mock value',
                        'cancelBy' => '2025-11-22T10:40:04.065Z',
                        'canceled' => true,
                        'preferredWarehouse' => 'Mock value',
                        'shipVia' => 'Mock value',
                        'fobPoint' => 'Mock value',
                        'priority' => 42,
                        'shippingTerms' => 'Mock value',
                        'shippingZone' => 'Mock value',
                        'residentialDelivery' => true,
                        'saturdayDelivery' => true,
                        'insurance' => true,
                        'transactionType' => 'Mock value',
                        'paymentMethod' => 'Mock value',
                        'cashAccount' => 'Mock value',
                        'paymentRef' => 'Mock value',
                        'isRotRutDeductible' => true,
                        'emailed' => true,
                        'lines' => [],
                        'shipments' => [],
                        'orderType' => 'Mock value',
                        'orderNo' => 'Mock value',
                        'status' => 'Mock value',
                        'hold' => true,
                        'date' => '2025-11-22T10:40:04.065Z',
                        'requestOn' => '2025-11-22T10:40:04.065Z',
                        'customerOrder' => 'Mock value',
                        'customerRefNo' => 'Mock value',
                        'customer' => 'Mock value',
                        'contactId' => 42,
                        'location' => 'Mock value',
                        'currency' => 'Mock value',
                        'description' => 'Mock value',
                        'orderTotal' => 3.14,
                        'orderTotalInBaseCurrency' => 3.14,
                        'vatTaxableTotal' => 3.14,
                        'vatTaxableTotalInBaseCurrency' => 3.14,
                        'vatExemptTotal' => 3.14,
                        'vatExemptTotalInBaseCurrency' => 3.14,
                        'taxTotal' => 3.14,
                        'taxTotalInBaseCurrency' => 3.14,
                        'exchangeRate' => 3.14,
                        'discountTotal' => 3.14,
                        'discountTotalInBaseCurrency' => 3.14,
                        'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                        'branchNumber' => 'Mock value',
                        'note' => 'Mock value',
                        'attachments' => [],
                        'errorInfo' => 'Mock value',
                        'metadata' => 'Mock value',
                    ],
                ],
                1 => [
                    'type' => 'salesOrders',
                    'id' => 'mock-id-2',
                    'attributes' => [
                        'projectCd' => 'Mock value',
                        'printDescriptionOnInvoice' => true,
                        'printNoteOnExternalDocuments' => true,
                        'printNoteOnInternalDocuments' => true,
                        'soBillingContact' => 'Mock value',
                        'soBillingAddress' => 'Mock value',
                        'customerVatzone' => 'Mock value',
                        'invoiceSeparately' => true,
                        'invoiceNbr' => 'Mock value',
                        'invoiceDate' => '2025-11-22T10:40:04.065Z',
                        'terms' => 'Mock value',
                        'dueDate' => '2025-11-22T10:40:04.065Z',
                        'cashDiscountDate' => '2025-11-22T10:40:04.065Z',
                        'postPeriod' => 'Mock value',
                        'salesPerson' => 'Mock value',
                        'commissionPercent' => 'Mock value',
                        'commissionAmount' => 'Mock value',
                        'commissionableAmount' => 'Mock value',
                        'owner' => 'Mock value',
                        'origOrderType' => 'Mock value',
                        'origOrderNbr' => 'Mock value',
                        'soShippingContact' => 'Mock value',
                        'soShippingAddress' => 'Mock value',
                        'schedShipment' => '2025-11-22T10:40:04.065Z',
                        'shipSeparately' => true,
                        'shipComplete' => 'Mock value',
                        'cancelBy' => '2025-11-22T10:40:04.065Z',
                        'canceled' => true,
                        'preferredWarehouse' => 'Mock value',
                        'shipVia' => 'Mock value',
                        'fobPoint' => 'Mock value',
                        'priority' => 42,
                        'shippingTerms' => 'Mock value',
                        'shippingZone' => 'Mock value',
                        'residentialDelivery' => true,
                        'saturdayDelivery' => true,
                        'insurance' => true,
                        'transactionType' => 'Mock value',
                        'paymentMethod' => 'Mock value',
                        'cashAccount' => 'Mock value',
                        'paymentRef' => 'Mock value',
                        'isRotRutDeductible' => true,
                        'emailed' => true,
                        'lines' => [],
                        'shipments' => [],
                        'orderType' => 'Mock value',
                        'orderNo' => 'Mock value',
                        'status' => 'Mock value',
                        'hold' => true,
                        'date' => '2025-11-22T10:40:04.065Z',
                        'requestOn' => '2025-11-22T10:40:04.065Z',
                        'customerOrder' => 'Mock value',
                        'customerRefNo' => 'Mock value',
                        'customer' => 'Mock value',
                        'contactId' => 42,
                        'location' => 'Mock value',
                        'currency' => 'Mock value',
                        'description' => 'Mock value',
                        'orderTotal' => 3.14,
                        'orderTotalInBaseCurrency' => 3.14,
                        'vatTaxableTotal' => 3.14,
                        'vatTaxableTotalInBaseCurrency' => 3.14,
                        'vatExemptTotal' => 3.14,
                        'vatExemptTotalInBaseCurrency' => 3.14,
                        'taxTotal' => 3.14,
                        'taxTotalInBaseCurrency' => 3.14,
                        'exchangeRate' => 3.14,
                        'discountTotal' => 3.14,
                        'discountTotalInBaseCurrency' => 3.14,
                        'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                        'branchNumber' => 'Mock value',
                        'note' => 'Mock value',
                        'attachments' => [],
                        'errorInfo' => 'Mock value',
                        'metadata' => 'Mock value',
                    ],
                ],
            ],
        ], 200),
    ]);

    $request = (new SalesOrderGetAllOrdersCollectionRequest(orderType: 'test string', status: 'test string', greaterThanValue: 'test string', numberToRead: 123, skipRecords: 123, orderBy: 'test string', showNotes: true, lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', pageNumber: 123, pageSize: 123));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (SalesOrderGetAllOrdersCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->projectCd->toBe('Mock value')
        ->printDescriptionOnInvoice->toBe(true)
        ->printNoteOnExternalDocuments->toBe(true)
        ->printNoteOnInternalDocuments->toBe(true)
        ->soBillingContact->toBe('Mock value')
        ->soBillingAddress->toBe('Mock value')
        ->customerVatzone->toBe('Mock value')
        ->invoiceSeparately->toBe(true)
        ->invoiceNbr->toBe('Mock value')
        ->invoiceDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->terms->toBe('Mock value')
        ->dueDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->cashDiscountDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->postPeriod->toBe('Mock value')
        ->salesPerson->toBe('Mock value')
        ->commissionPercent->toBe('Mock value')
        ->commissionAmount->toBe('Mock value')
        ->commissionableAmount->toBe('Mock value')
        ->owner->toBe('Mock value')
        ->origOrderType->toBe('Mock value')
        ->origOrderNbr->toBe('Mock value')
        ->soShippingContact->toBe('Mock value')
        ->soShippingAddress->toBe('Mock value')
        ->schedShipment->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->shipSeparately->toBe(true)
        ->shipComplete->toBe('Mock value')
        ->cancelBy->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->canceled->toBe(true)
        ->preferredWarehouse->toBe('Mock value')
        ->shipVia->toBe('Mock value')
        ->fobPoint->toBe('Mock value')
        ->priority->toBe(42)
        ->shippingTerms->toBe('Mock value')
        ->shippingZone->toBe('Mock value')
        ->residentialDelivery->toBe(true)
        ->saturdayDelivery->toBe(true)
        ->insurance->toBe(true)
        ->transactionType->toBe('Mock value')
        ->paymentMethod->toBe('Mock value')
        ->cashAccount->toBe('Mock value')
        ->paymentRef->toBe('Mock value')
        ->isRotRutDeductible->toBe(true)
        ->emailed->toBe(true)
        ->orderType->toBe('Mock value')
        ->orderNo->toBe('Mock value')
        ->status->toBe('Mock value')
        ->hold->toBe(true)
        ->date->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->requestOn->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->customerOrder->toBe('Mock value')
        ->customerRefNo->toBe('Mock value')
        ->customer->toBe('Mock value')
        ->contactId->toBe(42)
        ->location->toBe('Mock value')
        ->currency->toBe('Mock value')
        ->description->toBe('Mock value')
        ->orderTotal->toBe(3.14)
        ->orderTotalInBaseCurrency->toBe(3.14)
        ->vatTaxableTotal->toBe(3.14)
        ->vatTaxableTotalInBaseCurrency->toBe(3.14)
        ->vatExemptTotal->toBe(3.14)
        ->vatExemptTotalInBaseCurrency->toBe(3.14)
        ->taxTotal->toBe(3.14)
        ->taxTotalInBaseCurrency->toBe(3.14)
        ->exchangeRate->toBe(3.14)
        ->discountTotal->toBe(3.14)
        ->discountTotalInBaseCurrency->toBe(3.14)
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->branchNumber->toBe('Mock value')
        ->note->toBe('Mock value')
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the salesOrderCreateShipmentActionBysaleOrderNumber method in the SalesOrder resource', function () {
    $mockClient = Saloon::fake([
        SalesOrderCreateShipmentActionBysaleOrderNumberRequest::class => MockResponse::make([], 200),
    ]);

    // Create DTO with sample data
    $dto = \Pionect\VismaSdk\Dto\CreateShipmentActionResultDto::factory()->state([
        'referenceNumber' => 'test value',
        'shipmentDto' => 'test value',
        'actionId' => 'action_id-123',
        'actionResult' => 'test value',
    ])->make();

    $request = new SalesOrderCreateShipmentActionBysaleOrderNumberRequest(saleOrderNumberId: 'sale_order_number_id-123', data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderCreateShipmentActionBysaleOrderNumberRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->toHaveKey('data')
            ->data->type->toBe('salesOrders')
            ->data->attributes->scoped(fn ($attributes) => $attributes
            ->referenceNumber->toBe('test value')
            ->shipmentDto->toBe('test value')
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value')
            );

        return true;
    });
});

it('calls the salesOrderCancelSalesOrderBysaleOrderNumber method in the SalesOrder resource', function () {
    $mockClient = Saloon::fake([
        SalesOrderCancelSalesOrderBysaleOrderNumberRequest::class => MockResponse::make([], 200),
    ]);

    // Create DTO with sample data
    $dto = \Pionect\VismaSdk\Dto\CancelSalesOrderActionResultDto::factory()->state([
        'actionId' => 'action_id-123',
        'actionResult' => 'test value',
        'errorInfo' => 'test value',
    ])->make();

    $request = new SalesOrderCancelSalesOrderBysaleOrderNumberRequest(saleOrderNumberId: 'sale_order_number_id-123', data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderCancelSalesOrderBysaleOrderNumberRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->toHaveKey('data')
            ->data->type->toBe('salesOrders')
            ->data->attributes->scoped(fn ($attributes) => $attributes
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value')
            ->errorInfo->toBe('test value')
            );

        return true;
    });
});

it('calls the salesOrderReopenSalesOrderBysalesOrderNumber method in the SalesOrder resource', function () {
    $mockClient = Saloon::fake([
        SalesOrderReopenSalesOrderBysalesOrderNumberRequest::class => MockResponse::make([], 200),
    ]);

    // Create DTO with sample data
    $dto = \Pionect\VismaSdk\Dto\ReopenSalesOrderActionResultDto::factory()->state([
        'actionId' => 'action_id-123',
        'actionResult' => 'test value',
        'errorInfo' => 'test value',
    ])->make();

    $request = new SalesOrderReopenSalesOrderBysalesOrderNumberRequest(salesOrderNumberId: 'sales_order_number_id-123', data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderReopenSalesOrderBysalesOrderNumberRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->toHaveKey('data')
            ->data->type->toBe('salesOrders')
            ->data->attributes->scoped(fn ($attributes) => $attributes
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value')
            ->errorInfo->toBe('test value')
            );

        return true;
    });
});
