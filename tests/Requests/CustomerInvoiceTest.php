<?php

use Pionect\VismaSdk\Dto\CustomerInvoiceUpdateDto;
use Pionect\VismaSdk\Dto\ReverseInvoiceActionDto;
use Pionect\VismaSdk\Requests\CustomerInvoice\CustomerInvoiceCorrectInvoiceByinvoiceNumberRequest;
use Pionect\VismaSdk\Requests\CustomerInvoice\CustomerInvoiceCreateHeaderAttachmentByinvoiceNumberRequest;
use Pionect\VismaSdk\Requests\CustomerInvoice\CustomerInvoiceCreateLineAttachmentByinvoiceNumberlineNumberRequest;
use Pionect\VismaSdk\Requests\CustomerInvoice\CustomerInvoiceCreateRequest;
use Pionect\VismaSdk\Requests\CustomerInvoice\CustomerInvoiceDeleteByinvoiceNumberRequest;
use Pionect\VismaSdk\Requests\CustomerInvoice\CustomerInvoiceGetAllRequest;
use Pionect\VismaSdk\Requests\CustomerInvoice\CustomerInvoiceGetByinvoiceNumberRequest;
use Pionect\VismaSdk\Requests\CustomerInvoice\CustomerInvoiceGetRotRutByrefNbrRequest;
use Pionect\VismaSdk\Requests\CustomerInvoice\CustomerInvoiceGetWorkTypesRequest;
use Pionect\VismaSdk\Requests\CustomerInvoice\CustomerInvoicePrintInvoiceByrefNbrRequest;
use Pionect\VismaSdk\Requests\CustomerInvoice\CustomerInvoiceReleaseInvoiceByinvoiceNumberRequest;
use Pionect\VismaSdk\Requests\CustomerInvoice\CustomerInvoiceReverseInvoiceAndApplyToNoteByinvoiceNumberRequest;
use Pionect\VismaSdk\Requests\CustomerInvoice\CustomerInvoiceReverseInvoiceByinvoiceNumberRequest;
use Pionect\VismaSdk\Requests\CustomerInvoice\CustomerInvoiceSendToAutoInvoiceByinvoiceNumberRequest;
use Pionect\VismaSdk\Requests\CustomerInvoice\CustomerInvoiceUpdateByinvoiceNumberRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the customerInvoiceGetWorkTypesRequest method in the CustomerInvoice resource', function () {
    Saloon::fake([
        CustomerInvoiceGetWorkTypesRequest::class => MockResponse::make([
            0 => [
                'rutRotType' => 'String value',
                'description' => 'String value',
                'xmlTag' => 'String value',
            ],
            1 => [
                'rutRotType' => 'String value',
                'description' => 'String value',
                'xmlTag' => 'String value',
            ],
        ], 200),
    ]);

    $request = new CustomerInvoiceGetWorkTypesRequest(
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerInvoiceGetWorkTypesRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toHaveCount(2);
    expect($collection->first())
        ->rutRotType->toBe('String value')
        ->description->toBe('String value')
        ->xmlTag->toBe('String value');
});

