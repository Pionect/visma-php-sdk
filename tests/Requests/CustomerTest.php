<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\Customer\CustomerChangeCustomerNrActionByinternalIdRequest;
use Pionect\VismaSdk\Requests\Customer\CustomerCreateDunningLetterActionBycustomerRequest;
use Pionect\VismaSdk\Requests\Customer\CustomerGetAllCashSalesForCustomerBycustomerNumberRequest;
use Pionect\VismaSdk\Requests\Customer\CustomerGetAllCollectionRequest;
use Pionect\VismaSdk\Requests\Customer\CustomerGetAllContactsForCustomerBycustomerCdRequest;
use Pionect\VismaSdk\Requests\Customer\CustomerGetAllCustomerBalanceCollectionRequest;
use Pionect\VismaSdk\Requests\Customer\CustomerGetAllDocumentsForCustomerBycustomerNumberRequest;
use Pionect\VismaSdk\Requests\Customer\CustomerGetAllInvoicesForCustomerBycustomerNumberRequest;
use Pionect\VismaSdk\Requests\Customer\CustomerGetAllOrderForCustomerBycustomerCdRequest;
use Pionect\VismaSdk\Requests\Customer\CustomerGetAllSalesOrderBasicForCustomerBycustomerCdRequest;
use Pionect\VismaSdk\Requests\Customer\CustomerGetBycustomerCdRequest;
use Pionect\VismaSdk\Requests\Customer\CustomerGetByinternalIdRequest;
use Pionect\VismaSdk\Requests\Customer\CustomerGetCustomerBalanceBycustomerCdRequest;
use Pionect\VismaSdk\Requests\Customer\CustomerGetCustomerClassesCollectionRequest;
use Pionect\VismaSdk\Requests\Customer\CustomerGetCustomerDirectDebitBycustomerCdRequest;
use Pionect\VismaSdk\Requests\Customer\CustomerGetCustomerNoteBycustomerCdRequest;
use Pionect\VismaSdk\Requests\Customer\CustomerGetSalesPersonsForCustomerBycustomerCdRequest;
use Pionect\VismaSdk\Requests\Customer\CustomerGetSpecificCustomerClassBycustomerClassIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Http\Request;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the customerGetCustomerClassesCollection method in the Customer resource', function () {
    Saloon::fake([
        CustomerGetCustomerClassesCollectionRequest::class => MockResponse::make([
            'data' => [
                0 => [
                    'type' => 'customers',
                    'id' => 'mock-id-1',
                    'attributes' => [
                        'description' => 'Mock value',
                        'taxZoneId' => 'mock-id-123',
                        'requiredTaxzoneId' => true,
                        'paymentMethodId' => 'mock-id-123',
                        'attributes' => [],
                    ],
                ],
                1 => [
                    'type' => 'customers',
                    'id' => 'mock-id-2',
                    'attributes' => [
                        'description' => 'Mock value',
                        'taxZoneId' => 'mock-id-123',
                        'requiredTaxzoneId' => true,
                        'paymentMethodId' => 'mock-id-123',
                        'attributes' => [],
                    ],
                ],
            ],
        ], 200),
    ]);

    $request = (new CustomerGetCustomerClassesCollectionRequest);

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (CustomerGetCustomerClassesCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->description->toBe('Mock value')
        ->taxZoneId->toBe('mock-id-123')
        ->requiredTaxzoneId->toBe(true)
        ->paymentMethodId->toBe('mock-id-123');
});

