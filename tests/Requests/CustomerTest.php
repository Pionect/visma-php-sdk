<?php

use Pionect\VismaSdk\Dto\ChangeCustomerCdActionDto;
use Pionect\VismaSdk\Dto\CreateDunningLetterActionDto;
use Pionect\VismaSdk\Dto\CustomerUpdateDto;
use Pionect\VismaSdk\Requests\Customer\CustomerChangeCustomerNrActionByinternalIdRequest;
use Pionect\VismaSdk\Requests\Customer\CustomerCreateDunningLetterActionBycustomerRequest;
use Pionect\VismaSdk\Requests\Customer\CustomerGetAllCashSalesForCustomerBycustomerNumberRequest;
use Pionect\VismaSdk\Requests\Customer\CustomerGetAllContactsForCustomerBycustomerCdRequest;
use Pionect\VismaSdk\Requests\Customer\CustomerGetAllCustomerBalanceRequest;
use Pionect\VismaSdk\Requests\Customer\CustomerGetAllDocumentsForCustomerBycustomerNumberRequest;
use Pionect\VismaSdk\Requests\Customer\CustomerGetAllInvoicesForCustomerBycustomerNumberRequest;
use Pionect\VismaSdk\Requests\Customer\CustomerGetAllOrderForCustomerBycustomerCdRequest;
use Pionect\VismaSdk\Requests\Customer\CustomerGetAllRequest;
use Pionect\VismaSdk\Requests\Customer\CustomerGetAllSalesOrderBasicForCustomerBycustomerCdRequest;
use Pionect\VismaSdk\Requests\Customer\CustomerGetBycustomerCdRequest;
use Pionect\VismaSdk\Requests\Customer\CustomerGetByinternalIdRequest;
use Pionect\VismaSdk\Requests\Customer\CustomerGetCustomerBalanceBycustomerCdRequest;
use Pionect\VismaSdk\Requests\Customer\CustomerGetCustomerClassesRequest;
use Pionect\VismaSdk\Requests\Customer\CustomerGetCustomerDirectDebitBycustomerCdRequest;
use Pionect\VismaSdk\Requests\Customer\CustomerGetCustomerNoteBycustomerCdRequest;
use Pionect\VismaSdk\Requests\Customer\CustomerGetSalesPersonsForCustomerBycustomerCdRequest;
use Pionect\VismaSdk\Requests\Customer\CustomerGetSpecificCustomerClassBycustomerClassIdRequest;
use Pionect\VismaSdk\Requests\Customer\CustomerPostRequest;
use Pionect\VismaSdk\Requests\Customer\CustomerPutBycustomerCdRequest;
use Pionect\VismaSdk\Requests\Customer\CustomerPutByinternalIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the customerGetCustomerClassesRequest method in the Customer resource', function () {
    Saloon::fake([
        CustomerGetCustomerClassesRequest::class => MockResponse::make([
            0 => [
                'description' => 'String value',
                'taxZoneId' => 'mock-id-123',
                'requiredTaxzoneId' => true,
                'paymentMethodId' => 'mock-id-123',
                'attributes' => [],
            ],
            1 => [
                'description' => 'String value',
                'taxZoneId' => 'mock-id-123',
                'requiredTaxzoneId' => true,
                'paymentMethodId' => 'mock-id-123',
                'attributes' => [],
            ],
        ], 200),
    ]);

    $request = new CustomerGetCustomerClassesRequest(
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerGetCustomerClassesRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toHaveCount(2);
    expect($collection->first())
        ->description->toBe('String value')
        ->taxZoneId->toBe('mock-id-123')
        ->requiredTaxzoneId->toBe(true)
        ->paymentMethodId->toBe('mock-id-123');
});

