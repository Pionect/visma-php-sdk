<?php

use Pionect\VismaSdk\Dto\SupplierUpdateDto;
use Pionect\VismaSdk\Enums\AccountTypeEnum;
use Pionect\VismaSdk\Enums\ContactContactMethodEnum;
use Pionect\VismaSdk\Enums\ContactTitleEnum;
use Pionect\VismaSdk\Enums\EmployeeStatusEnum;
use Pionect\VismaSdk\Enums\EntryTypeTaxCalculationModeEnum;
use Pionect\VismaSdk\Enums\LandedCostApDocTypeEnum;
use Pionect\VismaSdk\Enums\SupplierAccountUsedForPaymentEnum;
use Pionect\VismaSdk\Enums\SupplierChargeBearerEnum;
use Pionect\VismaSdk\Enums\SupplierInvoiceForSupplierQueryParametersStatusEnum;
use Pionect\VismaSdk\Enums\SupplierPaymentByEnum;
use Pionect\VismaSdk\Enums\TimeCardSummaryApprovalStatusEnum;
use Pionect\VismaSdk\Requests\Supplier\SupplierGetAllContactForSupplierBysupplierCdRequest;
use Pionect\VismaSdk\Requests\Supplier\SupplierGetAllDocumentsForSupplierBysupplierNumberRequest;
use Pionect\VismaSdk\Requests\Supplier\SupplierGetAllInvoicesForSupplierBysupplierNumberRequest;
use Pionect\VismaSdk\Requests\Supplier\SupplierGetAllRequest;
use Pionect\VismaSdk\Requests\Supplier\SupplierGetAllSupplierBalanceRequest;
use Pionect\VismaSdk\Requests\Supplier\SupplierGetAllSupplierClassesRequest;
use Pionect\VismaSdk\Requests\Supplier\SupplierGetAllSupplierPobalanceRequest;
use Pionect\VismaSdk\Requests\Supplier\SupplierGetBysupplierCdRequest;
use Pionect\VismaSdk\Requests\Supplier\SupplierGetSpecificSupplierClassBysupplierClassIdRequest;
use Pionect\VismaSdk\Requests\Supplier\SupplierGetSupplierBalanceBysupplierCdRequest;
use Pionect\VismaSdk\Requests\Supplier\SupplierGetSupplierPobalanceBysupplierCdRequest;
use Pionect\VismaSdk\Requests\Supplier\SupplierPostRequest;
use Pionect\VismaSdk\Requests\Supplier\SupplierPutBysupplierCdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the supplierGetAllSupplierClassesRequest method in the Supplier resource', function () {
    Saloon::fake([
        SupplierGetAllSupplierClassesRequest::class => MockResponse::make([
            0 => [
                'attributes' => [],
                'paymentMethodId' => 'mock-id-123',
                'paymentMethodDescription' => 'String value',
                'timeStamp' => 'String value',
                'description' => 'String value',
            ],
            1 => [
                'attributes' => [],
                'paymentMethodId' => 'mock-id-123',
                'paymentMethodDescription' => 'String value',
                'timeStamp' => 'String value',
                'description' => 'String value',
            ],
        ], 200),
    ]);

    $request = new SupplierGetAllSupplierClassesRequest(
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierGetAllSupplierClassesRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toHaveCount(2);
    expect($collection->first())
        ->paymentMethodId->toBe('mock-id-123')
        ->paymentMethodDescription->toBe('String value')
        ->timeStamp->toBe('String value')
        ->description->toBe('String value');
});

