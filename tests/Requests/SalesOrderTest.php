<?php

// Generated 2026-01-30 14:10:14
use Pionect\VismaSdk\Dto\SalesOrderUpdateDto;
use Pionect\VismaSdk\Requests\SalesOrder\SalesOrderCancelSalesOrderBysaleOrderNumberRequest;
use Pionect\VismaSdk\Requests\SalesOrder\SalesOrderCreateHeaderAttachmentByorderNumberorderTypeRequest;
use Pionect\VismaSdk\Requests\SalesOrder\SalesOrderCreateHeaderAttachmentByorderNumberRequest;
use Pionect\VismaSdk\Requests\SalesOrder\SalesOrderCreateLineAttachmentByorderNumberlineNumberRequest;
use Pionect\VismaSdk\Requests\SalesOrder\SalesOrderCreateLineAttachmentByorderNumberorderTypelineNumberRequest;
use Pionect\VismaSdk\Requests\SalesOrder\SalesOrderCreateShipmentActionBysaleOrderNumberRequest;
use Pionect\VismaSdk\Requests\SalesOrder\SalesOrderDeleteLineAttachmentByorderNumberorderTypelineNumberfileIdRequest;
use Pionect\VismaSdk\Requests\SalesOrder\SalesOrderDeleteOrderAttachmentByorderNumberorderTypefileIdRequest;
use Pionect\VismaSdk\Requests\SalesOrder\SalesOrderGetAllOrdersRequest;
use Pionect\VismaSdk\Requests\SalesOrder\SalesOrderGetByorderNbrRequest;
use Pionect\VismaSdk\Requests\SalesOrder\SalesOrderGetCommissionsByorderTypeorderNbrRequest;
use Pionect\VismaSdk\Requests\SalesOrder\SalesOrderGetOrderByTypeByorderTypeorderNbrRequest;
use Pionect\VismaSdk\Requests\SalesOrder\SalesOrderGetRotrutbyorderTypeorderNbrRequest;
use Pionect\VismaSdk\Requests\SalesOrder\SalesOrderPostRequest;
use Pionect\VismaSdk\Requests\SalesOrder\SalesOrderPrintOrderByorderNumberorderTypeRequest;
use Pionect\VismaSdk\Requests\SalesOrder\SalesOrderPutByorderNbrRequest;
use Pionect\VismaSdk\Requests\SalesOrder\SalesOrderReopenSalesOrderBysalesOrderNumberRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the salesOrderGetByorderNbrRequest method in the SalesOrder resource', function () {
    Saloon::fake([
        SalesOrderGetByorderNbrRequest::class => MockResponse::make([
            'projectCd' => 'String value',
            'printDescriptionOnInvoice' => true,
            'printNoteOnExternalDocuments' => true,
            'printNoteOnInternalDocuments' => true,
            'soBillingContact' => null,
            'soBillingAddress' => null,
            'customerVatzone' => null,
            'invoiceSeparately' => true,
            'invoiceNbr' => 'String value',
            'invoiceDate' => '2025-11-22T10:40:04+00:00',
            'terms' => null,
            'dueDate' => '2025-11-22T10:40:04+00:00',
            'cashDiscountDate' => '2025-11-22T10:40:04+00:00',
            'postPeriod' => 'String value',
            'salesPerson' => null,
            'commissionPercent' => 'String value',
            'commissionAmount' => 'String value',
            'commissionableAmount' => 'String value',
            'owner' => null,
            'origOrderType' => 'String value',
            'origOrderNbr' => 'String value',
            'soShippingContact' => null,
            'soShippingAddress' => null,
            'schedShipment' => '2025-11-22T10:40:04+00:00',
            'shipSeparately' => true,
            'shipComplete' => 'String value',
            'cancelBy' => '2025-11-22T10:40:04+00:00',
            'canceled' => true,
            'preferredWarehouse' => null,
            'shipVia' => null,
            'fobPoint' => null,
            'priority' => 42,
            'shippingTerms' => null,
            'shippingZone' => null,
            'residentialDelivery' => true,
            'saturdayDelivery' => true,
            'insurance' => true,
            'transactionType' => null,
            'paymentMethod' => null,
            'cashAccount' => 'String value',
            'paymentRef' => 'String value',
            'isRotRutDeductible' => true,
            'emailed' => true,
            'lines' => [],
            'shipments' => [],
            'orderType' => 'String value',
            'orderNo' => 'String value',
            'status' => 'String value',
            'hold' => true,
            'date' => '2025-11-22T10:40:04+00:00',
            'requestOn' => '2025-11-22T10:40:04+00:00',
            'customerOrder' => 'String value',
            'customerRefNo' => 'String value',
            'customer' => null,
            'contactId' => 42,
            'location' => null,
            'currency' => 'String value',
            'description' => 'String value',
            'orderTotal' => 42,
            'orderTotalInBaseCurrency' => 42,
            'vatTaxableTotal' => 42,
            'vatTaxableTotalInBaseCurrency' => 42,
            'vatExemptTotal' => 42,
            'vatExemptTotalInBaseCurrency' => 42,
            'taxTotal' => 42,
            'taxTotalInBaseCurrency' => 42,
            'exchangeRate' => 42,
            'discountTotal' => 42,
            'discountTotalInBaseCurrency' => 42,
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'branchNumber' => null,
            'note' => 'String value',
            'attachments' => [],
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new SalesOrderGetByorderNbrRequest(
        orderNbr: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderGetByorderNbrRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->projectCd->toBe('String value')
        ->printDescriptionOnInvoice->toBe(true)
        ->printNoteOnExternalDocuments->toBe(true)
        ->printNoteOnInternalDocuments->toBe(true)
        ->soBillingContact->toBeNull()
        ->soBillingAddress->toBeNull()
        ->customerVatzone->toBeNull()
        ->invoiceSeparately->toBe(true)
        ->invoiceNbr->toBe('String value')
        ->invoiceDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->terms->toBeNull()
        ->dueDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->cashDiscountDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->postPeriod->toBe('String value')
        ->salesPerson->toBeNull()
        ->commissionPercent->toBe('String value')
        ->commissionAmount->toBe('String value')
        ->commissionableAmount->toBe('String value')
        ->owner->toBeNull()
        ->origOrderType->toBe('String value')
        ->origOrderNbr->toBe('String value')
        ->soShippingContact->toBeNull()
        ->soShippingAddress->toBeNull()
        ->schedShipment->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->shipSeparately->toBe(true)
        ->shipComplete->toBe('String value')
        ->cancelBy->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->canceled->toBe(true)
        ->preferredWarehouse->toBeNull()
        ->shipVia->toBeNull()
        ->fobPoint->toBeNull()
        ->priority->toBe(42)
        ->shippingTerms->toBeNull()
        ->shippingZone->toBeNull()
        ->residentialDelivery->toBe(true)
        ->saturdayDelivery->toBe(true)
        ->insurance->toBe(true)
        ->transactionType->toBeNull()
        ->paymentMethod->toBeNull()
        ->cashAccount->toBe('String value')
        ->paymentRef->toBe('String value')
        ->isRotRutDeductible->toBe(true)
        ->emailed->toBe(true)
        ->orderType->toBe('String value')
        ->orderNo->toBe('String value')
        ->status->toBe('String value')
        ->hold->toBe(true)
        ->date->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->requestOn->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->customerOrder->toBe('String value')
        ->customerRefNo->toBe('String value')
        ->customer->toBeNull()
        ->contactId->toBe(42)
        ->location->toBeNull()
        ->currency->toBe('String value')
        ->description->toBe('String value')
        ->orderTotal->toBe(42)
        ->orderTotalInBaseCurrency->toBe(42)
        ->vatTaxableTotal->toBe(42)
        ->vatTaxableTotalInBaseCurrency->toBe(42)
        ->vatExemptTotal->toBe(42)
        ->vatExemptTotalInBaseCurrency->toBe(42)
        ->taxTotal->toBe(42)
        ->taxTotalInBaseCurrency->toBe(42)
        ->exchangeRate->toBe(42)
        ->discountTotal->toBe(42)
        ->discountTotalInBaseCurrency->toBe(42)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->branchNumber->toBeNull()
        ->note->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the salesOrderPutByorderNbrRequest method in the SalesOrder resource', function () {
    $bodyData = new SalesOrderUpdateDto(
        project: 42,
        printDescriptionOnInvoice: true,
        printNoteOnExternalDocuments: true,
        printNoteOnInternalDocuments: true,
        soBillingContact: null,
        soBillingAddress: null,
        customerVatzone: 'String value',
        invoiceSeparately: true,
        terms: 'String value',
        salesPerson: 'String value',
        owner: 'String value',
        origOrderType: 'String value',
        origOrderNbr: 'String value',
        soShippingContact: null,
        soShippingAddress: null,
        schedShipment: '2025-11-22T10:40:04+00:00',
        shipSeparately: true,
        shipComplete: 'String value',
        cancelBy: '2025-11-22T10:40:04+00:00',
        canceled: true,
        preferredWarehouse: 'String value',
        shipVia: 'String value',
        fobPoint: 'String value',
        priority: 42,
        shippingTerms: 'String value',
        shippingZone: 'String value',
        residentialDelivery: true,
        saturdayDelivery: true,
        insurance: true,
        transactionType: 42,
        paymentMethod: 'String value',
        cashAccount: 'String value',
        paymentRef: 'String value',
        isRotRutDeductible: true,
        emailed: true,
        rotRutDetails: null,
        lines: [],
        orderType: null,
        orderNumber: 'String value',
        hold: true,
        date: '2025-11-22T10:40:04+00:00',
        requestOn: '2025-11-22T10:40:04+00:00',
        customerOrder: 'String value',
        customerRefNo: 'String value',
        customer: null,
        location: 'String value',
        contactId: 42,
        gln: null,
        vatRegistrationId: null,
        currency: 'String value',
        description: 'String value',
        recalculateShipment: true,
        branchNumber: 'String value',
        note: 'String value',
        overrideNumberSeries: true
    );

    Saloon::fake([
        SalesOrderPutByorderNbrRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SalesOrderPutByorderNbrRequest(
        orderNbr: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderPutByorderNbrRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the salesOrderGetOrderByTypeByorderTypeorderNbrRequest method in the SalesOrder resource', function () {
    Saloon::fake([
        SalesOrderGetOrderByTypeByorderTypeorderNbrRequest::class => MockResponse::make([
            'projectCd' => 'String value',
            'printDescriptionOnInvoice' => true,
            'printNoteOnExternalDocuments' => true,
            'printNoteOnInternalDocuments' => true,
            'soBillingContact' => null,
            'soBillingAddress' => null,
            'customerVatzone' => null,
            'invoiceSeparately' => true,
            'invoiceNbr' => 'String value',
            'invoiceDate' => '2025-11-22T10:40:04+00:00',
            'terms' => null,
            'dueDate' => '2025-11-22T10:40:04+00:00',
            'cashDiscountDate' => '2025-11-22T10:40:04+00:00',
            'postPeriod' => 'String value',
            'salesPerson' => null,
            'commissionPercent' => 'String value',
            'commissionAmount' => 'String value',
            'commissionableAmount' => 'String value',
            'owner' => null,
            'origOrderType' => 'String value',
            'origOrderNbr' => 'String value',
            'soShippingContact' => null,
            'soShippingAddress' => null,
            'schedShipment' => '2025-11-22T10:40:04+00:00',
            'shipSeparately' => true,
            'shipComplete' => 'String value',
            'cancelBy' => '2025-11-22T10:40:04+00:00',
            'canceled' => true,
            'preferredWarehouse' => null,
            'shipVia' => null,
            'fobPoint' => null,
            'priority' => 42,
            'shippingTerms' => null,
            'shippingZone' => null,
            'residentialDelivery' => true,
            'saturdayDelivery' => true,
            'insurance' => true,
            'transactionType' => null,
            'paymentMethod' => null,
            'cashAccount' => 'String value',
            'paymentRef' => 'String value',
            'isRotRutDeductible' => true,
            'emailed' => true,
            'lines' => [],
            'shipments' => [],
            'orderType' => 'String value',
            'orderNo' => 'String value',
            'status' => 'String value',
            'hold' => true,
            'date' => '2025-11-22T10:40:04+00:00',
            'requestOn' => '2025-11-22T10:40:04+00:00',
            'customerOrder' => 'String value',
            'customerRefNo' => 'String value',
            'customer' => null,
            'contactId' => 42,
            'location' => null,
            'currency' => 'String value',
            'description' => 'String value',
            'orderTotal' => 42,
            'orderTotalInBaseCurrency' => 42,
            'vatTaxableTotal' => 42,
            'vatTaxableTotalInBaseCurrency' => 42,
            'vatExemptTotal' => 42,
            'vatExemptTotalInBaseCurrency' => 42,
            'taxTotal' => 42,
            'taxTotalInBaseCurrency' => 42,
            'exchangeRate' => 42,
            'discountTotal' => 42,
            'discountTotalInBaseCurrency' => 42,
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'branchNumber' => null,
            'note' => 'String value',
            'attachments' => [],
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new SalesOrderGetOrderByTypeByorderTypeorderNbrRequest(
        orderType: 'test string',
        orderNbr: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderGetOrderByTypeByorderTypeorderNbrRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->projectCd->toBe('String value')
        ->printDescriptionOnInvoice->toBe(true)
        ->printNoteOnExternalDocuments->toBe(true)
        ->printNoteOnInternalDocuments->toBe(true)
        ->soBillingContact->toBeNull()
        ->soBillingAddress->toBeNull()
        ->customerVatzone->toBeNull()
        ->invoiceSeparately->toBe(true)
        ->invoiceNbr->toBe('String value')
        ->invoiceDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->terms->toBeNull()
        ->dueDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->cashDiscountDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->postPeriod->toBe('String value')
        ->salesPerson->toBeNull()
        ->commissionPercent->toBe('String value')
        ->commissionAmount->toBe('String value')
        ->commissionableAmount->toBe('String value')
        ->owner->toBeNull()
        ->origOrderType->toBe('String value')
        ->origOrderNbr->toBe('String value')
        ->soShippingContact->toBeNull()
        ->soShippingAddress->toBeNull()
        ->schedShipment->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->shipSeparately->toBe(true)
        ->shipComplete->toBe('String value')
        ->cancelBy->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->canceled->toBe(true)
        ->preferredWarehouse->toBeNull()
        ->shipVia->toBeNull()
        ->fobPoint->toBeNull()
        ->priority->toBe(42)
        ->shippingTerms->toBeNull()
        ->shippingZone->toBeNull()
        ->residentialDelivery->toBe(true)
        ->saturdayDelivery->toBe(true)
        ->insurance->toBe(true)
        ->transactionType->toBeNull()
        ->paymentMethod->toBeNull()
        ->cashAccount->toBe('String value')
        ->paymentRef->toBe('String value')
        ->isRotRutDeductible->toBe(true)
        ->emailed->toBe(true)
        ->orderType->toBe('String value')
        ->orderNo->toBe('String value')
        ->status->toBe('String value')
        ->hold->toBe(true)
        ->date->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->requestOn->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->customerOrder->toBe('String value')
        ->customerRefNo->toBe('String value')
        ->customer->toBeNull()
        ->contactId->toBe(42)
        ->location->toBeNull()
        ->currency->toBe('String value')
        ->description->toBe('String value')
        ->orderTotal->toBe(42)
        ->orderTotalInBaseCurrency->toBe(42)
        ->vatTaxableTotal->toBe(42)
        ->vatTaxableTotalInBaseCurrency->toBe(42)
        ->vatExemptTotal->toBe(42)
        ->vatExemptTotalInBaseCurrency->toBe(42)
        ->taxTotal->toBe(42)
        ->taxTotalInBaseCurrency->toBe(42)
        ->exchangeRate->toBe(42)
        ->discountTotal->toBe(42)
        ->discountTotalInBaseCurrency->toBe(42)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->branchNumber->toBeNull()
        ->note->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the salesOrderGetRotrutbyorderTypeorderNbrRequest method in the SalesOrder resource', function () {
    Saloon::fake([
        SalesOrderGetRotrutbyorderTypeorderNbrRequest::class => MockResponse::make([
            'distributedAutomaticaly' => true,
            'type' => 'String value',
            'appartment' => 'String value',
            'estate' => 'String value',
            'organizationNbr' => 'String value',
            'distribution' => [],
        ], 200),
    ]);

    $request = new SalesOrderGetRotrutbyorderTypeorderNbrRequest(
        orderType: 'test string',
        orderNbr: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderGetRotrutbyorderTypeorderNbrRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->distributedAutomaticaly->toBe(true)
        ->type->toBe('String value')
        ->appartment->toBe('String value')
        ->estate->toBe('String value')
        ->organizationNbr->toBe('String value');
});

it('calls the salesOrderGetAllOrdersRequest method in the SalesOrder resource', function () {
    Saloon::fake([
        SalesOrderGetAllOrdersRequest::class => MockResponse::make([
            0 => [
                'projectCd' => 'String value',
                'printDescriptionOnInvoice' => true,
                'printNoteOnExternalDocuments' => true,
                'printNoteOnInternalDocuments' => true,
                'soBillingContact' => null,
                'soBillingAddress' => null,
                'customerVatzone' => null,
                'invoiceSeparately' => true,
                'invoiceNbr' => 'String value',
                'invoiceDate' => '2025-11-22T10:40:04+00:00',
                'terms' => null,
                'dueDate' => '2025-11-22T10:40:04+00:00',
                'cashDiscountDate' => '2025-11-22T10:40:04+00:00',
                'postPeriod' => 'String value',
                'salesPerson' => null,
                'commissionPercent' => 'String value',
                'commissionAmount' => 'String value',
                'commissionableAmount' => 'String value',
                'owner' => null,
                'origOrderType' => 'String value',
                'origOrderNbr' => 'String value',
                'soShippingContact' => null,
                'soShippingAddress' => null,
                'schedShipment' => '2025-11-22T10:40:04+00:00',
                'shipSeparately' => true,
                'shipComplete' => 'String value',
                'cancelBy' => '2025-11-22T10:40:04+00:00',
                'canceled' => true,
                'preferredWarehouse' => null,
                'shipVia' => null,
                'fobPoint' => null,
                'priority' => 42,
                'shippingTerms' => null,
                'shippingZone' => null,
                'residentialDelivery' => true,
                'saturdayDelivery' => true,
                'insurance' => true,
                'transactionType' => null,
                'paymentMethod' => null,
                'cashAccount' => 'String value',
                'paymentRef' => 'String value',
                'isRotRutDeductible' => true,
                'emailed' => true,
                'lines' => [],
                'shipments' => [],
                'orderType' => 'String value',
                'orderNo' => 'String value',
                'status' => 'String value',
                'hold' => true,
                'date' => '2025-11-22T10:40:04+00:00',
                'requestOn' => '2025-11-22T10:40:04+00:00',
                'customerOrder' => 'String value',
                'customerRefNo' => 'String value',
                'customer' => null,
                'contactId' => 42,
                'location' => null,
                'currency' => 'String value',
                'description' => 'String value',
                'orderTotal' => 42,
                'orderTotalInBaseCurrency' => 42,
                'vatTaxableTotal' => 42,
                'vatTaxableTotalInBaseCurrency' => 42,
                'vatExemptTotal' => 42,
                'vatExemptTotalInBaseCurrency' => 42,
                'taxTotal' => 42,
                'taxTotalInBaseCurrency' => 42,
                'exchangeRate' => 42,
                'discountTotal' => 42,
                'discountTotalInBaseCurrency' => 42,
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'branchNumber' => null,
                'note' => 'String value',
                'attachments' => [],
                'errorInfo' => 'String value',
            ],
            1 => [
                'projectCd' => 'String value',
                'printDescriptionOnInvoice' => true,
                'printNoteOnExternalDocuments' => true,
                'printNoteOnInternalDocuments' => true,
                'soBillingContact' => null,
                'soBillingAddress' => null,
                'customerVatzone' => null,
                'invoiceSeparately' => true,
                'invoiceNbr' => 'String value',
                'invoiceDate' => '2025-11-22T10:40:04+00:00',
                'terms' => null,
                'dueDate' => '2025-11-22T10:40:04+00:00',
                'cashDiscountDate' => '2025-11-22T10:40:04+00:00',
                'postPeriod' => 'String value',
                'salesPerson' => null,
                'commissionPercent' => 'String value',
                'commissionAmount' => 'String value',
                'commissionableAmount' => 'String value',
                'owner' => null,
                'origOrderType' => 'String value',
                'origOrderNbr' => 'String value',
                'soShippingContact' => null,
                'soShippingAddress' => null,
                'schedShipment' => '2025-11-22T10:40:04+00:00',
                'shipSeparately' => true,
                'shipComplete' => 'String value',
                'cancelBy' => '2025-11-22T10:40:04+00:00',
                'canceled' => true,
                'preferredWarehouse' => null,
                'shipVia' => null,
                'fobPoint' => null,
                'priority' => 42,
                'shippingTerms' => null,
                'shippingZone' => null,
                'residentialDelivery' => true,
                'saturdayDelivery' => true,
                'insurance' => true,
                'transactionType' => null,
                'paymentMethod' => null,
                'cashAccount' => 'String value',
                'paymentRef' => 'String value',
                'isRotRutDeductible' => true,
                'emailed' => true,
                'lines' => [],
                'shipments' => [],
                'orderType' => 'String value',
                'orderNo' => 'String value',
                'status' => 'String value',
                'hold' => true,
                'date' => '2025-11-22T10:40:04+00:00',
                'requestOn' => '2025-11-22T10:40:04+00:00',
                'customerOrder' => 'String value',
                'customerRefNo' => 'String value',
                'customer' => null,
                'contactId' => 42,
                'location' => null,
                'currency' => 'String value',
                'description' => 'String value',
                'orderTotal' => 42,
                'orderTotalInBaseCurrency' => 42,
                'vatTaxableTotal' => 42,
                'vatTaxableTotalInBaseCurrency' => 42,
                'vatExemptTotal' => 42,
                'vatExemptTotalInBaseCurrency' => 42,
                'taxTotal' => 42,
                'taxTotalInBaseCurrency' => 42,
                'exchangeRate' => 42,
                'discountTotal' => 42,
                'discountTotalInBaseCurrency' => 42,
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'branchNumber' => null,
                'note' => 'String value',
                'attachments' => [],
                'errorInfo' => 'String value',
            ],
        ], 200),
    ]);

    $request = new SalesOrderGetAllOrdersRequest(
        orderType: 'test string',
        status: 'test string',
        greaterThanValue: 'test string',
        numberToRead: 123,
        skipRecords: 123,
        orderBy: 'test string',
        showNotes: true,
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderGetAllOrdersRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toBeArray()
        ->and($collection)->toHaveCount(2);

    $firstItem = $collection[0];

    expect($firstItem)
        ->projectCd->toBe('String value')
        ->printDescriptionOnInvoice->toBe(true)
        ->printNoteOnExternalDocuments->toBe(true)
        ->printNoteOnInternalDocuments->toBe(true)
        ->soBillingContact->toBeNull()
        ->soBillingAddress->toBeNull()
        ->customerVatzone->toBeNull()
        ->invoiceSeparately->toBe(true)
        ->invoiceNbr->toBe('String value')
        ->invoiceDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->terms->toBeNull()
        ->dueDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->cashDiscountDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->postPeriod->toBe('String value')
        ->salesPerson->toBeNull()
        ->commissionPercent->toBe('String value')
        ->commissionAmount->toBe('String value')
        ->commissionableAmount->toBe('String value')
        ->owner->toBeNull()
        ->origOrderType->toBe('String value')
        ->origOrderNbr->toBe('String value')
        ->soShippingContact->toBeNull()
        ->soShippingAddress->toBeNull()
        ->schedShipment->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->shipSeparately->toBe(true)
        ->shipComplete->toBe('String value')
        ->cancelBy->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->canceled->toBe(true)
        ->preferredWarehouse->toBeNull()
        ->shipVia->toBeNull()
        ->fobPoint->toBeNull()
        ->priority->toBe(42)
        ->shippingTerms->toBeNull()
        ->shippingZone->toBeNull()
        ->residentialDelivery->toBe(true)
        ->saturdayDelivery->toBe(true)
        ->insurance->toBe(true)
        ->transactionType->toBeNull()
        ->paymentMethod->toBeNull()
        ->cashAccount->toBe('String value')
        ->paymentRef->toBe('String value')
        ->isRotRutDeductible->toBe(true)
        ->emailed->toBe(true)
        ->orderType->toBe('String value')
        ->orderNo->toBe('String value')
        ->status->toBe('String value')
        ->hold->toBe(true)
        ->date->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->requestOn->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->customerOrder->toBe('String value')
        ->customerRefNo->toBe('String value')
        ->customer->toBeNull()
        ->contactId->toBe(42)
        ->location->toBeNull()
        ->currency->toBe('String value')
        ->description->toBe('String value')
        ->orderTotal->toBe(42)
        ->orderTotalInBaseCurrency->toBe(42)
        ->vatTaxableTotal->toBe(42)
        ->vatTaxableTotalInBaseCurrency->toBe(42)
        ->vatExemptTotal->toBe(42)
        ->vatExemptTotalInBaseCurrency->toBe(42)
        ->taxTotal->toBe(42)
        ->taxTotalInBaseCurrency->toBe(42)
        ->exchangeRate->toBe(42)
        ->discountTotal->toBe(42)
        ->discountTotalInBaseCurrency->toBe(42)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->branchNumber->toBeNull()
        ->note->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the salesOrderPostRequest method in the SalesOrder resource', function () {
    $bodyData = new SalesOrderUpdateDto(
        project: 42,
        printDescriptionOnInvoice: true,
        printNoteOnExternalDocuments: true,
        printNoteOnInternalDocuments: true,
        soBillingContact: null,
        soBillingAddress: null,
        customerVatzone: 'String value',
        invoiceSeparately: true,
        terms: 'String value',
        salesPerson: 'String value',
        owner: 'String value',
        origOrderType: 'String value',
        origOrderNbr: 'String value',
        soShippingContact: null,
        soShippingAddress: null,
        schedShipment: '2025-11-22T10:40:04+00:00',
        shipSeparately: true,
        shipComplete: 'String value',
        cancelBy: '2025-11-22T10:40:04+00:00',
        canceled: true,
        preferredWarehouse: 'String value',
        shipVia: 'String value',
        fobPoint: 'String value',
        priority: 42,
        shippingTerms: 'String value',
        shippingZone: 'String value',
        residentialDelivery: true,
        saturdayDelivery: true,
        insurance: true,
        transactionType: 42,
        paymentMethod: 'String value',
        cashAccount: 'String value',
        paymentRef: 'String value',
        isRotRutDeductible: true,
        emailed: true,
        rotRutDetails: null,
        lines: [],
        orderType: null,
        orderNumber: 'String value',
        hold: true,
        date: '2025-11-22T10:40:04+00:00',
        requestOn: '2025-11-22T10:40:04+00:00',
        customerOrder: 'String value',
        customerRefNo: 'String value',
        customer: null,
        location: 'String value',
        contactId: 42,
        gln: null,
        vatRegistrationId: null,
        currency: 'String value',
        description: 'String value',
        recalculateShipment: true,
        branchNumber: 'String value',
        note: 'String value',
        overrideNumberSeries: true
    );

    Saloon::fake([
        SalesOrderPostRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SalesOrderPostRequest(
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderPostRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the salesOrderGetCommissionsByorderTypeorderNbrRequest method in the SalesOrder resource', function () {
    Saloon::fake([
        SalesOrderGetCommissionsByorderTypeorderNbrRequest::class => MockResponse::make([
            'name' => 'Mock value',
        ], 200),
    ]);

    $request = new SalesOrderGetCommissionsByorderTypeorderNbrRequest(
        orderType: 'test string',
        orderNbr: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderGetCommissionsByorderTypeorderNbrRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->name->toBe('Mock value');
});

it('calls the salesOrderPrintOrderByorderNumberorderTypeRequest method in the SalesOrder resource', function () {
    Saloon::fake([
        SalesOrderPrintOrderByorderNumberorderTypeRequest::class => MockResponse::make([
            'projectCd' => 'String value',
            'printDescriptionOnInvoice' => true,
            'printNoteOnExternalDocuments' => true,
            'printNoteOnInternalDocuments' => true,
            'soBillingContact' => null,
            'soBillingAddress' => null,
            'customerVatzone' => null,
            'invoiceSeparately' => true,
            'invoiceNbr' => 'String value',
            'invoiceDate' => '2025-11-22T10:40:04+00:00',
            'terms' => null,
            'dueDate' => '2025-11-22T10:40:04+00:00',
            'cashDiscountDate' => '2025-11-22T10:40:04+00:00',
            'postPeriod' => 'String value',
            'salesPerson' => null,
            'commissionPercent' => 'String value',
            'commissionAmount' => 'String value',
            'commissionableAmount' => 'String value',
            'owner' => null,
            'origOrderType' => 'String value',
            'origOrderNbr' => 'String value',
            'soShippingContact' => null,
            'soShippingAddress' => null,
            'schedShipment' => '2025-11-22T10:40:04+00:00',
            'shipSeparately' => true,
            'shipComplete' => 'String value',
            'cancelBy' => '2025-11-22T10:40:04+00:00',
            'canceled' => true,
            'preferredWarehouse' => null,
            'shipVia' => null,
            'fobPoint' => null,
            'priority' => 42,
            'shippingTerms' => null,
            'shippingZone' => null,
            'residentialDelivery' => true,
            'saturdayDelivery' => true,
            'insurance' => true,
            'transactionType' => null,
            'paymentMethod' => null,
            'cashAccount' => 'String value',
            'paymentRef' => 'String value',
            'isRotRutDeductible' => true,
            'emailed' => true,
            'lines' => [],
            'shipments' => [],
            'orderType' => 'String value',
            'orderNo' => 'String value',
            'status' => 'String value',
            'hold' => true,
            'date' => '2025-11-22T10:40:04+00:00',
            'requestOn' => '2025-11-22T10:40:04+00:00',
            'customerOrder' => 'String value',
            'customerRefNo' => 'String value',
            'customer' => null,
            'contactId' => 42,
            'location' => null,
            'currency' => 'String value',
            'description' => 'String value',
            'orderTotal' => 42,
            'orderTotalInBaseCurrency' => 42,
            'vatTaxableTotal' => 42,
            'vatTaxableTotalInBaseCurrency' => 42,
            'vatExemptTotal' => 42,
            'vatExemptTotalInBaseCurrency' => 42,
            'taxTotal' => 42,
            'taxTotalInBaseCurrency' => 42,
            'exchangeRate' => 42,
            'discountTotal' => 42,
            'discountTotalInBaseCurrency' => 42,
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'branchNumber' => null,
            'note' => 'String value',
            'attachments' => [],
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new SalesOrderPrintOrderByorderNumberorderTypeRequest(
        orderNumber: 'test string',
        orderType: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderPrintOrderByorderNumberorderTypeRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->projectCd->toBe('String value')
        ->printDescriptionOnInvoice->toBe(true)
        ->printNoteOnExternalDocuments->toBe(true)
        ->printNoteOnInternalDocuments->toBe(true)
        ->soBillingContact->toBeNull()
        ->soBillingAddress->toBeNull()
        ->customerVatzone->toBeNull()
        ->invoiceSeparately->toBe(true)
        ->invoiceNbr->toBe('String value')
        ->invoiceDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->terms->toBeNull()
        ->dueDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->cashDiscountDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->postPeriod->toBe('String value')
        ->salesPerson->toBeNull()
        ->commissionPercent->toBe('String value')
        ->commissionAmount->toBe('String value')
        ->commissionableAmount->toBe('String value')
        ->owner->toBeNull()
        ->origOrderType->toBe('String value')
        ->origOrderNbr->toBe('String value')
        ->soShippingContact->toBeNull()
        ->soShippingAddress->toBeNull()
        ->schedShipment->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->shipSeparately->toBe(true)
        ->shipComplete->toBe('String value')
        ->cancelBy->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->canceled->toBe(true)
        ->preferredWarehouse->toBeNull()
        ->shipVia->toBeNull()
        ->fobPoint->toBeNull()
        ->priority->toBe(42)
        ->shippingTerms->toBeNull()
        ->shippingZone->toBeNull()
        ->residentialDelivery->toBe(true)
        ->saturdayDelivery->toBe(true)
        ->insurance->toBe(true)
        ->transactionType->toBeNull()
        ->paymentMethod->toBeNull()
        ->cashAccount->toBe('String value')
        ->paymentRef->toBe('String value')
        ->isRotRutDeductible->toBe(true)
        ->emailed->toBe(true)
        ->orderType->toBe('String value')
        ->orderNo->toBe('String value')
        ->status->toBe('String value')
        ->hold->toBe(true)
        ->date->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->requestOn->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->customerOrder->toBe('String value')
        ->customerRefNo->toBe('String value')
        ->customer->toBeNull()
        ->contactId->toBe(42)
        ->location->toBeNull()
        ->currency->toBe('String value')
        ->description->toBe('String value')
        ->orderTotal->toBe(42)
        ->orderTotalInBaseCurrency->toBe(42)
        ->vatTaxableTotal->toBe(42)
        ->vatTaxableTotalInBaseCurrency->toBe(42)
        ->vatExemptTotal->toBe(42)
        ->vatExemptTotalInBaseCurrency->toBe(42)
        ->taxTotal->toBe(42)
        ->taxTotalInBaseCurrency->toBe(42)
        ->exchangeRate->toBe(42)
        ->discountTotal->toBe(42)
        ->discountTotalInBaseCurrency->toBe(42)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->branchNumber->toBeNull()
        ->note->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the salesOrderCreateShipmentActionBysaleOrderNumberRequest method in the SalesOrder resource', function () {
    $bodyData = new SalesOrderUpdateDto(
        project: 42,
        printDescriptionOnInvoice: true,
        printNoteOnExternalDocuments: true,
        printNoteOnInternalDocuments: true,
        soBillingContact: null,
        soBillingAddress: null,
        customerVatzone: 'String value',
        invoiceSeparately: true,
        terms: 'String value',
        salesPerson: 'String value',
        owner: 'String value',
        origOrderType: 'String value',
        origOrderNbr: 'String value',
        soShippingContact: null,
        soShippingAddress: null,
        schedShipment: '2025-11-22T10:40:04+00:00',
        shipSeparately: true,
        shipComplete: 'String value',
        cancelBy: '2025-11-22T10:40:04+00:00',
        canceled: true,
        preferredWarehouse: 'String value',
        shipVia: 'String value',
        fobPoint: 'String value',
        priority: 42,
        shippingTerms: 'String value',
        shippingZone: 'String value',
        residentialDelivery: true,
        saturdayDelivery: true,
        insurance: true,
        transactionType: 42,
        paymentMethod: 'String value',
        cashAccount: 'String value',
        paymentRef: 'String value',
        isRotRutDeductible: true,
        emailed: true,
        rotRutDetails: null,
        lines: [],
        orderType: null,
        orderNumber: 'String value',
        hold: true,
        date: '2025-11-22T10:40:04+00:00',
        requestOn: '2025-11-22T10:40:04+00:00',
        customerOrder: 'String value',
        customerRefNo: 'String value',
        customer: null,
        location: 'String value',
        contactId: 42,
        gln: null,
        vatRegistrationId: null,
        currency: 'String value',
        description: 'String value',
        recalculateShipment: true,
        branchNumber: 'String value',
        note: 'String value',
        overrideNumberSeries: true
    );

    Saloon::fake([
        SalesOrderCreateShipmentActionBysaleOrderNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SalesOrderCreateShipmentActionBysaleOrderNumberRequest(
        saleOrderNumber: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderCreateShipmentActionBysaleOrderNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the salesOrderCancelSalesOrderBysaleOrderNumberRequest method in the SalesOrder resource', function () {
    $bodyData = new SalesOrderUpdateDto(
        project: 42,
        printDescriptionOnInvoice: true,
        printNoteOnExternalDocuments: true,
        printNoteOnInternalDocuments: true,
        soBillingContact: null,
        soBillingAddress: null,
        customerVatzone: 'String value',
        invoiceSeparately: true,
        terms: 'String value',
        salesPerson: 'String value',
        owner: 'String value',
        origOrderType: 'String value',
        origOrderNbr: 'String value',
        soShippingContact: null,
        soShippingAddress: null,
        schedShipment: '2025-11-22T10:40:04+00:00',
        shipSeparately: true,
        shipComplete: 'String value',
        cancelBy: '2025-11-22T10:40:04+00:00',
        canceled: true,
        preferredWarehouse: 'String value',
        shipVia: 'String value',
        fobPoint: 'String value',
        priority: 42,
        shippingTerms: 'String value',
        shippingZone: 'String value',
        residentialDelivery: true,
        saturdayDelivery: true,
        insurance: true,
        transactionType: 42,
        paymentMethod: 'String value',
        cashAccount: 'String value',
        paymentRef: 'String value',
        isRotRutDeductible: true,
        emailed: true,
        rotRutDetails: null,
        lines: [],
        orderType: null,
        orderNumber: 'String value',
        hold: true,
        date: '2025-11-22T10:40:04+00:00',
        requestOn: '2025-11-22T10:40:04+00:00',
        customerOrder: 'String value',
        customerRefNo: 'String value',
        customer: null,
        location: 'String value',
        contactId: 42,
        gln: null,
        vatRegistrationId: null,
        currency: 'String value',
        description: 'String value',
        recalculateShipment: true,
        branchNumber: 'String value',
        note: 'String value',
        overrideNumberSeries: true
    );

    Saloon::fake([
        SalesOrderCancelSalesOrderBysaleOrderNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SalesOrderCancelSalesOrderBysaleOrderNumberRequest(
        saleOrderNumber: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderCancelSalesOrderBysaleOrderNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the salesOrderReopenSalesOrderBysalesOrderNumberRequest method in the SalesOrder resource', function () {
    $bodyData = new SalesOrderUpdateDto(
        project: 42,
        printDescriptionOnInvoice: true,
        printNoteOnExternalDocuments: true,
        printNoteOnInternalDocuments: true,
        soBillingContact: null,
        soBillingAddress: null,
        customerVatzone: 'String value',
        invoiceSeparately: true,
        terms: 'String value',
        salesPerson: 'String value',
        owner: 'String value',
        origOrderType: 'String value',
        origOrderNbr: 'String value',
        soShippingContact: null,
        soShippingAddress: null,
        schedShipment: '2025-11-22T10:40:04+00:00',
        shipSeparately: true,
        shipComplete: 'String value',
        cancelBy: '2025-11-22T10:40:04+00:00',
        canceled: true,
        preferredWarehouse: 'String value',
        shipVia: 'String value',
        fobPoint: 'String value',
        priority: 42,
        shippingTerms: 'String value',
        shippingZone: 'String value',
        residentialDelivery: true,
        saturdayDelivery: true,
        insurance: true,
        transactionType: 42,
        paymentMethod: 'String value',
        cashAccount: 'String value',
        paymentRef: 'String value',
        isRotRutDeductible: true,
        emailed: true,
        rotRutDetails: null,
        lines: [],
        orderType: null,
        orderNumber: 'String value',
        hold: true,
        date: '2025-11-22T10:40:04+00:00',
        requestOn: '2025-11-22T10:40:04+00:00',
        customerOrder: 'String value',
        customerRefNo: 'String value',
        customer: null,
        location: 'String value',
        contactId: 42,
        gln: null,
        vatRegistrationId: null,
        currency: 'String value',
        description: 'String value',
        recalculateShipment: true,
        branchNumber: 'String value',
        note: 'String value',
        overrideNumberSeries: true
    );

    Saloon::fake([
        SalesOrderReopenSalesOrderBysalesOrderNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SalesOrderReopenSalesOrderBysalesOrderNumberRequest(
        salesOrderNumber: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderReopenSalesOrderBysalesOrderNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the salesOrderCreateHeaderAttachmentByorderNumberRequest method in the SalesOrder resource', function () {
    $bodyData = new SalesOrderUpdateDto(
        project: 42,
        printDescriptionOnInvoice: true,
        printNoteOnExternalDocuments: true,
        printNoteOnInternalDocuments: true,
        soBillingContact: null,
        soBillingAddress: null,
        customerVatzone: 'String value',
        invoiceSeparately: true,
        terms: 'String value',
        salesPerson: 'String value',
        owner: 'String value',
        origOrderType: 'String value',
        origOrderNbr: 'String value',
        soShippingContact: null,
        soShippingAddress: null,
        schedShipment: '2025-11-22T10:40:04+00:00',
        shipSeparately: true,
        shipComplete: 'String value',
        cancelBy: '2025-11-22T10:40:04+00:00',
        canceled: true,
        preferredWarehouse: 'String value',
        shipVia: 'String value',
        fobPoint: 'String value',
        priority: 42,
        shippingTerms: 'String value',
        shippingZone: 'String value',
        residentialDelivery: true,
        saturdayDelivery: true,
        insurance: true,
        transactionType: 42,
        paymentMethod: 'String value',
        cashAccount: 'String value',
        paymentRef: 'String value',
        isRotRutDeductible: true,
        emailed: true,
        rotRutDetails: null,
        lines: [],
        orderType: null,
        orderNumber: 'String value',
        hold: true,
        date: '2025-11-22T10:40:04+00:00',
        requestOn: '2025-11-22T10:40:04+00:00',
        customerOrder: 'String value',
        customerRefNo: 'String value',
        customer: null,
        location: 'String value',
        contactId: 42,
        gln: null,
        vatRegistrationId: null,
        currency: 'String value',
        description: 'String value',
        recalculateShipment: true,
        branchNumber: 'String value',
        note: 'String value',
        overrideNumberSeries: true
    );

    Saloon::fake([
        SalesOrderCreateHeaderAttachmentByorderNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SalesOrderCreateHeaderAttachmentByorderNumberRequest(
        orderNumber: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderCreateHeaderAttachmentByorderNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the salesOrderCreateHeaderAttachmentByorderNumberorderTypeRequest method in the SalesOrder resource', function () {
    $bodyData = new SalesOrderUpdateDto(
        project: 42,
        printDescriptionOnInvoice: true,
        printNoteOnExternalDocuments: true,
        printNoteOnInternalDocuments: true,
        soBillingContact: null,
        soBillingAddress: null,
        customerVatzone: 'String value',
        invoiceSeparately: true,
        terms: 'String value',
        salesPerson: 'String value',
        owner: 'String value',
        origOrderType: 'String value',
        origOrderNbr: 'String value',
        soShippingContact: null,
        soShippingAddress: null,
        schedShipment: '2025-11-22T10:40:04+00:00',
        shipSeparately: true,
        shipComplete: 'String value',
        cancelBy: '2025-11-22T10:40:04+00:00',
        canceled: true,
        preferredWarehouse: 'String value',
        shipVia: 'String value',
        fobPoint: 'String value',
        priority: 42,
        shippingTerms: 'String value',
        shippingZone: 'String value',
        residentialDelivery: true,
        saturdayDelivery: true,
        insurance: true,
        transactionType: 42,
        paymentMethod: 'String value',
        cashAccount: 'String value',
        paymentRef: 'String value',
        isRotRutDeductible: true,
        emailed: true,
        rotRutDetails: null,
        lines: [],
        orderType: null,
        orderNumber: 'String value',
        hold: true,
        date: '2025-11-22T10:40:04+00:00',
        requestOn: '2025-11-22T10:40:04+00:00',
        customerOrder: 'String value',
        customerRefNo: 'String value',
        customer: null,
        location: 'String value',
        contactId: 42,
        gln: null,
        vatRegistrationId: null,
        currency: 'String value',
        description: 'String value',
        recalculateShipment: true,
        branchNumber: 'String value',
        note: 'String value',
        overrideNumberSeries: true
    );

    Saloon::fake([
        SalesOrderCreateHeaderAttachmentByorderNumberorderTypeRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SalesOrderCreateHeaderAttachmentByorderNumberorderTypeRequest(
        orderNumber: 'test string',
        orderType: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderCreateHeaderAttachmentByorderNumberorderTypeRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the salesOrderCreateLineAttachmentByorderNumberlineNumberRequest method in the SalesOrder resource', function () {
    $bodyData = new SalesOrderUpdateDto(
        project: 42,
        printDescriptionOnInvoice: true,
        printNoteOnExternalDocuments: true,
        printNoteOnInternalDocuments: true,
        soBillingContact: null,
        soBillingAddress: null,
        customerVatzone: 'String value',
        invoiceSeparately: true,
        terms: 'String value',
        salesPerson: 'String value',
        owner: 'String value',
        origOrderType: 'String value',
        origOrderNbr: 'String value',
        soShippingContact: null,
        soShippingAddress: null,
        schedShipment: '2025-11-22T10:40:04+00:00',
        shipSeparately: true,
        shipComplete: 'String value',
        cancelBy: '2025-11-22T10:40:04+00:00',
        canceled: true,
        preferredWarehouse: 'String value',
        shipVia: 'String value',
        fobPoint: 'String value',
        priority: 42,
        shippingTerms: 'String value',
        shippingZone: 'String value',
        residentialDelivery: true,
        saturdayDelivery: true,
        insurance: true,
        transactionType: 42,
        paymentMethod: 'String value',
        cashAccount: 'String value',
        paymentRef: 'String value',
        isRotRutDeductible: true,
        emailed: true,
        rotRutDetails: null,
        lines: [],
        orderType: null,
        orderNumber: 'String value',
        hold: true,
        date: '2025-11-22T10:40:04+00:00',
        requestOn: '2025-11-22T10:40:04+00:00',
        customerOrder: 'String value',
        customerRefNo: 'String value',
        customer: null,
        location: 'String value',
        contactId: 42,
        gln: null,
        vatRegistrationId: null,
        currency: 'String value',
        description: 'String value',
        recalculateShipment: true,
        branchNumber: 'String value',
        note: 'String value',
        overrideNumberSeries: true
    );

    Saloon::fake([
        SalesOrderCreateLineAttachmentByorderNumberlineNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SalesOrderCreateLineAttachmentByorderNumberlineNumberRequest(
        orderNumber: 'test string',
        lineNumber: 123,
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderCreateLineAttachmentByorderNumberlineNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the salesOrderCreateLineAttachmentByorderNumberorderTypelineNumberRequest method in the SalesOrder resource', function () {
    $bodyData = new SalesOrderUpdateDto(
        project: 42,
        printDescriptionOnInvoice: true,
        printNoteOnExternalDocuments: true,
        printNoteOnInternalDocuments: true,
        soBillingContact: null,
        soBillingAddress: null,
        customerVatzone: 'String value',
        invoiceSeparately: true,
        terms: 'String value',
        salesPerson: 'String value',
        owner: 'String value',
        origOrderType: 'String value',
        origOrderNbr: 'String value',
        soShippingContact: null,
        soShippingAddress: null,
        schedShipment: '2025-11-22T10:40:04+00:00',
        shipSeparately: true,
        shipComplete: 'String value',
        cancelBy: '2025-11-22T10:40:04+00:00',
        canceled: true,
        preferredWarehouse: 'String value',
        shipVia: 'String value',
        fobPoint: 'String value',
        priority: 42,
        shippingTerms: 'String value',
        shippingZone: 'String value',
        residentialDelivery: true,
        saturdayDelivery: true,
        insurance: true,
        transactionType: 42,
        paymentMethod: 'String value',
        cashAccount: 'String value',
        paymentRef: 'String value',
        isRotRutDeductible: true,
        emailed: true,
        rotRutDetails: null,
        lines: [],
        orderType: null,
        orderNumber: 'String value',
        hold: true,
        date: '2025-11-22T10:40:04+00:00',
        requestOn: '2025-11-22T10:40:04+00:00',
        customerOrder: 'String value',
        customerRefNo: 'String value',
        customer: null,
        location: 'String value',
        contactId: 42,
        gln: null,
        vatRegistrationId: null,
        currency: 'String value',
        description: 'String value',
        recalculateShipment: true,
        branchNumber: 'String value',
        note: 'String value',
        overrideNumberSeries: true
    );

    Saloon::fake([
        SalesOrderCreateLineAttachmentByorderNumberorderTypelineNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SalesOrderCreateLineAttachmentByorderNumberorderTypelineNumberRequest(
        orderNumber: 'test string',
        orderType: 'test string',
        lineNumber: 123,
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderCreateLineAttachmentByorderNumberorderTypelineNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the salesOrderDeleteLineAttachmentByorderNumberorderTypelineNumberfileIdRequest method in the SalesOrder resource', function () {
    Saloon::fake([
        SalesOrderDeleteLineAttachmentByorderNumberorderTypelineNumberfileIdRequest::class => MockResponse::make([], 204),
    ]);

    $request = new SalesOrderDeleteLineAttachmentByorderNumberorderTypelineNumberfileIdRequest(
        orderNumber: 'test string',
        orderType: 'test string',
        lineNumber: 123,
        fileId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderDeleteLineAttachmentByorderNumberorderTypelineNumberfileIdRequest::class);

    expect($response->status())->toBe(204);
});

it('calls the salesOrderDeleteOrderAttachmentByorderNumberorderTypefileIdRequest method in the SalesOrder resource', function () {
    Saloon::fake([
        SalesOrderDeleteOrderAttachmentByorderNumberorderTypefileIdRequest::class => MockResponse::make([], 204),
    ]);

    $request = new SalesOrderDeleteOrderAttachmentByorderNumberorderTypefileIdRequest(
        orderNumber: 'test string',
        orderType: 'test string',
        fileId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderDeleteOrderAttachmentByorderNumberorderTypefileIdRequest::class);

    expect($response->status())->toBe(204);
});
