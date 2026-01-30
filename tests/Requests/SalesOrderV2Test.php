<?php

use Pionect\VismaSdk\Requests\SalesOrderV2\SalesOrderV2CancelSalesOrderBysaleOrderNumberRequest;
use Pionect\VismaSdk\Requests\SalesOrderV2\SalesOrderV2CreateHeaderAttachmentByorderNumberorderTypeRequest;
use Pionect\VismaSdk\Requests\SalesOrderV2\SalesOrderV2CreateHeaderAttachmentByorderNumberRequest;
use Pionect\VismaSdk\Requests\SalesOrderV2\SalesOrderV2CreateLineAttachmentByorderNumberlineNumberRequest;
use Pionect\VismaSdk\Requests\SalesOrderV2\SalesOrderV2CreateLineAttachmentByorderNumberorderTypelineNumberRequest;
use Pionect\VismaSdk\Requests\SalesOrderV2\SalesOrderV2CreatePurchaseOrdersActionBysaleOrderNumberRequest;
use Pionect\VismaSdk\Requests\SalesOrderV2\SalesOrderV2CreateShipmentActionBysaleOrderNumberRequest;
use Pionect\VismaSdk\Requests\SalesOrderV2\SalesOrderV2GetAllOrdersV2Request;
use Pionect\VismaSdk\Requests\SalesOrderV2\SalesOrderV2GetByorderNbrRequest;
use Pionect\VismaSdk\Requests\SalesOrderV2\SalesOrderV2PostRequest;
use Pionect\VismaSdk\Requests\SalesOrderV2\SalesOrderV2PrepareInvoiceActionByorderTypeorderNumberRequest;
use Pionect\VismaSdk\Requests\SalesOrderV2\SalesOrderV2ReopenSalesOrderBysalesOrderNumberRequest;
use Pionect\VismaSdk\Requests\SalesOrderV2\SalesOrderV2SendEmailActionByorderTypeorderNumberRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the salesOrderV2getByorderNbrRequest method in the SalesOrderV2 resource', function () {
    Saloon::fake([
        SalesOrderV2GetByorderNbrRequest::class => MockResponse::make([
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

    $request = new SalesOrderV2GetByorderNbrRequest(
        orderNbr: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderV2GetByorderNbrRequest::class);

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

it('calls the salesOrderV2getAllOrdersV2request method in the SalesOrderV2 resource', function () {
    Saloon::fake([
        SalesOrderV2GetAllOrdersV2Request::class => MockResponse::make([
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

    $request = new SalesOrderV2GetAllOrdersV2Request(
        orderType: 'test string',
        status: 'test string',
        greaterThanValue: 'test string',
        showNotes: true,
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderV2GetAllOrdersV2Request::class);

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

it('calls the salesOrderV2postRequest method in the SalesOrderV2 resource', function () {
    $bodyData = [
        'name' => 'Test value',
    ];

    Saloon::fake([
        SalesOrderV2PostRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SalesOrderV2PostRequest(
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderV2PostRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the salesOrderV2createShipmentActionBysaleOrderNumberRequest method in the SalesOrderV2 resource', function () {
    $bodyData = [
        'name' => 'Test value',
    ];

    Saloon::fake([
        SalesOrderV2CreateShipmentActionBysaleOrderNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SalesOrderV2CreateShipmentActionBysaleOrderNumberRequest(
        saleOrderNumber: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderV2CreateShipmentActionBysaleOrderNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the salesOrderV2prepareInvoiceActionByorderTypeorderNumberRequest method in the SalesOrderV2 resource', function () {
    $bodyData = [
        'name' => 'Test value',
    ];

    Saloon::fake([
        SalesOrderV2PrepareInvoiceActionByorderTypeorderNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SalesOrderV2PrepareInvoiceActionByorderTypeorderNumberRequest(
        orderType: 'test string',
        orderNumber: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderV2PrepareInvoiceActionByorderTypeorderNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the salesOrderV2sendEmailActionByorderTypeorderNumberRequest method in the SalesOrderV2 resource', function () {
    $bodyData = [
        'name' => 'Test value',
    ];

    Saloon::fake([
        SalesOrderV2SendEmailActionByorderTypeorderNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SalesOrderV2SendEmailActionByorderTypeorderNumberRequest(
        orderType: 'test string',
        orderNumber: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderV2SendEmailActionByorderTypeorderNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the salesOrderV2createPurchaseOrdersActionBysaleOrderNumberRequest method in the SalesOrderV2 resource', function () {
    $bodyData = [
        'name' => 'Test value',
    ];

    Saloon::fake([
        SalesOrderV2CreatePurchaseOrdersActionBysaleOrderNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SalesOrderV2CreatePurchaseOrdersActionBysaleOrderNumberRequest(
        saleOrderNumber: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderV2CreatePurchaseOrdersActionBysaleOrderNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the salesOrderV2cancelSalesOrderBysaleOrderNumberRequest method in the SalesOrderV2 resource', function () {
    $bodyData = [
        'name' => 'Test value',
    ];

    Saloon::fake([
        SalesOrderV2CancelSalesOrderBysaleOrderNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SalesOrderV2CancelSalesOrderBysaleOrderNumberRequest(
        saleOrderNumber: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderV2CancelSalesOrderBysaleOrderNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the salesOrderV2reopenSalesOrderBysalesOrderNumberRequest method in the SalesOrderV2 resource', function () {
    $bodyData = [
        'name' => 'Test value',
    ];

    Saloon::fake([
        SalesOrderV2ReopenSalesOrderBysalesOrderNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SalesOrderV2ReopenSalesOrderBysalesOrderNumberRequest(
        salesOrderNumber: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderV2ReopenSalesOrderBysalesOrderNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the salesOrderV2createHeaderAttachmentByorderNumberRequest method in the SalesOrderV2 resource', function () {
    $bodyData = [
        'name' => 'Test value',
    ];

    Saloon::fake([
        SalesOrderV2CreateHeaderAttachmentByorderNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SalesOrderV2CreateHeaderAttachmentByorderNumberRequest(
        orderNumber: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderV2CreateHeaderAttachmentByorderNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the salesOrderV2createHeaderAttachmentByorderNumberorderTypeRequest method in the SalesOrderV2 resource', function () {
    $bodyData = [
        'name' => 'Test value',
    ];

    Saloon::fake([
        SalesOrderV2CreateHeaderAttachmentByorderNumberorderTypeRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SalesOrderV2CreateHeaderAttachmentByorderNumberorderTypeRequest(
        orderNumber: 'test string',
        orderType: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderV2CreateHeaderAttachmentByorderNumberorderTypeRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the salesOrderV2createLineAttachmentByorderNumberlineNumberRequest method in the SalesOrderV2 resource', function () {
    $bodyData = [
        'name' => 'Test value',
    ];

    Saloon::fake([
        SalesOrderV2CreateLineAttachmentByorderNumberlineNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SalesOrderV2CreateLineAttachmentByorderNumberlineNumberRequest(
        orderNumber: 'test string',
        lineNumber: 123,
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderV2CreateLineAttachmentByorderNumberlineNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the salesOrderV2createLineAttachmentByorderNumberorderTypelineNumberRequest method in the SalesOrderV2 resource', function () {
    $bodyData = [
        'name' => 'Test value',
    ];

    Saloon::fake([
        SalesOrderV2CreateLineAttachmentByorderNumberorderTypelineNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SalesOrderV2CreateLineAttachmentByorderNumberorderTypelineNumberRequest(
        orderNumber: 'test string',
        orderType: 'test string',
        lineNumber: 123,
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderV2CreateLineAttachmentByorderNumberorderTypelineNumberRequest::class);

    expect($response->status())->toBe(201);
});