it('calls the customerGetSpecificCustomerClassBycustomerClassId method in the Customer resource', function () {
    Saloon::fake([
        CustomerGetSpecificCustomerClassBycustomerClassIdRequest::class => MockResponse::make([
            'data' => [
                'type' => 'customers',
                'id' => 'mock-id-123',
                'attributes' => [
                    'description' => 'Mock value',
                    'taxZoneId' => 'mock-id-123',
                    'requiredTaxzoneId' => true,
                    'paymentMethodId' => 'mock-id-123',
                    'attributes' => [],
                ],
            ],
        ], 200),
    ]);

    $request = new CustomerGetSpecificCustomerClassBycustomerClassIdRequest(
        customerClassIdId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerGetSpecificCustomerClassBycustomerClassIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->description->toBe('Mock value')
        ->taxZoneId->toBe('mock-id-123')
        ->requiredTaxzoneId->toBe(true)
        ->paymentMethodId->toBe('mock-id-123');
});

it('calls the customerGetCustomerBalanceBycustomerCd method in the Customer resource', function () {
    Saloon::fake([
        CustomerGetCustomerBalanceBycustomerCdRequest::class => MockResponse::make([
            'data' => [
                'type' => 'customers',
                'id' => 'mock-id-123',
                'attributes' => [
                    'customer' => 'Mock value',
                    'balance' => 3.14,
                    'totalOrder' => 3.14,
                    'totalLoan' => 3.14,
                    'totalSalePeriod' => 3.14,
                    'totalSaleYear' => 3.14,
                    'totalDiscountPeriod' => 3.14,
                    'totalDiscountYear' => 3.14,
                    'lastModified' => '2025-11-22T10:40:04.065Z',
                ],
            ],
        ], 200),
    ]);

    $request = new CustomerGetCustomerBalanceBycustomerCdRequest(
        customerCdId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerGetCustomerBalanceBycustomerCdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->customer->toBe('Mock value')
        ->balance->toBe(3.14)
        ->totalOrder->toBe(3.14)
        ->totalLoan->toBe(3.14)
        ->totalSalePeriod->toBe(3.14)
        ->totalSaleYear->toBe(3.14)
        ->totalDiscountPeriod->toBe(3.14)
        ->totalDiscountYear->toBe(3.14)
        ->lastModified->toEqual(new Carbon('2025-11-22T10:40:04.065Z'));
});

it('calls the customerGetCustomerDirectDebitBycustomerCd method in the Customer resource', function () {
    Saloon::fake([
        CustomerGetCustomerDirectDebitBycustomerCdRequest::class => MockResponse::make([
            'data' => [
                'type' => 'customers',
                'id' => 'mock-id-123',
                'attributes' => [
                    'mandateId' => 'mock-id-123',
                    'mandateDescription' => 'Mock value',
                    'dateOfSignature' => '2025-11-22T10:40:04.065Z',
                    'isDefault' => true,
                    'oneTime' => '2025-11-22T10:40:04.065Z',
                    'bic' => 'Mock value',
                    'iban' => 'Mock value',
                    'lastCollectionDate' => '2025-11-22T10:40:04.065Z',
                    'maxAmount' => 3.14,
                    'expirationDate' => '2025-11-22T10:40:04.065Z',
                    'branch' => 'Mock value',
                ],
            ],
        ], 200),
    ]);

    $request = new CustomerGetCustomerDirectDebitBycustomerCdRequest(
        customerCdId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerGetCustomerDirectDebitBycustomerCdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->mandateId->toBe('mock-id-123')
        ->mandateDescription->toBe('Mock value')
        ->dateOfSignature->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->isDefault->toBe(true)
        ->oneTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->bic->toBe('Mock value')
        ->iban->toBe('Mock value')
        ->lastCollectionDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->maxAmount->toBe(3.14)
        ->expirationDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->branch->toBe('Mock value');
});

it('calls the customerGetAllOrderForCustomerBycustomerCd method in the Customer resource', function () {
    Saloon::fake([
        CustomerGetAllOrderForCustomerBycustomerCdRequest::class => MockResponse::make([
            'data' => [
                'type' => 'customers',
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

    $request = new CustomerGetAllOrderForCustomerBycustomerCdRequest(
        customerCdId: 'test string',
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

it('calls the customerGetAllSalesOrderBasicForCustomerBycustomerCd method in the Customer resource', function () {
    Saloon::fake([
        CustomerGetAllSalesOrderBasicForCustomerBycustomerCdRequest::class => MockResponse::make([
            'data' => [
                'type' => 'customers',
                'id' => 'mock-id-123',
                'attributes' => [
                    'lines' => [],
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

    $request = new CustomerGetAllSalesOrderBasicForCustomerBycustomerCdRequest(
        customerCdId: 'test string',
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

it('calls the customerGetAllContactsForCustomerBycustomerCd method in the Customer resource', function () {
    Saloon::fake([
        CustomerGetAllContactsForCustomerBycustomerCdRequest::class => MockResponse::make([
            'data' => [
                'type' => 'customers',
                'id' => 'mock-id-123',
                'attributes' => [
                    'displayName' => 'Mock value',
                    'active' => true,
                    'title' => 'Mock value',
                    'firstName' => 'Mock value',
                    'lastName' => 'Mock value',
                    'position' => 'Mock value',
                    'businessAccount' => 'Mock value',
                    'businessAccountType' => 'Mock value',
                    'sameAsAccount' => true,
                    'address' => 'Mock value',
                    'email' => 'test@example.com',
                    'web' => 'Mock value',
                    'phone1' => 'Mock value',
                    'phone2' => 'Mock value',
                    'phone3' => 'Mock value',
                    'fax' => 'Mock value',
                    'contactMethod' => 'Mock value',
                    'doNotCall' => true,
                    'doNotFax' => true,
                    'doNotEmail' => true,
                    'doNotMail' => true,
                    'noMassMail' => true,
                    'noMarketing' => true,
                    'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                    'contactId' => 42,
                    'timeStamp' => '2025-11-22T10:40:04.065Z',
                    'errorInfo' => 'Mock value',
                    'metadata' => 'Mock value',
                ],
            ],
        ], 200),
    ]);

    $request = new CustomerGetAllContactsForCustomerBycustomerCdRequest(
        customerCdId: 'test string',
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
        ->displayName->toBe('Mock value')
        ->active->toBe(true)
        ->title->toBe('Mock value')
        ->firstName->toBe('Mock value')
        ->lastName->toBe('Mock value')
        ->position->toBe('Mock value')
        ->businessAccount->toBe('Mock value')
        ->businessAccountType->toBe('Mock value')
        ->sameAsAccount->toBe(true)
        ->address->toBe('Mock value')
        ->email->toBe('test@example.com')
        ->web->toBe('Mock value')
        ->phone1->toBe('Mock value')
        ->phone2->toBe('Mock value')
        ->phone3->toBe('Mock value')
        ->fax->toBe('Mock value')
        ->contactMethod->toBe('Mock value')
        ->doNotCall->toBe(true)
        ->doNotFax->toBe(true)
        ->doNotEmail->toBe(true)
        ->doNotMail->toBe(true)
        ->noMassMail->toBe(true)
        ->noMarketing->toBe(true)
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->contactId->toBe(42)
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the customerGetSalesPersonsForCustomerBycustomerCd method in the Customer resource', function () {
    Saloon::fake([
        CustomerGetSalesPersonsForCustomerBycustomerCdRequest::class => MockResponse::make([
            'data' => [
                'type' => 'customers',
                'id' => 'mock-id-123',
                'attributes' => [
                    'salePersonId' => 'mock-id-123',
                    'name' => 'Mock value',
                    'locationId' => 'mock-id-123',
                    'locationName' => 'Mock value',
                    'commisionPct' => 3.14,
                    'isDefault' => true,
                    'errorInfo' => 'Mock value',
                    'metadata' => 'Mock value',
                ],
            ],
        ], 200),
    ]);

    $request = new CustomerGetSalesPersonsForCustomerBycustomerCdRequest(
        customerCdId: 'test string',
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
        ->name->toBe('Mock value')
        ->locationId->toBe('mock-id-123')
        ->locationName->toBe('Mock value')
        ->commisionPct->toBe(3.14)
        ->isDefault->toBe(true)
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the customerGetAllCustomerBalanceCollection method in the Customer resource', function () {
    Saloon::fake([
        CustomerGetAllCustomerBalanceCollectionRequest::class => MockResponse::make([
            'data' => [
                0 => [
                    'type' => 'customers',
                    'id' => 'mock-id-1',
                    'attributes' => [
                        'customer' => 'Mock value',
                        'balance' => 3.14,
                        'totalOrder' => 3.14,
                        'totalLoan' => 3.14,
                        'totalSalePeriod' => 3.14,
                        'totalSaleYear' => 3.14,
                        'totalDiscountPeriod' => 3.14,
                        'totalDiscountYear' => 3.14,
                        'lastModified' => '2025-11-22T10:40:04.065Z',
                    ],
                ],
                1 => [
                    'type' => 'customers',
                    'id' => 'mock-id-2',
                    'attributes' => [
                        'customer' => 'Mock value',
                        'balance' => 3.14,
                        'totalOrder' => 3.14,
                        'totalLoan' => 3.14,
                        'totalSalePeriod' => 3.14,
                        'totalSaleYear' => 3.14,
                        'totalDiscountPeriod' => 3.14,
                        'totalDiscountYear' => 3.14,
                        'lastModified' => '2025-11-22T10:40:04.065Z',
                    ],
                ],
            ],
        ], 200),
    ]);

    $request = (new CustomerGetAllCustomerBalanceCollectionRequest(greaterThanValue: 'test string', numberToRead: 123, skipRecords: 123, orderBy: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string'));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (CustomerGetAllCustomerBalanceCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->customer->toBe('Mock value')
        ->balance->toBe(3.14)
        ->totalOrder->toBe(3.14)
        ->totalLoan->toBe(3.14)
        ->totalSalePeriod->toBe(3.14)
        ->totalSaleYear->toBe(3.14)
        ->totalDiscountPeriod->toBe(3.14)
        ->totalDiscountYear->toBe(3.14)
        ->lastModified->toEqual(new Carbon('2025-11-22T10:40:04.065Z'));
});

it('calls the customerGetCustomerNoteBycustomerCd method in the Customer resource', function () {
    Saloon::fake([
        CustomerGetCustomerNoteBycustomerCdRequest::class => MockResponse::make([
            'data' => [
                'type' => 'customers',
                'id' => 'mock-id-123',
                'attributes' => [
                    'note' => 'Mock value',
                ],
            ],
        ], 200),
    ]);

    $request = new CustomerGetCustomerNoteBycustomerCdRequest(
        customerCdId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerGetCustomerNoteBycustomerCdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->note->toBe('Mock value');
});

it('calls the customerGetByinternalId method in the Customer resource', function () {
    Saloon::fake([
        CustomerGetByinternalIdRequest::class => MockResponse::make([
            'data' => [
                'type' => 'customers',
                'id' => 'mock-id-123',
                'attributes' => [
                    'internalId' => 42,
                    'number' => 'Mock value',
                    'name' => 'Mock value',
                    'status' => 'Mock value',
                    'mainAddress' => 'Mock value',
                    'mainContact' => 'Mock value',
                    'accountReference' => 'Mock value',
                    'parentRecord' => 'Mock value',
                    'customerClass' => 'Mock value',
                    'creditTerms' => 'Mock value',
                    'currencyId' => 'mock-id-123',
                    'creditVerification' => 'Mock value',
                    'creditLimit' => 3.14,
                    'creditDaysPastDue' => 42,
                    'invoiceAddress' => 'Mock value',
                    'invoiceContact' => 'Mock value',
                    'printInvoices' => true,
                    'acceptAutoInvoices' => true,
                    'sendInvoicesByEmail' => true,
                    'sendDunningLettersViaEmail' => true,
                    'printDunningLetters' => true,
                    'printStatements' => true,
                    'sendStatementsByEmail' => true,
                    'printMultiCurrencyStatements' => true,
                    'statementType' => 'Mock value',
                    'deliveryAddress' => 'Mock value',
                    'deliveryContact' => 'Mock value',
                    'vatRegistrationId' => 'mock-id-123',
                    'corporateId' => 'mock-id-123',
                    'gln' => 'Mock value',
                    'vatZone' => 'Mock value',
                    'location' => 'Mock value',
                    'attributes' => [],
                    'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                    'createdDateTime' => '2025-11-22T10:40:04.065Z',
                    'directDebitLines' => [],
                    'priceClass' => 'Mock value',
                    'glAccounts' => 'Mock value',
                    'invoiceToDefaultLocation' => true,
                    'eInvoiceContract' => 'Mock value',
                    'paymentMethods' => [],
                    'defaultPaymentMethodId' => 'mock-id-123',
                    'numberOfEmployees' => 42,
                    'excludeDebtCollection' => true,
                    'timeStamp' => '2025-11-22T10:40:04.065Z',
                    'errorInfo' => 'Mock value',
                    'metadata' => 'Mock value',
                ],
            ],
        ], 200),
    ]);

    $request = new CustomerGetByinternalIdRequest(
        internalIdId: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerGetByinternalIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->internalId->toBe(42)
        ->number->toBe('Mock value')
        ->name->toBe('Mock value')
        ->status->toBe('Mock value')
        ->mainAddress->toBe('Mock value')
        ->mainContact->toBe('Mock value')
        ->accountReference->toBe('Mock value')
        ->parentRecord->toBe('Mock value')
        ->customerClass->toBe('Mock value')
        ->creditTerms->toBe('Mock value')
        ->currencyId->toBe('mock-id-123')
        ->creditVerification->toBe('Mock value')
        ->creditLimit->toBe(3.14)
        ->creditDaysPastDue->toBe(42)
        ->invoiceAddress->toBe('Mock value')
        ->invoiceContact->toBe('Mock value')
        ->printInvoices->toBe(true)
        ->acceptAutoInvoices->toBe(true)
        ->sendInvoicesByEmail->toBe(true)
        ->sendDunningLettersViaEmail->toBe(true)
        ->printDunningLetters->toBe(true)
        ->printStatements->toBe(true)
        ->sendStatementsByEmail->toBe(true)
        ->printMultiCurrencyStatements->toBe(true)
        ->statementType->toBe('Mock value')
        ->deliveryAddress->toBe('Mock value')
        ->deliveryContact->toBe('Mock value')
        ->vatRegistrationId->toBe('mock-id-123')
        ->corporateId->toBe('mock-id-123')
        ->gln->toBe('Mock value')
        ->vatZone->toBe('Mock value')
        ->location->toBe('Mock value')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->createdDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->priceClass->toBe('Mock value')
        ->glAccounts->toBe('Mock value')
        ->invoiceToDefaultLocation->toBe(true)
        ->eInvoiceContract->toBe('Mock value')
        ->defaultPaymentMethodId->toBe('mock-id-123')
        ->numberOfEmployees->toBe(42)
        ->excludeDebtCollection->toBe(true)
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the customerGetBycustomerCd method in the Customer resource', function () {
    Saloon::fake([
        CustomerGetBycustomerCdRequest::class => MockResponse::make([
            'data' => [
                'type' => 'customers',
                'id' => 'mock-id-123',
                'attributes' => [
                    'internalId' => 42,
                    'number' => 'Mock value',
                    'name' => 'Mock value',
                    'status' => 'Mock value',
                    'mainAddress' => 'Mock value',
                    'mainContact' => 'Mock value',
                    'accountReference' => 'Mock value',
                    'parentRecord' => 'Mock value',
                    'customerClass' => 'Mock value',
                    'creditTerms' => 'Mock value',
                    'currencyId' => 'mock-id-123',
                    'creditVerification' => 'Mock value',
                    'creditLimit' => 3.14,
                    'creditDaysPastDue' => 42,
                    'invoiceAddress' => 'Mock value',
                    'invoiceContact' => 'Mock value',
                    'printInvoices' => true,
                    'acceptAutoInvoices' => true,
                    'sendInvoicesByEmail' => true,
                    'sendDunningLettersViaEmail' => true,
                    'printDunningLetters' => true,
                    'printStatements' => true,
                    'sendStatementsByEmail' => true,
                    'printMultiCurrencyStatements' => true,
                    'statementType' => 'Mock value',
                    'deliveryAddress' => 'Mock value',
                    'deliveryContact' => 'Mock value',
                    'vatRegistrationId' => 'mock-id-123',
                    'corporateId' => 'mock-id-123',
                    'gln' => 'Mock value',
                    'vatZone' => 'Mock value',
                    'location' => 'Mock value',
                    'attributes' => [],
                    'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                    'createdDateTime' => '2025-11-22T10:40:04.065Z',
                    'directDebitLines' => [],
                    'priceClass' => 'Mock value',
                    'glAccounts' => 'Mock value',
                    'invoiceToDefaultLocation' => true,
                    'eInvoiceContract' => 'Mock value',
                    'paymentMethods' => [],
                    'defaultPaymentMethodId' => 'mock-id-123',
                    'numberOfEmployees' => 42,
                    'excludeDebtCollection' => true,
                    'timeStamp' => '2025-11-22T10:40:04.065Z',
                    'errorInfo' => 'Mock value',
                    'metadata' => 'Mock value',
                ],
            ],
        ], 200),
    ]);

    $request = new CustomerGetBycustomerCdRequest(
        customerCdId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerGetBycustomerCdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->internalId->toBe(42)
        ->number->toBe('Mock value')
        ->name->toBe('Mock value')
        ->status->toBe('Mock value')
        ->mainAddress->toBe('Mock value')
        ->mainContact->toBe('Mock value')
        ->accountReference->toBe('Mock value')
        ->parentRecord->toBe('Mock value')
        ->customerClass->toBe('Mock value')
        ->creditTerms->toBe('Mock value')
        ->currencyId->toBe('mock-id-123')
        ->creditVerification->toBe('Mock value')
        ->creditLimit->toBe(3.14)
        ->creditDaysPastDue->toBe(42)
        ->invoiceAddress->toBe('Mock value')
        ->invoiceContact->toBe('Mock value')
        ->printInvoices->toBe(true)
        ->acceptAutoInvoices->toBe(true)
        ->sendInvoicesByEmail->toBe(true)
        ->sendDunningLettersViaEmail->toBe(true)
        ->printDunningLetters->toBe(true)
        ->printStatements->toBe(true)
        ->sendStatementsByEmail->toBe(true)
        ->printMultiCurrencyStatements->toBe(true)
        ->statementType->toBe('Mock value')
        ->deliveryAddress->toBe('Mock value')
        ->deliveryContact->toBe('Mock value')
        ->vatRegistrationId->toBe('mock-id-123')
        ->corporateId->toBe('mock-id-123')
        ->gln->toBe('Mock value')
        ->vatZone->toBe('Mock value')
        ->location->toBe('Mock value')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->createdDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->priceClass->toBe('Mock value')
        ->glAccounts->toBe('Mock value')
        ->invoiceToDefaultLocation->toBe(true)
        ->eInvoiceContract->toBe('Mock value')
        ->defaultPaymentMethodId->toBe('mock-id-123')
        ->numberOfEmployees->toBe(42)
        ->excludeDebtCollection->toBe(true)
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the customerGetAllCollection method in the Customer resource', function () {
    Saloon::fake([
        CustomerGetAllCollectionRequest::class => MockResponse::make([
            'data' => [
                0 => [
                    'type' => 'customers',
                    'id' => 'mock-id-1',
                    'attributes' => [
                        'internalId' => 42,
                        'number' => 'Mock value',
                        'name' => 'Mock value',
                        'status' => 'Mock value',
                        'mainAddress' => 'Mock value',
                        'mainContact' => 'Mock value',
                        'accountReference' => 'Mock value',
                        'parentRecord' => 'Mock value',
                        'customerClass' => 'Mock value',
                        'creditTerms' => 'Mock value',
                        'currencyId' => 'mock-id-123',
                        'creditVerification' => 'Mock value',
                        'creditLimit' => 3.14,
                        'creditDaysPastDue' => 42,
                        'invoiceAddress' => 'Mock value',
                        'invoiceContact' => 'Mock value',
                        'printInvoices' => true,
                        'acceptAutoInvoices' => true,
                        'sendInvoicesByEmail' => true,
                        'sendDunningLettersViaEmail' => true,
                        'printDunningLetters' => true,
                        'printStatements' => true,
                        'sendStatementsByEmail' => true,
                        'printMultiCurrencyStatements' => true,
                        'statementType' => 'Mock value',
                        'deliveryAddress' => 'Mock value',
                        'deliveryContact' => 'Mock value',
                        'vatRegistrationId' => 'mock-id-123',
                        'corporateId' => 'mock-id-123',
                        'gln' => 'Mock value',
                        'vatZone' => 'Mock value',
                        'location' => 'Mock value',
                        'attributes' => [],
                        'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                        'createdDateTime' => '2025-11-22T10:40:04.065Z',
                        'directDebitLines' => [],
                        'priceClass' => 'Mock value',
                        'glAccounts' => 'Mock value',
                        'invoiceToDefaultLocation' => true,
                        'eInvoiceContract' => 'Mock value',
                        'paymentMethods' => [],
                        'defaultPaymentMethodId' => 'mock-id-123',
                        'numberOfEmployees' => 42,
                        'excludeDebtCollection' => true,
                        'timeStamp' => '2025-11-22T10:40:04.065Z',
                        'errorInfo' => 'Mock value',
                        'metadata' => 'Mock value',
                    ],
                ],
                1 => [
                    'type' => 'customers',
                    'id' => 'mock-id-2',
                    'attributes' => [
                        'internalId' => 42,
                        'number' => 'Mock value',
                        'name' => 'Mock value',
                        'status' => 'Mock value',
                        'mainAddress' => 'Mock value',
                        'mainContact' => 'Mock value',
                        'accountReference' => 'Mock value',
                        'parentRecord' => 'Mock value',
                        'customerClass' => 'Mock value',
                        'creditTerms' => 'Mock value',
                        'currencyId' => 'mock-id-123',
                        'creditVerification' => 'Mock value',
                        'creditLimit' => 3.14,
                        'creditDaysPastDue' => 42,
                        'invoiceAddress' => 'Mock value',
                        'invoiceContact' => 'Mock value',
                        'printInvoices' => true,
                        'acceptAutoInvoices' => true,
                        'sendInvoicesByEmail' => true,
                        'sendDunningLettersViaEmail' => true,
                        'printDunningLetters' => true,
                        'printStatements' => true,
                        'sendStatementsByEmail' => true,
                        'printMultiCurrencyStatements' => true,
                        'statementType' => 'Mock value',
                        'deliveryAddress' => 'Mock value',
                        'deliveryContact' => 'Mock value',
                        'vatRegistrationId' => 'mock-id-123',
                        'corporateId' => 'mock-id-123',
                        'gln' => 'Mock value',
                        'vatZone' => 'Mock value',
                        'location' => 'Mock value',
                        'attributes' => [],
                        'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                        'createdDateTime' => '2025-11-22T10:40:04.065Z',
                        'directDebitLines' => [],
                        'priceClass' => 'Mock value',
                        'glAccounts' => 'Mock value',
                        'invoiceToDefaultLocation' => true,
                        'eInvoiceContract' => 'Mock value',
                        'paymentMethods' => [],
                        'defaultPaymentMethodId' => 'mock-id-123',
                        'numberOfEmployees' => 42,
                        'excludeDebtCollection' => true,
                        'timeStamp' => '2025-11-22T10:40:04.065Z',
                        'errorInfo' => 'Mock value',
                        'metadata' => 'Mock value',
                    ],
                ],
            ],
        ], 200),
    ]);

    $request = (new CustomerGetAllCollectionRequest(greaterThanValue: 'test string', numberToRead: 123, skipRecords: 123, name: 'test string', status: 'test string', corporateId: 'test string', vatRegistrationId: 'test string', email: 'test string', phone: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', createdDateTime: 'test string', createdDateTimeCondition: 'test string', expandAccountInformation: true, expandPaymentMethods: true, expandDirectDebit: true, attributes: 'test string', pageNumber: 123, pageSize: 123));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (CustomerGetAllCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->internalId->toBe(42)
        ->number->toBe('Mock value')
        ->name->toBe('Mock value')
        ->status->toBe('Mock value')
        ->mainAddress->toBe('Mock value')
        ->mainContact->toBe('Mock value')
        ->accountReference->toBe('Mock value')
        ->parentRecord->toBe('Mock value')
        ->customerClass->toBe('Mock value')
        ->creditTerms->toBe('Mock value')
        ->currencyId->toBe('mock-id-123')
        ->creditVerification->toBe('Mock value')
        ->creditLimit->toBe(3.14)
        ->creditDaysPastDue->toBe(42)
        ->invoiceAddress->toBe('Mock value')
        ->invoiceContact->toBe('Mock value')
        ->printInvoices->toBe(true)
        ->acceptAutoInvoices->toBe(true)
        ->sendInvoicesByEmail->toBe(true)
        ->sendDunningLettersViaEmail->toBe(true)
        ->printDunningLetters->toBe(true)
        ->printStatements->toBe(true)
        ->sendStatementsByEmail->toBe(true)
        ->printMultiCurrencyStatements->toBe(true)
        ->statementType->toBe('Mock value')
        ->deliveryAddress->toBe('Mock value')
        ->deliveryContact->toBe('Mock value')
        ->vatRegistrationId->toBe('mock-id-123')
        ->corporateId->toBe('mock-id-123')
        ->gln->toBe('Mock value')
        ->vatZone->toBe('Mock value')
        ->location->toBe('Mock value')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->createdDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->priceClass->toBe('Mock value')
        ->glAccounts->toBe('Mock value')
        ->invoiceToDefaultLocation->toBe(true)
        ->eInvoiceContract->toBe('Mock value')
        ->defaultPaymentMethodId->toBe('mock-id-123')
        ->numberOfEmployees->toBe(42)
        ->excludeDebtCollection->toBe(true)
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the customerGetAllInvoicesForCustomerBycustomerNumber method in the Customer resource', function () {
    Saloon::fake([
        CustomerGetAllInvoicesForCustomerBycustomerNumberRequest::class => MockResponse::make([
            'data' => [
                'type' => 'customers',
                'id' => 'mock-id-123',
                'attributes' => [
                    'creditTerms' => 'Mock value',
                    'documentDueDate' => '2025-11-22T10:40:04.065Z',
                    'cashDiscountDate' => '2025-11-22T10:40:04.065Z',
                    'externalReference' => 'Mock value',
                    'isRotRutDeductible' => true,
                    'exchangeRate' => 3.14,
                    'dunningLetterDate' => '2025-11-22T10:40:04.065Z',
                    'dunningLetterLevel' => 42,
                    'contact' => 'Mock value',
                    'attachments' => [],
                    'taxDetails' => [],
                    'invoiceLines' => [],
                    'sendToAutoInvoice' => true,
                    'roundingDiff' => 3.14,
                    'customerVatZone' => 'Mock value',
                    'startDate' => '2025-11-22T10:40:04.065Z',
                    'endDate' => '2025-11-22T10:40:04.065Z',
                    'accountingCostRef' => 'Mock value',
                    'originatorDocRef' => 'Mock value',
                    'contractDocRef' => 'Mock value',
                    'childRecord' => 'Mock value',
                    'directDebitMandate' => 'Mock value',
                    'excludeDebtCollection' => true,
                    'debtCollection' => 'Mock value',
                    'timeStamp' => '2025-11-22T10:40:04.065Z',
                    'hold' => true,
                    'discountTotal' => 3.14,
                    'discountTotalInCurrency' => 3.14,
                    'detailTotal' => 3.14,
                    'detailTotalInCurrency' => 3.14,
                    'vatTaxableTotal' => 3.14,
                    'vatTaxableTotalInCurrency' => 3.14,
                    'vatExemptTotal' => 3.14,
                    'vatExemptTotalInCurrency' => 3.14,
                    'salesPersonId' => 42,
                    'salesPersonDescr' => 'Mock value',
                    'salesPerson' => 'Mock value',
                    'paymentReference' => 'Mock value',
                    'invoiceAddress' => 'Mock value',
                    'invoiceContact' => 'Mock value',
                    'applications' => [],
                    'dontPrint' => true,
                    'dontEmail' => true,
                    'revoked' => true,
                    'customer' => 'Mock value',
                    'documentType' => 'Mock value',
                    'referenceNumber' => 'Mock value',
                    'postPeriod' => 'Mock value',
                    'financialPeriod' => 'Mock value',
                    'closedFinancialPeriod' => 'Mock value',
                    'documentDate' => '2025-11-22T10:40:04.065Z',
                    'origInvoiceDate' => '2025-11-22T10:40:04.065Z',
                    'status' => 'Mock value',
                    'currencyId' => 'mock-id-123',
                    'amount' => 3.14,
                    'amountInCurrency' => 3.14,
                    'balance' => 3.14,
                    'balanceInCurrency' => 3.14,
                    'cashDiscount' => 3.14,
                    'cashDiscountInCurrency' => 3.14,
                    'paymentMethod' => 'Mock value',
                    'customerRefNumber' => 'Mock value',
                    'invoiceText' => 'Mock value',
                    'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                    'createdDateTime' => '2025-11-22T10:40:04.065Z',
                    'note' => 'Mock value',
                    'vatTotal' => 3.14,
                    'vatTotalInCurrency' => 3.14,
                    'location' => 'Mock value',
                    'branchNumber' => 'Mock value',
                    'cashAccount' => 'Mock value',
                    'project' => 'Mock value',
                    'account' => 'Mock value',
                    'subaccount' => 'Mock value',
                    'customerProject' => 'Mock value',
                    'errorInfo' => 'Mock value',
                    'metadata' => 'Mock value',
                ],
            ],
        ], 200),
    ]);

    $request = new CustomerGetAllInvoicesForCustomerBycustomerNumberRequest(
        customerNumberId: 'test string',
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
        ->creditTerms->toBe('Mock value')
        ->documentDueDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->cashDiscountDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->externalReference->toBe('Mock value')
        ->isRotRutDeductible->toBe(true)
        ->exchangeRate->toBe(3.14)
        ->dunningLetterDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->dunningLetterLevel->toBe(42)
        ->contact->toBe('Mock value')
        ->sendToAutoInvoice->toBe(true)
        ->roundingDiff->toBe(3.14)
        ->customerVatZone->toBe('Mock value')
        ->startDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->endDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->accountingCostRef->toBe('Mock value')
        ->originatorDocRef->toBe('Mock value')
        ->contractDocRef->toBe('Mock value')
        ->childRecord->toBe('Mock value')
        ->directDebitMandate->toBe('Mock value')
        ->excludeDebtCollection->toBe(true)
        ->debtCollection->toBe('Mock value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->hold->toBe(true)
        ->discountTotal->toBe(3.14)
        ->discountTotalInCurrency->toBe(3.14)
        ->detailTotal->toBe(3.14)
        ->detailTotalInCurrency->toBe(3.14)
        ->vatTaxableTotal->toBe(3.14)
        ->vatTaxableTotalInCurrency->toBe(3.14)
        ->vatExemptTotal->toBe(3.14)
        ->vatExemptTotalInCurrency->toBe(3.14)
        ->salesPersonId->toBe(42)
        ->salesPersonDescr->toBe('Mock value')
        ->salesPerson->toBe('Mock value')
        ->paymentReference->toBe('Mock value')
        ->invoiceAddress->toBe('Mock value')
        ->invoiceContact->toBe('Mock value')
        ->dontPrint->toBe(true)
        ->dontEmail->toBe(true)
        ->revoked->toBe(true)
        ->customer->toBe('Mock value')
        ->documentType->toBe('Mock value')
        ->referenceNumber->toBe('Mock value')
        ->postPeriod->toBe('Mock value')
        ->financialPeriod->toBe('Mock value')
        ->closedFinancialPeriod->toBe('Mock value')
        ->documentDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->origInvoiceDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->status->toBe('Mock value')
        ->currencyId->toBe('mock-id-123')
        ->amount->toBe(3.14)
        ->amountInCurrency->toBe(3.14)
        ->balance->toBe(3.14)
        ->balanceInCurrency->toBe(3.14)
        ->cashDiscount->toBe(3.14)
        ->cashDiscountInCurrency->toBe(3.14)
        ->paymentMethod->toBe('Mock value')
        ->customerRefNumber->toBe('Mock value')
        ->invoiceText->toBe('Mock value')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->createdDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->note->toBe('Mock value')
        ->vatTotal->toBe(3.14)
        ->vatTotalInCurrency->toBe(3.14)
        ->location->toBe('Mock value')
        ->branchNumber->toBe('Mock value')
        ->cashAccount->toBe('Mock value')
        ->project->toBe('Mock value')
        ->account->toBe('Mock value')
        ->subaccount->toBe('Mock value')
        ->customerProject->toBe('Mock value')
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the customerGetAllCashSalesForCustomerBycustomerNumber method in the Customer resource', function () {
    Saloon::fake([
        CustomerGetAllCashSalesForCustomerBycustomerNumberRequest::class => MockResponse::make([
            'data' => [
                'type' => 'customers',
                'id' => 'mock-id-123',
                'attributes' => [
                    'creditTerms' => 'Mock value',
                    'cashSaleLines' => [],
                    'timeStamp' => '2025-11-22T10:40:04.065Z',
                    'hold' => true,
                    'discountTotal' => 3.14,
                    'discountTotalInCurrency' => 3.14,
                    'detailTotal' => 3.14,
                    'detailTotalInCurrency' => 3.14,
                    'vatTaxableTotal' => 3.14,
                    'vatTaxableTotalInCurrency' => 3.14,
                    'vatExemptTotal' => 3.14,
                    'vatExemptTotalInCurrency' => 3.14,
                    'salesPersonId' => 42,
                    'salesPersonDescr' => 'Mock value',
                    'salesPerson' => 'Mock value',
                    'paymentReference' => 'Mock value',
                    'invoiceAddress' => 'Mock value',
                    'invoiceContact' => 'Mock value',
                    'applications' => [],
                    'dontPrint' => true,
                    'dontEmail' => true,
                    'revoked' => true,
                    'customer' => 'Mock value',
                    'documentType' => 'Mock value',
                    'referenceNumber' => 'Mock value',
                    'postPeriod' => 'Mock value',
                    'financialPeriod' => 'Mock value',
                    'closedFinancialPeriod' => 'Mock value',
                    'documentDate' => '2025-11-22T10:40:04.065Z',
                    'origInvoiceDate' => '2025-11-22T10:40:04.065Z',
                    'status' => 'Mock value',
                    'currencyId' => 'mock-id-123',
                    'amount' => 3.14,
                    'amountInCurrency' => 3.14,
                    'balance' => 3.14,
                    'balanceInCurrency' => 3.14,
                    'cashDiscount' => 3.14,
                    'cashDiscountInCurrency' => 3.14,
                    'paymentMethod' => 'Mock value',
                    'customerRefNumber' => 'Mock value',
                    'invoiceText' => 'Mock value',
                    'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                    'createdDateTime' => '2025-11-22T10:40:04.065Z',
                    'note' => 'Mock value',
                    'vatTotal' => 3.14,
                    'vatTotalInCurrency' => 3.14,
                    'location' => 'Mock value',
                    'branchNumber' => 'Mock value',
                    'cashAccount' => 'Mock value',
                    'project' => 'Mock value',
                    'account' => 'Mock value',
                    'subaccount' => 'Mock value',
                    'customerProject' => 'Mock value',
                    'errorInfo' => 'Mock value',
                    'metadata' => 'Mock value',
                ],
            ],
        ], 200),
    ]);

    $request = new CustomerGetAllCashSalesForCustomerBycustomerNumberRequest(
        customerNumberId: 'test string',
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
        ->creditTerms->toBe('Mock value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->hold->toBe(true)
        ->discountTotal->toBe(3.14)
        ->discountTotalInCurrency->toBe(3.14)
        ->detailTotal->toBe(3.14)
        ->detailTotalInCurrency->toBe(3.14)
        ->vatTaxableTotal->toBe(3.14)
        ->vatTaxableTotalInCurrency->toBe(3.14)
        ->vatExemptTotal->toBe(3.14)
        ->vatExemptTotalInCurrency->toBe(3.14)
        ->salesPersonId->toBe(42)
        ->salesPersonDescr->toBe('Mock value')
        ->salesPerson->toBe('Mock value')
        ->paymentReference->toBe('Mock value')
        ->invoiceAddress->toBe('Mock value')
        ->invoiceContact->toBe('Mock value')
        ->dontPrint->toBe(true)
        ->dontEmail->toBe(true)
        ->revoked->toBe(true)
        ->customer->toBe('Mock value')
        ->documentType->toBe('Mock value')
        ->referenceNumber->toBe('Mock value')
        ->postPeriod->toBe('Mock value')
        ->financialPeriod->toBe('Mock value')
        ->closedFinancialPeriod->toBe('Mock value')
        ->documentDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->origInvoiceDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->status->toBe('Mock value')
        ->currencyId->toBe('mock-id-123')
        ->amount->toBe(3.14)
        ->amountInCurrency->toBe(3.14)
        ->balance->toBe(3.14)
        ->balanceInCurrency->toBe(3.14)
        ->cashDiscount->toBe(3.14)
        ->cashDiscountInCurrency->toBe(3.14)
        ->paymentMethod->toBe('Mock value')
        ->customerRefNumber->toBe('Mock value')
        ->invoiceText->toBe('Mock value')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->createdDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->note->toBe('Mock value')
        ->vatTotal->toBe(3.14)
        ->vatTotalInCurrency->toBe(3.14)
        ->location->toBe('Mock value')
        ->branchNumber->toBe('Mock value')
        ->cashAccount->toBe('Mock value')
        ->project->toBe('Mock value')
        ->account->toBe('Mock value')
        ->subaccount->toBe('Mock value')
        ->customerProject->toBe('Mock value')
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the customerGetAllDocumentsForCustomerBycustomerNumber method in the Customer resource', function () {
    Saloon::fake([
        CustomerGetAllDocumentsForCustomerBycustomerNumberRequest::class => MockResponse::make([
            'data' => [
                'type' => 'customers',
                'id' => 'mock-id-123',
                'attributes' => [
                    'documentDueDate' => '2025-11-22T10:40:04.065Z',
                    'branch' => 'Mock value',
                    'customer' => 'Mock value',
                    'documentType' => 'Mock value',
                    'referenceNumber' => 'Mock value',
                    'postPeriod' => 'Mock value',
                    'financialPeriod' => 'Mock value',
                    'closedFinancialPeriod' => 'Mock value',
                    'documentDate' => '2025-11-22T10:40:04.065Z',
                    'origInvoiceDate' => '2025-11-22T10:40:04.065Z',
                    'status' => 'Mock value',
                    'currencyId' => 'mock-id-123',
                    'amount' => 3.14,
                    'amountInCurrency' => 3.14,
                    'balance' => 3.14,
                    'balanceInCurrency' => 3.14,
                    'cashDiscount' => 3.14,
                    'cashDiscountInCurrency' => 3.14,
                    'paymentMethod' => 'Mock value',
                    'customerRefNumber' => 'Mock value',
                    'invoiceText' => 'Mock value',
                    'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                    'createdDateTime' => '2025-11-22T10:40:04.065Z',
                    'note' => 'Mock value',
                    'vatTotal' => 3.14,
                    'vatTotalInCurrency' => 3.14,
                    'location' => 'Mock value',
                    'branchNumber' => 'Mock value',
                    'cashAccount' => 'Mock value',
                    'project' => 'Mock value',
                    'account' => 'Mock value',
                    'subaccount' => 'Mock value',
                    'customerProject' => 'Mock value',
                    'errorInfo' => 'Mock value',
                    'metadata' => 'Mock value',
                ],
            ],
        ], 200),
    ]);

    $request = new CustomerGetAllDocumentsForCustomerBycustomerNumberRequest(
        customerNumberId: 'test string',
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
        ->documentDueDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->branch->toBe('Mock value')
        ->customer->toBe('Mock value')
        ->documentType->toBe('Mock value')
        ->referenceNumber->toBe('Mock value')
        ->postPeriod->toBe('Mock value')
        ->financialPeriod->toBe('Mock value')
        ->closedFinancialPeriod->toBe('Mock value')
        ->documentDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->origInvoiceDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->status->toBe('Mock value')
        ->currencyId->toBe('mock-id-123')
        ->amount->toBe(3.14)
        ->amountInCurrency->toBe(3.14)
        ->balance->toBe(3.14)
        ->balanceInCurrency->toBe(3.14)
        ->cashDiscount->toBe(3.14)
        ->cashDiscountInCurrency->toBe(3.14)
        ->paymentMethod->toBe('Mock value')
        ->customerRefNumber->toBe('Mock value')
        ->invoiceText->toBe('Mock value')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->createdDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->note->toBe('Mock value')
        ->vatTotal->toBe(3.14)
        ->vatTotalInCurrency->toBe(3.14)
        ->location->toBe('Mock value')
        ->branchNumber->toBe('Mock value')
        ->cashAccount->toBe('Mock value')
        ->project->toBe('Mock value')
        ->account->toBe('Mock value')
        ->subaccount->toBe('Mock value')
        ->customerProject->toBe('Mock value')
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the customerCreateDunningLetterActionBycustomer method in the Customer resource', function () {
    $mockClient = Saloon::fake([
        CustomerCreateDunningLetterActionBycustomerRequest::class => MockResponse::make([], 200),
    ]);

    // Create DTO with sample data
    $dto = \Pionect\VismaSdk\Dto\CreateDunningLetterActionResultDto::factory()->state([
        'actionId' => 'action_id-123',
        'actionResult' => 'test value',
        'errorInfo' => 'test value',
    ])->make();

    $request = new CustomerCreateDunningLetterActionBycustomerRequest(customerId: 'customer_id-123', data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerCreateDunningLetterActionBycustomerRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->toHaveKey('data')
            ->data->type->toBe('customers')
            ->data->attributes->scoped(fn ($attributes) => $attributes
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value')
            ->errorInfo->toBe('test value')
            );

        return true;
    });
});

it('calls the customerChangeCustomerNrActionByinternalId method in the Customer resource', function () {
    $mockClient = Saloon::fake([
        CustomerChangeCustomerNrActionByinternalIdRequest::class => MockResponse::make([], 200),
    ]);

    // Create DTO with sample data
    $dto = \Pionect\VismaSdk\Dto\ChangeCustomerCdActionResultDto::factory()->state([
        'actionId' => 'action_id-123',
        'actionResult' => 'test value',
        'errorInfo' => 'test value',
    ])->make();

    $request = new CustomerChangeCustomerNrActionByinternalIdRequest(internalId: 42, data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerChangeCustomerNrActionByinternalIdRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->toHaveKey('data')
            ->data->type->toBe('customers')
            ->data->attributes->scoped(fn ($attributes) => $attributes
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value')
            ->errorInfo->toBe('test value')
            );

        return true;
    });
});