it('calls the supplierGetSpecificSupplierClassBysupplierClassIdRequest method in the Supplier resource', function () {
    Saloon::fake([
        SupplierGetSpecificSupplierClassBysupplierClassIdRequest::class => MockResponse::make([
            'attributes' => [],
            'paymentMethodId' => 'mock-id-123',
            'paymentMethodDescription' => 'String value',
            'timeStamp' => 'String value',
            'description' => 'String value',
        ], 200),
    ]);

    $request = new SupplierGetSpecificSupplierClassBysupplierClassIdRequest(
        supplierClassId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierGetSpecificSupplierClassBysupplierClassIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->paymentMethodId->toBe('mock-id-123')
        ->paymentMethodDescription->toBe('String value')
        ->timeStamp->toBe('String value')
        ->description->toBe('String value');
});

it('calls the supplierGetAllSupplierBalanceRequest method in the Supplier resource', function () {
    Saloon::fake([
        SupplierGetAllSupplierBalanceRequest::class => MockResponse::make([
            0 => [
                'branchNumber' => 'String value',
                'supplier' => [
                    'internalId' => 42,
                    'number' => 'String value',
                    'name' => 'String value',
                ],
                'balance' => 42,
                'unreleasedPurchasesNotInApproval' => [
                    'withoutVat' => 42,
                    'withVat' => 42,
                ],
                'totalSentForApproval' => [
                    'withoutVat' => 42,
                    'withVat' => 42,
                ],
                'totalPurchaseInvoicePeriod' => [
                    'withoutVat' => 42,
                    'withVat' => 42,
                ],
                'totalPurchaseInvoiceYear' => [
                    'withoutVat' => 42,
                    'withVat' => 42,
                ],
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            ],
            1 => [
                'branchNumber' => 'String value',
                'supplier' => [
                    'internalId' => 42,
                    'number' => 'String value',
                    'name' => 'String value',
                ],
                'balance' => 42,
                'unreleasedPurchasesNotInApproval' => [
                    'withoutVat' => 42,
                    'withVat' => 42,
                ],
                'totalSentForApproval' => [
                    'withoutVat' => 42,
                    'withVat' => 42,
                ],
                'totalPurchaseInvoicePeriod' => [
                    'withoutVat' => 42,
                    'withVat' => 42,
                ],
                'totalPurchaseInvoiceYear' => [
                    'withoutVat' => 42,
                    'withVat' => 42,
                ],
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            ],
        ], 200),
    ]);

    $request = new SupplierGetAllSupplierBalanceRequest(
        greaterThanValue: 'test string',
        numberToRead: 123,
        skipRecords: 123,
        orderBy: 'test string',
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierGetAllSupplierBalanceRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toHaveCount(2);
    expect($collection->first())
        ->branchNumber->toBe('String value')
        ->supplier->internalId->toBe(42)
        ->supplier->number->toBe('String value')
        ->supplier->name->toBe('String value')
        ->balance->toBe(42)
        ->unreleasedPurchasesNotInApproval->withoutVat->toBe(42)
        ->unreleasedPurchasesNotInApproval->withVat->toBe(42)
        ->totalSentForApproval->withoutVat->toBe(42)
        ->totalSentForApproval->withVat->toBe(42)
        ->totalPurchaseInvoicePeriod->withoutVat->toBe(42)
        ->totalPurchaseInvoicePeriod->withVat->toBe(42)
        ->totalPurchaseInvoiceYear->withoutVat->toBe(42)
        ->totalPurchaseInvoiceYear->withVat->toBe(42)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'));
});

it('calls the supplierGetAllSupplierPobalanceRequest method in the Supplier resource', function () {
    Saloon::fake([
        SupplierGetAllSupplierPobalanceRequest::class => MockResponse::make([
            0 => [
                'supplier' => [
                    'internalId' => 42,
                    'number' => 'String value',
                    'name' => 'String value',
                ],
                'totalPoonHoldOrderTotal' => 42,
                'totalPoonHoldLineTotal' => 42,
                'totalOpenPoorderTotal' => 42,
                'totalOpenPolineTotal' => 42,
                'totalClosedPoorderTotal' => 42,
                'totalClosedPolineTotal' => 42,
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            ],
            1 => [
                'supplier' => [
                    'internalId' => 42,
                    'number' => 'String value',
                    'name' => 'String value',
                ],
                'totalPoonHoldOrderTotal' => 42,
                'totalPoonHoldLineTotal' => 42,
                'totalOpenPoorderTotal' => 42,
                'totalOpenPolineTotal' => 42,
                'totalClosedPoorderTotal' => 42,
                'totalClosedPolineTotal' => 42,
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            ],
        ], 200),
    ]);

    $request = new SupplierGetAllSupplierPobalanceRequest(
        greaterThanValue: 'test string',
        numberToRead: 123,
        skipRecords: 123,
        orderBy: 'test string',
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierGetAllSupplierPobalanceRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toHaveCount(2);
    expect($collection->first())
        ->supplier->internalId->toBe(42)
        ->supplier->number->toBe('String value')
        ->supplier->name->toBe('String value')
        ->totalPoonHoldOrderTotal->toBe(42)
        ->totalPoonHoldLineTotal->toBe(42)
        ->totalOpenPoorderTotal->toBe(42)
        ->totalOpenPolineTotal->toBe(42)
        ->totalClosedPoorderTotal->toBe(42)
        ->totalClosedPolineTotal->toBe(42)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'));
});

it('calls the supplierGetBysupplierCdRequest method in the Supplier resource', function () {
    Saloon::fake([
        SupplierGetBysupplierCdRequest::class => MockResponse::make([
            'internalId' => 42,
            'number' => 'String value',
            'name' => 'String value',
            'status' => 'Active',
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
            'supplierClass' => [
                'description' => 'String value',
            ],
            'creditTerms' => [
                'description' => 'String value',
            ],
            'documentLanguage' => 'String value',
            'currencyId' => 'mock-id-123',
            'remitAddress' => [
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
            'remitContact' => [
                'contactId' => 42,
                'name' => 'String value',
                'attention' => 'String value',
                'email' => 'test@example.com',
                'web' => 'String value',
                'phone1' => 'String value',
                'phone2' => 'String value',
                'fax' => 'String value',
            ],
            'paymentMethod' => [
                'description' => 'String value',
            ],
            'cashAccount' => 'String value',
            'chargeBearer' => 'Payer',
            'accountUsedForPayment' => 'IBAN',
            'paymentBy' => 'DueDate',
            'paymentLeadTime' => 42,
            'paymentRefDisplayMask' => 'String value',
            'paySeparately' => true,
            'supplierAddress' => [
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
            'supplierContact' => [
                'contactId' => 42,
                'name' => 'String value',
                'attention' => 'String value',
                'email' => 'test@example.com',
                'web' => 'String value',
                'phone1' => 'String value',
                'phone2' => 'String value',
                'fax' => 'String value',
            ],
            'location' => [
                'countryId' => 'mock-id-123',
                'name' => 'String value',
            ],
            'vatRegistrationId' => 'mock-id-123',
            'corporateId' => 'mock-id-123',
            'vatZone' => [
                'description' => 'String value',
                'defaultVatCategory' => 'String value',
                'defaultTaxCategory' => [
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'errorInfo' => 'String value',
            ],
            'glAccounts' => [
                'supplierAccount' => [
                    'type' => 'String value',
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'supplierSubaccount' => [
                    'active' => true,
                    'description' => 'String value',
                ],
                'expenseAccount' => [
                    'type' => 'String value',
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'expenseAccountNonTax' => [
                    'type' => 'String value',
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'expenseEuaccount' => [
                    'type' => 'String value',
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'expenseAccountImport' => [
                    'type' => 'String value',
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'expenseSubaccount' => [
                    'active' => true,
                    'description' => 'String value',
                ],
            ],
            'attributes' => [],
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'supplierPaymentMethodDetails' => [],
            'retainageApply' => true,
            'retainageCashAccountId' => 'mock-id-123',
            'retainagePct' => 42,
            'note' => 'String value',
            'numberOfEmployees' => 42,
            'naceCode' => 'String value',
            'landedCostSupplier' => true,
            'currencyOverride' => true,
            'currencyRateOverride' => true,
            'timeStamp' => 'String value',
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new SupplierGetBysupplierCdRequest(
        supplierCd: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierGetBysupplierCdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->internalId->toBe(42)
        ->number->toBe('String value')
        ->name->toBe('String value')
        ->status->toEqual(EmployeeStatusEnum::ACTIVE)
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
        ->supplierClass->description->toBe('String value')
        ->creditTerms->description->toBe('String value')
        ->documentLanguage->toBe('String value')
        ->currencyId->toBe('mock-id-123')
        ->remitAddress->addressId->toBe(42)
        ->remitAddress->addressLine1->toBe('String value')
        ->remitAddress->addressLine2->toBe('String value')
        ->remitAddress->addressLine3->toBe('String value')
        ->remitAddress->postalCode->toBe('String value')
        ->remitAddress->city->toBe('String value')
        ->remitAddress->country->name->toBe('String value')
        ->remitAddress->country->errorInfo->toBe('String value')
        ->remitAddress->county->name->toBe('String value')
        ->remitContact->contactId->toBe(42)
        ->remitContact->name->toBe('String value')
        ->remitContact->attention->toBe('String value')
        ->remitContact->email->toBe('test@example.com')
        ->remitContact->web->toBe('String value')
        ->remitContact->phone1->toBe('String value')
        ->remitContact->phone2->toBe('String value')
        ->remitContact->fax->toBe('String value')
        ->paymentMethod->description->toBe('String value')
        ->cashAccount->toBe('String value')
        ->chargeBearer->toEqual(SupplierChargeBearerEnum::PAYER)
        ->accountUsedForPayment->toEqual(SupplierAccountUsedForPaymentEnum::IBAN)
        ->paymentBy->toEqual(SupplierPaymentByEnum::DUE_DATE)
        ->paymentLeadTime->toBe(42)
        ->paymentRefDisplayMask->toBe('String value')
        ->paySeparately->toBe(true)
        ->supplierAddress->addressId->toBe(42)
        ->supplierAddress->addressLine1->toBe('String value')
        ->supplierAddress->addressLine2->toBe('String value')
        ->supplierAddress->addressLine3->toBe('String value')
        ->supplierAddress->postalCode->toBe('String value')
        ->supplierAddress->city->toBe('String value')
        ->supplierAddress->country->name->toBe('String value')
        ->supplierAddress->country->errorInfo->toBe('String value')
        ->supplierAddress->county->name->toBe('String value')
        ->supplierContact->contactId->toBe(42)
        ->supplierContact->name->toBe('String value')
        ->supplierContact->attention->toBe('String value')
        ->supplierContact->email->toBe('test@example.com')
        ->supplierContact->web->toBe('String value')
        ->supplierContact->phone1->toBe('String value')
        ->supplierContact->phone2->toBe('String value')
        ->supplierContact->fax->toBe('String value')
        ->location->countryId->toBe('mock-id-123')
        ->location->name->toBe('String value')
        ->vatRegistrationId->toBe('mock-id-123')
        ->corporateId->toBe('mock-id-123')
        ->vatZone->description->toBe('String value')
        ->vatZone->defaultVatCategory->toBe('String value')
        ->vatZone->defaultTaxCategory->number->toBe('String value')
        ->vatZone->defaultTaxCategory->description->toBe('String value')
        ->vatZone->errorInfo->toBe('String value')
        ->glAccounts->supplierAccount->type->toBe('String value')
        ->glAccounts->supplierAccount->number->toBe('String value')
        ->glAccounts->supplierAccount->description->toBe('String value')
        ->glAccounts->supplierSubaccount->active->toBe(true)
        ->glAccounts->supplierSubaccount->description->toBe('String value')
        ->glAccounts->expenseAccount->type->toBe('String value')
        ->glAccounts->expenseAccount->number->toBe('String value')
        ->glAccounts->expenseAccount->description->toBe('String value')
        ->glAccounts->expenseAccountNonTax->type->toBe('String value')
        ->glAccounts->expenseAccountNonTax->number->toBe('String value')
        ->glAccounts->expenseAccountNonTax->description->toBe('String value')
        ->glAccounts->expenseEuaccount->type->toBe('String value')
        ->glAccounts->expenseEuaccount->number->toBe('String value')
        ->glAccounts->expenseEuaccount->description->toBe('String value')
        ->glAccounts->expenseAccountImport->type->toBe('String value')
        ->glAccounts->expenseAccountImport->number->toBe('String value')
        ->glAccounts->expenseAccountImport->description->toBe('String value')
        ->glAccounts->expenseSubaccount->active->toBe(true)
        ->glAccounts->expenseSubaccount->description->toBe('String value')
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->retainageApply->toBe(true)
        ->retainageCashAccountId->toBe('mock-id-123')
        ->retainagePct->toBe(42)
        ->note->toBe('String value')
        ->numberOfEmployees->toBe(42)
        ->naceCode->toBe('String value')
        ->landedCostSupplier->toBe(true)
        ->currencyOverride->toBe(true)
        ->currencyRateOverride->toBe(true)
        ->timeStamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the supplierPutBysupplierCdRequest method in the Supplier resource', function () {
    $bodyData = new SupplierUpdateDto(
        number: 'String value',
        name: 'String value',
        status: EmployeeStatusEnum::ACTIVE,
        accountReference: 'String value',
        numberOfEmployees: 42,
        parentRecordNumber: 'String value',
        supplierClassId: 'mock-id-123',
        overrideWithClassValues: true,
        creditTermsId: 'mock-id-123',
        documentLanguage: 'String value',
        currencyId: 'mock-id-123',
        currencyOverride: true,
        currencyRateOverride: true,
        paymentMethodId: 'mock-id-123',
        cashAccount: 'String value',
        paymentLeadTime: 42,
        paymentRefDisplayMask: 'String value',
        paySeparately: true,
        vatRegistrationId: 'mock-id-123',
        corporateId: 'mock-id-123',
        vatZoneId: 'mock-id-123',
        chargeBearer: SupplierChargeBearerEnum::PAYER,
        accountUsedForPayment: SupplierAccountUsedForPaymentEnum::IBAN,
        paymentBy: SupplierPaymentByEnum::DUE_DATE,
        mainAddress: new \Pionect\VismaSdk\Dto\AddressUpdateDto(
            addressLine1: 'String value',
            addressLine2: 'String value',
            addressLine3: 'String value',
            postalCode: 'String value',
            city: 'String value',
            countryId: 'mock-id-123',
            county: 'String value'
        ),
        mainContact: new \Pionect\VismaSdk\Dto\ContactInfoUpdateDto(
            name: 'String value',
            attention: 'String value',
            email: 'test@example.com',
            web: 'String value',
            phone1: 'String value',
            phone2: 'String value',
            fax: 'String value'
        ),
        remitAddress: new \Pionect\VismaSdk\Dto\AddressUpdateDto(
            addressLine1: 'String value',
            addressLine2: 'String value',
            addressLine3: 'String value',
            postalCode: 'String value',
            city: 'String value',
            countryId: 'mock-id-123',
            county: 'String value'
        ),
        remitContact: new \Pionect\VismaSdk\Dto\ContactInfoUpdateDto(
            name: 'String value',
            attention: 'String value',
            email: 'test@example.com',
            web: 'String value',
            phone1: 'String value',
            phone2: 'String value',
            fax: 'String value'
        ),
        supplierAddress: new \Pionect\VismaSdk\Dto\AddressUpdateDto(
            addressLine1: 'String value',
            addressLine2: 'String value',
            addressLine3: 'String value',
            postalCode: 'String value',
            city: 'String value',
            countryId: 'mock-id-123',
            county: 'String value'
        ),
        supplierContact: new \Pionect\VismaSdk\Dto\ContactInfoUpdateDto(
            name: 'String value',
            attention: 'String value',
            email: 'test@example.com',
            web: 'String value',
            phone1: 'String value',
            phone2: 'String value',
            fax: 'String value'
        ),
        glAccounts: new \Pionect\VismaSdk\Dto\SupplierGlAccountsUpdateDto(
            supplierAccount: 'String value',
            supplierSubaccount: 'String value',
            expenseAccount: 'String value',
            expenseAccountNonTax: 'String value',
            expenseEuaccount: 'String value',
            expenseAccountImport: 'String value',
            expenseSubaccount: 'String value'
        ),
        supplierPaymentMethodDetails: [],
        attributeLines: [],
        retainageCashAccountId: 'mock-id-123',
        retainageApply: true,
        retainagePct: 42,
        note: 'String value',
        overrideNumberSeries: true,
        naceCode: 'String value',
        landedCostSupplier: true
    );

    Saloon::fake([
        SupplierPutBysupplierCdRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SupplierPutBysupplierCdRequest(
        supplierCd: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierPutBysupplierCdRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the supplierGetAllRequest method in the Supplier resource', function () {
    Saloon::fake([
        SupplierGetAllRequest::class => MockResponse::make([
            0 => [
                'internalId' => 42,
                'number' => 'String value',
                'name' => 'String value',
                'status' => 'Active',
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
                'supplierClass' => [
                    'description' => 'String value',
                ],
                'creditTerms' => [
                    'description' => 'String value',
                ],
                'documentLanguage' => 'String value',
                'currencyId' => 'mock-id-123',
                'remitAddress' => [
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
                'remitContact' => [
                    'contactId' => 42,
                    'name' => 'String value',
                    'attention' => 'String value',
                    'email' => 'test@example.com',
                    'web' => 'String value',
                    'phone1' => 'String value',
                    'phone2' => 'String value',
                    'fax' => 'String value',
                ],
                'paymentMethod' => [
                    'description' => 'String value',
                ],
                'cashAccount' => 'String value',
                'chargeBearer' => 'Payer',
                'accountUsedForPayment' => 'IBAN',
                'paymentBy' => 'DueDate',
                'paymentLeadTime' => 42,
                'paymentRefDisplayMask' => 'String value',
                'paySeparately' => true,
                'supplierAddress' => [
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
                'supplierContact' => [
                    'contactId' => 42,
                    'name' => 'String value',
                    'attention' => 'String value',
                    'email' => 'test@example.com',
                    'web' => 'String value',
                    'phone1' => 'String value',
                    'phone2' => 'String value',
                    'fax' => 'String value',
                ],
                'location' => [
                    'countryId' => 'mock-id-123',
                    'name' => 'String value',
                ],
                'vatRegistrationId' => 'mock-id-123',
                'corporateId' => 'mock-id-123',
                'vatZone' => [
                    'description' => 'String value',
                    'defaultVatCategory' => 'String value',
                    'defaultTaxCategory' => [
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'errorInfo' => 'String value',
                ],
                'glAccounts' => [
                    'supplierAccount' => [
                        'type' => 'String value',
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'supplierSubaccount' => [
                        'active' => true,
                        'description' => 'String value',
                    ],
                    'expenseAccount' => [
                        'type' => 'String value',
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'expenseAccountNonTax' => [
                        'type' => 'String value',
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'expenseEuaccount' => [
                        'type' => 'String value',
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'expenseAccountImport' => [
                        'type' => 'String value',
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'expenseSubaccount' => [
                        'active' => true,
                        'description' => 'String value',
                    ],
                ],
                'attributes' => [],
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'supplierPaymentMethodDetails' => [],
                'retainageApply' => true,
                'retainageCashAccountId' => 'mock-id-123',
                'retainagePct' => 42,
                'note' => 'String value',
                'numberOfEmployees' => 42,
                'naceCode' => 'String value',
                'landedCostSupplier' => true,
                'currencyOverride' => true,
                'currencyRateOverride' => true,
                'timeStamp' => 'String value',
                'errorInfo' => 'String value',
            ],
            1 => [
                'internalId' => 42,
                'number' => 'String value',
                'name' => 'String value',
                'status' => 'Active',
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
                'supplierClass' => [
                    'description' => 'String value',
                ],
                'creditTerms' => [
                    'description' => 'String value',
                ],
                'documentLanguage' => 'String value',
                'currencyId' => 'mock-id-123',
                'remitAddress' => [
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
                'remitContact' => [
                    'contactId' => 42,
                    'name' => 'String value',
                    'attention' => 'String value',
                    'email' => 'test@example.com',
                    'web' => 'String value',
                    'phone1' => 'String value',
                    'phone2' => 'String value',
                    'fax' => 'String value',
                ],
                'paymentMethod' => [
                    'description' => 'String value',
                ],
                'cashAccount' => 'String value',
                'chargeBearer' => 'Payer',
                'accountUsedForPayment' => 'IBAN',
                'paymentBy' => 'DueDate',
                'paymentLeadTime' => 42,
                'paymentRefDisplayMask' => 'String value',
                'paySeparately' => true,
                'supplierAddress' => [
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
                'supplierContact' => [
                    'contactId' => 42,
                    'name' => 'String value',
                    'attention' => 'String value',
                    'email' => 'test@example.com',
                    'web' => 'String value',
                    'phone1' => 'String value',
                    'phone2' => 'String value',
                    'fax' => 'String value',
                ],
                'location' => [
                    'countryId' => 'mock-id-123',
                    'name' => 'String value',
                ],
                'vatRegistrationId' => 'mock-id-123',
                'corporateId' => 'mock-id-123',
                'vatZone' => [
                    'description' => 'String value',
                    'defaultVatCategory' => 'String value',
                    'defaultTaxCategory' => [
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'errorInfo' => 'String value',
                ],
                'glAccounts' => [
                    'supplierAccount' => [
                        'type' => 'String value',
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'supplierSubaccount' => [
                        'active' => true,
                        'description' => 'String value',
                    ],
                    'expenseAccount' => [
                        'type' => 'String value',
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'expenseAccountNonTax' => [
                        'type' => 'String value',
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'expenseEuaccount' => [
                        'type' => 'String value',
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'expenseAccountImport' => [
                        'type' => 'String value',
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'expenseSubaccount' => [
                        'active' => true,
                        'description' => 'String value',
                    ],
                ],
                'attributes' => [],
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'supplierPaymentMethodDetails' => [],
                'retainageApply' => true,
                'retainageCashAccountId' => 'mock-id-123',
                'retainagePct' => 42,
                'note' => 'String value',
                'numberOfEmployees' => 42,
                'naceCode' => 'String value',
                'landedCostSupplier' => true,
                'currencyOverride' => true,
                'currencyRateOverride' => true,
                'timeStamp' => 'String value',
                'errorInfo' => 'String value',
            ],
        ], 200),
    ]);

    $request = new SupplierGetAllRequest(
        greaterThanValue: 'test string',
        numberToRead: 123,
        skipRecords: 123,
        orderBy: 'test string',
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        name: 'test string',
        status: 'test string',
        vatRegistrationId: 'test string',
        corporateId: 'test string',
        attributes: 'test string',
        expandAccountInformation: true,
        expandNote: true,
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierGetAllRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toHaveCount(2);
    expect($collection->first())
        ->internalId->toBe(42)
        ->number->toBe('String value')
        ->name->toBe('String value')
        ->status->toEqual(EmployeeStatusEnum::ACTIVE)
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
        ->supplierClass->description->toBe('String value')
        ->creditTerms->description->toBe('String value')
        ->documentLanguage->toBe('String value')
        ->currencyId->toBe('mock-id-123')
        ->remitAddress->addressId->toBe(42)
        ->remitAddress->addressLine1->toBe('String value')
        ->remitAddress->addressLine2->toBe('String value')
        ->remitAddress->addressLine3->toBe('String value')
        ->remitAddress->postalCode->toBe('String value')
        ->remitAddress->city->toBe('String value')
        ->remitAddress->country->name->toBe('String value')
        ->remitAddress->country->errorInfo->toBe('String value')
        ->remitAddress->county->name->toBe('String value')
        ->remitContact->contactId->toBe(42)
        ->remitContact->name->toBe('String value')
        ->remitContact->attention->toBe('String value')
        ->remitContact->email->toBe('test@example.com')
        ->remitContact->web->toBe('String value')
        ->remitContact->phone1->toBe('String value')
        ->remitContact->phone2->toBe('String value')
        ->remitContact->fax->toBe('String value')
        ->paymentMethod->description->toBe('String value')
        ->cashAccount->toBe('String value')
        ->chargeBearer->toEqual(SupplierChargeBearerEnum::PAYER)
        ->accountUsedForPayment->toEqual(SupplierAccountUsedForPaymentEnum::IBAN)
        ->paymentBy->toEqual(SupplierPaymentByEnum::DUE_DATE)
        ->paymentLeadTime->toBe(42)
        ->paymentRefDisplayMask->toBe('String value')
        ->paySeparately->toBe(true)
        ->supplierAddress->addressId->toBe(42)
        ->supplierAddress->addressLine1->toBe('String value')
        ->supplierAddress->addressLine2->toBe('String value')
        ->supplierAddress->addressLine3->toBe('String value')
        ->supplierAddress->postalCode->toBe('String value')
        ->supplierAddress->city->toBe('String value')
        ->supplierAddress->country->name->toBe('String value')
        ->supplierAddress->country->errorInfo->toBe('String value')
        ->supplierAddress->county->name->toBe('String value')
        ->supplierContact->contactId->toBe(42)
        ->supplierContact->name->toBe('String value')
        ->supplierContact->attention->toBe('String value')
        ->supplierContact->email->toBe('test@example.com')
        ->supplierContact->web->toBe('String value')
        ->supplierContact->phone1->toBe('String value')
        ->supplierContact->phone2->toBe('String value')
        ->supplierContact->fax->toBe('String value')
        ->location->countryId->toBe('mock-id-123')
        ->location->name->toBe('String value')
        ->vatRegistrationId->toBe('mock-id-123')
        ->corporateId->toBe('mock-id-123')
        ->vatZone->description->toBe('String value')
        ->vatZone->defaultVatCategory->toBe('String value')
        ->vatZone->defaultTaxCategory->number->toBe('String value')
        ->vatZone->defaultTaxCategory->description->toBe('String value')
        ->vatZone->errorInfo->toBe('String value')
        ->glAccounts->supplierAccount->type->toBe('String value')
        ->glAccounts->supplierAccount->number->toBe('String value')
        ->glAccounts->supplierAccount->description->toBe('String value')
        ->glAccounts->supplierSubaccount->active->toBe(true)
        ->glAccounts->supplierSubaccount->description->toBe('String value')
        ->glAccounts->expenseAccount->type->toBe('String value')
        ->glAccounts->expenseAccount->number->toBe('String value')
        ->glAccounts->expenseAccount->description->toBe('String value')
        ->glAccounts->expenseAccountNonTax->type->toBe('String value')
        ->glAccounts->expenseAccountNonTax->number->toBe('String value')
        ->glAccounts->expenseAccountNonTax->description->toBe('String value')
        ->glAccounts->expenseEuaccount->type->toBe('String value')
        ->glAccounts->expenseEuaccount->number->toBe('String value')
        ->glAccounts->expenseEuaccount->description->toBe('String value')
        ->glAccounts->expenseAccountImport->type->toBe('String value')
        ->glAccounts->expenseAccountImport->number->toBe('String value')
        ->glAccounts->expenseAccountImport->description->toBe('String value')
        ->glAccounts->expenseSubaccount->active->toBe(true)
        ->glAccounts->expenseSubaccount->description->toBe('String value')
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->retainageApply->toBe(true)
        ->retainageCashAccountId->toBe('mock-id-123')
        ->retainagePct->toBe(42)
        ->note->toBe('String value')
        ->numberOfEmployees->toBe(42)
        ->naceCode->toBe('String value')
        ->landedCostSupplier->toBe(true)
        ->currencyOverride->toBe(true)
        ->currencyRateOverride->toBe(true)
        ->timeStamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the supplierPostRequest method in the Supplier resource', function () {
    $bodyData = new SupplierUpdateDto(
        number: 'String value',
        name: 'String value',
        status: EmployeeStatusEnum::ACTIVE,
        accountReference: 'String value',
        numberOfEmployees: 42,
        parentRecordNumber: 'String value',
        supplierClassId: 'mock-id-123',
        overrideWithClassValues: true,
        creditTermsId: 'mock-id-123',
        documentLanguage: 'String value',
        currencyId: 'mock-id-123',
        currencyOverride: true,
        currencyRateOverride: true,
        paymentMethodId: 'mock-id-123',
        cashAccount: 'String value',
        paymentLeadTime: 42,
        paymentRefDisplayMask: 'String value',
        paySeparately: true,
        vatRegistrationId: 'mock-id-123',
        corporateId: 'mock-id-123',
        vatZoneId: 'mock-id-123',
        chargeBearer: SupplierChargeBearerEnum::PAYER,
        accountUsedForPayment: SupplierAccountUsedForPaymentEnum::IBAN,
        paymentBy: SupplierPaymentByEnum::DUE_DATE,
        mainAddress: new \Pionect\VismaSdk\Dto\AddressUpdateDto(
            addressLine1: 'String value',
            addressLine2: 'String value',
            addressLine3: 'String value',
            postalCode: 'String value',
            city: 'String value',
            countryId: 'mock-id-123',
            county: 'String value'
        ),
        mainContact: new \Pionect\VismaSdk\Dto\ContactInfoUpdateDto(
            name: 'String value',
            attention: 'String value',
            email: 'test@example.com',
            web: 'String value',
            phone1: 'String value',
            phone2: 'String value',
            fax: 'String value'
        ),
        remitAddress: new \Pionect\VismaSdk\Dto\AddressUpdateDto(
            addressLine1: 'String value',
            addressLine2: 'String value',
            addressLine3: 'String value',
            postalCode: 'String value',
            city: 'String value',
            countryId: 'mock-id-123',
            county: 'String value'
        ),
        remitContact: new \Pionect\VismaSdk\Dto\ContactInfoUpdateDto(
            name: 'String value',
            attention: 'String value',
            email: 'test@example.com',
            web: 'String value',
            phone1: 'String value',
            phone2: 'String value',
            fax: 'String value'
        ),
        supplierAddress: new \Pionect\VismaSdk\Dto\AddressUpdateDto(
            addressLine1: 'String value',
            addressLine2: 'String value',
            addressLine3: 'String value',
            postalCode: 'String value',
            city: 'String value',
            countryId: 'mock-id-123',
            county: 'String value'
        ),
        supplierContact: new \Pionect\VismaSdk\Dto\ContactInfoUpdateDto(
            name: 'String value',
            attention: 'String value',
            email: 'test@example.com',
            web: 'String value',
            phone1: 'String value',
            phone2: 'String value',
            fax: 'String value'
        ),
        glAccounts: new \Pionect\VismaSdk\Dto\SupplierGlAccountsUpdateDto(
            supplierAccount: 'String value',
            supplierSubaccount: 'String value',
            expenseAccount: 'String value',
            expenseAccountNonTax: 'String value',
            expenseEuaccount: 'String value',
            expenseAccountImport: 'String value',
            expenseSubaccount: 'String value'
        ),
        supplierPaymentMethodDetails: [],
        attributeLines: [],
        retainageCashAccountId: 'mock-id-123',
        retainageApply: true,
        retainagePct: 42,
        note: 'String value',
        overrideNumberSeries: true,
        naceCode: 'String value',
        landedCostSupplier: true
    );

    Saloon::fake([
        SupplierPostRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SupplierPostRequest(
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierPostRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the supplierGetAllInvoicesForSupplierBysupplierNumberRequest method in the Supplier resource', function () {
    Saloon::fake([
        SupplierGetAllInvoicesForSupplierBysupplierNumberRequest::class => MockResponse::make([
            'taxDetailLines' => [],
            'attachments' => [],
            'approvalDetails' => [
                'attachmentId' => 'mock-id-123',
                'comment' => 'String value',
            ],
            'invoiceLines' => [],
            'landedCosts' => [],
            'hold' => true,
            'exchangeRate' => 42,
            'paymentRefNo' => 'String value',
            'creditTerms' => [
                'description' => 'String value',
            ],
            'retainageApply' => true,
            'cashDiscountDate' => '2025-11-22T10:40:04+00:00',
            'detailTotal' => 42,
            'detailTotalInCurrency' => 42,
            'discountTotal' => 42,
            'discountTotalInCurrency' => 42,
            'vatTaxableTotal' => 42,
            'vatTaxableTotalInCurrency' => 42,
            'vatExemptTotal' => 42,
            'vatExemptTotalInCurrency' => 42,
            'withholdingTax' => 42,
            'withholdingTaxInCurrency' => 42,
            'buyerReference' => 'String value',
            'roundingDiff' => 42,
            'roundingDiffInCurrency' => 42,
            'amount' => 42,
            'vatAmount' => 42,
            'taxCalculationMode' => 'TaxSetting',
            'supplierTaxZone' => [
                'description' => 'String value',
                'defaultVatCategory' => 'String value',
                'defaultTaxCategory' => [
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'errorInfo' => 'String value',
            ],
            'paySelected' => true,
            'curyRetainageTotal' => 42,
            'curyRetainageUnreleasedAmt' => 42,
            'documentVersionNumber' => 42,
            'supplier' => [
                'internalId' => 42,
                'number' => 'String value',
                'name' => 'String value',
            ],
            'documentType' => 'Check',
            'referenceNumber' => 'String value',
            'postPeriod' => 'String value',
            'financialPeriod' => 'String value',
            'date' => '2025-11-22T10:40:04+00:00',
            'origInvoiceDate' => '2025-11-22T10:40:04+00:00',
            'dueDate' => '2025-11-22T10:40:04+00:00',
            'approvalStatus' => 'New',
            'status' => 'Hold',
            'currencyId' => 'mock-id-123',
            'balance' => 42,
            'balanceInCurrency' => 42,
            'cashDiscount' => 42,
            'cashDiscountInCurrency' => 42,
            'paymentMethod' => [
                'description' => 'String value',
            ],
            'supplierReference' => 'String value',
            'description' => 'String value',
            'createdDateTime' => '2025-11-22T10:40:04+00:00',
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'note' => 'String value',
            'closedFinancialPeriod' => 'String value',
            'location' => [
                'countryId' => 'mock-id-123',
                'name' => 'String value',
            ],
            'vatTotal' => 42,
            'vatTotalInCurrency' => 42,
            'branchNumber' => [
                'number' => 'String value',
                'name' => 'String value',
            ],
            'payDate' => '2025-11-22T10:40:04+00:00',
            'paymentMessage' => 'String value',
            'cashAccount' => 'String value',
            'timeStamp' => 'String value',
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new SupplierGetAllInvoicesForSupplierBysupplierNumberRequest(
        supplierNumber: 'test string',
        expandAttachment: true,
        expandLandedCosts: true,
        documentType: 'test string',
        released: 123,
        project: 'test string',
        expandApproval: true,
        expandNote: true,
        numberToRead: 123,
        skipRecords: 123,
        status: 'test string',
        expandLinePrebookAccounts: true,
        branch: 'test string',
        financialPeriod: 'test string',
        dueDate: 'test string',
        dueDateCondition: 'test string',
        docDate: 'test string',
        docDateCondition: 'test string',
        item: 'test string',
        balance: 123.45,
        balanceCondition: 'test string',
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

    Saloon::assertSent(SupplierGetAllInvoicesForSupplierBysupplierNumberRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->approvalDetails->attachmentId->toBe('mock-id-123')
        ->approvalDetails->comment->toBe('String value')
        ->hold->toBe(true)
        ->exchangeRate->toBe(42)
        ->paymentRefNo->toBe('String value')
        ->creditTerms->description->toBe('String value')
        ->retainageApply->toBe(true)
        ->cashDiscountDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->detailTotal->toBe(42)
        ->detailTotalInCurrency->toBe(42)
        ->discountTotal->toBe(42)
        ->discountTotalInCurrency->toBe(42)
        ->vatTaxableTotal->toBe(42)
        ->vatTaxableTotalInCurrency->toBe(42)
        ->vatExemptTotal->toBe(42)
        ->vatExemptTotalInCurrency->toBe(42)
        ->withholdingTax->toBe(42)
        ->withholdingTaxInCurrency->toBe(42)
        ->buyerReference->toBe('String value')
        ->roundingDiff->toBe(42)
        ->roundingDiffInCurrency->toBe(42)
        ->amount->toBe(42)
        ->vatAmount->toBe(42)
        ->taxCalculationMode->toEqual(EntryTypeTaxCalculationModeEnum::TAX_SETTING)
        ->supplierTaxZone->description->toBe('String value')
        ->supplierTaxZone->defaultVatCategory->toBe('String value')
        ->supplierTaxZone->defaultTaxCategory->number->toBe('String value')
        ->supplierTaxZone->defaultTaxCategory->description->toBe('String value')
        ->supplierTaxZone->errorInfo->toBe('String value')
        ->paySelected->toBe(true)
        ->curyRetainageTotal->toBe(42)
        ->curyRetainageUnreleasedAmt->toBe(42)
        ->documentVersionNumber->toBe(42)
        ->supplier->internalId->toBe(42)
        ->supplier->number->toBe('String value')
        ->supplier->name->toBe('String value')
        ->documentType->toEqual(LandedCostApDocTypeEnum::CHECK)
        ->referenceNumber->toBe('String value')
        ->postPeriod->toBe('String value')
        ->financialPeriod->toBe('String value')
        ->date->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->origInvoiceDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->dueDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->approvalStatus->toEqual(TimeCardSummaryApprovalStatusEnum::NEW)
        ->status->toEqual(SupplierInvoiceForSupplierQueryParametersStatusEnum::HOLD)
        ->currencyId->toBe('mock-id-123')
        ->balance->toBe(42)
        ->balanceInCurrency->toBe(42)
        ->cashDiscount->toBe(42)
        ->cashDiscountInCurrency->toBe(42)
        ->paymentMethod->description->toBe('String value')
        ->supplierReference->toBe('String value')
        ->description->toBe('String value')
        ->createdDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->note->toBe('String value')
        ->closedFinancialPeriod->toBe('String value')
        ->location->countryId->toBe('mock-id-123')
        ->location->name->toBe('String value')
        ->vatTotal->toBe(42)
        ->vatTotalInCurrency->toBe(42)
        ->branchNumber->number->toBe('String value')
        ->branchNumber->name->toBe('String value')
        ->payDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->paymentMessage->toBe('String value')
        ->cashAccount->toBe('String value')
        ->timeStamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the supplierGetAllDocumentsForSupplierBysupplierNumberRequest method in the Supplier resource', function () {
    Saloon::fake([
        SupplierGetAllDocumentsForSupplierBysupplierNumberRequest::class => MockResponse::make([
            'account' => [
                'type' => 'Asset',
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
            'amount' => 42,
            'amountInCurrency' => 42,
            'branch' => [
                'number' => 'String value',
                'name' => 'String value',
            ],
            'supplier' => [
                'internalId' => 42,
                'number' => 'String value',
                'name' => 'String value',
            ],
            'documentType' => 'Check',
            'referenceNumber' => 'String value',
            'postPeriod' => 'String value',
            'financialPeriod' => 'String value',
            'date' => '2025-11-22T10:40:04+00:00',
            'origInvoiceDate' => '2025-11-22T10:40:04+00:00',
            'dueDate' => '2025-11-22T10:40:04+00:00',
            'approvalStatus' => 'New',
            'status' => 'Hold',
            'currencyId' => 'mock-id-123',
            'balance' => 42,
            'balanceInCurrency' => 42,
            'cashDiscount' => 42,
            'cashDiscountInCurrency' => 42,
            'paymentMethod' => [
                'description' => 'String value',
            ],
            'supplierReference' => 'String value',
            'description' => 'String value',
            'createdDateTime' => '2025-11-22T10:40:04+00:00',
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'note' => 'String value',
            'closedFinancialPeriod' => 'String value',
            'location' => [
                'countryId' => 'mock-id-123',
                'name' => 'String value',
            ],
            'vatTotal' => 42,
            'vatTotalInCurrency' => 42,
            'branchNumber' => [
                'number' => 'String value',
                'name' => 'String value',
            ],
            'payDate' => '2025-11-22T10:40:04+00:00',
            'paymentMessage' => 'String value',
            'cashAccount' => 'String value',
            'timeStamp' => 'String value',
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new SupplierGetAllDocumentsForSupplierBysupplierNumberRequest(
        supplierNumber: 'test string',
        documentType: 'test string',
        released: 123,
        project: 'test string',
        expandApproval: true,
        expandNote: true,
        numberToRead: 123,
        skipRecords: 123,
        status: 'test string',
        expandLinePrebookAccounts: true,
        branch: 'test string',
        financialPeriod: 'test string',
        dueDate: 'test string',
        dueDateCondition: 'test string',
        docDate: 'test string',
        docDateCondition: 'test string',
        item: 'test string',
        balance: 123.45,
        balanceCondition: 'test string',
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

    Saloon::assertSent(SupplierGetAllDocumentsForSupplierBysupplierNumberRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->account->type->toEqual(AccountTypeEnum::ASSET)
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
        ->amount->toBe(42)
        ->amountInCurrency->toBe(42)
        ->branch->number->toBe('String value')
        ->branch->name->toBe('String value')
        ->supplier->internalId->toBe(42)
        ->supplier->number->toBe('String value')
        ->supplier->name->toBe('String value')
        ->documentType->toEqual(LandedCostApDocTypeEnum::CHECK)
        ->referenceNumber->toBe('String value')
        ->postPeriod->toBe('String value')
        ->financialPeriod->toBe('String value')
        ->date->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->origInvoiceDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->dueDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->approvalStatus->toEqual(TimeCardSummaryApprovalStatusEnum::NEW)
        ->status->toEqual(SupplierInvoiceForSupplierQueryParametersStatusEnum::HOLD)
        ->currencyId->toBe('mock-id-123')
        ->balance->toBe(42)
        ->balanceInCurrency->toBe(42)
        ->cashDiscount->toBe(42)
        ->cashDiscountInCurrency->toBe(42)
        ->paymentMethod->description->toBe('String value')
        ->supplierReference->toBe('String value')
        ->description->toBe('String value')
        ->createdDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->note->toBe('String value')
        ->closedFinancialPeriod->toBe('String value')
        ->location->countryId->toBe('mock-id-123')
        ->location->name->toBe('String value')
        ->vatTotal->toBe(42)
        ->vatTotalInCurrency->toBe(42)
        ->branchNumber->number->toBe('String value')
        ->branchNumber->name->toBe('String value')
        ->payDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->paymentMessage->toBe('String value')
        ->cashAccount->toBe('String value')
        ->timeStamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the supplierGetSupplierBalanceBysupplierCdRequest method in the Supplier resource', function () {
    Saloon::fake([
        SupplierGetSupplierBalanceBysupplierCdRequest::class => MockResponse::make([
            'branchNumber' => 'String value',
            'supplier' => [
                'internalId' => 42,
                'number' => 'String value',
                'name' => 'String value',
            ],
            'balance' => 42,
            'unreleasedPurchasesNotInApproval' => [
                'withoutVat' => 42,
                'withVat' => 42,
            ],
            'totalSentForApproval' => [
                'withoutVat' => 42,
                'withVat' => 42,
            ],
            'totalPurchaseInvoicePeriod' => [
                'withoutVat' => 42,
                'withVat' => 42,
            ],
            'totalPurchaseInvoiceYear' => [
                'withoutVat' => 42,
                'withVat' => 42,
            ],
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
        ], 200),
    ]);

    $request = new SupplierGetSupplierBalanceBysupplierCdRequest(
        supplierCd: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierGetSupplierBalanceBysupplierCdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->branchNumber->toBe('String value')
        ->supplier->internalId->toBe(42)
        ->supplier->number->toBe('String value')
        ->supplier->name->toBe('String value')
        ->balance->toBe(42)
        ->unreleasedPurchasesNotInApproval->withoutVat->toBe(42)
        ->unreleasedPurchasesNotInApproval->withVat->toBe(42)
        ->totalSentForApproval->withoutVat->toBe(42)
        ->totalSentForApproval->withVat->toBe(42)
        ->totalPurchaseInvoicePeriod->withoutVat->toBe(42)
        ->totalPurchaseInvoicePeriod->withVat->toBe(42)
        ->totalPurchaseInvoiceYear->withoutVat->toBe(42)
        ->totalPurchaseInvoiceYear->withVat->toBe(42)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'));
});

it('calls the supplierGetSupplierPobalanceBysupplierCdRequest method in the Supplier resource', function () {
    Saloon::fake([
        SupplierGetSupplierPobalanceBysupplierCdRequest::class => MockResponse::make([
            'supplier' => [
                'internalId' => 42,
                'number' => 'String value',
                'name' => 'String value',
            ],
            'totalPoonHoldOrderTotal' => 42,
            'totalPoonHoldLineTotal' => 42,
            'totalOpenPoorderTotal' => 42,
            'totalOpenPolineTotal' => 42,
            'totalClosedPoorderTotal' => 42,
            'totalClosedPolineTotal' => 42,
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
        ], 200),
    ]);

    $request = new SupplierGetSupplierPobalanceBysupplierCdRequest(
        supplierCd: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierGetSupplierPobalanceBysupplierCdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->supplier->internalId->toBe(42)
        ->supplier->number->toBe('String value')
        ->supplier->name->toBe('String value')
        ->totalPoonHoldOrderTotal->toBe(42)
        ->totalPoonHoldLineTotal->toBe(42)
        ->totalOpenPoorderTotal->toBe(42)
        ->totalOpenPolineTotal->toBe(42)
        ->totalClosedPoorderTotal->toBe(42)
        ->totalClosedPolineTotal->toBe(42)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'));
});

it('calls the supplierGetAllContactForSupplierBysupplierCdRequest method in the Supplier resource', function () {
    Saloon::fake([
        SupplierGetAllContactForSupplierBysupplierCdRequest::class => MockResponse::make([
            'displayName' => 'String value',
            'active' => true,
            'title' => 'Doctor',
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
            'contactMethod' => 'Any',
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

    $request = new SupplierGetAllContactForSupplierBysupplierCdRequest(
        supplierCd: 'test string',
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

    Saloon::assertSent(SupplierGetAllContactForSupplierBysupplierCdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->displayName->toBe('String value')
        ->active->toBe(true)
        ->title->toEqual(ContactTitleEnum::DOCTOR)
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
        ->contactMethod->toEqual(ContactContactMethodEnum::ANY)
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
