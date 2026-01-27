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
            0 => [
                'description' => 'String value',
                'taxZoneId' => 'mock-id-123',
                'requiredTaxzoneId' => true,
                'paymentMethodId' => 'mock-id-123',
                'attributes' => [],
                'id' => 'mock-id-123',
            ],
            1 => [
                'description' => 'String value',
                'taxZoneId' => 'mock-id-123',
                'requiredTaxzoneId' => true,
                'paymentMethodId' => 'mock-id-123',
                'attributes' => [],
                'id' => 'mock-id-123',
            ],
        ], 200),
    ]);

    $request = (new CustomerGetCustomerClassesCollectionRequest);

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (CustomerGetCustomerClassesCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->description->toBe('String value')
        ->taxZoneId->toBe('mock-id-123')
        ->requiredTaxzoneId->toBeTrue()
        ->paymentMethodId->toBe('mock-id-123')
        ->id->toBe('mock-id-123');
});

it('calls the customerGetSpecificCustomerClassBycustomerClassId method in the Customer resource', function () {
    Saloon::fake([
        CustomerGetSpecificCustomerClassBycustomerClassIdRequest::class => MockResponse::make([
            'description' => 'String value',
            'taxZoneId' => 'mock-id-123',
            'requiredTaxzoneId' => true,
            'paymentMethodId' => 'mock-id-123',
            'attributes' => [],
            'id' => 'mock-id-123',
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
        ->requiredTaxzoneId->toBeTrue()
        ->paymentMethodId->toBe('mock-id-123')
        ->id->toBe('mock-id-123');
});

it('calls the customerGetCustomerBalanceBycustomerCd method in the Customer resource', function () {
    Saloon::fake([
        CustomerGetCustomerBalanceBycustomerCdRequest::class => MockResponse::make([
            'customer' => null,
            'balance' => 3.14,
            'totalOrder' => 3.14,
            'totalLoan' => 3.14,
            'totalSalePeriod' => 3.14,
            'totalSaleYear' => 3.14,
            'totalDiscountPeriod' => 3.14,
            'totalDiscountYear' => 3.14,
            'lastModified' => '2025-11-22T10:40:04.065Z',
            'id' => 'mock-id-123',
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
        ->customer->toBeNull()
        ->balance->toBe(3.14)
        ->totalOrder->toBe(3.14)
        ->totalLoan->toBe(3.14)
        ->totalSalePeriod->toBe(3.14)
        ->totalSaleYear->toBe(3.14)
        ->totalDiscountPeriod->toBe(3.14)
        ->totalDiscountYear->toBe(3.14)
        ->lastModified->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->id->toBe('mock-id-123');
});

it('calls the customerGetCustomerDirectDebitBycustomerCd method in the Customer resource', function () {
    Saloon::fake([
        CustomerGetCustomerDirectDebitBycustomerCdRequest::class => MockResponse::make([
            'mandateId' => 'mock-id-123',
            'mandateDescription' => 'String value',
            'dateOfSignature' => '2025-11-22T10:40:04.065Z',
            'isDefault' => true,
            'oneTime' => '2025-11-22T10:40:04.065Z',
            'bic' => 'String value',
            'iban' => 'String value',
            'lastCollectionDate' => '2025-11-22T10:40:04.065Z',
            'maxAmount' => 3.14,
            'expirationDate' => '2025-11-22T10:40:04.065Z',
            'branch' => 'String value',
            'id' => 'mock-id-123',
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
        ->mandateDescription->toBe('String value')
        ->dateOfSignature->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->isDefault->toBeTrue()
        ->oneTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->bic->toBe('String value')
        ->iban->toBe('String value')
        ->lastCollectionDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->maxAmount->toBe(3.14)
        ->expirationDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->branch->toBe('String value')
        ->id->toBe('mock-id-123');
});

it('calls the customerGetAllOrderForCustomerBycustomerCd method in the Customer resource', function () {
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
            'invoiceDate' => '2025-11-22T10:40:04.065Z',
            'terms' => null,
            'dueDate' => '2025-11-22T10:40:04.065Z',
            'cashDiscountDate' => '2025-11-22T10:40:04.065Z',
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
            'schedShipment' => '2025-11-22T10:40:04.065Z',
            'shipSeparately' => true,
            'shipComplete' => 'String value',
            'cancelBy' => '2025-11-22T10:40:04.065Z',
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
            'date' => '2025-11-22T10:40:04.065Z',
            'requestOn' => '2025-11-22T10:40:04.065Z',
            'customerOrder' => 'String value',
            'customerRefNo' => 'String value',
            'customer' => null,
            'contactId' => 42,
            'location' => null,
            'currency' => 'String value',
            'description' => 'String value',
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
            'branchNumber' => null,
            'note' => 'String value',
            'attachments' => [],
            'errorInfo' => 'String value',
            'id' => 'mock-id-123',
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
        ->projectCd->toBe('String value')
        ->printDescriptionOnInvoice->toBeTrue()
        ->printNoteOnExternalDocuments->toBeTrue()
        ->printNoteOnInternalDocuments->toBeTrue()
        ->soBillingContact->toBeNull()
        ->soBillingAddress->toBeNull()
        ->customerVatzone->toBeNull()
        ->invoiceSeparately->toBeTrue()
        ->invoiceNbr->toBe('String value')
        ->invoiceDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->terms->toBeNull()
        ->dueDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->cashDiscountDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
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
        ->schedShipment->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->shipSeparately->toBeTrue()
        ->shipComplete->toBe('String value')
        ->cancelBy->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->canceled->toBeTrue()
        ->preferredWarehouse->toBeNull()
        ->shipVia->toBeNull()
        ->fobPoint->toBeNull()
        ->priority->toBe(42)
        ->shippingTerms->toBeNull()
        ->shippingZone->toBeNull()
        ->residentialDelivery->toBeTrue()
        ->saturdayDelivery->toBeTrue()
        ->insurance->toBeTrue()
        ->transactionType->toBeNull()
        ->paymentMethod->toBeNull()
        ->cashAccount->toBe('String value')
        ->paymentRef->toBe('String value')
        ->isRotRutDeductible->toBeTrue()
        ->emailed->toBeTrue()
        ->orderType->toBe('String value')
        ->orderNo->toBe('String value')
        ->status->toBe('String value')
        ->hold->toBeTrue()
        ->date->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->requestOn->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->customerOrder->toBe('String value')
        ->customerRefNo->toBe('String value')
        ->customer->toBeNull()
        ->contactId->toBe(42)
        ->location->toBeNull()
        ->currency->toBe('String value')
        ->description->toBe('String value')
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
        ->branchNumber->toBeNull()
        ->note->toBe('String value')
        ->errorInfo->toBe('String value')
        ->id->toBe('mock-id-123');
});

it('calls the customerGetAllSalesOrderBasicForCustomerBycustomerCd method in the Customer resource', function () {
    Saloon::fake([
        CustomerGetAllSalesOrderBasicForCustomerBycustomerCdRequest::class => MockResponse::make([
            'lines' => [],
            'orderType' => 'String value',
            'orderNo' => 'String value',
            'status' => 'String value',
            'hold' => true,
            'date' => '2025-11-22T10:40:04.065Z',
            'requestOn' => '2025-11-22T10:40:04.065Z',
            'customerOrder' => 'String value',
            'customerRefNo' => 'String value',
            'customer' => null,
            'contactId' => 42,
            'location' => null,
            'currency' => 'String value',
            'description' => 'String value',
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
            'branchNumber' => null,
            'note' => 'String value',
            'attachments' => [],
            'errorInfo' => 'String value',
            'id' => 'mock-id-123',
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
        ->orderType->toBe('String value')
        ->orderNo->toBe('String value')
        ->status->toBe('String value')
        ->hold->toBeTrue()
        ->date->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->requestOn->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->customerOrder->toBe('String value')
        ->customerRefNo->toBe('String value')
        ->customer->toBeNull()
        ->contactId->toBe(42)
        ->location->toBeNull()
        ->currency->toBe('String value')
        ->description->toBe('String value')
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
        ->branchNumber->toBeNull()
        ->note->toBe('String value')
        ->errorInfo->toBe('String value')
        ->id->toBe('mock-id-123');
});

it('calls the customerGetAllContactsForCustomerBycustomerCd method in the Customer resource', function () {
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
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'contactId' => 42,
            'timeStamp' => '2025-11-22T10:40:04.065Z',
            'errorInfo' => 'String value',
            'id' => 'mock-id-123',
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
        ->displayName->toBe('String value')
        ->active->toBeTrue()
        ->title->toBe('String value')
        ->firstName->toBe('String value')
        ->lastName->toBe('String value')
        ->position->toBe('String value')
        ->businessAccount->toBe('String value')
        ->businessAccountType->toBe('String value')
        ->sameAsAccount->toBeTrue()
        ->address->toBeNull()
        ->email->toBe('test@example.com')
        ->web->toBe('String value')
        ->phone1->toBe('String value')
        ->phone2->toBe('String value')
        ->phone3->toBe('String value')
        ->fax->toBe('String value')
        ->contactMethod->toBe('String value')
        ->doNotCall->toBeTrue()
        ->doNotFax->toBeTrue()
        ->doNotEmail->toBeTrue()
        ->doNotMail->toBeTrue()
        ->noMassMail->toBeTrue()
        ->noMarketing->toBeTrue()
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->contactId->toBe(42)
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('String value')
        ->id->toBe('mock-id-123');
});

it('calls the customerGetSalesPersonsForCustomerBycustomerCd method in the Customer resource', function () {
    Saloon::fake([
        CustomerGetSalesPersonsForCustomerBycustomerCdRequest::class => MockResponse::make([
            'salePersonId' => 'mock-id-123',
            'name' => 'String value',
            'locationId' => 'mock-id-123',
            'locationName' => 'String value',
            'commisionPct' => 3.14,
            'isDefault' => true,
            'errorInfo' => 'String value',
            'id' => 'mock-id-123',
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
        ->name->toBe('String value')
        ->locationId->toBe('mock-id-123')
        ->locationName->toBe('String value')
        ->commisionPct->toBe(3.14)
        ->isDefault->toBeTrue()
        ->errorInfo->toBe('String value')
        ->id->toBe('mock-id-123');
});

it('calls the customerGetAllCustomerBalanceCollection method in the Customer resource', function () {
    Saloon::fake([
        CustomerGetAllCustomerBalanceCollectionRequest::class => MockResponse::make([
            0 => [
                'customer' => null,
                'balance' => 3.14,
                'totalOrder' => 3.14,
                'totalLoan' => 3.14,
                'totalSalePeriod' => 3.14,
                'totalSaleYear' => 3.14,
                'totalDiscountPeriod' => 3.14,
                'totalDiscountYear' => 3.14,
                'lastModified' => '2025-11-22T10:40:04.065Z',
                'id' => 'mock-id-123',
            ],
            1 => [
                'customer' => null,
                'balance' => 3.14,
                'totalOrder' => 3.14,
                'totalLoan' => 3.14,
                'totalSalePeriod' => 3.14,
                'totalSaleYear' => 3.14,
                'totalDiscountPeriod' => 3.14,
                'totalDiscountYear' => 3.14,
                'lastModified' => '2025-11-22T10:40:04.065Z',
                'id' => 'mock-id-123',
            ],
        ], 200),
    ]);

    $request = (new CustomerGetAllCustomerBalanceCollectionRequest(greaterThanValue: 'test string', numberToRead: 123, skipRecords: 123, orderBy: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string'));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (CustomerGetAllCustomerBalanceCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->customer->toBeNull()
        ->balance->toBe(3.14)
        ->totalOrder->toBe(3.14)
        ->totalLoan->toBe(3.14)
        ->totalSalePeriod->toBe(3.14)
        ->totalSaleYear->toBe(3.14)
        ->totalDiscountPeriod->toBe(3.14)
        ->totalDiscountYear->toBe(3.14)
        ->lastModified->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->id->toBe('mock-id-123');
});

it('calls the customerGetCustomerNoteBycustomerCd method in the Customer resource', function () {
    Saloon::fake([
        CustomerGetCustomerNoteBycustomerCdRequest::class => MockResponse::make([
            'note' => 'String value',
            'id' => 'mock-id-123',
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
        ->note->toBe('String value')
        ->id->toBe('mock-id-123');
});

it('calls the customerGetByinternalId method in the Customer resource', function () {
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
            'creditLimit' => 3.14,
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
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'createdDateTime' => '2025-11-22T10:40:04.065Z',
            'directDebitLines' => [],
            'priceClass' => null,
            'glAccounts' => null,
            'invoiceToDefaultLocation' => true,
            'eInvoiceContract' => null,
            'paymentMethods' => [],
            'defaultPaymentMethodId' => 'mock-id-123',
            'numberOfEmployees' => 42,
            'excludeDebtCollection' => true,
            'timeStamp' => '2025-11-22T10:40:04.065Z',
            'errorInfo' => 'String value',
            'id' => 'mock-id-123',
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
        ->creditLimit->toBe(3.14)
        ->creditDaysPastDue->toBe(42)
        ->invoiceAddress->toBeNull()
        ->invoiceContact->toBeNull()
        ->printInvoices->toBeTrue()
        ->acceptAutoInvoices->toBeTrue()
        ->sendInvoicesByEmail->toBeTrue()
        ->sendDunningLettersViaEmail->toBeTrue()
        ->printDunningLetters->toBeTrue()
        ->printStatements->toBeTrue()
        ->sendStatementsByEmail->toBeTrue()
        ->printMultiCurrencyStatements->toBeTrue()
        ->statementType->toBe('String value')
        ->deliveryAddress->toBeNull()
        ->deliveryContact->toBeNull()
        ->vatRegistrationId->toBe('mock-id-123')
        ->corporateId->toBe('mock-id-123')
        ->gln->toBe('String value')
        ->vatZone->toBeNull()
        ->location->toBeNull()
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->createdDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->priceClass->toBeNull()
        ->glAccounts->toBeNull()
        ->invoiceToDefaultLocation->toBeTrue()
        ->eInvoiceContract->toBeNull()
        ->defaultPaymentMethodId->toBe('mock-id-123')
        ->numberOfEmployees->toBe(42)
        ->excludeDebtCollection->toBeTrue()
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('String value')
        ->id->toBe('mock-id-123');
});

it('calls the customerGetBycustomerCd method in the Customer resource', function () {
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
            'creditLimit' => 3.14,
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
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'createdDateTime' => '2025-11-22T10:40:04.065Z',
            'directDebitLines' => [],
            'priceClass' => null,
            'glAccounts' => null,
            'invoiceToDefaultLocation' => true,
            'eInvoiceContract' => null,
            'paymentMethods' => [],
            'defaultPaymentMethodId' => 'mock-id-123',
            'numberOfEmployees' => 42,
            'excludeDebtCollection' => true,
            'timeStamp' => '2025-11-22T10:40:04.065Z',
            'errorInfo' => 'String value',
            'id' => 'mock-id-123',
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
        ->creditLimit->toBe(3.14)
        ->creditDaysPastDue->toBe(42)
        ->invoiceAddress->toBeNull()
        ->invoiceContact->toBeNull()
        ->printInvoices->toBeTrue()
        ->acceptAutoInvoices->toBeTrue()
        ->sendInvoicesByEmail->toBeTrue()
        ->sendDunningLettersViaEmail->toBeTrue()
        ->printDunningLetters->toBeTrue()
        ->printStatements->toBeTrue()
        ->sendStatementsByEmail->toBeTrue()
        ->printMultiCurrencyStatements->toBeTrue()
        ->statementType->toBe('String value')
        ->deliveryAddress->toBeNull()
        ->deliveryContact->toBeNull()
        ->vatRegistrationId->toBe('mock-id-123')
        ->corporateId->toBe('mock-id-123')
        ->gln->toBe('String value')
        ->vatZone->toBeNull()
        ->location->toBeNull()
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->createdDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->priceClass->toBeNull()
        ->glAccounts->toBeNull()
        ->invoiceToDefaultLocation->toBeTrue()
        ->eInvoiceContract->toBeNull()
        ->defaultPaymentMethodId->toBe('mock-id-123')
        ->numberOfEmployees->toBe(42)
        ->excludeDebtCollection->toBeTrue()
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('String value')
        ->id->toBe('mock-id-123');
});

it('calls the customerGetAllCollection method in the Customer resource', function () {
    Saloon::fake([
        CustomerGetAllCollectionRequest::class => MockResponse::make([
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
                'creditLimit' => 3.14,
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
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'createdDateTime' => '2025-11-22T10:40:04.065Z',
                'directDebitLines' => [],
                'priceClass' => null,
                'glAccounts' => null,
                'invoiceToDefaultLocation' => true,
                'eInvoiceContract' => null,
                'paymentMethods' => [],
                'defaultPaymentMethodId' => 'mock-id-123',
                'numberOfEmployees' => 42,
                'excludeDebtCollection' => true,
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'String value',
                'id' => 'mock-id-123',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
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
                'creditLimit' => 3.14,
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
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'createdDateTime' => '2025-11-22T10:40:04.065Z',
                'directDebitLines' => [],
                'priceClass' => null,
                'glAccounts' => null,
                'invoiceToDefaultLocation' => true,
                'eInvoiceContract' => null,
                'paymentMethods' => [],
                'defaultPaymentMethodId' => 'mock-id-123',
                'numberOfEmployees' => 42,
                'excludeDebtCollection' => true,
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'String value',
                'id' => 'mock-id-123',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
        ], 200),
    ]);

    $request = (new CustomerGetAllCollectionRequest(greaterThanValue: 'test string', numberToRead: 123, skipRecords: 123, name: 'test string', status: 'test string', corporateId: 'test string', vatRegistrationId: 'test string', email: 'test string', phone: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', createdDateTime: 'test string', createdDateTimeCondition: 'test string', expandAccountInformation: true, expandPaymentMethods: true, expandDirectDebit: true, attributes: 'test string', pageNumber: 123, pageSize: 123));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (CustomerGetAllCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
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
        ->creditLimit->toBe(3.14)
        ->creditDaysPastDue->toBe(42)
        ->invoiceAddress->toBeNull()
        ->invoiceContact->toBeNull()
        ->printInvoices->toBeTrue()
        ->acceptAutoInvoices->toBeTrue()
        ->sendInvoicesByEmail->toBeTrue()
        ->sendDunningLettersViaEmail->toBeTrue()
        ->printDunningLetters->toBeTrue()
        ->printStatements->toBeTrue()
        ->sendStatementsByEmail->toBeTrue()
        ->printMultiCurrencyStatements->toBeTrue()
        ->statementType->toBe('String value')
        ->deliveryAddress->toBeNull()
        ->deliveryContact->toBeNull()
        ->vatRegistrationId->toBe('mock-id-123')
        ->corporateId->toBe('mock-id-123')
        ->gln->toBe('String value')
        ->vatZone->toBeNull()
        ->location->toBeNull()
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->createdDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->priceClass->toBeNull()
        ->glAccounts->toBeNull()
        ->invoiceToDefaultLocation->toBeTrue()
        ->eInvoiceContract->toBeNull()
        ->defaultPaymentMethodId->toBe('mock-id-123')
        ->numberOfEmployees->toBe(42)
        ->excludeDebtCollection->toBeTrue()
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('String value')
        ->id->toBe('mock-id-123');
});

it('calls the customerGetAllInvoicesForCustomerBycustomerNumber method in the Customer resource', function () {
    Saloon::fake([
        CustomerGetAllInvoicesForCustomerBycustomerNumberRequest::class => MockResponse::make([
            'creditTerms' => null,
            'documentDueDate' => '2025-11-22T10:40:04.065Z',
            'cashDiscountDate' => '2025-11-22T10:40:04.065Z',
            'externalReference' => 'String value',
            'isRotRutDeductible' => true,
            'exchangeRate' => 3.14,
            'dunningLetterDate' => '2025-11-22T10:40:04.065Z',
            'dunningLetterLevel' => 42,
            'contact' => null,
            'attachments' => [],
            'taxDetails' => [],
            'invoiceLines' => [],
            'sendToAutoInvoice' => true,
            'roundingDiff' => 3.14,
            'customerVatZone' => null,
            'startDate' => '2025-11-22T10:40:04.065Z',
            'endDate' => '2025-11-22T10:40:04.065Z',
            'accountingCostRef' => 'String value',
            'originatorDocRef' => 'String value',
            'contractDocRef' => 'String value',
            'childRecord' => null,
            'directDebitMandate' => null,
            'excludeDebtCollection' => true,
            'debtCollection' => null,
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
            'documentDate' => '2025-11-22T10:40:04.065Z',
            'origInvoiceDate' => '2025-11-22T10:40:04.065Z',
            'status' => 'String value',
            'currencyId' => 'mock-id-123',
            'amount' => 3.14,
            'amountInCurrency' => 3.14,
            'balance' => 3.14,
            'balanceInCurrency' => 3.14,
            'cashDiscount' => 3.14,
            'cashDiscountInCurrency' => 3.14,
            'paymentMethod' => null,
            'customerRefNumber' => 'String value',
            'invoiceText' => 'String value',
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'createdDateTime' => '2025-11-22T10:40:04.065Z',
            'note' => 'String value',
            'vatTotal' => 3.14,
            'vatTotalInCurrency' => 3.14,
            'location' => null,
            'branchNumber' => null,
            'cashAccount' => 'String value',
            'project' => null,
            'account' => null,
            'subaccount' => null,
            'customerProject' => 'String value',
            'errorInfo' => 'String value',
            'id' => 'mock-id-123',
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
        ->creditTerms->toBeNull()
        ->documentDueDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->cashDiscountDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->externalReference->toBe('String value')
        ->isRotRutDeductible->toBeTrue()
        ->exchangeRate->toBe(3.14)
        ->dunningLetterDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->dunningLetterLevel->toBe(42)
        ->contact->toBeNull()
        ->sendToAutoInvoice->toBeTrue()
        ->roundingDiff->toBe(3.14)
        ->customerVatZone->toBeNull()
        ->startDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->endDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->accountingCostRef->toBe('String value')
        ->originatorDocRef->toBe('String value')
        ->contractDocRef->toBe('String value')
        ->childRecord->toBeNull()
        ->directDebitMandate->toBeNull()
        ->excludeDebtCollection->toBeTrue()
        ->debtCollection->toBeNull()
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->hold->toBeTrue()
        ->discountTotal->toBe(3.14)
        ->discountTotalInCurrency->toBe(3.14)
        ->detailTotal->toBe(3.14)
        ->detailTotalInCurrency->toBe(3.14)
        ->vatTaxableTotal->toBe(3.14)
        ->vatTaxableTotalInCurrency->toBe(3.14)
        ->vatExemptTotal->toBe(3.14)
        ->vatExemptTotalInCurrency->toBe(3.14)
        ->salesPersonId->toBe(42)
        ->salesPersonDescr->toBe('String value')
        ->salesPerson->toBeNull()
        ->paymentReference->toBe('String value')
        ->invoiceAddress->toBeNull()
        ->invoiceContact->toBeNull()
        ->dontPrint->toBeTrue()
        ->dontEmail->toBeTrue()
        ->revoked->toBeTrue()
        ->customer->toBeNull()
        ->documentType->toBe('String value')
        ->referenceNumber->toBe('String value')
        ->postPeriod->toBe('String value')
        ->financialPeriod->toBe('String value')
        ->closedFinancialPeriod->toBe('String value')
        ->documentDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->origInvoiceDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->status->toBe('String value')
        ->currencyId->toBe('mock-id-123')
        ->amount->toBe(3.14)
        ->amountInCurrency->toBe(3.14)
        ->balance->toBe(3.14)
        ->balanceInCurrency->toBe(3.14)
        ->cashDiscount->toBe(3.14)
        ->cashDiscountInCurrency->toBe(3.14)
        ->paymentMethod->toBeNull()
        ->customerRefNumber->toBe('String value')
        ->invoiceText->toBe('String value')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->createdDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->note->toBe('String value')
        ->vatTotal->toBe(3.14)
        ->vatTotalInCurrency->toBe(3.14)
        ->location->toBeNull()
        ->branchNumber->toBeNull()
        ->cashAccount->toBe('String value')
        ->project->toBeNull()
        ->account->toBeNull()
        ->subaccount->toBeNull()
        ->customerProject->toBe('String value')
        ->errorInfo->toBe('String value')
        ->id->toBe('mock-id-123');
});

it('calls the customerGetAllCashSalesForCustomerBycustomerNumber method in the Customer resource', function () {
    Saloon::fake([
        CustomerGetAllCashSalesForCustomerBycustomerNumberRequest::class => MockResponse::make([
            'creditTerms' => null,
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
            'documentDate' => '2025-11-22T10:40:04.065Z',
            'origInvoiceDate' => '2025-11-22T10:40:04.065Z',
            'status' => 'String value',
            'currencyId' => 'mock-id-123',
            'amount' => 3.14,
            'amountInCurrency' => 3.14,
            'balance' => 3.14,
            'balanceInCurrency' => 3.14,
            'cashDiscount' => 3.14,
            'cashDiscountInCurrency' => 3.14,
            'paymentMethod' => null,
            'customerRefNumber' => 'String value',
            'invoiceText' => 'String value',
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'createdDateTime' => '2025-11-22T10:40:04.065Z',
            'note' => 'String value',
            'vatTotal' => 3.14,
            'vatTotalInCurrency' => 3.14,
            'location' => null,
            'branchNumber' => null,
            'cashAccount' => 'String value',
            'project' => null,
            'account' => null,
            'subaccount' => null,
            'customerProject' => 'String value',
            'errorInfo' => 'String value',
            'id' => 'mock-id-123',
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
        ->creditTerms->toBeNull()
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->hold->toBeTrue()
        ->discountTotal->toBe(3.14)
        ->discountTotalInCurrency->toBe(3.14)
        ->detailTotal->toBe(3.14)
        ->detailTotalInCurrency->toBe(3.14)
        ->vatTaxableTotal->toBe(3.14)
        ->vatTaxableTotalInCurrency->toBe(3.14)
        ->vatExemptTotal->toBe(3.14)
        ->vatExemptTotalInCurrency->toBe(3.14)
        ->salesPersonId->toBe(42)
        ->salesPersonDescr->toBe('String value')
        ->salesPerson->toBeNull()
        ->paymentReference->toBe('String value')
        ->invoiceAddress->toBeNull()
        ->invoiceContact->toBeNull()
        ->dontPrint->toBeTrue()
        ->dontEmail->toBeTrue()
        ->revoked->toBeTrue()
        ->customer->toBeNull()
        ->documentType->toBe('String value')
        ->referenceNumber->toBe('String value')
        ->postPeriod->toBe('String value')
        ->financialPeriod->toBe('String value')
        ->closedFinancialPeriod->toBe('String value')
        ->documentDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->origInvoiceDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->status->toBe('String value')
        ->currencyId->toBe('mock-id-123')
        ->amount->toBe(3.14)
        ->amountInCurrency->toBe(3.14)
        ->balance->toBe(3.14)
        ->balanceInCurrency->toBe(3.14)
        ->cashDiscount->toBe(3.14)
        ->cashDiscountInCurrency->toBe(3.14)
        ->paymentMethod->toBeNull()
        ->customerRefNumber->toBe('String value')
        ->invoiceText->toBe('String value')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->createdDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->note->toBe('String value')
        ->vatTotal->toBe(3.14)
        ->vatTotalInCurrency->toBe(3.14)
        ->location->toBeNull()
        ->branchNumber->toBeNull()
        ->cashAccount->toBe('String value')
        ->project->toBeNull()
        ->account->toBeNull()
        ->subaccount->toBeNull()
        ->customerProject->toBe('String value')
        ->errorInfo->toBe('String value')
        ->id->toBe('mock-id-123');
});

it('calls the customerGetAllDocumentsForCustomerBycustomerNumber method in the Customer resource', function () {
    Saloon::fake([
        CustomerGetAllDocumentsForCustomerBycustomerNumberRequest::class => MockResponse::make([
            'documentDueDate' => '2025-11-22T10:40:04.065Z',
            'branch' => null,
            'customer' => null,
            'documentType' => 'String value',
            'referenceNumber' => 'String value',
            'postPeriod' => 'String value',
            'financialPeriod' => 'String value',
            'closedFinancialPeriod' => 'String value',
            'documentDate' => '2025-11-22T10:40:04.065Z',
            'origInvoiceDate' => '2025-11-22T10:40:04.065Z',
            'status' => 'String value',
            'currencyId' => 'mock-id-123',
            'amount' => 3.14,
            'amountInCurrency' => 3.14,
            'balance' => 3.14,
            'balanceInCurrency' => 3.14,
            'cashDiscount' => 3.14,
            'cashDiscountInCurrency' => 3.14,
            'paymentMethod' => null,
            'customerRefNumber' => 'String value',
            'invoiceText' => 'String value',
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'createdDateTime' => '2025-11-22T10:40:04.065Z',
            'note' => 'String value',
            'vatTotal' => 3.14,
            'vatTotalInCurrency' => 3.14,
            'location' => null,
            'branchNumber' => null,
            'cashAccount' => 'String value',
            'project' => null,
            'account' => null,
            'subaccount' => null,
            'customerProject' => 'String value',
            'errorInfo' => 'String value',
            'id' => 'mock-id-123',
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
        ->branch->toBeNull()
        ->customer->toBeNull()
        ->documentType->toBe('String value')
        ->referenceNumber->toBe('String value')
        ->postPeriod->toBe('String value')
        ->financialPeriod->toBe('String value')
        ->closedFinancialPeriod->toBe('String value')
        ->documentDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->origInvoiceDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->status->toBe('String value')
        ->currencyId->toBe('mock-id-123')
        ->amount->toBe(3.14)
        ->amountInCurrency->toBe(3.14)
        ->balance->toBe(3.14)
        ->balanceInCurrency->toBe(3.14)
        ->cashDiscount->toBe(3.14)
        ->cashDiscountInCurrency->toBe(3.14)
        ->paymentMethod->toBeNull()
        ->customerRefNumber->toBe('String value')
        ->invoiceText->toBe('String value')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->createdDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->note->toBe('String value')
        ->vatTotal->toBe(3.14)
        ->vatTotalInCurrency->toBe(3.14)
        ->location->toBeNull()
        ->branchNumber->toBeNull()
        ->cashAccount->toBe('String value')
        ->project->toBeNull()
        ->account->toBeNull()
        ->subaccount->toBeNull()
        ->customerProject->toBe('String value')
        ->errorInfo->toBe('String value')
        ->id->toBe('mock-id-123');
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
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value')
            ->errorInfo->toBe('test value');

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
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value')
            ->errorInfo->toBe('test value');

        return true;
    });
});
