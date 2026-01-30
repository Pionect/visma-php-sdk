<?php

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

    expect($collection)->toBeArray()
        ->and($collection)->toHaveCount(2);

    $firstItem = $collection[0];

    expect($firstItem)
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
            'customer' => null,
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
        ->customer->toBeNull()
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
            'address' => null,
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
        ->address->toBeNull()
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
                'customer' => null,
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
                'customer' => null,
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

    expect($collection)->toBeArray()
        ->and($collection)->toHaveCount(2);

    $firstItem = $collection[0];

    expect($firstItem)
        ->customer->toBeNull()
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
            'mainAddress' => null,
            'mainContact' => null,
            'accountReference' => 'String value',
            'parentRecord' => null,
            'customerClass' => null,
            'creditTerms' => null,
            'currencyId' => 'mock-id-123',
            'creditVerification' => 'String value',
            'creditLimit' => 42,
            'creditDaysPastDue' => 42,
            'invoiceAddress' => null,
            'invoiceContact' => null,
            'printInvoices' => true,
            'acceptAutoInvoices' => true,
            'sendInvoicesByEmail' => true,
            'sendDunningLettersViaEmail' => true,
            'printDunningLetters' => true,
            'printStatements' => true,
            'sendStatementsByEmail' => true,
            'printMultiCurrencyStatements' => true,
            'statementType' => 'String value',
            'deliveryAddress' => null,
            'deliveryContact' => null,
            'vatRegistrationId' => 'mock-id-123',
            'corporateId' => 'mock-id-123',
            'gln' => 'String value',
            'vatZone' => null,
            'location' => null,
            'attributes' => [],
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'createdDateTime' => '2025-11-22T10:40:04+00:00',
            'directDebitLines' => [],
            'priceClass' => null,
            'glAccounts' => null,
            'invoiceToDefaultLocation' => true,
            'eInvoiceContract' => null,
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
        ->mainAddress->toBeNull()
        ->mainContact->toBeNull()
        ->accountReference->toBe('String value')
        ->parentRecord->toBeNull()
        ->customerClass->toBeNull()
        ->creditTerms->toBeNull()
        ->currencyId->toBe('mock-id-123')
        ->creditVerification->toBe('String value')
        ->creditLimit->toBe(42)
        ->creditDaysPastDue->toBe(42)
        ->invoiceAddress->toBeNull()
        ->invoiceContact->toBeNull()
        ->printInvoices->toBe(true)
        ->acceptAutoInvoices->toBe(true)
        ->sendInvoicesByEmail->toBe(true)
        ->sendDunningLettersViaEmail->toBe(true)
        ->printDunningLetters->toBe(true)
        ->printStatements->toBe(true)
        ->sendStatementsByEmail->toBe(true)
        ->printMultiCurrencyStatements->toBe(true)
        ->statementType->toBe('String value')
        ->deliveryAddress->toBeNull()
        ->deliveryContact->toBeNull()
        ->vatRegistrationId->toBe('mock-id-123')
        ->corporateId->toBe('mock-id-123')
        ->gln->toBe('String value')
        ->vatZone->toBeNull()
        ->location->toBeNull()
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->createdDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->priceClass->toBeNull()
        ->glAccounts->toBeNull()
        ->invoiceToDefaultLocation->toBe(true)
        ->eInvoiceContract->toBeNull()
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
            'mainAddress' => null,
            'mainContact' => null,
            'accountReference' => 'String value',
            'parentRecord' => null,
            'customerClass' => null,
            'creditTerms' => null,
            'currencyId' => 'mock-id-123',
            'creditVerification' => 'String value',
            'creditLimit' => 42,
            'creditDaysPastDue' => 42,
            'invoiceAddress' => null,
            'invoiceContact' => null,
            'printInvoices' => true,
            'acceptAutoInvoices' => true,
            'sendInvoicesByEmail' => true,
            'sendDunningLettersViaEmail' => true,
            'printDunningLetters' => true,
            'printStatements' => true,
            'sendStatementsByEmail' => true,
            'printMultiCurrencyStatements' => true,
            'statementType' => 'String value',
            'deliveryAddress' => null,
            'deliveryContact' => null,
            'vatRegistrationId' => 'mock-id-123',
            'corporateId' => 'mock-id-123',
            'gln' => 'String value',
            'vatZone' => null,
            'location' => null,
            'attributes' => [],
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'createdDateTime' => '2025-11-22T10:40:04+00:00',
            'directDebitLines' => [],
            'priceClass' => null,
            'glAccounts' => null,
            'invoiceToDefaultLocation' => true,
            'eInvoiceContract' => null,
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
        ->mainAddress->toBeNull()
        ->mainContact->toBeNull()
        ->accountReference->toBe('String value')
        ->parentRecord->toBeNull()
        ->customerClass->toBeNull()
        ->creditTerms->toBeNull()
        ->currencyId->toBe('mock-id-123')
        ->creditVerification->toBe('String value')
        ->creditLimit->toBe(42)
        ->creditDaysPastDue->toBe(42)
        ->invoiceAddress->toBeNull()
        ->invoiceContact->toBeNull()
        ->printInvoices->toBe(true)
        ->acceptAutoInvoices->toBe(true)
        ->sendInvoicesByEmail->toBe(true)
        ->sendDunningLettersViaEmail->toBe(true)
        ->printDunningLetters->toBe(true)
        ->printStatements->toBe(true)
        ->sendStatementsByEmail->toBe(true)
        ->printMultiCurrencyStatements->toBe(true)
        ->statementType->toBe('String value')
        ->deliveryAddress->toBeNull()
        ->deliveryContact->toBeNull()
        ->vatRegistrationId->toBe('mock-id-123')
        ->corporateId->toBe('mock-id-123')
        ->gln->toBe('String value')
        ->vatZone->toBeNull()
        ->location->toBeNull()
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->createdDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->priceClass->toBeNull()
        ->glAccounts->toBeNull()
        ->invoiceToDefaultLocation->toBe(true)
        ->eInvoiceContract->toBeNull()
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
                'mainAddress' => null,
                'mainContact' => null,
                'accountReference' => 'String value',
                'parentRecord' => null,
                'customerClass' => null,
                'creditTerms' => null,
                'currencyId' => 'mock-id-123',
                'creditVerification' => 'String value',
                'creditLimit' => 42,
                'creditDaysPastDue' => 42,
                'invoiceAddress' => null,
                'invoiceContact' => null,
                'printInvoices' => true,
                'acceptAutoInvoices' => true,
                'sendInvoicesByEmail' => true,
                'sendDunningLettersViaEmail' => true,
                'printDunningLetters' => true,
                'printStatements' => true,
                'sendStatementsByEmail' => true,
                'printMultiCurrencyStatements' => true,
                'statementType' => 'String value',
                'deliveryAddress' => null,
                'deliveryContact' => null,
                'vatRegistrationId' => 'mock-id-123',
                'corporateId' => 'mock-id-123',
                'gln' => 'String value',
                'vatZone' => null,
                'location' => null,
                'attributes' => [],
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'createdDateTime' => '2025-11-22T10:40:04+00:00',
                'directDebitLines' => [],
                'priceClass' => null,
                'glAccounts' => null,
                'invoiceToDefaultLocation' => true,
                'eInvoiceContract' => null,
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
                'mainAddress' => null,
                'mainContact' => null,
                'accountReference' => 'String value',
                'parentRecord' => null,
                'customerClass' => null,
                'creditTerms' => null,
                'currencyId' => 'mock-id-123',
                'creditVerification' => 'String value',
                'creditLimit' => 42,
                'creditDaysPastDue' => 42,
                'invoiceAddress' => null,
                'invoiceContact' => null,
                'printInvoices' => true,
                'acceptAutoInvoices' => true,
                'sendInvoicesByEmail' => true,
                'sendDunningLettersViaEmail' => true,
                'printDunningLetters' => true,
                'printStatements' => true,
                'sendStatementsByEmail' => true,
                'printMultiCurrencyStatements' => true,
                'statementType' => 'String value',
                'deliveryAddress' => null,
                'deliveryContact' => null,
                'vatRegistrationId' => 'mock-id-123',
                'corporateId' => 'mock-id-123',
                'gln' => 'String value',
                'vatZone' => null,
                'location' => null,
                'attributes' => [],
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'createdDateTime' => '2025-11-22T10:40:04+00:00',
                'directDebitLines' => [],
                'priceClass' => null,
                'glAccounts' => null,
                'invoiceToDefaultLocation' => true,
                'eInvoiceContract' => null,
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

    expect($collection)->toBeArray()
        ->and($collection)->toHaveCount(2);

    $firstItem = $collection[0];

    expect($firstItem)
        ->internalId->toBe(42)
        ->number->toBe('String value')
        ->name->toBe('String value')
        ->status->toBe('String value')
        ->mainAddress->toBeNull()
        ->mainContact->toBeNull()
        ->accountReference->toBe('String value')
        ->parentRecord->toBeNull()
        ->customerClass->toBeNull()
        ->creditTerms->toBeNull()
        ->currencyId->toBe('mock-id-123')
        ->creditVerification->toBe('String value')
        ->creditLimit->toBe(42)
        ->creditDaysPastDue->toBe(42)
        ->invoiceAddress->toBeNull()
        ->invoiceContact->toBeNull()
        ->printInvoices->toBe(true)
        ->acceptAutoInvoices->toBe(true)
        ->sendInvoicesByEmail->toBe(true)
        ->sendDunningLettersViaEmail->toBe(true)
        ->printDunningLetters->toBe(true)
        ->printStatements->toBe(true)
        ->sendStatementsByEmail->toBe(true)
        ->printMultiCurrencyStatements->toBe(true)
        ->statementType->toBe('String value')
        ->deliveryAddress->toBeNull()
        ->deliveryContact->toBeNull()
        ->vatRegistrationId->toBe('mock-id-123')
        ->corporateId->toBe('mock-id-123')
        ->gln->toBe('String value')
        ->vatZone->toBeNull()
        ->location->toBeNull()
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->createdDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->priceClass->toBeNull()
        ->glAccounts->toBeNull()
        ->invoiceToDefaultLocation->toBe(true)
        ->eInvoiceContract->toBeNull()
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
            'creditTerms' => null,
            'documentDueDate' => '2025-11-22T10:40:04+00:00',
            'cashDiscountDate' => '2025-11-22T10:40:04+00:00',
            'externalReference' => 'String value',
            'isRotRutDeductible' => true,
            'exchangeRate' => 42,
            'dunningLetterDate' => '2025-11-22T10:40:04+00:00',
            'dunningLetterLevel' => 42,
            'contact' => null,
            'attachments' => [],
            'taxDetails' => [],
            'invoiceLines' => [],
            'sendToAutoInvoice' => true,
            'roundingDiff' => 42,
            'customerVatZone' => null,
            'startDate' => '2025-11-22T10:40:04+00:00',
            'endDate' => '2025-11-22T10:40:04+00:00',
            'accountingCostRef' => 'String value',
            'originatorDocRef' => 'String value',
            'contractDocRef' => 'String value',
            'childRecord' => null,
            'directDebitMandate' => null,
            'excludeDebtCollection' => true,
            'debtCollection' => null,
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
            'salesPerson' => null,
            'paymentReference' => 'String value',
            'invoiceAddress' => null,
            'invoiceContact' => null,
            'applications' => [],
            'dontPrint' => true,
            'dontEmail' => true,
            'revoked' => true,
            'customer' => null,
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
            'paymentMethod' => null,
            'customerRefNumber' => 'String value',
            'invoiceText' => 'String value',
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'createdDateTime' => '2025-11-22T10:40:04+00:00',
            'note' => 'String value',
            'vatTotal' => 42,
            'vatTotalInCurrency' => 42,
            'location' => null,
            'branchNumber' => null,
            'cashAccount' => 'String value',
            'project' => null,
            'account' => null,
            'subaccount' => null,
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
        ->creditTerms->toBeNull()
        ->documentDueDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->cashDiscountDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->externalReference->toBe('String value')
        ->isRotRutDeductible->toBe(true)
        ->exchangeRate->toBe(42)
        ->dunningLetterDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->dunningLetterLevel->toBe(42)
        ->contact->toBeNull()
        ->sendToAutoInvoice->toBe(true)
        ->roundingDiff->toBe(42)
        ->customerVatZone->toBeNull()
        ->startDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->endDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->accountingCostRef->toBe('String value')
        ->originatorDocRef->toBe('String value')
        ->contractDocRef->toBe('String value')
        ->childRecord->toBeNull()
        ->directDebitMandate->toBeNull()
        ->excludeDebtCollection->toBe(true)
        ->debtCollection->toBeNull()
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
        ->salesPerson->toBeNull()
        ->paymentReference->toBe('String value')
        ->invoiceAddress->toBeNull()
        ->invoiceContact->toBeNull()
        ->dontPrint->toBe(true)
        ->dontEmail->toBe(true)
        ->revoked->toBe(true)
        ->customer->toBeNull()
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
        ->paymentMethod->toBeNull()
        ->customerRefNumber->toBe('String value')
        ->invoiceText->toBe('String value')
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->createdDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->note->toBe('String value')
        ->vatTotal->toBe(42)
        ->vatTotalInCurrency->toBe(42)
        ->location->toBeNull()
        ->branchNumber->toBeNull()
        ->cashAccount->toBe('String value')
        ->project->toBeNull()
        ->account->toBeNull()
        ->subaccount->toBeNull()
        ->customerProject->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the customerGetAllCashSalesForCustomerBycustomerNumberRequest method in the Customer resource', function () {
    Saloon::fake([
        CustomerGetAllCashSalesForCustomerBycustomerNumberRequest::class => MockResponse::make([
            'creditTerms' => null,
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
            'salesPerson' => null,
            'paymentReference' => 'String value',
            'invoiceAddress' => null,
            'invoiceContact' => null,
            'applications' => [],
            'dontPrint' => true,
            'dontEmail' => true,
            'revoked' => true,
            'customer' => null,
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
            'paymentMethod' => null,
            'customerRefNumber' => 'String value',
            'invoiceText' => 'String value',
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'createdDateTime' => '2025-11-22T10:40:04+00:00',
            'note' => 'String value',
            'vatTotal' => 42,
            'vatTotalInCurrency' => 42,
            'location' => null,
            'branchNumber' => null,
            'cashAccount' => 'String value',
            'project' => null,
            'account' => null,
            'subaccount' => null,
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
        ->creditTerms->toBeNull()
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
        ->salesPerson->toBeNull()
        ->paymentReference->toBe('String value')
        ->invoiceAddress->toBeNull()
        ->invoiceContact->toBeNull()
        ->dontPrint->toBe(true)
        ->dontEmail->toBe(true)
        ->revoked->toBe(true)
        ->customer->toBeNull()
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
        ->paymentMethod->toBeNull()
        ->customerRefNumber->toBe('String value')
        ->invoiceText->toBe('String value')
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->createdDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->note->toBe('String value')
        ->vatTotal->toBe(42)
        ->vatTotalInCurrency->toBe(42)
        ->location->toBeNull()
        ->branchNumber->toBeNull()
        ->cashAccount->toBe('String value')
        ->project->toBeNull()
        ->account->toBeNull()
        ->subaccount->toBeNull()
        ->customerProject->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the customerGetAllDocumentsForCustomerBycustomerNumberRequest method in the Customer resource', function () {
    Saloon::fake([
        CustomerGetAllDocumentsForCustomerBycustomerNumberRequest::class => MockResponse::make([
            'documentDueDate' => '2025-11-22T10:40:04+00:00',
            'branch' => null,
            'customer' => null,
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
            'paymentMethod' => null,
            'customerRefNumber' => 'String value',
            'invoiceText' => 'String value',
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'createdDateTime' => '2025-11-22T10:40:04+00:00',
            'note' => 'String value',
            'vatTotal' => 42,
            'vatTotalInCurrency' => 42,
            'location' => null,
            'branchNumber' => null,
            'cashAccount' => 'String value',
            'project' => null,
            'account' => null,
            'subaccount' => null,
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
        ->branch->toBeNull()
        ->customer->toBeNull()
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
        ->paymentMethod->toBeNull()
        ->customerRefNumber->toBe('String value')
        ->invoiceText->toBe('String value')
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->createdDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->note->toBe('String value')
        ->vatTotal->toBe(42)
        ->vatTotalInCurrency->toBe(42)
        ->location->toBeNull()
        ->branchNumber->toBeNull()
        ->cashAccount->toBe('String value')
        ->project->toBeNull()
        ->account->toBeNull()
        ->subaccount->toBeNull()
        ->customerProject->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the customerCreateDunningLetterActionBycustomerRequest method in the Customer resource', function () {
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