it('calls the customerGetSpecificCustomerClassBycustomerClassIdRequest method in the Customer resource', function () {
    Saloon::fake([
        CustomerGetSpecificCustomerClassBycustomerClassIdRequest::class => MockResponse::make([
            'description' => 'String value',
            'taxZoneId' => 'mock-id-123',
            'requiredTaxzoneId' => true,
            'paymentMethodId' => 'mock-id-123',
            'attributes' => [],
        ], 200),
    ]);

    $request = new CustomerGetSpecificCustomerClassBycustomerClassIdRequest(
        customerClassId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerGetSpecificCustomerClassBycustomerClassIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->description->toBe('String value')
        ->taxZoneId->toBe('mock-id-123')
        ->requiredTaxzoneId->toBe(true)
        ->paymentMethodId->toBe('mock-id-123');
});

it('calls the customerGetCustomerBalanceBycustomerCdRequest method in the Customer resource', function () {
    Saloon::fake([
        CustomerGetCustomerBalanceBycustomerCdRequest::class => MockResponse::make([
            'customer' => [
                'internalId' => 42,
                'number' => 'String value',
                'name' => 'String value',
            ],
            'balance' => 42,
            'totalOrder' => 42,
            'totalLoan' => 42,
            'totalSalePeriod' => 42,
            'totalSaleYear' => 42,
            'totalDiscountPeriod' => 42,
            'totalDiscountYear' => 42,
            'lastModified' => '2025-11-22T10:40:04+00:00',
        ], 200),
    ]);

    $request = new CustomerGetCustomerBalanceBycustomerCdRequest(
        customerCd: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerGetCustomerBalanceBycustomerCdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->customer->internalId->toBe(42)
        ->customer->number->toBe('String value')
        ->customer->name->toBe('String value')
        ->balance->toBe(42)
        ->totalOrder->toBe(42)
        ->totalLoan->toBe(42)
        ->totalSalePeriod->toBe(42)
        ->totalSaleYear->toBe(42)
        ->totalDiscountPeriod->toBe(42)
        ->totalDiscountYear->toBe(42)
        ->lastModified->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'));
});

it('calls the customerGetCustomerDirectDebitBycustomerCdRequest method in the Customer resource', function () {
    Saloon::fake([
        CustomerGetCustomerDirectDebitBycustomerCdRequest::class => MockResponse::make([
            'mandateId' => 'mock-id-123',
            'mandateDescription' => 'String value',
            'dateOfSignature' => '2025-11-22T10:40:04+00:00',
            'isDefault' => true,
            'oneTime' => true,
            'bic' => 'String value',
            'iban' => 'String value',
            'lastCollectionDate' => '2025-11-22T10:40:04+00:00',
            'maxAmount' => 42,
            'expirationDate' => '2025-11-22T10:40:04+00:00',
            'branch' => 'String value',
        ], 200),
    ]);

    $request = new CustomerGetCustomerDirectDebitBycustomerCdRequest(
        customerCd: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerGetCustomerDirectDebitBycustomerCdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->mandateId->toBe('mock-id-123')
        ->mandateDescription->toBe('String value')
        ->dateOfSignature->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->isDefault->toBe(true)
        ->oneTime->toBe(true)
        ->bic->toBe('String value')
        ->iban->toBe('String value')
        ->lastCollectionDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->maxAmount->toBe(42)
        ->expirationDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->branch->toBe('String value');
});

it('calls the customerGetAllOrderForCustomerBycustomerCdRequest method in the Customer resource', function () {
    Saloon::fake([
        CustomerGetAllOrderForCustomerBycustomerCdRequest::class => MockResponse::make([
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

    $request = new CustomerGetAllOrderForCustomerBycustomerCdRequest(
        customerCd: 'test string',
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

    Saloon::assertSent(CustomerGetAllOrderForCustomerBycustomerCdRequest::class);

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

it('calls the customerGetAllSalesOrderBasicForCustomerBycustomerCdRequest method in the Customer resource', function () {
    Saloon::fake([
        CustomerGetAllSalesOrderBasicForCustomerBycustomerCdRequest::class => MockResponse::make([
            'lines' => [],
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

    $request = new CustomerGetAllSalesOrderBasicForCustomerBycustomerCdRequest(
        customerCd: 'test string',
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

    Saloon::assertSent(CustomerGetAllSalesOrderBasicForCustomerBycustomerCdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
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

it('calls the customerGetAllContactsForCustomerBycustomerCdRequest method in the Customer resource', function () {
    Saloon::fake([
        CustomerGetAllContactsForCustomerBycustomerCdRequest::class => MockResponse::make([
            'displayName' => 'String value',
            'active' => true,
            'title' => 'String value',
            'firstName' => 'String value',
            'lastName' => 'String value',
            'position' => 'String value',
            'businessAccount' => 'String value',
            'businessAccountType' => 'String value',
            'sameAsAccount' => true,
            'address' => [
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
            'email' => 'test@example.com',
            'web' => 'String value',
            'phone1' => 'String value',
            'phone2' => 'String value',
            'phone3' => 'String value',
            'fax' => 'String value',
            'contactMethod' => 'String value',
            'doNotCall' => true,
            'doNotFax' => true,
            'doNotEmail' => true,
            'doNotMail' => true,
            'noMassMail' => true,
            'noMarketing' => true,
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'contactId' => 42,
            'timeStamp' => 'String value',
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new CustomerGetAllContactsForCustomerBycustomerCdRequest(
        customerCd: 'test string',
        displayName: 'test string',
        active: 'test string',
        firstName: 'test string',
        lastName: 'test string',
        businessAccount: 'test string',
        email: 'test string',
        greaterThanValue: 'test string',
        numberToRead: 123,
        skipRecords: 123,
        orderBy: 'test string',
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerGetAllContactsForCustomerBycustomerCdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->displayName->toBe('String value')
        ->active->toBe(true)
        ->title->toBe('String value')
        ->firstName->toBe('String value')
        ->lastName->toBe('String value')
        ->position->toBe('String value')
        ->businessAccount->toBe('String value')
        ->businessAccountType->toBe('String value')
        ->sameAsAccount->toBe(true)
        ->address->addressId->toBe(42)
        ->address->addressLine1->toBe('String value')
        ->address->addressLine2->toBe('String value')
        ->address->addressLine3->toBe('String value')
        ->address->postalCode->toBe('String value')
        ->address->city->toBe('String value')
        ->address->country->name->toBe('String value')
        ->address->country->errorInfo->toBe('String value')
        ->address->county->name->toBe('String value')
        ->email->toBe('test@example.com')
        ->web->toBe('String value')
        ->phone1->toBe('String value')
        ->phone2->toBe('String value')
        ->phone3->toBe('String value')
        ->fax->toBe('String value')
        ->contactMethod->toBe('String value')
        ->doNotCall->toBe(true)
        ->doNotFax->toBe(true)
        ->doNotEmail->toBe(true)
        ->doNotMail->toBe(true)
        ->noMassMail->toBe(true)
        ->noMarketing->toBe(true)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->contactId->toBe(42)
        ->timeStamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the customerGetSalesPersonsForCustomerBycustomerCdRequest method in the Customer resource', function () {
    Saloon::fake([
        CustomerGetSalesPersonsForCustomerBycustomerCdRequest::class => MockResponse::make([
            'salePersonId' => 'mock-id-123',
            'name' => 'String value',
            'locationId' => 'mock-id-123',
            'locationName' => 'String value',
            'commisionPct' => 42,
            'isDefault' => true,
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new CustomerGetSalesPersonsForCustomerBycustomerCdRequest(
        customerCd: 'test string',
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerGetSalesPersonsForCustomerBycustomerCdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->salePersonId->toBe('mock-id-123')
        ->name->toBe('String value')
        ->locationId->toBe('mock-id-123')
        ->locationName->toBe('String value')
        ->commisionPct->toBe(42)
        ->isDefault->toBe(true)
        ->errorInfo->toBe('String value');
});

it('calls the customerGetAllCustomerBalanceRequest method in the Customer resource', function () {
    Saloon::fake([
        CustomerGetAllCustomerBalanceRequest::class => MockResponse::make([
            0 => [
                'customer' => [
                    'internalId' => 42,
                    'number' => 'String value',
                    'name' => 'String value',
                ],
                'balance' => 42,
                'totalOrder' => 42,
                'totalLoan' => 42,
                'totalSalePeriod' => 42,
                'totalSaleYear' => 42,
                'totalDiscountPeriod' => 42,
                'totalDiscountYear' => 42,
                'lastModified' => '2025-11-22T10:40:04+00:00',
            ],
            1 => [
                'customer' => [
                    'internalId' => 42,
                    'number' => 'String value',
                    'name' => 'String value',
                ],
                'balance' => 42,
                'totalOrder' => 42,
                'totalLoan' => 42,
                'totalSalePeriod' => 42,
                'totalSaleYear' => 42,
                'totalDiscountPeriod' => 42,
                'totalDiscountYear' => 42,
                'lastModified' => '2025-11-22T10:40:04+00:00',
            ],
        ], 200),
    ]);

    $request = new CustomerGetAllCustomerBalanceRequest(
        greaterThanValue: 'test string',
        numberToRead: 123,
        skipRecords: 123,
        orderBy: 'test string',
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerGetAllCustomerBalanceRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toHaveCount(2);
    expect($collection->first())
        ->customer->internalId->toBe(42)
        ->customer->number->toBe('String value')
        ->customer->name->toBe('String value')
        ->balance->toBe(42)
        ->totalOrder->toBe(42)
        ->totalLoan->toBe(42)
        ->totalSalePeriod->toBe(42)
        ->totalSaleYear->toBe(42)
        ->totalDiscountPeriod->toBe(42)
        ->totalDiscountYear->toBe(42)
        ->lastModified->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'));
});

it('calls the customerGetCustomerNoteBycustomerCdRequest method in the Customer resource', function () {
    Saloon::fake([
        CustomerGetCustomerNoteBycustomerCdRequest::class => MockResponse::make([
            'note' => 'String value',
        ], 200),
    ]);

    $request = new CustomerGetCustomerNoteBycustomerCdRequest(
        customerCd: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerGetCustomerNoteBycustomerCdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->note->toBe('String value');
});

it('calls the customerGetByinternalIdRequest method in the Customer resource', function () {
    Saloon::fake([
        CustomerGetByinternalIdRequest::class => MockResponse::make([
            'internalId' => 42,
            'number' => 'String value',
            'name' => 'String value',
            'status' => 'String value',
            'mainAddress' => [
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
            'mainContact' => [
                'contactId' => 42,
                'name' => 'String value',
                'attention' => 'String value',
                'email' => 'test@example.com',
                'web' => 'String value',
                'phone1' => 'String value',
                'phone2' => 'String value',
                'fax' => 'String value',
            ],
            'accountReference' => 'String value',
            'parentRecord' => [
                'number' => 'String value',
                'name' => 'String value',
            ],
            'customerClass' => [
                'description' => 'String value',
            ],
            'creditTerms' => [
                'description' => 'String value',
            ],
            'currencyId' => 'mock-id-123',
            'creditVerification' => 'String value',
            'creditLimit' => 42,
            'creditDaysPastDue' => 42,
            'invoiceAddress' => [
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
            'invoiceContact' => [
                'contactId' => 42,
                'name' => 'String value',
                'attention' => 'String value',
                'email' => 'test@example.com',
                'web' => 'String value',
                'phone1' => 'String value',
                'phone2' => 'String value',
                'fax' => 'String value',
            ],
            'printInvoices' => true,
            'acceptAutoInvoices' => true,
            'sendInvoicesByEmail' => true,
            'sendDunningLettersViaEmail' => true,
            'printDunningLetters' => true,
            'printStatements' => true,
            'sendStatementsByEmail' => true,
            'printMultiCurrencyStatements' => true,
            'statementType' => 'String value',
            'deliveryAddress' => [
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
            'deliveryContact' => [
                'contactId' => 42,
                'name' => 'String value',
                'attention' => 'String value',
                'email' => 'test@example.com',
                'web' => 'String value',
                'phone1' => 'String value',
                'phone2' => 'String value',
                'fax' => 'String value',
            ],
            'vatRegistrationId' => 'mock-id-123',
            'corporateId' => 'mock-id-123',
            'gln' => 'String value',
            'vatZone' => [
                'description' => 'String value',
                'defaultVatCategory' => 'String value',
                'defaultTaxCategory' => [
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'errorInfo' => 'String value',
            ],
            'location' => [
                'countryId' => 'mock-id-123',
                'name' => 'String value',
            ],
            'attributes' => [],
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'createdDateTime' => '2025-11-22T10:40:04+00:00',
            'directDebitLines' => [],
            'priceClass' => [
                'description' => 'String value',
            ],
            'glAccounts' => [
                'customerLedgerAccount' => [
                    'type' => 'String value',
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'customerLedgerSubaccount' => [
                    'subaccountNumber' => 'String value',
                    'subaccountId' => 42,
                    'description' => 'String value',
                    'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                    'active' => true,
                    'segments' => [],
                    'timeStamp' => 'String value',
                    'errorInfo' => 'String value',
                ],
                'salesAccount' => [
                    'type' => 'String value',
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'salesNonTaxableAccount' => [
                    'type' => 'String value',
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'salesEuAccount' => [
                    'type' => 'String value',
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'salesExportAccount' => [
                    'type' => 'String value',
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'salesSubaccount' => [
                    'subaccountNumber' => 'String value',
                    'subaccountId' => 42,
                    'description' => 'String value',
                    'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                    'active' => true,
                    'segments' => [],
                    'timeStamp' => 'String value',
                    'errorInfo' => 'String value',
                ],
                'discountAccount' => [
                    'type' => 'String value',
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'discountSubaccount' => [
                    'subaccountNumber' => 'String value',
                    'subaccountId' => 42,
                    'description' => 'String value',
                    'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                    'active' => true,
                    'segments' => [],
                    'timeStamp' => 'String value',
                    'errorInfo' => 'String value',
                ],
                'freightAccount' => [
                    'type' => 'String value',
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'freightSubaccount' => [
                    'subaccountNumber' => 'String value',
                    'subaccountId' => 42,
                    'description' => 'String value',
                    'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                    'active' => true,
                    'segments' => [],
                    'timeStamp' => 'String value',
                    'errorInfo' => 'String value',
                ],
                'cashDiscountAccount' => [
                    'type' => 'String value',
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'cashDiscountSubaccount' => [
                    'subaccountNumber' => 'String value',
                    'subaccountId' => 42,
                    'description' => 'String value',
                    'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                    'active' => true,
                    'segments' => [],
                    'timeStamp' => 'String value',
                    'errorInfo' => 'String value',
                ],
                'prepaymentAccount' => [
                    'type' => 'String value',
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'prepaymentSubaccount' => [
                    'subaccountNumber' => 'String value',
                    'subaccountId' => 42,
                    'description' => 'String value',
                    'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                    'active' => true,
                    'segments' => [],
                    'timeStamp' => 'String value',
                    'errorInfo' => 'String value',
                ],
            ],
            'invoiceToDefaultLocation' => true,
            'eInvoiceContract' => [
                'fInvoiceContractId' => 'mock-id-123',
                'fInvoiceIntermediatorId' => 'mock-id-123',
            ],
            'paymentMethods' => [],
            'defaultPaymentMethodId' => 'mock-id-123',
            'numberOfEmployees' => 42,
            'excludeDebtCollection' => true,
            'timeStamp' => 'String value',
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new CustomerGetByinternalIdRequest(
        internalId: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerGetByinternalIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->internalId->toBe(42)
        ->number->toBe('String value')
        ->name->toBe('String value')
        ->status->toBe('String value')
        ->mainAddress->addressId->toBe(42)
        ->mainAddress->addressLine1->toBe('String value')
        ->mainAddress->addressLine2->toBe('String value')
        ->mainAddress->addressLine3->toBe('String value')
        ->mainAddress->postalCode->toBe('String value')
        ->mainAddress->city->toBe('String value')
        ->mainAddress->country->name->toBe('String value')
        ->mainAddress->country->errorInfo->toBe('String value')
        ->mainAddress->county->name->toBe('String value')
        ->mainContact->contactId->toBe(42)
        ->mainContact->name->toBe('String value')
        ->mainContact->attention->toBe('String value')
        ->mainContact->email->toBe('test@example.com')
        ->mainContact->web->toBe('String value')
        ->mainContact->phone1->toBe('String value')
        ->mainContact->phone2->toBe('String value')
        ->mainContact->fax->toBe('String value')
        ->accountReference->toBe('String value')
        ->parentRecord->number->toBe('String value')
        ->parentRecord->name->toBe('String value')
        ->customerClass->description->toBe('String value')
        ->creditTerms->description->toBe('String value')
        ->currencyId->toBe('mock-id-123')
        ->creditVerification->toBe('String value')
        ->creditLimit->toBe(42)
        ->creditDaysPastDue->toBe(42)
        ->invoiceAddress->addressId->toBe(42)
        ->invoiceAddress->addressLine1->toBe('String value')
        ->invoiceAddress->addressLine2->toBe('String value')
        ->invoiceAddress->addressLine3->toBe('String value')
        ->invoiceAddress->postalCode->toBe('String value')
        ->invoiceAddress->city->toBe('String value')
        ->invoiceAddress->country->name->toBe('String value')
        ->invoiceAddress->country->errorInfo->toBe('String value')
        ->invoiceAddress->county->name->toBe('String value')
        ->invoiceContact->contactId->toBe(42)
        ->invoiceContact->name->toBe('String value')
        ->invoiceContact->attention->toBe('String value')
        ->invoiceContact->email->toBe('test@example.com')
        ->invoiceContact->web->toBe('String value')
        ->invoiceContact->phone1->toBe('String value')
        ->invoiceContact->phone2->toBe('String value')
        ->invoiceContact->fax->toBe('String value')
        ->printInvoices->toBe(true)
        ->acceptAutoInvoices->toBe(true)
        ->sendInvoicesByEmail->toBe(true)
        ->sendDunningLettersViaEmail->toBe(true)
        ->printDunningLetters->toBe(true)
        ->printStatements->toBe(true)
        ->sendStatementsByEmail->toBe(true)
        ->printMultiCurrencyStatements->toBe(true)
        ->statementType->toBe('String value')
        ->deliveryAddress->addressId->toBe(42)
        ->deliveryAddress->addressLine1->toBe('String value')
        ->deliveryAddress->addressLine2->toBe('String value')
        ->deliveryAddress->addressLine3->toBe('String value')
        ->deliveryAddress->postalCode->toBe('String value')
        ->deliveryAddress->city->toBe('String value')
        ->deliveryAddress->country->name->toBe('String value')
        ->deliveryAddress->country->errorInfo->toBe('String value')
        ->deliveryAddress->county->name->toBe('String value')
        ->deliveryContact->contactId->toBe(42)
        ->deliveryContact->name->toBe('String value')
        ->deliveryContact->attention->toBe('String value')
        ->deliveryContact->email->toBe('test@example.com')
        ->deliveryContact->web->toBe('String value')
        ->deliveryContact->phone1->toBe('String value')
        ->deliveryContact->phone2->toBe('String value')
        ->deliveryContact->fax->toBe('String value')
        ->vatRegistrationId->toBe('mock-id-123')
        ->corporateId->toBe('mock-id-123')
        ->gln->toBe('String value')
        ->vatZone->description->toBe('String value')
        ->vatZone->defaultVatCategory->toBe('String value')
        ->vatZone->defaultTaxCategory->number->toBe('String value')
        ->vatZone->defaultTaxCategory->description->toBe('String value')
        ->vatZone->errorInfo->toBe('String value')
        ->location->countryId->toBe('mock-id-123')
        ->location->name->toBe('String value')
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->createdDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->priceClass->description->toBe('String value')
        ->glAccounts->customerLedgerAccount->type->toBe('String value')
        ->glAccounts->customerLedgerAccount->number->toBe('String value')
        ->glAccounts->customerLedgerAccount->description->toBe('String value')
        ->glAccounts->customerLedgerSubaccount->subaccountNumber->toBe('String value')
        ->glAccounts->customerLedgerSubaccount->subaccountId->toBe(42)
        ->glAccounts->customerLedgerSubaccount->description->toBe('String value')
        ->glAccounts->customerLedgerSubaccount->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->glAccounts->customerLedgerSubaccount->active->toBe(true)
        ->glAccounts->customerLedgerSubaccount->timeStamp->toBe('String value')
        ->glAccounts->customerLedgerSubaccount->errorInfo->toBe('String value')
        ->glAccounts->salesAccount->type->toBe('String value')
        ->glAccounts->salesAccount->number->toBe('String value')
        ->glAccounts->salesAccount->description->toBe('String value')
        ->glAccounts->salesNonTaxableAccount->type->toBe('String value')
        ->glAccounts->salesNonTaxableAccount->number->toBe('String value')
        ->glAccounts->salesNonTaxableAccount->description->toBe('String value')
        ->glAccounts->salesEuAccount->type->toBe('String value')
        ->glAccounts->salesEuAccount->number->toBe('String value')
        ->glAccounts->salesEuAccount->description->toBe('String value')
        ->glAccounts->salesExportAccount->type->toBe('String value')
        ->glAccounts->salesExportAccount->number->toBe('String value')
        ->glAccounts->salesExportAccount->description->toBe('String value')
        ->glAccounts->salesSubaccount->subaccountNumber->toBe('String value')
        ->glAccounts->salesSubaccount->subaccountId->toBe(42)
        ->glAccounts->salesSubaccount->description->toBe('String value')
        ->glAccounts->salesSubaccount->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->glAccounts->salesSubaccount->active->toBe(true)
        ->glAccounts->salesSubaccount->timeStamp->toBe('String value')
        ->glAccounts->salesSubaccount->errorInfo->toBe('String value')
        ->glAccounts->discountAccount->type->toBe('String value')
        ->glAccounts->discountAccount->number->toBe('String value')
        ->glAccounts->discountAccount->description->toBe('String value')
        ->glAccounts->discountSubaccount->subaccountNumber->toBe('String value')
        ->glAccounts->discountSubaccount->subaccountId->toBe(42)
        ->glAccounts->discountSubaccount->description->toBe('String value')
        ->glAccounts->discountSubaccount->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->glAccounts->discountSubaccount->active->toBe(true)
        ->glAccounts->discountSubaccount->timeStamp->toBe('String value')
        ->glAccounts->discountSubaccount->errorInfo->toBe('String value')
        ->glAccounts->freightAccount->type->toBe('String value')
        ->glAccounts->freightAccount->number->toBe('String value')
        ->glAccounts->freightAccount->description->toBe('String value')
        ->glAccounts->freightSubaccount->subaccountNumber->toBe('String value')
        ->glAccounts->freightSubaccount->subaccountId->toBe(42)
        ->glAccounts->freightSubaccount->description->toBe('String value')
        ->glAccounts->freightSubaccount->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->glAccounts->freightSubaccount->active->toBe(true)
        ->glAccounts->freightSubaccount->timeStamp->toBe('String value')
        ->glAccounts->freightSubaccount->errorInfo->toBe('String value')
        ->glAccounts->cashDiscountAccount->type->toBe('String value')
        ->glAccounts->cashDiscountAccount->number->toBe('String value')
        ->glAccounts->cashDiscountAccount->description->toBe('String value')
        ->glAccounts->cashDiscountSubaccount->subaccountNumber->toBe('String value')
        ->glAccounts->cashDiscountSubaccount->subaccountId->toBe(42)
        ->glAccounts->cashDiscountSubaccount->description->toBe('String value')
        ->glAccounts->cashDiscountSubaccount->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->glAccounts->cashDiscountSubaccount->active->toBe(true)
        ->glAccounts->cashDiscountSubaccount->timeStamp->toBe('String value')
        ->glAccounts->cashDiscountSubaccount->errorInfo->toBe('String value')
        ->glAccounts->prepaymentAccount->type->toBe('String value')
        ->glAccounts->prepaymentAccount->number->toBe('String value')
        ->glAccounts->prepaymentAccount->description->toBe('String value')
        ->glAccounts->prepaymentSubaccount->subaccountNumber->toBe('String value')
        ->glAccounts->prepaymentSubaccount->subaccountId->toBe(42)
        ->glAccounts->prepaymentSubaccount->description->toBe('String value')
        ->glAccounts->prepaymentSubaccount->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->glAccounts->prepaymentSubaccount->active->toBe(true)
        ->glAccounts->prepaymentSubaccount->timeStamp->toBe('String value')
        ->glAccounts->prepaymentSubaccount->errorInfo->toBe('String value')
        ->invoiceToDefaultLocation->toBe(true)
        ->eInvoiceContract->fInvoiceContractId->toBe('mock-id-123')
        ->eInvoiceContract->fInvoiceIntermediatorId->toBe('mock-id-123')
        ->defaultPaymentMethodId->toBe('mock-id-123')
        ->numberOfEmployees->toBe(42)
        ->excludeDebtCollection->toBe(true)
        ->timeStamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the customerPutByinternalIdRequest method in the Customer resource', function () {
    $bodyData = new CustomerUpdateDto(
        number: 'String value',
        name: 'String value',
        status: 'String value',
        accountReference: 'String value',
        numberOfEmployees: 42,
        parentRecordNumber: 'String value',
        currencyId: 'mock-id-123',
        creditLimit: 42,
        creditDaysPastDue: 42,
        overrideWithClassValues: true,
        customerClassId: 'mock-id-123',
        creditTermsId: 'mock-id-123',
        printInvoices: true,
        acceptAutoInvoices: true,
        sendInvoicesByEmail: true,
        sendDunningLettersViaEmail: true,
        printDunningLetters: true,
        printStatements: true,
        sendStatementsByEmail: true,
        printMultiCurrencyStatements: true,
        invoiceToDefaultLocation: true,
        vatRegistrationId: 'mock-id-123',
        corporateId: 'mock-id-123',
        vatZoneId: 'mock-id-123',
        gln: 'String value',
        note: 'String value',
        mainAddress: null,
        mainContact: null,
        creditVerification: 'String value',
        invoiceAddress: null,
        invoiceContact: null,
        statementType: 'String value',
        deliveryAddress: null,
        deliveryContact: null,
        priceClassId: 'mock-id-123',
        eInvoiceContract: null,
        defaultPaymentMethod: null,
        glAccounts: null,
        directDebitLines: [],
        attributeLines: [],
        overrideNumberSeries: true,
        excludeDebtCollection: true
    );

    Saloon::fake([
        CustomerPutByinternalIdRequest::class => MockResponse::make([], 201),
    ]);

    $request = new CustomerPutByinternalIdRequest(
        internalId: 123,
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerPutByinternalIdRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the customerGetBycustomerCdRequest method in the Customer resource', function () {
    Saloon::fake([
        CustomerGetBycustomerCdRequest::class => MockResponse::make([
            'internalId' => 42,
            'number' => 'String value',
            'name' => 'String value',
            'status' => 'String value',
            'mainAddress' => [
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
            'mainContact' => [
                'contactId' => 42,
                'name' => 'String value',
                'attention' => 'String value',
                'email' => 'test@example.com',
                'web' => 'String value',
                'phone1' => 'String value',
                'phone2' => 'String value',
                'fax' => 'String value',
            ],
            'accountReference' => 'String value',
            'parentRecord' => [
                'number' => 'String value',
                'name' => 'String value',
            ],
            'customerClass' => [
                'description' => 'String value',
            ],
            'creditTerms' => [
                'description' => 'String value',
            ],
            'currencyId' => 'mock-id-123',
            'creditVerification' => 'String value',
            'creditLimit' => 42,
            'creditDaysPastDue' => 42,
            'invoiceAddress' => [
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
            'invoiceContact' => [
                'contactId' => 42,
                'name' => 'String value',
                'attention' => 'String value',
                'email' => 'test@example.com',
                'web' => 'String value',
                'phone1' => 'String value',
                'phone2' => 'String value',
                'fax' => 'String value',
            ],
            'printInvoices' => true,
            'acceptAutoInvoices' => true,
            'sendInvoicesByEmail' => true,
            'sendDunningLettersViaEmail' => true,
            'printDunningLetters' => true,
            'printStatements' => true,
            'sendStatementsByEmail' => true,
            'printMultiCurrencyStatements' => true,
            'statementType' => 'String value',
            'deliveryAddress' => [
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
            'deliveryContact' => [
                'contactId' => 42,
                'name' => 'String value',
                'attention' => 'String value',
                'email' => 'test@example.com',
                'web' => 'String value',
                'phone1' => 'String value',
                'phone2' => 'String value',
                'fax' => 'String value',
            ],
            'vatRegistrationId' => 'mock-id-123',
            'corporateId' => 'mock-id-123',
            'gln' => 'String value',
            'vatZone' => [
                'description' => 'String value',
                'defaultVatCategory' => 'String value',
                'defaultTaxCategory' => [
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'errorInfo' => 'String value',
            ],
            'location' => [
                'countryId' => 'mock-id-123',
                'name' => 'String value',
            ],
            'attributes' => [],
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'createdDateTime' => '2025-11-22T10:40:04+00:00',
            'directDebitLines' => [],
            'priceClass' => [
                'description' => 'String value',
            ],
            'glAccounts' => [
                'customerLedgerAccount' => [
                    'type' => 'String value',
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'customerLedgerSubaccount' => [
                    'subaccountNumber' => 'String value',
                    'subaccountId' => 42,
                    'description' => 'String value',
                    'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                    'active' => true,
                    'segments' => [],
                    'timeStamp' => 'String value',
                    'errorInfo' => 'String value',
                ],
                'salesAccount' => [
                    'type' => 'String value',
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'salesNonTaxableAccount' => [
                    'type' => 'String value',
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'salesEuAccount' => [
                    'type' => 'String value',
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'salesExportAccount' => [
                    'type' => 'String value',
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'salesSubaccount' => [
                    'subaccountNumber' => 'String value',
                    'subaccountId' => 42,
                    'description' => 'String value',
                    'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                    'active' => true,
                    'segments' => [],
                    'timeStamp' => 'String value',
                    'errorInfo' => 'String value',
                ],
                'discountAccount' => [
                    'type' => 'String value',
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'discountSubaccount' => [
                    'subaccountNumber' => 'String value',
                    'subaccountId' => 42,
                    'description' => 'String value',
                    'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                    'active' => true,
                    'segments' => [],
                    'timeStamp' => 'String value',
                    'errorInfo' => 'String value',
                ],
                'freightAccount' => [
                    'type' => 'String value',
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'freightSubaccount' => [
                    'subaccountNumber' => 'String value',
                    'subaccountId' => 42,
                    'description' => 'String value',
                    'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                    'active' => true,
                    'segments' => [],
                    'timeStamp' => 'String value',
                    'errorInfo' => 'String value',
                ],
                'cashDiscountAccount' => [
                    'type' => 'String value',
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'cashDiscountSubaccount' => [
                    'subaccountNumber' => 'String value',
                    'subaccountId' => 42,
                    'description' => 'String value',
                    'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                    'active' => true,
                    'segments' => [],
                    'timeStamp' => 'String value',
                    'errorInfo' => 'String value',
                ],
                'prepaymentAccount' => [
                    'type' => 'String value',
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'prepaymentSubaccount' => [
                    'subaccountNumber' => 'String value',
                    'subaccountId' => 42,
                    'description' => 'String value',
                    'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                    'active' => true,
                    'segments' => [],
                    'timeStamp' => 'String value',
                    'errorInfo' => 'String value',
                ],
            ],
            'invoiceToDefaultLocation' => true,
            'eInvoiceContract' => [
                'fInvoiceContractId' => 'mock-id-123',
                'fInvoiceIntermediatorId' => 'mock-id-123',
            ],
            'paymentMethods' => [],
            'defaultPaymentMethodId' => 'mock-id-123',
            'numberOfEmployees' => 42,
            'excludeDebtCollection' => true,
            'timeStamp' => 'String value',
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new CustomerGetBycustomerCdRequest(
        customerCd: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerGetBycustomerCdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->internalId->toBe(42)
        ->number->toBe('String value')
        ->name->toBe('String value')
        ->status->toBe('String value')
        ->mainAddress->addressId->toBe(42)
        ->mainAddress->addressLine1->toBe('String value')
        ->mainAddress->addressLine2->toBe('String value')
        ->mainAddress->addressLine3->toBe('String value')
        ->mainAddress->postalCode->toBe('String value')
        ->mainAddress->city->toBe('String value')
        ->mainAddress->country->name->toBe('String value')
        ->mainAddress->country->errorInfo->toBe('String value')
        ->mainAddress->county->name->toBe('String value')
        ->mainContact->contactId->toBe(42)
        ->mainContact->name->toBe('String value')
        ->mainContact->attention->toBe('String value')
        ->mainContact->email->toBe('test@example.com')
        ->mainContact->web->toBe('String value')
        ->mainContact->phone1->toBe('String value')
        ->mainContact->phone2->toBe('String value')
        ->mainContact->fax->toBe('String value')
        ->accountReference->toBe('String value')
        ->parentRecord->number->toBe('String value')
        ->parentRecord->name->toBe('String value')
        ->customerClass->description->toBe('String value')
        ->creditTerms->description->toBe('String value')
        ->currencyId->toBe('mock-id-123')
        ->creditVerification->toBe('String value')
        ->creditLimit->toBe(42)
        ->creditDaysPastDue->toBe(42)
        ->invoiceAddress->addressId->toBe(42)
        ->invoiceAddress->addressLine1->toBe('String value')
        ->invoiceAddress->addressLine2->toBe('String value')
        ->invoiceAddress->addressLine3->toBe('String value')
        ->invoiceAddress->postalCode->toBe('String value')
        ->invoiceAddress->city->toBe('String value')
        ->invoiceAddress->country->name->toBe('String value')
        ->invoiceAddress->country->errorInfo->toBe('String value')
        ->invoiceAddress->county->name->toBe('String value')
        ->invoiceContact->contactId->toBe(42)
        ->invoiceContact->name->toBe('String value')
        ->invoiceContact->attention->toBe('String value')
        ->invoiceContact->email->toBe('test@example.com')
        ->invoiceContact->web->toBe('String value')
        ->invoiceContact->phone1->toBe('String value')
        ->invoiceContact->phone2->toBe('String value')
        ->invoiceContact->fax->toBe('String value')
        ->printInvoices->toBe(true)
        ->acceptAutoInvoices->toBe(true)
        ->sendInvoicesByEmail->toBe(true)
        ->sendDunningLettersViaEmail->toBe(true)
        ->printDunningLetters->toBe(true)
        ->printStatements->toBe(true)
        ->sendStatementsByEmail->toBe(true)
        ->printMultiCurrencyStatements->toBe(true)
        ->statementType->toBe('String value')
        ->deliveryAddress->addressId->toBe(42)
        ->deliveryAddress->addressLine1->toBe('String value')
        ->deliveryAddress->addressLine2->toBe('String value')
        ->deliveryAddress->addressLine3->toBe('String value')
        ->deliveryAddress->postalCode->toBe('String value')
        ->deliveryAddress->city->toBe('String value')
        ->deliveryAddress->country->name->toBe('String value')
        ->deliveryAddress->country->errorInfo->toBe('String value')
        ->deliveryAddress->county->name->toBe('String value')
        ->deliveryContact->contactId->toBe(42)
        ->deliveryContact->name->toBe('String value')
        ->deliveryContact->attention->toBe('String value')
        ->deliveryContact->email->toBe('test@example.com')
        ->deliveryContact->web->toBe('String value')
        ->deliveryContact->phone1->toBe('String value')
        ->deliveryContact->phone2->toBe('String value')
        ->deliveryContact->fax->toBe('String value')
        ->vatRegistrationId->toBe('mock-id-123')
        ->corporateId->toBe('mock-id-123')
        ->gln->toBe('String value')
        ->vatZone->description->toBe('String value')
        ->vatZone->defaultVatCategory->toBe('String value')
        ->vatZone->defaultTaxCategory->number->toBe('String value')
        ->vatZone->defaultTaxCategory->description->toBe('String value')
        ->vatZone->errorInfo->toBe('String value')
        ->location->countryId->toBe('mock-id-123')
        ->location->name->toBe('String value')
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->createdDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->priceClass->description->toBe('String value')
        ->glAccounts->customerLedgerAccount->type->toBe('String value')
        ->glAccounts->customerLedgerAccount->number->toBe('String value')
        ->glAccounts->customerLedgerAccount->description->toBe('String value')
        ->glAccounts->customerLedgerSubaccount->subaccountNumber->toBe('String value')
        ->glAccounts->customerLedgerSubaccount->subaccountId->toBe(42)
        ->glAccounts->customerLedgerSubaccount->description->toBe('String value')
        ->glAccounts->customerLedgerSubaccount->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->glAccounts->customerLedgerSubaccount->active->toBe(true)
        ->glAccounts->customerLedgerSubaccount->timeStamp->toBe('String value')
        ->glAccounts->customerLedgerSubaccount->errorInfo->toBe('String value')
        ->glAccounts->salesAccount->type->toBe('String value')
        ->glAccounts->salesAccount->number->toBe('String value')
        ->glAccounts->salesAccount->description->toBe('String value')
        ->glAccounts->salesNonTaxableAccount->type->toBe('String value')
        ->glAccounts->salesNonTaxableAccount->number->toBe('String value')
        ->glAccounts->salesNonTaxableAccount->description->toBe('String value')
        ->glAccounts->salesEuAccount->type->toBe('String value')
        ->glAccounts->salesEuAccount->number->toBe('String value')
        ->glAccounts->salesEuAccount->description->toBe('String value')
        ->glAccounts->salesExportAccount->type->toBe('String value')
        ->glAccounts->salesExportAccount->number->toBe('String value')
        ->glAccounts->salesExportAccount->description->toBe('String value')
        ->glAccounts->salesSubaccount->subaccountNumber->toBe('String value')
        ->glAccounts->salesSubaccount->subaccountId->toBe(42)
        ->glAccounts->salesSubaccount->description->toBe('String value')
        ->glAccounts->salesSubaccount->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->glAccounts->salesSubaccount->active->toBe(true)
        ->glAccounts->salesSubaccount->timeStamp->toBe('String value')
        ->glAccounts->salesSubaccount->errorInfo->toBe('String value')
        ->glAccounts->discountAccount->type->toBe('String value')
        ->glAccounts->discountAccount->number->toBe('String value')
        ->glAccounts->discountAccount->description->toBe('String value')
        ->glAccounts->discountSubaccount->subaccountNumber->toBe('String value')
        ->glAccounts->discountSubaccount->subaccountId->toBe(42)
        ->glAccounts->discountSubaccount->description->toBe('String value')
        ->glAccounts->discountSubaccount->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->glAccounts->discountSubaccount->active->toBe(true)
        ->glAccounts->discountSubaccount->timeStamp->toBe('String value')
        ->glAccounts->discountSubaccount->errorInfo->toBe('String value')
        ->glAccounts->freightAccount->type->toBe('String value')
        ->glAccounts->freightAccount->number->toBe('String value')
        ->glAccounts->freightAccount->description->toBe('String value')
        ->glAccounts->freightSubaccount->subaccountNumber->toBe('String value')
        ->glAccounts->freightSubaccount->subaccountId->toBe(42)
        ->glAccounts->freightSubaccount->description->toBe('String value')
        ->glAccounts->freightSubaccount->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->glAccounts->freightSubaccount->active->toBe(true)
        ->glAccounts->freightSubaccount->timeStamp->toBe('String value')
        ->glAccounts->freightSubaccount->errorInfo->toBe('String value')
        ->glAccounts->cashDiscountAccount->type->toBe('String value')
        ->glAccounts->cashDiscountAccount->number->toBe('String value')
        ->glAccounts->cashDiscountAccount->description->toBe('String value')
        ->glAccounts->cashDiscountSubaccount->subaccountNumber->toBe('String value')
        ->glAccounts->cashDiscountSubaccount->subaccountId->toBe(42)
        ->glAccounts->cashDiscountSubaccount->description->toBe('String value')
        ->glAccounts->cashDiscountSubaccount->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->glAccounts->cashDiscountSubaccount->active->toBe(true)
        ->glAccounts->cashDiscountSubaccount->timeStamp->toBe('String value')
        ->glAccounts->cashDiscountSubaccount->errorInfo->toBe('String value')
        ->glAccounts->prepaymentAccount->type->toBe('String value')
        ->glAccounts->prepaymentAccount->number->toBe('String value')
        ->glAccounts->prepaymentAccount->description->toBe('String value')
        ->glAccounts->prepaymentSubaccount->subaccountNumber->toBe('String value')
        ->glAccounts->prepaymentSubaccount->subaccountId->toBe(42)
        ->glAccounts->prepaymentSubaccount->description->toBe('String value')
        ->glAccounts->prepaymentSubaccount->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->glAccounts->prepaymentSubaccount->active->toBe(true)
        ->glAccounts->prepaymentSubaccount->timeStamp->toBe('String value')
        ->glAccounts->prepaymentSubaccount->errorInfo->toBe('String value')
        ->invoiceToDefaultLocation->toBe(true)
        ->eInvoiceContract->fInvoiceContractId->toBe('mock-id-123')
        ->eInvoiceContract->fInvoiceIntermediatorId->toBe('mock-id-123')
        ->defaultPaymentMethodId->toBe('mock-id-123')
        ->numberOfEmployees->toBe(42)
        ->excludeDebtCollection->toBe(true)
        ->timeStamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the customerPutBycustomerCdRequest method in the Customer resource', function () {
    $bodyData = new CustomerUpdateDto(
        number: 'String value',
        name: 'String value',
        status: 'String value',
        accountReference: 'String value',
        numberOfEmployees: 42,
        parentRecordNumber: 'String value',
        currencyId: 'mock-id-123',
        creditLimit: 42,
        creditDaysPastDue: 42,
        overrideWithClassValues: true,
        customerClassId: 'mock-id-123',
        creditTermsId: 'mock-id-123',
        printInvoices: true,
        acceptAutoInvoices: true,
        sendInvoicesByEmail: true,
        sendDunningLettersViaEmail: true,
        printDunningLetters: true,
        printStatements: true,
        sendStatementsByEmail: true,
        printMultiCurrencyStatements: true,
        invoiceToDefaultLocation: true,
        vatRegistrationId: 'mock-id-123',
        corporateId: 'mock-id-123',
        vatZoneId: 'mock-id-123',
        gln: 'String value',
        note: 'String value',
        mainAddress: null,
        mainContact: null,
        creditVerification: 'String value',
        invoiceAddress: null,
        invoiceContact: null,
        statementType: 'String value',
        deliveryAddress: null,
        deliveryContact: null,
        priceClassId: 'mock-id-123',
        eInvoiceContract: null,
        defaultPaymentMethod: null,
        glAccounts: null,
        directDebitLines: [],
        attributeLines: [],
        overrideNumberSeries: true,
        excludeDebtCollection: true
    );

    Saloon::fake([
        CustomerPutBycustomerCdRequest::class => MockResponse::make([], 201),
    ]);

    $request = new CustomerPutBycustomerCdRequest(
        customerCd: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerPutBycustomerCdRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the customerGetAllRequest method in the Customer resource', function () {
    Saloon::fake([
        CustomerGetAllRequest::class => MockResponse::make([
            0 => [
                'internalId' => 42,
                'number' => 'String value',
                'name' => 'String value',
                'status' => 'String value',
                'mainAddress' => [
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
                'mainContact' => [
                    'contactId' => 42,
                    'name' => 'String value',
                    'attention' => 'String value',
                    'email' => 'test@example.com',
                    'web' => 'String value',
                    'phone1' => 'String value',
                    'phone2' => 'String value',
                    'fax' => 'String value',
                ],
                'accountReference' => 'String value',
                'parentRecord' => [
                    'number' => 'String value',
                    'name' => 'String value',
                ],
                'customerClass' => [
                    'description' => 'String value',
                ],
                'creditTerms' => [
                    'description' => 'String value',
                ],
                'currencyId' => 'mock-id-123',
                'creditVerification' => 'String value',
                'creditLimit' => 42,
                'creditDaysPastDue' => 42,
                'invoiceAddress' => [
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
                'invoiceContact' => [
                    'contactId' => 42,
                    'name' => 'String value',
                    'attention' => 'String value',
                    'email' => 'test@example.com',
                    'web' => 'String value',
                    'phone1' => 'String value',
                    'phone2' => 'String value',
                    'fax' => 'String value',
                ],
                'printInvoices' => true,
                'acceptAutoInvoices' => true,
                'sendInvoicesByEmail' => true,
                'sendDunningLettersViaEmail' => true,
                'printDunningLetters' => true,
                'printStatements' => true,
                'sendStatementsByEmail' => true,
                'printMultiCurrencyStatements' => true,
                'statementType' => 'String value',
                'deliveryAddress' => [
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
                'deliveryContact' => [
                    'contactId' => 42,
                    'name' => 'String value',
                    'attention' => 'String value',
                    'email' => 'test@example.com',
                    'web' => 'String value',
                    'phone1' => 'String value',
                    'phone2' => 'String value',
                    'fax' => 'String value',
                ],
                'vatRegistrationId' => 'mock-id-123',
                'corporateId' => 'mock-id-123',
                'gln' => 'String value',
                'vatZone' => [
                    'description' => 'String value',
                    'defaultVatCategory' => 'String value',
                    'defaultTaxCategory' => [
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'errorInfo' => 'String value',
                ],
                'location' => [
                    'countryId' => 'mock-id-123',
                    'name' => 'String value',
                ],
                'attributes' => [],
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'createdDateTime' => '2025-11-22T10:40:04+00:00',
                'directDebitLines' => [],
                'priceClass' => [
                    'description' => 'String value',
                ],
                'glAccounts' => [
                    'customerLedgerAccount' => [
                        'type' => 'String value',
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'customerLedgerSubaccount' => [
                        'subaccountNumber' => 'String value',
                        'subaccountId' => 42,
                        'description' => 'String value',
                        'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                        'active' => true,
                        'segments' => [],
                        'timeStamp' => 'String value',
                        'errorInfo' => 'String value',
                    ],
                    'salesAccount' => [
                        'type' => 'String value',
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'salesNonTaxableAccount' => [
                        'type' => 'String value',
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'salesEuAccount' => [
                        'type' => 'String value',
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'salesExportAccount' => [
                        'type' => 'String value',
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'salesSubaccount' => [
                        'subaccountNumber' => 'String value',
                        'subaccountId' => 42,
                        'description' => 'String value',
                        'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                        'active' => true,
                        'segments' => [],
                        'timeStamp' => 'String value',
                        'errorInfo' => 'String value',
                    ],
                    'discountAccount' => [
                        'type' => 'String value',
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'discountSubaccount' => [
                        'subaccountNumber' => 'String value',
                        'subaccountId' => 42,
                        'description' => 'String value',
                        'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                        'active' => true,
                        'segments' => [],
                        'timeStamp' => 'String value',
                        'errorInfo' => 'String value',
                    ],
                    'freightAccount' => [
                        'type' => 'String value',
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'freightSubaccount' => [
                        'subaccountNumber' => 'String value',
                        'subaccountId' => 42,
                        'description' => 'String value',
                        'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                        'active' => true,
                        'segments' => [],
                        'timeStamp' => 'String value',
                        'errorInfo' => 'String value',
                    ],
                    'cashDiscountAccount' => [
                        'type' => 'String value',
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'cashDiscountSubaccount' => [
                        'subaccountNumber' => 'String value',
                        'subaccountId' => 42,
                        'description' => 'String value',
                        'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                        'active' => true,
                        'segments' => [],
                        'timeStamp' => 'String value',
                        'errorInfo' => 'String value',
                    ],
                    'prepaymentAccount' => [
                        'type' => 'String value',
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'prepaymentSubaccount' => [
                        'subaccountNumber' => 'String value',
                        'subaccountId' => 42,
                        'description' => 'String value',
                        'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                        'active' => true,
                        'segments' => [],
                        'timeStamp' => 'String value',
                        'errorInfo' => 'String value',
                    ],
                ],
                'invoiceToDefaultLocation' => true,
                'eInvoiceContract' => [
                    'fInvoiceContractId' => 'mock-id-123',
                    'fInvoiceIntermediatorId' => 'mock-id-123',
                ],
                'paymentMethods' => [],
                'defaultPaymentMethodId' => 'mock-id-123',
                'numberOfEmployees' => 42,
                'excludeDebtCollection' => true,
                'timeStamp' => 'String value',
                'errorInfo' => 'String value',
            ],
            1 => [
                'internalId' => 42,
                'number' => 'String value',
                'name' => 'String value',
                'status' => 'String value',
                'mainAddress' => [
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
                'mainContact' => [
                    'contactId' => 42,
                    'name' => 'String value',
                    'attention' => 'String value',
                    'email' => 'test@example.com',
                    'web' => 'String value',
                    'phone1' => 'String value',
                    'phone2' => 'String value',
                    'fax' => 'String value',
                ],
                'accountReference' => 'String value',
                'parentRecord' => [
                    'number' => 'String value',
                    'name' => 'String value',
                ],
                'customerClass' => [
                    'description' => 'String value',
                ],
                'creditTerms' => [
                    'description' => 'String value',
                ],
                'currencyId' => 'mock-id-123',
                'creditVerification' => 'String value',
                'creditLimit' => 42,
                'creditDaysPastDue' => 42,
                'invoiceAddress' => [
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
                'invoiceContact' => [
                    'contactId' => 42,
                    'name' => 'String value',
                    'attention' => 'String value',
                    'email' => 'test@example.com',
                    'web' => 'String value',
                    'phone1' => 'String value',
                    'phone2' => 'String value',
                    'fax' => 'String value',
                ],
                'printInvoices' => true,
                'acceptAutoInvoices' => true,
                'sendInvoicesByEmail' => true,
                'sendDunningLettersViaEmail' => true,
                'printDunningLetters' => true,
                'printStatements' => true,
                'sendStatementsByEmail' => true,
                'printMultiCurrencyStatements' => true,
                'statementType' => 'String value',
                'deliveryAddress' => [
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
                'deliveryContact' => [
                    'contactId' => 42,
                    'name' => 'String value',
                    'attention' => 'String value',
                    'email' => 'test@example.com',
                    'web' => 'String value',
                    'phone1' => 'String value',
                    'phone2' => 'String value',
                    'fax' => 'String value',
                ],
                'vatRegistrationId' => 'mock-id-123',
                'corporateId' => 'mock-id-123',
                'gln' => 'String value',
                'vatZone' => [
                    'description' => 'String value',
                    'defaultVatCategory' => 'String value',
                    'defaultTaxCategory' => [
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'errorInfo' => 'String value',
                ],
                'location' => [
                    'countryId' => 'mock-id-123',
                    'name' => 'String value',
                ],
                'attributes' => [],
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'createdDateTime' => '2025-11-22T10:40:04+00:00',
                'directDebitLines' => [],
                'priceClass' => [
                    'description' => 'String value',
                ],
                'glAccounts' => [
                    'customerLedgerAccount' => [
                        'type' => 'String value',
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'customerLedgerSubaccount' => [
                        'subaccountNumber' => 'String value',
                        'subaccountId' => 42,
                        'description' => 'String value',
                        'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                        'active' => true,
                        'segments' => [],
                        'timeStamp' => 'String value',
                        'errorInfo' => 'String value',
                    ],
                    'salesAccount' => [
                        'type' => 'String value',
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'salesNonTaxableAccount' => [
                        'type' => 'String value',
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'salesEuAccount' => [
                        'type' => 'String value',
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'salesExportAccount' => [
                        'type' => 'String value',
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'salesSubaccount' => [
                        'subaccountNumber' => 'String value',
                        'subaccountId' => 42,
                        'description' => 'String value',
                        'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                        'active' => true,
                        'segments' => [],
                        'timeStamp' => 'String value',
                        'errorInfo' => 'String value',
                    ],
                    'discountAccount' => [
                        'type' => 'String value',
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'discountSubaccount' => [
                        'subaccountNumber' => 'String value',
                        'subaccountId' => 42,
                        'description' => 'String value',
                        'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                        'active' => true,
                        'segments' => [],
                        'timeStamp' => 'String value',
                        'errorInfo' => 'String value',
                    ],
                    'freightAccount' => [
                        'type' => 'String value',
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'freightSubaccount' => [
                        'subaccountNumber' => 'String value',
                        'subaccountId' => 42,
                        'description' => 'String value',
                        'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                        'active' => true,
                        'segments' => [],
                        'timeStamp' => 'String value',
                        'errorInfo' => 'String value',
                    ],
                    'cashDiscountAccount' => [
                        'type' => 'String value',
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'cashDiscountSubaccount' => [
                        'subaccountNumber' => 'String value',
                        'subaccountId' => 42,
                        'description' => 'String value',
                        'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                        'active' => true,
                        'segments' => [],
                        'timeStamp' => 'String value',
                        'errorInfo' => 'String value',
                    ],
                    'prepaymentAccount' => [
                        'type' => 'String value',
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'prepaymentSubaccount' => [
                        'subaccountNumber' => 'String value',
                        'subaccountId' => 42,
                        'description' => 'String value',
                        'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                        'active' => true,
                        'segments' => [],
                        'timeStamp' => 'String value',
                        'errorInfo' => 'String value',
                    ],
                ],
                'invoiceToDefaultLocation' => true,
                'eInvoiceContract' => [
                    'fInvoiceContractId' => 'mock-id-123',
                    'fInvoiceIntermediatorId' => 'mock-id-123',
                ],
                'paymentMethods' => [],
                'defaultPaymentMethodId' => 'mock-id-123',
                'numberOfEmployees' => 42,
                'excludeDebtCollection' => true,
                'timeStamp' => 'String value',
                'errorInfo' => 'String value',
            ],
        ], 200),
    ]);

    $request = new CustomerGetAllRequest(
        greaterThanValue: 'test string',
        numberToRead: 123,
        skipRecords: 123,
        name: 'test string',
        status: 'test string',
        corporateId: 'test string',
        vatRegistrationId: 'test string',
        email: 'test string',
        phone: 'test string',
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        createdDateTime: 'test string',
        createdDateTimeCondition: 'test string',
        expandAccountInformation: true,
        expandPaymentMethods: true,
        expandDirectDebit: true,
        attributes: 'test string',
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerGetAllRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toHaveCount(2);
    expect($collection->first())
        ->internalId->toBe(42)
        ->number->toBe('String value')
        ->name->toBe('String value')
        ->status->toBe('String value')
        ->mainAddress->addressId->toBe(42)
        ->mainAddress->addressLine1->toBe('String value')
        ->mainAddress->addressLine2->toBe('String value')
        ->mainAddress->addressLine3->toBe('String value')
        ->mainAddress->postalCode->toBe('String value')
        ->mainAddress->city->toBe('String value')
        ->mainAddress->country->name->toBe('String value')
        ->mainAddress->country->errorInfo->toBe('String value')
        ->mainAddress->county->name->toBe('String value')
        ->mainContact->contactId->toBe(42)
        ->mainContact->name->toBe('String value')
        ->mainContact->attention->toBe('String value')
        ->mainContact->email->toBe('test@example.com')
        ->mainContact->web->toBe('String value')
        ->mainContact->phone1->toBe('String value')
        ->mainContact->phone2->toBe('String value')
        ->mainContact->fax->toBe('String value')
        ->accountReference->toBe('String value')
        ->parentRecord->number->toBe('String value')
        ->parentRecord->name->toBe('String value')
        ->customerClass->description->toBe('String value')
        ->creditTerms->description->toBe('String value')
        ->currencyId->toBe('mock-id-123')
        ->creditVerification->toBe('String value')
        ->creditLimit->toBe(42)
        ->creditDaysPastDue->toBe(42)
        ->invoiceAddress->addressId->toBe(42)
        ->invoiceAddress->addressLine1->toBe('String value')
        ->invoiceAddress->addressLine2->toBe('String value')
        ->invoiceAddress->addressLine3->toBe('String value')
        ->invoiceAddress->postalCode->toBe('String value')
        ->invoiceAddress->city->toBe('String value')
        ->invoiceAddress->country->name->toBe('String value')
        ->invoiceAddress->country->errorInfo->toBe('String value')
        ->invoiceAddress->county->name->toBe('String value')
        ->invoiceContact->contactId->toBe(42)
        ->invoiceContact->name->toBe('String value')
        ->invoiceContact->attention->toBe('String value')
        ->invoiceContact->email->toBe('test@example.com')
        ->invoiceContact->web->toBe('String value')
        ->invoiceContact->phone1->toBe('String value')
        ->invoiceContact->phone2->toBe('String value')
        ->invoiceContact->fax->toBe('String value')
        ->printInvoices->toBe(true)
        ->acceptAutoInvoices->toBe(true)
        ->sendInvoicesByEmail->toBe(true)
        ->sendDunningLettersViaEmail->toBe(true)
        ->printDunningLetters->toBe(true)
        ->printStatements->toBe(true)
        ->sendStatementsByEmail->toBe(true)
        ->printMultiCurrencyStatements->toBe(true)
        ->statementType->toBe('String value')
        ->deliveryAddress->addressId->toBe(42)
        ->deliveryAddress->addressLine1->toBe('String value')
        ->deliveryAddress->addressLine2->toBe('String value')
        ->deliveryAddress->addressLine3->toBe('String value')
        ->deliveryAddress->postalCode->toBe('String value')
        ->deliveryAddress->city->toBe('String value')
        ->deliveryAddress->country->name->toBe('String value')
        ->deliveryAddress->country->errorInfo->toBe('String value')
        ->deliveryAddress->county->name->toBe('String value')
        ->deliveryContact->contactId->toBe(42)
        ->deliveryContact->name->toBe('String value')
        ->deliveryContact->attention->toBe('String value')
        ->deliveryContact->email->toBe('test@example.com')
        ->deliveryContact->web->toBe('String value')
        ->deliveryContact->phone1->toBe('String value')
        ->deliveryContact->phone2->toBe('String value')
        ->deliveryContact->fax->toBe('String value')
        ->vatRegistrationId->toBe('mock-id-123')
        ->corporateId->toBe('mock-id-123')
        ->gln->toBe('String value')
        ->vatZone->description->toBe('String value')
        ->vatZone->defaultVatCategory->toBe('String value')
        ->vatZone->defaultTaxCategory->number->toBe('String value')
        ->vatZone->defaultTaxCategory->description->toBe('String value')
        ->vatZone->errorInfo->toBe('String value')
        ->location->countryId->toBe('mock-id-123')
        ->location->name->toBe('String value')
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->createdDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->priceClass->description->toBe('String value')
        ->glAccounts->customerLedgerAccount->type->toBe('String value')
        ->glAccounts->customerLedgerAccount->number->toBe('String value')
        ->glAccounts->customerLedgerAccount->description->toBe('String value')
        ->glAccounts->customerLedgerSubaccount->subaccountNumber->toBe('String value')
        ->glAccounts->customerLedgerSubaccount->subaccountId->toBe(42)
        ->glAccounts->customerLedgerSubaccount->description->toBe('String value')
        ->glAccounts->customerLedgerSubaccount->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->glAccounts->customerLedgerSubaccount->active->toBe(true)
        ->glAccounts->customerLedgerSubaccount->timeStamp->toBe('String value')
        ->glAccounts->customerLedgerSubaccount->errorInfo->toBe('String value')
        ->glAccounts->salesAccount->type->toBe('String value')
        ->glAccounts->salesAccount->number->toBe('String value')
        ->glAccounts->salesAccount->description->toBe('String value')
        ->glAccounts->salesNonTaxableAccount->type->toBe('String value')
        ->glAccounts->salesNonTaxableAccount->number->toBe('String value')
        ->glAccounts->salesNonTaxableAccount->description->toBe('String value')
        ->glAccounts->salesEuAccount->type->toBe('String value')
        ->glAccounts->salesEuAccount->number->toBe('String value')
        ->glAccounts->salesEuAccount->description->toBe('String value')
        ->glAccounts->salesExportAccount->type->toBe('String value')
        ->glAccounts->salesExportAccount->number->toBe('String value')
        ->glAccounts->salesExportAccount->description->toBe('String value')
        ->glAccounts->salesSubaccount->subaccountNumber->toBe('String value')
        ->glAccounts->salesSubaccount->subaccountId->toBe(42)
        ->glAccounts->salesSubaccount->description->toBe('String value')
        ->glAccounts->salesSubaccount->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->glAccounts->salesSubaccount->active->toBe(true)
        ->glAccounts->salesSubaccount->timeStamp->toBe('String value')
        ->glAccounts->salesSubaccount->errorInfo->toBe('String value')
        ->glAccounts->discountAccount->type->toBe('String value')
        ->glAccounts->discountAccount->number->toBe('String value')
        ->glAccounts->discountAccount->description->toBe('String value')
        ->glAccounts->discountSubaccount->subaccountNumber->toBe('String value')
        ->glAccounts->discountSubaccount->subaccountId->toBe(42)
        ->glAccounts->discountSubaccount->description->toBe('String value')
        ->glAccounts->discountSubaccount->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->glAccounts->discountSubaccount->active->toBe(true)
        ->glAccounts->discountSubaccount->timeStamp->toBe('String value')
        ->glAccounts->discountSubaccount->errorInfo->toBe('String value')
        ->glAccounts->freightAccount->type->toBe('String value')
        ->glAccounts->freightAccount->number->toBe('String value')
        ->glAccounts->freightAccount->description->toBe('String value')
        ->glAccounts->freightSubaccount->subaccountNumber->toBe('String value')
        ->glAccounts->freightSubaccount->subaccountId->toBe(42)
        ->glAccounts->freightSubaccount->description->toBe('String value')
        ->glAccounts->freightSubaccount->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->glAccounts->freightSubaccount->active->toBe(true)
        ->glAccounts->freightSubaccount->timeStamp->toBe('String value')
        ->glAccounts->freightSubaccount->errorInfo->toBe('String value')
        ->glAccounts->cashDiscountAccount->type->toBe('String value')
        ->glAccounts->cashDiscountAccount->number->toBe('String value')
        ->glAccounts->cashDiscountAccount->description->toBe('String value')
        ->glAccounts->cashDiscountSubaccount->subaccountNumber->toBe('String value')
        ->glAccounts->cashDiscountSubaccount->subaccountId->toBe(42)
        ->glAccounts->cashDiscountSubaccount->description->toBe('String value')
        ->glAccounts->cashDiscountSubaccount->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->glAccounts->cashDiscountSubaccount->active->toBe(true)
        ->glAccounts->cashDiscountSubaccount->timeStamp->toBe('String value')
        ->glAccounts->cashDiscountSubaccount->errorInfo->toBe('String value')
        ->glAccounts->prepaymentAccount->type->toBe('String value')
        ->glAccounts->prepaymentAccount->number->toBe('String value')
        ->glAccounts->prepaymentAccount->description->toBe('String value')
        ->glAccounts->prepaymentSubaccount->subaccountNumber->toBe('String value')
        ->glAccounts->prepaymentSubaccount->subaccountId->toBe(42)
        ->glAccounts->prepaymentSubaccount->description->toBe('String value')
        ->glAccounts->prepaymentSubaccount->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->glAccounts->prepaymentSubaccount->active->toBe(true)
        ->glAccounts->prepaymentSubaccount->timeStamp->toBe('String value')
        ->glAccounts->prepaymentSubaccount->errorInfo->toBe('String value')
        ->invoiceToDefaultLocation->toBe(true)
        ->eInvoiceContract->fInvoiceContractId->toBe('mock-id-123')
        ->eInvoiceContract->fInvoiceIntermediatorId->toBe('mock-id-123')
        ->defaultPaymentMethodId->toBe('mock-id-123')
        ->numberOfEmployees->toBe(42)
        ->excludeDebtCollection->toBe(true)
        ->timeStamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the customerPostRequest method in the Customer resource', function () {
    $bodyData = new CustomerUpdateDto(
        number: 'String value',
        name: 'String value',
        status: 'String value',
        accountReference: 'String value',
        numberOfEmployees: 42,
        parentRecordNumber: 'String value',
        currencyId: 'mock-id-123',
        creditLimit: 42,
        creditDaysPastDue: 42,
        overrideWithClassValues: true,
        customerClassId: 'mock-id-123',
        creditTermsId: 'mock-id-123',
        printInvoices: true,
        acceptAutoInvoices: true,
        sendInvoicesByEmail: true,
        sendDunningLettersViaEmail: true,
        printDunningLetters: true,
        printStatements: true,
        sendStatementsByEmail: true,
        printMultiCurrencyStatements: true,
        invoiceToDefaultLocation: true,
        vatRegistrationId: 'mock-id-123',
        corporateId: 'mock-id-123',
        vatZoneId: 'mock-id-123',
        gln: 'String value',
        note: 'String value',
        mainAddress: null,
        mainContact: null,
        creditVerification: 'String value',
        invoiceAddress: null,
        invoiceContact: null,
        statementType: 'String value',
        deliveryAddress: null,
        deliveryContact: null,
        priceClassId: 'mock-id-123',
        eInvoiceContract: null,
        defaultPaymentMethod: null,
        glAccounts: null,
        directDebitLines: [],
        attributeLines: [],
        overrideNumberSeries: true,
        excludeDebtCollection: true
    );

    Saloon::fake([
        CustomerPostRequest::class => MockResponse::make([], 201),
    ]);

    $request = new CustomerPostRequest(
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerPostRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the customerGetAllInvoicesForCustomerBycustomerNumberRequest method in the Customer resource', function () {
    Saloon::fake([
        CustomerGetAllInvoicesForCustomerBycustomerNumberRequest::class => MockResponse::make([
            'creditTerms' => [
                'description' => 'String value',
            ],
            'documentDueDate' => '2025-11-22T10:40:04+00:00',
            'cashDiscountDate' => '2025-11-22T10:40:04+00:00',
            'externalReference' => 'String value',
            'isRotRutDeductible' => true,
            'exchangeRate' => 42,
            'dunningLetterDate' => '2025-11-22T10:40:04+00:00',
            'dunningLetterLevel' => 42,
            'contact' => [
                'name' => 'String value',
            ],
            'attachments' => [],
            'taxDetails' => [],
            'invoiceLines' => [],
            'sendToAutoInvoice' => true,
            'roundingDiff' => 42,
            'customerVatZone' => [
                'description' => 'String value',
            ],
            'startDate' => '2025-11-22T10:40:04+00:00',
            'endDate' => '2025-11-22T10:40:04+00:00',
            'accountingCostRef' => 'String value',
            'originatorDocRef' => 'String value',
            'contractDocRef' => 'String value',
            'childRecord' => [
                'number' => 'String value',
                'name' => 'String value',
            ],
            'directDebitMandate' => [
                'mandateId' => 'mock-id-123',
                'mandateDescription' => 'String value',
            ],
            'excludeDebtCollection' => true,
            'debtCollection' => [
                'caseNumber' => 'String value',
                'caseType' => 'String value',
                'caseStatus' => 'String value',
                'caseUrl' => 'String value',
            ],
            'timeStamp' => 'String value',
            'hold' => true,
            'discountTotal' => 42,
            'discountTotalInCurrency' => 42,
            'detailTotal' => 42,
            'detailTotalInCurrency' => 42,
            'vatTaxableTotal' => 42,
            'vatTaxableTotalInCurrency' => 42,
            'vatExemptTotal' => 42,
            'vatExemptTotalInCurrency' => 42,
            'salesPersonId' => 42,
            'salesPersonDescr' => 'String value',
            'salesPerson' => [
                'description' => 'String value',
            ],
            'paymentReference' => 'String value',
            'invoiceAddress' => [
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
                'overrideAddress' => true,
            ],
            'invoiceContact' => [
                'contactId' => 42,
                'businessName' => 'String value',
                'attention' => 'String value',
                'email' => 'test@example.com',
                'phone1' => 'String value',
                'overrideContact' => true,
            ],
            'applications' => [],
            'dontPrint' => true,
            'dontEmail' => true,
            'revoked' => true,
            'customer' => [
                'number' => 'String value',
                'name' => 'String value',
            ],
            'documentType' => 'String value',
            'referenceNumber' => 'String value',
            'postPeriod' => 'String value',
            'financialPeriod' => 'String value',
            'closedFinancialPeriod' => 'String value',
            'documentDate' => '2025-11-22T10:40:04+00:00',
            'origInvoiceDate' => '2025-11-22T10:40:04+00:00',
            'status' => 'String value',
            'currencyId' => 'mock-id-123',
            'amount' => 42,
            'amountInCurrency' => 42,
            'balance' => 42,
            'balanceInCurrency' => 42,
            'cashDiscount' => 42,
            'cashDiscountInCurrency' => 42,
            'paymentMethod' => [
                'description' => 'String value',
            ],
            'customerRefNumber' => 'String value',
            'invoiceText' => 'String value',
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'createdDateTime' => '2025-11-22T10:40:04+00:00',
            'note' => 'String value',
            'vatTotal' => 42,
            'vatTotalInCurrency' => 42,
            'location' => [
                'countryId' => 'mock-id-123',
                'name' => 'String value',
            ],
            'branchNumber' => [
                'number' => 'String value',
                'name' => 'String value',
            ],
            'cashAccount' => 'String value',
            'project' => [
                'internalId' => 42,
                'description' => 'String value',
            ],
            'account' => [
                'type' => 'String value',
                'externalCode1' => 'String value',
                'externalCode2' => 'String value',
                'active' => true,
                'number' => 'String value',
                'description' => 'String value',
            ],
            'subaccount' => [
                'subaccountNumber' => 'String value',
                'subaccountId' => 42,
                'description' => 'String value',
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'active' => true,
                'segments' => [],
                'timeStamp' => 'String value',
                'errorInfo' => 'String value',
            ],
            'customerProject' => 'String value',
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new CustomerGetAllInvoicesForCustomerBycustomerNumberRequest(
        customerNumber: 'test string',
        documentType: 'test string',
        released: 123,
        dunningLevel: 123,
        closedFinancialPeriod: 'test string',
        dunningLetterDateTime: 'test string',
        dunningLetterDateTimeCondition: 'test string',
        project: 'test string',
        expandApplications: true,
        expandDunningInformation: true,
        expandAttachments: true,
        expandTaxDetails: true,
        expandInvoiceAddress: true,
        financialPeriod: 'test string',
        documentDueDate: 'test string',
        documentDueDateCondition: 'test string',
        status: 'test string',
        numberToRead: 123,
        skipRecords: 123,
        externalReference: 'test string',
        paymentReference: 'test string',
        customerRefNumber: 'test string',
        customer: 'test string',
        branch: 'test string',
        documentDate: 'test string',
        documentDateCondition: 'test string',
        greaterThanValue: 'test string',
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        createdDateTime: 'test string',
        createdDateTimeCondition: 'test string',
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerGetAllInvoicesForCustomerBycustomerNumberRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->creditTerms->description->toBe('String value')
        ->documentDueDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->cashDiscountDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->externalReference->toBe('String value')
        ->isRotRutDeductible->toBe(true)
        ->exchangeRate->toBe(42)
        ->dunningLetterDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->dunningLetterLevel->toBe(42)
        ->contact->name->toBe('String value')
        ->sendToAutoInvoice->toBe(true)
        ->roundingDiff->toBe(42)
        ->customerVatZone->description->toBe('String value')
        ->startDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->endDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->accountingCostRef->toBe('String value')
        ->originatorDocRef->toBe('String value')
        ->contractDocRef->toBe('String value')
        ->childRecord->number->toBe('String value')
        ->childRecord->name->toBe('String value')
        ->directDebitMandate->mandateId->toBe('mock-id-123')
        ->directDebitMandate->mandateDescription->toBe('String value')
        ->excludeDebtCollection->toBe(true)
        ->debtCollection->caseNumber->toBe('String value')
        ->debtCollection->caseType->toBe('String value')
        ->debtCollection->caseStatus->toBe('String value')
        ->debtCollection->caseUrl->toBe('String value')
        ->timeStamp->toBe('String value')
        ->hold->toBe(true)
        ->discountTotal->toBe(42)
        ->discountTotalInCurrency->toBe(42)
        ->detailTotal->toBe(42)
        ->detailTotalInCurrency->toBe(42)
        ->vatTaxableTotal->toBe(42)
        ->vatTaxableTotalInCurrency->toBe(42)
        ->vatExemptTotal->toBe(42)
        ->vatExemptTotalInCurrency->toBe(42)
        ->salesPersonId->toBe(42)
        ->salesPersonDescr->toBe('String value')
        ->salesPerson->description->toBe('String value')
        ->paymentReference->toBe('String value')
        ->invoiceAddress->addressId->toBe(42)
        ->invoiceAddress->addressLine1->toBe('String value')
        ->invoiceAddress->addressLine2->toBe('String value')
        ->invoiceAddress->addressLine3->toBe('String value')
        ->invoiceAddress->postalCode->toBe('String value')
        ->invoiceAddress->city->toBe('String value')
        ->invoiceAddress->country->name->toBe('String value')
        ->invoiceAddress->country->errorInfo->toBe('String value')
        ->invoiceAddress->county->name->toBe('String value')
        ->invoiceAddress->overrideAddress->toBe(true)
        ->invoiceContact->contactId->toBe(42)
        ->invoiceContact->businessName->toBe('String value')
        ->invoiceContact->attention->toBe('String value')
        ->invoiceContact->email->toBe('test@example.com')
        ->invoiceContact->phone1->toBe('String value')
        ->invoiceContact->overrideContact->toBe(true)
        ->dontPrint->toBe(true)
        ->dontEmail->toBe(true)
        ->revoked->toBe(true)
        ->customer->number->toBe('String value')
        ->customer->name->toBe('String value')
        ->documentType->toBe('String value')
        ->referenceNumber->toBe('String value')
        ->postPeriod->toBe('String value')
        ->financialPeriod->toBe('String value')
        ->closedFinancialPeriod->toBe('String value')
        ->documentDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->origInvoiceDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->status->toBe('String value')
        ->currencyId->toBe('mock-id-123')
        ->amount->toBe(42)
        ->amountInCurrency->toBe(42)
        ->balance->toBe(42)
        ->balanceInCurrency->toBe(42)
        ->cashDiscount->toBe(42)
        ->cashDiscountInCurrency->toBe(42)
        ->paymentMethod->description->toBe('String value')
        ->customerRefNumber->toBe('String value')
        ->invoiceText->toBe('String value')
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->createdDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->note->toBe('String value')
        ->vatTotal->toBe(42)
        ->vatTotalInCurrency->toBe(42)
        ->location->countryId->toBe('mock-id-123')
        ->location->name->toBe('String value')
        ->branchNumber->number->toBe('String value')
        ->branchNumber->name->toBe('String value')
        ->cashAccount->toBe('String value')
        ->project->internalId->toBe(42)
        ->project->description->toBe('String value')
        ->account->type->toBe('String value')
        ->account->externalCode1->toBe('String value')
        ->account->externalCode2->toBe('String value')
        ->account->active->toBe(true)
        ->account->number->toBe('String value')
        ->account->description->toBe('String value')
        ->subaccount->subaccountNumber->toBe('String value')
        ->subaccount->subaccountId->toBe(42)
        ->subaccount->description->toBe('String value')
        ->subaccount->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->subaccount->active->toBe(true)
        ->subaccount->timeStamp->toBe('String value')
        ->subaccount->errorInfo->toBe('String value')
        ->customerProject->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the customerGetAllCashSalesForCustomerBycustomerNumberRequest method in the Customer resource', function () {
    Saloon::fake([
        CustomerGetAllCashSalesForCustomerBycustomerNumberRequest::class => MockResponse::make([
            'creditTerms' => [
                'description' => 'String value',
            ],
            'cashSaleLines' => [],
            'timeStamp' => 'String value',
            'hold' => true,
            'discountTotal' => 42,
            'discountTotalInCurrency' => 42,
            'detailTotal' => 42,
            'detailTotalInCurrency' => 42,
            'vatTaxableTotal' => 42,
            'vatTaxableTotalInCurrency' => 42,
            'vatExemptTotal' => 42,
            'vatExemptTotalInCurrency' => 42,
            'salesPersonId' => 42,
            'salesPersonDescr' => 'String value',
            'salesPerson' => [
                'description' => 'String value',
            ],
            'paymentReference' => 'String value',
            'invoiceAddress' => [
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
                'overrideAddress' => true,
            ],
            'invoiceContact' => [
                'contactId' => 42,
                'businessName' => 'String value',
                'attention' => 'String value',
                'email' => 'test@example.com',
                'phone1' => 'String value',
                'overrideContact' => true,
            ],
            'applications' => [],
            'dontPrint' => true,
            'dontEmail' => true,
            'revoked' => true,
            'customer' => [
                'number' => 'String value',
                'name' => 'String value',
            ],
            'documentType' => 'String value',
            'referenceNumber' => 'String value',
            'postPeriod' => 'String value',
            'financialPeriod' => 'String value',
            'closedFinancialPeriod' => 'String value',
            'documentDate' => '2025-11-22T10:40:04+00:00',
            'origInvoiceDate' => '2025-11-22T10:40:04+00:00',
            'status' => 'String value',
            'currencyId' => 'mock-id-123',
            'amount' => 42,
            'amountInCurrency' => 42,
            'balance' => 42,
            'balanceInCurrency' => 42,
            'cashDiscount' => 42,
            'cashDiscountInCurrency' => 42,
            'paymentMethod' => [
                'description' => 'String value',
            ],
            'customerRefNumber' => 'String value',
            'invoiceText' => 'String value',
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'createdDateTime' => '2025-11-22T10:40:04+00:00',
            'note' => 'String value',
            'vatTotal' => 42,
            'vatTotalInCurrency' => 42,
            'location' => [
                'countryId' => 'mock-id-123',
                'name' => 'String value',
            ],
            'branchNumber' => [
                'number' => 'String value',
                'name' => 'String value',
            ],
            'cashAccount' => 'String value',
            'project' => [
                'internalId' => 42,
                'description' => 'String value',
            ],
            'account' => [
                'type' => 'String value',
                'externalCode1' => 'String value',
                'externalCode2' => 'String value',
                'active' => true,
                'number' => 'String value',
                'description' => 'String value',
            ],
            'subaccount' => [
                'subaccountNumber' => 'String value',
                'subaccountId' => 42,
                'description' => 'String value',
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'active' => true,
                'segments' => [],
                'timeStamp' => 'String value',
                'errorInfo' => 'String value',
            ],
            'customerProject' => 'String value',
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new CustomerGetAllCashSalesForCustomerBycustomerNumberRequest(
        customerNumber: 'test string',
        documentType: 'test string',
        released: 123,
        dunningLevel: 123,
        closedFinancialPeriod: 'test string',
        dunningLetterDateTime: 'test string',
        dunningLetterDateTimeCondition: 'test string',
        project: 'test string',
        expandApplications: true,
        expandDunningInformation: true,
        expandAttachments: true,
        expandTaxDetails: true,
        expandInvoiceAddress: true,
        financialPeriod: 'test string',
        documentDueDate: 'test string',
        documentDueDateCondition: 'test string',
        status: 'test string',
        numberToRead: 123,
        skipRecords: 123,
        externalReference: 'test string',
        paymentReference: 'test string',
        customerRefNumber: 'test string',
        customer: 'test string',
        branch: 'test string',
        documentDate: 'test string',
        documentDateCondition: 'test string',
        greaterThanValue: 'test string',
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        createdDateTime: 'test string',
        createdDateTimeCondition: 'test string',
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerGetAllCashSalesForCustomerBycustomerNumberRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->creditTerms->description->toBe('String value')
        ->timeStamp->toBe('String value')
        ->hold->toBe(true)
        ->discountTotal->toBe(42)
        ->discountTotalInCurrency->toBe(42)
        ->detailTotal->toBe(42)
        ->detailTotalInCurrency->toBe(42)
        ->vatTaxableTotal->toBe(42)
        ->vatTaxableTotalInCurrency->toBe(42)
        ->vatExemptTotal->toBe(42)
        ->vatExemptTotalInCurrency->toBe(42)
        ->salesPersonId->toBe(42)
        ->salesPersonDescr->toBe('String value')
        ->salesPerson->description->toBe('String value')
        ->paymentReference->toBe('String value')
        ->invoiceAddress->addressId->toBe(42)
        ->invoiceAddress->addressLine1->toBe('String value')
        ->invoiceAddress->addressLine2->toBe('String value')
        ->invoiceAddress->addressLine3->toBe('String value')
        ->invoiceAddress->postalCode->toBe('String value')
        ->invoiceAddress->city->toBe('String value')
        ->invoiceAddress->country->name->toBe('String value')
        ->invoiceAddress->country->errorInfo->toBe('String value')
        ->invoiceAddress->county->name->toBe('String value')
        ->invoiceAddress->overrideAddress->toBe(true)
        ->invoiceContact->contactId->toBe(42)
        ->invoiceContact->businessName->toBe('String value')
        ->invoiceContact->attention->toBe('String value')
        ->invoiceContact->email->toBe('test@example.com')
        ->invoiceContact->phone1->toBe('String value')
        ->invoiceContact->overrideContact->toBe(true)
        ->dontPrint->toBe(true)
        ->dontEmail->toBe(true)
        ->revoked->toBe(true)
        ->customer->number->toBe('String value')
        ->customer->name->toBe('String value')
        ->documentType->toBe('String value')
        ->referenceNumber->toBe('String value')
        ->postPeriod->toBe('String value')
        ->financialPeriod->toBe('String value')
        ->closedFinancialPeriod->toBe('String value')
        ->documentDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->origInvoiceDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->status->toBe('String value')
        ->currencyId->toBe('mock-id-123')
        ->amount->toBe(42)
        ->amountInCurrency->toBe(42)
        ->balance->toBe(42)
        ->balanceInCurrency->toBe(42)
        ->cashDiscount->toBe(42)
        ->cashDiscountInCurrency->toBe(42)
        ->paymentMethod->description->toBe('String value')
        ->customerRefNumber->toBe('String value')
        ->invoiceText->toBe('String value')
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->createdDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->note->toBe('String value')
        ->vatTotal->toBe(42)
        ->vatTotalInCurrency->toBe(42)
        ->location->countryId->toBe('mock-id-123')
        ->location->name->toBe('String value')
        ->branchNumber->number->toBe('String value')
        ->branchNumber->name->toBe('String value')
        ->cashAccount->toBe('String value')
        ->project->internalId->toBe(42)
        ->project->description->toBe('String value')
        ->account->type->toBe('String value')
        ->account->externalCode1->toBe('String value')
        ->account->externalCode2->toBe('String value')
        ->account->active->toBe(true)
        ->account->number->toBe('String value')
        ->account->description->toBe('String value')
        ->subaccount->subaccountNumber->toBe('String value')
        ->subaccount->subaccountId->toBe(42)
        ->subaccount->description->toBe('String value')
        ->subaccount->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->subaccount->active->toBe(true)
        ->subaccount->timeStamp->toBe('String value')
        ->subaccount->errorInfo->toBe('String value')
        ->customerProject->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the customerGetAllDocumentsForCustomerBycustomerNumberRequest method in the Customer resource', function () {
    Saloon::fake([
        CustomerGetAllDocumentsForCustomerBycustomerNumberRequest::class => MockResponse::make([
            'documentDueDate' => '2025-11-22T10:40:04+00:00',
            'branch' => [
                'number' => 'String value',
                'name' => 'String value',
            ],
            'customer' => [
                'number' => 'String value',
                'name' => 'String value',
            ],
            'documentType' => 'String value',
            'referenceNumber' => 'String value',
            'postPeriod' => 'String value',
            'financialPeriod' => 'String value',
            'closedFinancialPeriod' => 'String value',
            'documentDate' => '2025-11-22T10:40:04+00:00',
            'origInvoiceDate' => '2025-11-22T10:40:04+00:00',
            'status' => 'String value',
            'currencyId' => 'mock-id-123',
            'amount' => 42,
            'amountInCurrency' => 42,
            'balance' => 42,
            'balanceInCurrency' => 42,
            'cashDiscount' => 42,
            'cashDiscountInCurrency' => 42,
            'paymentMethod' => [
                'description' => 'String value',
            ],
            'customerRefNumber' => 'String value',
            'invoiceText' => 'String value',
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'createdDateTime' => '2025-11-22T10:40:04+00:00',
            'note' => 'String value',
            'vatTotal' => 42,
            'vatTotalInCurrency' => 42,
            'location' => [
                'countryId' => 'mock-id-123',
                'name' => 'String value',
            ],
            'branchNumber' => [
                'number' => 'String value',
                'name' => 'String value',
            ],
            'cashAccount' => 'String value',
            'project' => [
                'internalId' => 42,
                'description' => 'String value',
            ],
            'account' => [
                'type' => 'String value',
                'externalCode1' => 'String value',
                'externalCode2' => 'String value',
                'active' => true,
                'number' => 'String value',
                'description' => 'String value',
            ],
            'subaccount' => [
                'subaccountNumber' => 'String value',
                'subaccountId' => 42,
                'description' => 'String value',
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'active' => true,
                'segments' => [],
                'timeStamp' => 'String value',
                'errorInfo' => 'String value',
            ],
            'customerProject' => 'String value',
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new CustomerGetAllDocumentsForCustomerBycustomerNumberRequest(
        customerNumber: 'test string',
        documentType: 'test string',
        released: 123,
        dunningLevel: 123,
        closedFinancialPeriod: 'test string',
        dunningLetterDateTime: 'test string',
        dunningLetterDateTimeCondition: 'test string',
        project: 'test string',
        expandApplications: true,
        expandDunningInformation: true,
        expandAttachments: true,
        expandTaxDetails: true,
        expandInvoiceAddress: true,
        financialPeriod: 'test string',
        documentDueDate: 'test string',
        documentDueDateCondition: 'test string',
        status: 'test string',
        numberToRead: 123,
        skipRecords: 123,
        externalReference: 'test string',
        paymentReference: 'test string',
        customerRefNumber: 'test string',
        customer: 'test string',
        branch: 'test string',
        documentDate: 'test string',
        documentDateCondition: 'test string',
        greaterThanValue: 'test string',
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        createdDateTime: 'test string',
        createdDateTimeCondition: 'test string',
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerGetAllDocumentsForCustomerBycustomerNumberRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->documentDueDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->branch->number->toBe('String value')
        ->branch->name->toBe('String value')
        ->customer->number->toBe('String value')
        ->customer->name->toBe('String value')
        ->documentType->toBe('String value')
        ->referenceNumber->toBe('String value')
        ->postPeriod->toBe('String value')
        ->financialPeriod->toBe('String value')
        ->closedFinancialPeriod->toBe('String value')
        ->documentDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->origInvoiceDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->status->toBe('String value')
        ->currencyId->toBe('mock-id-123')
        ->amount->toBe(42)
        ->amountInCurrency->toBe(42)
        ->balance->toBe(42)
        ->balanceInCurrency->toBe(42)
        ->cashDiscount->toBe(42)
        ->cashDiscountInCurrency->toBe(42)
        ->paymentMethod->description->toBe('String value')
        ->customerRefNumber->toBe('String value')
        ->invoiceText->toBe('String value')
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->createdDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->note->toBe('String value')
        ->vatTotal->toBe(42)
        ->vatTotalInCurrency->toBe(42)
        ->location->countryId->toBe('mock-id-123')
        ->location->name->toBe('String value')
        ->branchNumber->number->toBe('String value')
        ->branchNumber->name->toBe('String value')
        ->cashAccount->toBe('String value')
        ->project->internalId->toBe(42)
        ->project->description->toBe('String value')
        ->account->type->toBe('String value')
        ->account->externalCode1->toBe('String value')
        ->account->externalCode2->toBe('String value')
        ->account->active->toBe(true)
        ->account->number->toBe('String value')
        ->account->description->toBe('String value')
        ->subaccount->subaccountNumber->toBe('String value')
        ->subaccount->subaccountId->toBe(42)
        ->subaccount->description->toBe('String value')
        ->subaccount->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->subaccount->active->toBe(true)
        ->subaccount->timeStamp->toBe('String value')
        ->subaccount->errorInfo->toBe('String value')
        ->customerProject->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the customerCreateDunningLetterActionBycustomerRequest method in the Customer resource', function () {
    $bodyData = new CreateDunningLetterActionDto(
        dunningLetterDate: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        levelFrom: 42,
        levelTo: 42
    );

    Saloon::fake([
        CustomerCreateDunningLetterActionBycustomerRequest::class => MockResponse::make([], 201),
    ]);

    $request = new CustomerCreateDunningLetterActionBycustomerRequest(
        customer: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerCreateDunningLetterActionBycustomerRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the customerChangeCustomerNrActionByinternalIdRequest method in the Customer resource', function () {
    $bodyData = new ChangeCustomerCdActionDto(
        customerCd: 'String value'
    );

    Saloon::fake([
        CustomerChangeCustomerNrActionByinternalIdRequest::class => MockResponse::make([], 201),
    ]);

    $request = new CustomerChangeCustomerNrActionByinternalIdRequest(
        internalId: 123,
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerChangeCustomerNrActionByinternalIdRequest::class);

    expect($response->status())->toBe(201);
});
