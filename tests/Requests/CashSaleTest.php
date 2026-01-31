<?php

use Pionect\VismaSdk\Dto\CashSaleUpdateDto;
use Pionect\VismaSdk\Requests\CashSale\CashSaleGetAllCashSalesRequest;
use Pionect\VismaSdk\Requests\CashSale\CashSaleGetBydocumentNumberRequest;
use Pionect\VismaSdk\Requests\CashSale\CashSalePostRequest;
use Pionect\VismaSdk\Requests\CashSale\CashSalePutBydocumentNumberRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the cashSaleGetBydocumentNumberRequest method in the CashSale resource', function () {
    Saloon::fake([
        CashSaleGetBydocumentNumberRequest::class => MockResponse::make([
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

    $request = new CashSaleGetBydocumentNumberRequest(
        documentNumber: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CashSaleGetBydocumentNumberRequest::class);

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

it('calls the cashSalePutBydocumentNumberRequest method in the CashSale resource', function () {
    $bodyData = new CashSaleUpdateDto(
        paymentMethodId: 'mock-id-123',
        creditTermsId: 'mock-id-123',
        paymentReference: 'String value',
        cashSaleLines: [],
        referenceNumber: 'String value',
        customerNumber: 'String value',
        childCustomerNumber: 'String value',
        consolidateInvoices: true,
        documentDate: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        origInvoiceDate: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        hold: true,
        postPeriod: 'String value',
        financialPeriod: 'String value',
        invoiceText: 'String value',
        locationId: 'mock-id-123',
        salesPersonId: 42,
        salesperson: 'String value',
        note: 'String value',
        branchNumber: 'String value',
        cashAccount: 'String value',
        dontPrint: true,
        dontEmail: true
    );

    Saloon::fake([
        CashSalePutBydocumentNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new CashSalePutBydocumentNumberRequest(
        documentNumber: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CashSalePutBydocumentNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the cashSaleGetAllCashSalesRequest method in the CashSale resource', function () {
    Saloon::fake([
        CashSaleGetAllCashSalesRequest::class => MockResponse::make([
            0 => [
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
            ],
            1 => [
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
            ],
        ], 200),
    ]);

    $request = new CashSaleGetAllCashSalesRequest(
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

    Saloon::assertSent(CashSaleGetAllCashSalesRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toHaveCount(2);
    expect($collection->first())
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

it('calls the cashSalePostRequest method in the CashSale resource', function () {
    $bodyData = new CashSaleUpdateDto(
        paymentMethodId: 'mock-id-123',
        creditTermsId: 'mock-id-123',
        paymentReference: 'String value',
        cashSaleLines: [],
        referenceNumber: 'String value',
        customerNumber: 'String value',
        childCustomerNumber: 'String value',
        consolidateInvoices: true,
        documentDate: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        origInvoiceDate: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        hold: true,
        postPeriod: 'String value',
        financialPeriod: 'String value',
        invoiceText: 'String value',
        locationId: 'mock-id-123',
        salesPersonId: 42,
        salesperson: 'String value',
        note: 'String value',
        branchNumber: 'String value',
        cashAccount: 'String value',
        dontPrint: true,
        dontEmail: true
    );

    Saloon::fake([
        CashSalePostRequest::class => MockResponse::make([], 201),
    ]);

    $request = new CashSalePostRequest(
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CashSalePostRequest::class);

    expect($response->status())->toBe(201);
});