it('calls the customerInvoiceGetByinvoiceNumberRequest method in the CustomerInvoice resource', function () {
    Saloon::fake([
        CustomerInvoiceGetByinvoiceNumberRequest::class => MockResponse::make([
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

    $request = new CustomerInvoiceGetByinvoiceNumberRequest(
        invoiceNumber: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerInvoiceGetByinvoiceNumberRequest::class);

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

it('calls the customerInvoiceUpdateByinvoiceNumberRequest method in the CustomerInvoice resource', function () {
    $bodyData = new CustomerInvoiceUpdateDto(
        paymentMethodId: 'mock-id-123',
        creditTermsId: 'mock-id-123',
        currencyId: 'mock-id-123',
        customerRefNumber: 'String value',
        cashDiscountDate: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        documentDueDate: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        externalReference: 'String value',
        customerProject: 'String value',
        exchangeRate: 42,
        domesticServicesDeductibleDocument: true,
        rotRutDetails: new RotRutUpdateDto(
            distributedAutomaticaly: true,
            type: 'String value',
            appartment: 'String value',
            estate: 'String value',
            organizationNbr: 'String value',
            distribution: []
        ),
        paymentReference: 'String value',
        contact: 42,
        project: 'String value',
        taxDetailLines: [],
        invoiceLines: [],
        sendToAutoInvoice: true,
        customerVatZoneId: 'mock-id-123',
        billingAddress: null,
        invoiceContact: null,
        startDate: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        endDate: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        accountingCostRef: 'String value',
        originatorDocRef: 'String value',
        contractDocRef: 'String value',
        revoked: true,
        overrideNumberSeries: true,
        directDebitMandateId: 'mock-id-123',
        excludeDebtCollection: true,
        debtCollectionCaseNbr: 'String value',
        debtCollectionCaseStatus: 'String value',
        debtCollectionCaseType: 'String value',
        debtCollectionCaseUrl: 'String value',
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
        CustomerInvoiceUpdateByinvoiceNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new CustomerInvoiceUpdateByinvoiceNumberRequest(
        invoiceNumber: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerInvoiceUpdateByinvoiceNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the customerInvoiceDeleteByinvoiceNumberRequest method in the CustomerInvoice resource', function () {
    Saloon::fake([
        CustomerInvoiceDeleteByinvoiceNumberRequest::class => MockResponse::make([], 204),
    ]);

    $request = new CustomerInvoiceDeleteByinvoiceNumberRequest(
        invoiceNumber: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerInvoiceDeleteByinvoiceNumberRequest::class);

    expect($response->status())->toBe(204);
});

it('calls the customerInvoiceGetRotRutByrefNbrRequest method in the CustomerInvoice resource', function () {
    Saloon::fake([
        CustomerInvoiceGetRotRutByrefNbrRequest::class => MockResponse::make([
            'docType' => 'String value',
            'refNbr' => 'String value',
            'distributedAutomaticaly' => true,
            'type' => 'String value',
            'totalDeductableAmount' => 42,
            'otherCost' => 42,
            'materialCost' => 42,
            'workPrice' => 42,
            'distributedAmount' => 42,
            'appartment' => 'String value',
            'estate' => 'String value',
            'organizationNbr' => 'String value',
            'distribution' => [],
        ], 200),
    ]);

    $request = new CustomerInvoiceGetRotRutByrefNbrRequest(
        refNbr: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerInvoiceGetRotRutByrefNbrRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->docType->toBe('String value')
        ->refNbr->toBe('String value')
        ->distributedAutomaticaly->toBe(true)
        ->type->toBe('String value')
        ->totalDeductableAmount->toBe(42)
        ->otherCost->toBe(42)
        ->materialCost->toBe(42)
        ->workPrice->toBe(42)
        ->distributedAmount->toBe(42)
        ->appartment->toBe('String value')
        ->estate->toBe('String value')
        ->organizationNbr->toBe('String value');
});

it('calls the customerInvoicePrintInvoiceByrefNbrRequest method in the CustomerInvoice resource', function () {
    Saloon::fake([
        CustomerInvoicePrintInvoiceByrefNbrRequest::class => MockResponse::make([], 200),
    ]);

    $request = new CustomerInvoicePrintInvoiceByrefNbrRequest(
        refNbr: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerInvoicePrintInvoiceByrefNbrRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->toBeInstanceOf(\Spatie\LaravelData\Data::class);
});

it('calls the customerInvoiceGetAllRequest method in the CustomerInvoice resource', function () {
    Saloon::fake([
        CustomerInvoiceGetAllRequest::class => MockResponse::make([
            0 => [
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
            ],
            1 => [
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
            ],
        ], 200),
    ]);

    $request = new CustomerInvoiceGetAllRequest(
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

    Saloon::assertSent(CustomerInvoiceGetAllRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toHaveCount(2);
    expect($collection->first())
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

it('calls the customerInvoiceCreateRequest method in the CustomerInvoice resource', function () {
    $bodyData = new CustomerInvoiceUpdateDto(
        paymentMethodId: 'mock-id-123',
        creditTermsId: 'mock-id-123',
        currencyId: 'mock-id-123',
        customerRefNumber: 'String value',
        cashDiscountDate: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        documentDueDate: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        externalReference: 'String value',
        customerProject: 'String value',
        exchangeRate: 42,
        domesticServicesDeductibleDocument: true,
        rotRutDetails: new RotRutUpdateDto(
            distributedAutomaticaly: true,
            type: 'String value',
            appartment: 'String value',
            estate: 'String value',
            organizationNbr: 'String value',
            distribution: []
        ),
        paymentReference: 'String value',
        contact: 42,
        project: 'String value',
        taxDetailLines: [],
        invoiceLines: [],
        sendToAutoInvoice: true,
        customerVatZoneId: 'mock-id-123',
        billingAddress: null,
        invoiceContact: null,
        startDate: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        endDate: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        accountingCostRef: 'String value',
        originatorDocRef: 'String value',
        contractDocRef: 'String value',
        revoked: true,
        overrideNumberSeries: true,
        directDebitMandateId: 'mock-id-123',
        excludeDebtCollection: true,
        debtCollectionCaseNbr: 'String value',
        debtCollectionCaseStatus: 'String value',
        debtCollectionCaseType: 'String value',
        debtCollectionCaseUrl: 'String value',
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
        CustomerInvoiceCreateRequest::class => MockResponse::make([], 201),
    ]);

    $request = new CustomerInvoiceCreateRequest(
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerInvoiceCreateRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the customerInvoiceCreateHeaderAttachmentByinvoiceNumberRequest method in the CustomerInvoice resource', function () {
    $bodyData = [];

    Saloon::fake([
        CustomerInvoiceCreateHeaderAttachmentByinvoiceNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new CustomerInvoiceCreateHeaderAttachmentByinvoiceNumberRequest(
        invoiceNumber: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerInvoiceCreateHeaderAttachmentByinvoiceNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the customerInvoiceCreateLineAttachmentByinvoiceNumberlineNumberRequest method in the CustomerInvoice resource', function () {
    $bodyData = [];

    Saloon::fake([
        CustomerInvoiceCreateLineAttachmentByinvoiceNumberlineNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new CustomerInvoiceCreateLineAttachmentByinvoiceNumberlineNumberRequest(
        invoiceNumber: 'test string',
        lineNumber: 123,
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerInvoiceCreateLineAttachmentByinvoiceNumberlineNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the customerInvoiceReleaseInvoiceByinvoiceNumberRequest method in the CustomerInvoice resource', function () {
    $bodyData = [];

    Saloon::fake([
        CustomerInvoiceReleaseInvoiceByinvoiceNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new CustomerInvoiceReleaseInvoiceByinvoiceNumberRequest(
        invoiceNumber: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerInvoiceReleaseInvoiceByinvoiceNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the customerInvoiceSendToAutoInvoiceByinvoiceNumberRequest method in the CustomerInvoice resource', function () {
    $bodyData = [];

    Saloon::fake([
        CustomerInvoiceSendToAutoInvoiceByinvoiceNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new CustomerInvoiceSendToAutoInvoiceByinvoiceNumberRequest(
        invoiceNumber: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerInvoiceSendToAutoInvoiceByinvoiceNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the customerInvoiceCorrectInvoiceByinvoiceNumberRequest method in the CustomerInvoice resource', function () {
    $bodyData = [];

    Saloon::fake([
        CustomerInvoiceCorrectInvoiceByinvoiceNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new CustomerInvoiceCorrectInvoiceByinvoiceNumberRequest(
        invoiceNumber: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerInvoiceCorrectInvoiceByinvoiceNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the customerInvoiceReverseInvoiceByinvoiceNumberRequest method in the CustomerInvoice resource', function () {
    $bodyData = new ReverseInvoiceActionDto(
        returnCreditNote: true
    );

    Saloon::fake([
        CustomerInvoiceReverseInvoiceByinvoiceNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new CustomerInvoiceReverseInvoiceByinvoiceNumberRequest(
        invoiceNumber: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerInvoiceReverseInvoiceByinvoiceNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the customerInvoiceReverseInvoiceAndApplyToNoteByinvoiceNumberRequest method in the CustomerInvoice resource', function () {
    $bodyData = new ReverseInvoiceActionDto(
        returnCreditNote: true
    );

    Saloon::fake([
        CustomerInvoiceReverseInvoiceAndApplyToNoteByinvoiceNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new CustomerInvoiceReverseInvoiceAndApplyToNoteByinvoiceNumberRequest(
        invoiceNumber: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerInvoiceReverseInvoiceAndApplyToNoteByinvoiceNumberRequest::class);

    expect($response->status())->toBe(201);
});
