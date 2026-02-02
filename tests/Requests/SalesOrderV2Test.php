<?php

use Pionect\VismaSdk\Dto\CancelSalesOrderActionDto;
use Pionect\VismaSdk\Dto\CreatePurchaseOrderActionDto;
use Pionect\VismaSdk\Dto\CreateShipmentActionDto;
use Pionect\VismaSdk\Dto\ReopenSalesOrderActionDto;
use Pionect\VismaSdk\Dto\SalesOrderUpdateDto;
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

it('calls the salesOrderV2getAllOrdersV2request method in the SalesOrderV2 resource', function () {
    Saloon::fake([
        SalesOrderV2GetAllOrdersV2Request::class => MockResponse::make([
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

it('calls the salesOrderV2postRequest method in the SalesOrderV2 resource', function () {
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
        rotRutDetails: new \Pionect\VismaSdk\Dto\RotRutUpdateDto(
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
    $bodyData = new CreateShipmentActionDto(
        orderType: 'String value',
        returnShipmentDto: true,
        shipmentDate: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        shipmentWarehouse: 'String value',
        operation: 'String value'
    );

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
    $bodyData = [];

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
    $bodyData = [];

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
    $bodyData = new CreatePurchaseOrderActionDto(
        orderType: 'String value',
        preferSupplierFromSoline: true
    );

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
    $bodyData = new CancelSalesOrderActionDto(
        orderType: 'String value'
    );

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
    $bodyData = new ReopenSalesOrderActionDto(
        saleOrderUpdateDto: new \Pionect\VismaSdk\Dto\SaleOrderUpdateDtoInReopenSalesOrderActionDto(
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
            rotRutDetails: new \Pionect\VismaSdk\Dto\RotRutUpdateDto(
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
    $bodyData = [];

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
    $bodyData = [];

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
    $bodyData = [];

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
    $bodyData = [];

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
