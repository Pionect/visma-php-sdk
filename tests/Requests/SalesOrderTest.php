<?php

use Pionect\VismaSdk\Dto\CancelSalesOrderActionDto;
use Pionect\VismaSdk\Dto\CreateShipmentActionDto;
use Pionect\VismaSdk\Dto\ReopenSalesOrderActionDto;
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
            'soBillingContact' => [
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
            'soBillingAddress' => [
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
            'customerVatzone' => [
                'description' => 'String value',
                'defaultVatCategory' => 'String value',
                'defaultTaxCategory' => [
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'errorInfo' => 'String value',
            ],
            'invoiceSeparately' => true,
            'invoiceNbr' => 'String value',
            'invoiceDate' => '2025-11-22T10:40:04+00:00',
            'terms' => [
                'description' => 'String value',
            ],
            'dueDate' => '2025-11-22T10:40:04+00:00',
            'cashDiscountDate' => '2025-11-22T10:40:04+00:00',
            'postPeriod' => 'String value',
            'salesPerson' => [
                'description' => 'String value',
            ],
            'commissionPercent' => 'String value',
            'commissionAmount' => 'String value',
            'commissionableAmount' => 'String value',
            'owner' => [
                'employeeId' => 'mock-id-123',
                'name' => 'String value',
            ],
            'origOrderType' => 'String value',
            'origOrderNbr' => 'String value',
            'soShippingContact' => [
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
            'soShippingAddress' => [
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
            'schedShipment' => '2025-11-22T10:40:04+00:00',
            'shipSeparately' => true,
            'shipComplete' => 'String value',
            'cancelBy' => '2025-11-22T10:40:04+00:00',
            'canceled' => true,
            'preferredWarehouse' => [
                'description' => 'String value',
            ],
            'shipVia' => [
                'description' => 'String value',
            ],
            'fobPoint' => [
                'description' => 'String value',
            ],
            'priority' => 42,
            'shippingTerms' => [
                'description' => 'String value',
            ],
            'shippingZone' => [
                'description' => 'String value',
            ],
            'residentialDelivery' => true,
            'saturdayDelivery' => true,
            'insurance' => true,
            'transactionType' => [
                'description' => 'String value',
            ],
            'paymentMethod' => [
                'description' => 'String value',
            ],
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
            'customer' => [
                'internalId' => 42,
                'number' => 'String value',
                'name' => 'String value',
            ],
            'contactId' => 42,
            'location' => [
                'countryId' => 'mock-id-123',
                'name' => 'String value',
            ],
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
            'branchNumber' => [
                'number' => 'String value',
                'name' => 'String value',
            ],
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
        ->soBillingContact->overrideContact->toBe(true)
        ->soBillingContact->contactId->toBe(42)
        ->soBillingContact->name->toBe('String value')
        ->soBillingContact->attention->toBe('String value')
        ->soBillingContact->email->toBe('test@example.com')
        ->soBillingContact->web->toBe('String value')
        ->soBillingContact->phone1->toBe('String value')
        ->soBillingContact->phone2->toBe('String value')
        ->soBillingContact->fax->toBe('String value')
        ->soBillingAddress->overrideAddress->toBe(true)
        ->soBillingAddress->addressId->toBe(42)
        ->soBillingAddress->addressLine1->toBe('String value')
        ->soBillingAddress->addressLine2->toBe('String value')
        ->soBillingAddress->addressLine3->toBe('String value')
        ->soBillingAddress->postalCode->toBe('String value')
        ->soBillingAddress->city->toBe('String value')
        ->soBillingAddress->country->name->toBe('String value')
        ->soBillingAddress->country->errorInfo->toBe('String value')
        ->soBillingAddress->county->name->toBe('String value')
        ->customerVatzone->description->toBe('String value')
        ->customerVatzone->defaultVatCategory->toBe('String value')
        ->customerVatzone->defaultTaxCategory->number->toBe('String value')
        ->customerVatzone->defaultTaxCategory->description->toBe('String value')
        ->customerVatzone->errorInfo->toBe('String value')
        ->invoiceSeparately->toBe(true)
        ->invoiceNbr->toBe('String value')
        ->invoiceDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->terms->description->toBe('String value')
        ->dueDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->cashDiscountDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->postPeriod->toBe('String value')
        ->salesPerson->description->toBe('String value')
        ->commissionPercent->toBe('String value')
        ->commissionAmount->toBe('String value')
        ->commissionableAmount->toBe('String value')
        ->owner->employeeId->toBe('mock-id-123')
        ->owner->name->toBe('String value')
        ->origOrderType->toBe('String value')
        ->origOrderNbr->toBe('String value')
        ->soShippingContact->overrideContact->toBe(true)
        ->soShippingContact->contactId->toBe(42)
        ->soShippingContact->name->toBe('String value')
        ->soShippingContact->attention->toBe('String value')
        ->soShippingContact->email->toBe('test@example.com')
        ->soShippingContact->web->toBe('String value')
        ->soShippingContact->phone1->toBe('String value')
        ->soShippingContact->phone2->toBe('String value')
        ->soShippingContact->fax->toBe('String value')
        ->soShippingAddress->overrideAddress->toBe(true)
        ->soShippingAddress->addressId->toBe(42)
        ->soShippingAddress->addressLine1->toBe('String value')
        ->soShippingAddress->addressLine2->toBe('String value')
        ->soShippingAddress->addressLine3->toBe('String value')
        ->soShippingAddress->postalCode->toBe('String value')
        ->soShippingAddress->city->toBe('String value')
        ->soShippingAddress->country->name->toBe('String value')
        ->soShippingAddress->country->errorInfo->toBe('String value')
        ->soShippingAddress->county->name->toBe('String value')
        ->schedShipment->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->shipSeparately->toBe(true)
        ->shipComplete->toBe('String value')
        ->cancelBy->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->canceled->toBe(true)
        ->preferredWarehouse->description->toBe('String value')
        ->shipVia->description->toBe('String value')
        ->fobPoint->description->toBe('String value')
        ->priority->toBe(42)
        ->shippingTerms->description->toBe('String value')
        ->shippingZone->description->toBe('String value')
        ->residentialDelivery->toBe(true)
        ->saturdayDelivery->toBe(true)
        ->insurance->toBe(true)
        ->transactionType->description->toBe('String value')
        ->paymentMethod->description->toBe('String value')
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
        ->customer->internalId->toBe(42)
        ->customer->number->toBe('String value')
        ->customer->name->toBe('String value')
        ->contactId->toBe(42)
        ->location->countryId->toBe('mock-id-123')
        ->location->name->toBe('String value')
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
        ->branchNumber->number->toBe('String value')
        ->branchNumber->name->toBe('String value')
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
        schedShipment: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        shipSeparately: true,
        shipComplete: 'String value',
        cancelBy: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
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
        rotRutDetails: new RotRutUpdateDto(
            distributedAutomaticaly: true,
            type: 'String value',
            appartment: 'String value',
            estate: 'String value',
            organizationNbr: 'String value',
            distribution: []
        ),
        lines: [],
        orderType: 'String value',
        orderNumber: 'String value',
        hold: true,
        date: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        requestOn: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        customerOrder: 'String value',
        customerRefNo: 'String value',
        customer: 'String value',
        location: 'String value',
        contactId: 42,
        gln: 'String value',
        vatRegistrationId: 'mock-id-123',
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
            'soBillingContact' => [
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
            'soBillingAddress' => [
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
            'customerVatzone' => [
                'description' => 'String value',
                'defaultVatCategory' => 'String value',
                'defaultTaxCategory' => [
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'errorInfo' => 'String value',
            ],
            'invoiceSeparately' => true,
            'invoiceNbr' => 'String value',
            'invoiceDate' => '2025-11-22T10:40:04+00:00',
            'terms' => [
                'description' => 'String value',
            ],
            'dueDate' => '2025-11-22T10:40:04+00:00',
            'cashDiscountDate' => '2025-11-22T10:40:04+00:00',
            'postPeriod' => 'String value',
            'salesPerson' => [
                'description' => 'String value',
            ],
            'commissionPercent' => 'String value',
            'commissionAmount' => 'String value',
            'commissionableAmount' => 'String value',
            'owner' => [
                'employeeId' => 'mock-id-123',
                'name' => 'String value',
            ],
            'origOrderType' => 'String value',
            'origOrderNbr' => 'String value',
            'soShippingContact' => [
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
            'soShippingAddress' => [
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
            'schedShipment' => '2025-11-22T10:40:04+00:00',
            'shipSeparately' => true,
            'shipComplete' => 'String value',
            'cancelBy' => '2025-11-22T10:40:04+00:00',
            'canceled' => true,
            'preferredWarehouse' => [
                'description' => 'String value',
            ],
            'shipVia' => [
                'description' => 'String value',
            ],
            'fobPoint' => [
                'description' => 'String value',
            ],
            'priority' => 42,
            'shippingTerms' => [
                'description' => 'String value',
            ],
            'shippingZone' => [
                'description' => 'String value',
            ],
            'residentialDelivery' => true,
            'saturdayDelivery' => true,
            'insurance' => true,
            'transactionType' => [
                'description' => 'String value',
            ],
            'paymentMethod' => [
                'description' => 'String value',
            ],
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
            'customer' => [
                'internalId' => 42,
                'number' => 'String value',
                'name' => 'String value',
            ],
            'contactId' => 42,
            'location' => [
                'countryId' => 'mock-id-123',
                'name' => 'String value',
            ],
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
            'branchNumber' => [
                'number' => 'String value',
                'name' => 'String value',
            ],
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
        ->soBillingContact->overrideContact->toBe(true)
        ->soBillingContact->contactId->toBe(42)
        ->soBillingContact->name->toBe('String value')
        ->soBillingContact->attention->toBe('String value')
        ->soBillingContact->email->toBe('test@example.com')
        ->soBillingContact->web->toBe('String value')
        ->soBillingContact->phone1->toBe('String value')
        ->soBillingContact->phone2->toBe('String value')
        ->soBillingContact->fax->toBe('String value')
        ->soBillingAddress->overrideAddress->toBe(true)
        ->soBillingAddress->addressId->toBe(42)
        ->soBillingAddress->addressLine1->toBe('String value')
        ->soBillingAddress->addressLine2->toBe('String value')
        ->soBillingAddress->addressLine3->toBe('String value')
        ->soBillingAddress->postalCode->toBe('String value')
        ->soBillingAddress->city->toBe('String value')
        ->soBillingAddress->country->name->toBe('String value')
        ->soBillingAddress->country->errorInfo->toBe('String value')
        ->soBillingAddress->county->name->toBe('String value')
        ->customerVatzone->description->toBe('String value')
        ->customerVatzone->defaultVatCategory->toBe('String value')
        ->customerVatzone->defaultTaxCategory->number->toBe('String value')
        ->customerVatzone->defaultTaxCategory->description->toBe('String value')
        ->customerVatzone->errorInfo->toBe('String value')
        ->invoiceSeparately->toBe(true)
        ->invoiceNbr->toBe('String value')
        ->invoiceDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->terms->description->toBe('String value')
        ->dueDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->cashDiscountDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->postPeriod->toBe('String value')
        ->salesPerson->description->toBe('String value')
        ->commissionPercent->toBe('String value')
        ->commissionAmount->toBe('String value')
        ->commissionableAmount->toBe('String value')
        ->owner->employeeId->toBe('mock-id-123')
        ->owner->name->toBe('String value')
        ->origOrderType->toBe('String value')
        ->origOrderNbr->toBe('String value')
        ->soShippingContact->overrideContact->toBe(true)
        ->soShippingContact->contactId->toBe(42)
        ->soShippingContact->name->toBe('String value')
        ->soShippingContact->attention->toBe('String value')
        ->soShippingContact->email->toBe('test@example.com')
        ->soShippingContact->web->toBe('String value')
        ->soShippingContact->phone1->toBe('String value')
        ->soShippingContact->phone2->toBe('String value')
        ->soShippingContact->fax->toBe('String value')
        ->soShippingAddress->overrideAddress->toBe(true)
        ->soShippingAddress->addressId->toBe(42)
        ->soShippingAddress->addressLine1->toBe('String value')
        ->soShippingAddress->addressLine2->toBe('String value')
        ->soShippingAddress->addressLine3->toBe('String value')
        ->soShippingAddress->postalCode->toBe('String value')
        ->soShippingAddress->city->toBe('String value')
        ->soShippingAddress->country->name->toBe('String value')
        ->soShippingAddress->country->errorInfo->toBe('String value')
        ->soShippingAddress->county->name->toBe('String value')
        ->schedShipment->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->shipSeparately->toBe(true)
        ->shipComplete->toBe('String value')
        ->cancelBy->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->canceled->toBe(true)
        ->preferredWarehouse->description->toBe('String value')
        ->shipVia->description->toBe('String value')
        ->fobPoint->description->toBe('String value')
        ->priority->toBe(42)
        ->shippingTerms->description->toBe('String value')
        ->shippingZone->description->toBe('String value')
        ->residentialDelivery->toBe(true)
        ->saturdayDelivery->toBe(true)
        ->insurance->toBe(true)
        ->transactionType->description->toBe('String value')
        ->paymentMethod->description->toBe('String value')
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
        ->customer->internalId->toBe(42)
        ->customer->number->toBe('String value')
        ->customer->name->toBe('String value')
        ->contactId->toBe(42)
        ->location->countryId->toBe('mock-id-123')
        ->location->name->toBe('String value')
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
        ->branchNumber->number->toBe('String value')
        ->branchNumber->name->toBe('String value')
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
                'soBillingContact' => [
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
                'soBillingAddress' => [
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
                'customerVatzone' => [
                    'description' => 'String value',
                    'defaultVatCategory' => 'String value',
                    'defaultTaxCategory' => [
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'errorInfo' => 'String value',
                ],
                'invoiceSeparately' => true,
                'invoiceNbr' => 'String value',
                'invoiceDate' => '2025-11-22T10:40:04+00:00',
                'terms' => [
                    'description' => 'String value',
                ],
                'dueDate' => '2025-11-22T10:40:04+00:00',
                'cashDiscountDate' => '2025-11-22T10:40:04+00:00',
                'postPeriod' => 'String value',
                'salesPerson' => [
                    'description' => 'String value',
                ],
                'commissionPercent' => 'String value',
                'commissionAmount' => 'String value',
                'commissionableAmount' => 'String value',
                'owner' => [
                    'employeeId' => 'mock-id-123',
                    'name' => 'String value',
                ],
                'origOrderType' => 'String value',
                'origOrderNbr' => 'String value',
                'soShippingContact' => [
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
                'soShippingAddress' => [
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
                'schedShipment' => '2025-11-22T10:40:04+00:00',
                'shipSeparately' => true,
                'shipComplete' => 'String value',
                'cancelBy' => '2025-11-22T10:40:04+00:00',
                'canceled' => true,
                'preferredWarehouse' => [
                    'description' => 'String value',
                ],
                'shipVia' => [
                    'description' => 'String value',
                ],
                'fobPoint' => [
                    'description' => 'String value',
                ],
                'priority' => 42,
                'shippingTerms' => [
                    'description' => 'String value',
                ],
                'shippingZone' => [
                    'description' => 'String value',
                ],
                'residentialDelivery' => true,
                'saturdayDelivery' => true,
                'insurance' => true,
                'transactionType' => [
                    'description' => 'String value',
                ],
                'paymentMethod' => [
                    'description' => 'String value',
                ],
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
                'customer' => [
                    'internalId' => 42,
                    'number' => 'String value',
                    'name' => 'String value',
                ],
                'contactId' => 42,
                'location' => [
                    'countryId' => 'mock-id-123',
                    'name' => 'String value',
                ],
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
                'branchNumber' => [
                    'number' => 'String value',
                    'name' => 'String value',
                ],
                'note' => 'String value',
                'attachments' => [],
                'errorInfo' => 'String value',
            ],
            1 => [
                'projectCd' => 'String value',
                'printDescriptionOnInvoice' => true,
                'printNoteOnExternalDocuments' => true,
                'printNoteOnInternalDocuments' => true,
                'soBillingContact' => [
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
                'soBillingAddress' => [
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
                'customerVatzone' => [
                    'description' => 'String value',
                    'defaultVatCategory' => 'String value',
                    'defaultTaxCategory' => [
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'errorInfo' => 'String value',
                ],
                'invoiceSeparately' => true,
                'invoiceNbr' => 'String value',
                'invoiceDate' => '2025-11-22T10:40:04+00:00',
                'terms' => [
                    'description' => 'String value',
                ],
                'dueDate' => '2025-11-22T10:40:04+00:00',
                'cashDiscountDate' => '2025-11-22T10:40:04+00:00',
                'postPeriod' => 'String value',
                'salesPerson' => [
                    'description' => 'String value',
                ],
                'commissionPercent' => 'String value',
                'commissionAmount' => 'String value',
                'commissionableAmount' => 'String value',
                'owner' => [
                    'employeeId' => 'mock-id-123',
                    'name' => 'String value',
                ],
                'origOrderType' => 'String value',
                'origOrderNbr' => 'String value',
                'soShippingContact' => [
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
                'soShippingAddress' => [
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
                'schedShipment' => '2025-11-22T10:40:04+00:00',
                'shipSeparately' => true,
                'shipComplete' => 'String value',
                'cancelBy' => '2025-11-22T10:40:04+00:00',
                'canceled' => true,
                'preferredWarehouse' => [
                    'description' => 'String value',
                ],
                'shipVia' => [
                    'description' => 'String value',
                ],
                'fobPoint' => [
                    'description' => 'String value',
                ],
                'priority' => 42,
                'shippingTerms' => [
                    'description' => 'String value',
                ],
                'shippingZone' => [
                    'description' => 'String value',
                ],
                'residentialDelivery' => true,
                'saturdayDelivery' => true,
                'insurance' => true,
                'transactionType' => [
                    'description' => 'String value',
                ],
                'paymentMethod' => [
                    'description' => 'String value',
                ],
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
                'customer' => [
                    'internalId' => 42,
                    'number' => 'String value',
                    'name' => 'String value',
                ],
                'contactId' => 42,
                'location' => [
                    'countryId' => 'mock-id-123',
                    'name' => 'String value',
                ],
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
                'branchNumber' => [
                    'number' => 'String value',
                    'name' => 'String value',
                ],
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

    expect($collection)->toHaveCount(2);
    expect($collection->first())
        ->projectCd->toBe('String value')
        ->printDescriptionOnInvoice->toBe(true)
        ->printNoteOnExternalDocuments->toBe(true)
        ->printNoteOnInternalDocuments->toBe(true)
        ->soBillingContact->overrideContact->toBe(true)
        ->soBillingContact->contactId->toBe(42)
        ->soBillingContact->name->toBe('String value')
        ->soBillingContact->attention->toBe('String value')
        ->soBillingContact->email->toBe('test@example.com')
        ->soBillingContact->web->toBe('String value')
        ->soBillingContact->phone1->toBe('String value')
        ->soBillingContact->phone2->toBe('String value')
        ->soBillingContact->fax->toBe('String value')
        ->soBillingAddress->overrideAddress->toBe(true)
        ->soBillingAddress->addressId->toBe(42)
        ->soBillingAddress->addressLine1->toBe('String value')
        ->soBillingAddress->addressLine2->toBe('String value')
        ->soBillingAddress->addressLine3->toBe('String value')
        ->soBillingAddress->postalCode->toBe('String value')
        ->soBillingAddress->city->toBe('String value')
        ->soBillingAddress->country->name->toBe('String value')
        ->soBillingAddress->country->errorInfo->toBe('String value')
        ->soBillingAddress->county->name->toBe('String value')
        ->customerVatzone->description->toBe('String value')
        ->customerVatzone->defaultVatCategory->toBe('String value')
        ->customerVatzone->defaultTaxCategory->number->toBe('String value')
        ->customerVatzone->defaultTaxCategory->description->toBe('String value')
        ->customerVatzone->errorInfo->toBe('String value')
        ->invoiceSeparately->toBe(true)
        ->invoiceNbr->toBe('String value')
        ->invoiceDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->terms->description->toBe('String value')
        ->dueDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->cashDiscountDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->postPeriod->toBe('String value')
        ->salesPerson->description->toBe('String value')
        ->commissionPercent->toBe('String value')
        ->commissionAmount->toBe('String value')
        ->commissionableAmount->toBe('String value')
        ->owner->employeeId->toBe('mock-id-123')
        ->owner->name->toBe('String value')
        ->origOrderType->toBe('String value')
        ->origOrderNbr->toBe('String value')
        ->soShippingContact->overrideContact->toBe(true)
        ->soShippingContact->contactId->toBe(42)
        ->soShippingContact->name->toBe('String value')
        ->soShippingContact->attention->toBe('String value')
        ->soShippingContact->email->toBe('test@example.com')
        ->soShippingContact->web->toBe('String value')
        ->soShippingContact->phone1->toBe('String value')
        ->soShippingContact->phone2->toBe('String value')
        ->soShippingContact->fax->toBe('String value')
        ->soShippingAddress->overrideAddress->toBe(true)
        ->soShippingAddress->addressId->toBe(42)
        ->soShippingAddress->addressLine1->toBe('String value')
        ->soShippingAddress->addressLine2->toBe('String value')
        ->soShippingAddress->addressLine3->toBe('String value')
        ->soShippingAddress->postalCode->toBe('String value')
        ->soShippingAddress->city->toBe('String value')
        ->soShippingAddress->country->name->toBe('String value')
        ->soShippingAddress->country->errorInfo->toBe('String value')
        ->soShippingAddress->county->name->toBe('String value')
        ->schedShipment->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->shipSeparately->toBe(true)
        ->shipComplete->toBe('String value')
        ->cancelBy->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->canceled->toBe(true)
        ->preferredWarehouse->description->toBe('String value')
        ->shipVia->description->toBe('String value')
        ->fobPoint->description->toBe('String value')
        ->priority->toBe(42)
        ->shippingTerms->description->toBe('String value')
        ->shippingZone->description->toBe('String value')
        ->residentialDelivery->toBe(true)
        ->saturdayDelivery->toBe(true)
        ->insurance->toBe(true)
        ->transactionType->description->toBe('String value')
        ->paymentMethod->description->toBe('String value')
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
        ->customer->internalId->toBe(42)
        ->customer->number->toBe('String value')
        ->customer->name->toBe('String value')
        ->contactId->toBe(42)
        ->location->countryId->toBe('mock-id-123')
        ->location->name->toBe('String value')
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
        ->branchNumber->number->toBe('String value')
        ->branchNumber->name->toBe('String value')
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
        schedShipment: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        shipSeparately: true,
        shipComplete: 'String value',
        cancelBy: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
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
        rotRutDetails: new RotRutUpdateDto(
            distributedAutomaticaly: true,
            type: 'String value',
            appartment: 'String value',
            estate: 'String value',
            organizationNbr: 'String value',
            distribution: []
        ),
        lines: [],
        orderType: 'String value',
        orderNumber: 'String value',
        hold: true,
        date: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        requestOn: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        customerOrder: 'String value',
        customerRefNo: 'String value',
        customer: 'String value',
        location: 'String value',
        contactId: 42,
        gln: 'String value',
        vatRegistrationId: 'mock-id-123',
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
            'salesPersonId' => 'mock-id-123',
            'commissionPercent' => 42,
            'commissionAmount' => 42,
            'commissionableAmount' => 42,
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
        ->salesPersonId->toBe('mock-id-123')
        ->commissionPercent->toBe(42)
        ->commissionAmount->toBe(42)
        ->commissionableAmount->toBe(42);
});

it('calls the salesOrderPrintOrderByorderNumberorderTypeRequest method in the SalesOrder resource', function () {
    Saloon::fake([
        SalesOrderPrintOrderByorderNumberorderTypeRequest::class => MockResponse::make([], 200),
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
        ->toBeInstanceOf(\Spatie\LaravelData\Data::class);
});

it('calls the salesOrderCreateShipmentActionBysaleOrderNumberRequest method in the SalesOrder resource', function () {
    $bodyData = new CreateShipmentActionDto(
        orderType: 'String value',
        returnShipmentDto: true,
        shipmentDate: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        shipmentWarehouse: 'String value',
        operation: 'String value'
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
    $bodyData = new CancelSalesOrderActionDto(
        orderType: 'String value'
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
    $bodyData = new ReopenSalesOrderActionDto(
        saleOrderUpdateDto: new SaleOrderUpdateDtoInReopenSalesOrderActionDto(
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
            schedShipment: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
            shipSeparately: true,
            shipComplete: 'String value',
            cancelBy: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
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
            rotRutDetails: new RotRutUpdateDto(
                distributedAutomaticaly: true,
                type: 'String value',
                appartment: 'String value',
                estate: 'String value',
                organizationNbr: 'String value',
                distribution: []
            ),
            lines: [],
            orderType: 'String value',
            orderNumber: 'String value',
            hold: true,
            date: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
            requestOn: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
            customerOrder: 'String value',
            customerRefNo: 'String value',
            customer: 'String value',
            location: 'String value',
            contactId: 42,
            gln: 'String value',
            vatRegistrationId: 'mock-id-123',
            currency: 'String value',
            description: 'String value',
            recalculateShipment: true,
            branchNumber: 'String value',
            note: 'String value',
            overrideNumberSeries: true
        )
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
    $bodyData = [];

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
    $bodyData = [];

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
    $bodyData = [];

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
    $bodyData = [];

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
