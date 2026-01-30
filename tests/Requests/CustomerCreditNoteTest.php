<?php

// Generated 2026-01-30 15:19:40
use Pionect\VismaSdk\Dto\CustomerCreditNoteUpdateDto;
use Pionect\VismaSdk\Requests\CustomerCreditNote\CustomerCreditNoteCreateHeaderAttachmentBycreditNoteNumberRequest;
use Pionect\VismaSdk\Requests\CustomerCreditNote\CustomerCreditNoteCreateLineAttachmentBycreditNoteNumberlineNumberRequest;
use Pionect\VismaSdk\Requests\CustomerCreditNote\CustomerCreditNoteCreateRequest;
use Pionect\VismaSdk\Requests\CustomerCreditNote\CustomerCreditNoteDeleteBycreditNoteNumberRequest;
use Pionect\VismaSdk\Requests\CustomerCreditNote\CustomerCreditNoteGetAllRequest;
use Pionect\VismaSdk\Requests\CustomerCreditNote\CustomerCreditNoteGetBycreditNoteNumberRequest;
use Pionect\VismaSdk\Requests\CustomerCreditNote\CustomerCreditNotePrintBycreditNoteNumberRequest;
use Pionect\VismaSdk\Requests\CustomerCreditNote\CustomerCreditNoteReleaseDocumentBycreditNoteNumberRequest;
use Pionect\VismaSdk\Requests\CustomerCreditNote\CustomerCreditNoteSendToAutoInvoiceBycreditNoteNumberRequest;
use Pionect\VismaSdk\Requests\CustomerCreditNote\CustomerCreditNoteUpdateBycreditNoteNumberRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the customerCreditNoteGetBycreditNoteNumberRequest method in the CustomerCreditNote resource', function () {
    Saloon::fake([
        CustomerCreditNoteGetBycreditNoteNumberRequest::class => MockResponse::make([
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
            'lines' => [],
            'roundingDiff' => 42,
            'customerVatZone' => null,
            'sendToAutoInvoice' => true,
            'childRecord' => null,
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

    $request = new CustomerCreditNoteGetBycreditNoteNumberRequest(
        creditNoteNumber: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerCreditNoteGetBycreditNoteNumberRequest::class);

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
        ->roundingDiff->toBe(42)
        ->customerVatZone->toBeNull()
        ->sendToAutoInvoice->toBe(true)
        ->childRecord->toBeNull()
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

it('calls the customerCreditNoteUpdateBycreditNoteNumberRequest method in the CustomerCreditNote resource', function () {
    $bodyData = new CustomerCreditNoteUpdateDto(
        currencyId: 'mock-id-123',
        customerRefNumber: 'String value',
        externalReference: 'String value',
        contact: 42,
        project: 'String value',
        lines: [],
        taxDetails: [],
        applicationLines: [],
        customerVatZoneId: 'mock-id-123',
        invoiceAddress: null,
        invoiceContact: null,
        overrideNumberSeries: true,
        sendToAutoInvoice: true,
        exchangeRate: 42,
        referenceNumber: 'String value',
        customerNumber: 'String value',
        childCustomerNumber: 'String value',
        consolidateInvoices: true,
        documentDate: '2025-11-22T10:40:04+00:00',
        origInvoiceDate: '2025-11-22T10:40:04+00:00',
        hold: true,
        postPeriod: null,
        financialPeriod: null,
        invoiceText: 'String value',
        locationId: 'mock-id-123',
        salesPersonId: null,
        salesperson: null,
        note: 'String value',
        branchNumber: 'String value',
        cashAccount: 'String value',
        dontPrint: true,
        dontEmail: true
    );

    Saloon::fake([
        CustomerCreditNoteUpdateBycreditNoteNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new CustomerCreditNoteUpdateBycreditNoteNumberRequest(
        creditNoteNumber: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerCreditNoteUpdateBycreditNoteNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the customerCreditNoteDeleteBycreditNoteNumberRequest method in the CustomerCreditNote resource', function () {
    Saloon::fake([
        CustomerCreditNoteDeleteBycreditNoteNumberRequest::class => MockResponse::make([], 204),
    ]);

    $request = new CustomerCreditNoteDeleteBycreditNoteNumberRequest(
        creditNoteNumber: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerCreditNoteDeleteBycreditNoteNumberRequest::class);

    expect($response->status())->toBe(204);
});

it('calls the customerCreditNoteGetAllRequest method in the CustomerCreditNote resource', function () {
    Saloon::fake([
        CustomerCreditNoteGetAllRequest::class => MockResponse::make([
            0 => [
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
                'lines' => [],
                'roundingDiff' => 42,
                'customerVatZone' => null,
                'sendToAutoInvoice' => true,
                'childRecord' => null,
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
            ],
            1 => [
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
                'lines' => [],
                'roundingDiff' => 42,
                'customerVatZone' => null,
                'sendToAutoInvoice' => true,
                'childRecord' => null,
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
            ],
        ], 200),
    ]);

    $request = new CustomerCreditNoteGetAllRequest(
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

    Saloon::assertSent(CustomerCreditNoteGetAllRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toBeArray()
        ->and($collection)->toHaveCount(2);

    $firstItem = $collection[0];

    expect($firstItem)
        ->creditTerms->toBeNull()
        ->documentDueDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->cashDiscountDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->externalReference->toBe('String value')
        ->isRotRutDeductible->toBe(true)
        ->exchangeRate->toBe(42)
        ->dunningLetterDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->dunningLetterLevel->toBe(42)
        ->contact->toBeNull()
        ->roundingDiff->toBe(42)
        ->customerVatZone->toBeNull()
        ->sendToAutoInvoice->toBe(true)
        ->childRecord->toBeNull()
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

it('calls the customerCreditNoteCreateRequest method in the CustomerCreditNote resource', function () {
    $bodyData = new CustomerCreditNoteUpdateDto(
        currencyId: 'mock-id-123',
        customerRefNumber: 'String value',
        externalReference: 'String value',
        contact: 42,
        project: 'String value',
        lines: [],
        taxDetails: [],
        applicationLines: [],
        customerVatZoneId: 'mock-id-123',
        invoiceAddress: null,
        invoiceContact: null,
        overrideNumberSeries: true,
        sendToAutoInvoice: true,
        exchangeRate: 42,
        referenceNumber: 'String value',
        customerNumber: 'String value',
        childCustomerNumber: 'String value',
        consolidateInvoices: true,
        documentDate: '2025-11-22T10:40:04+00:00',
        origInvoiceDate: '2025-11-22T10:40:04+00:00',
        hold: true,
        postPeriod: null,
        financialPeriod: null,
        invoiceText: 'String value',
        locationId: 'mock-id-123',
        salesPersonId: null,
        salesperson: null,
        note: 'String value',
        branchNumber: 'String value',
        cashAccount: 'String value',
        dontPrint: true,
        dontEmail: true
    );

    Saloon::fake([
        CustomerCreditNoteCreateRequest::class => MockResponse::make([], 201),
    ]);

    $request = new CustomerCreditNoteCreateRequest(
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerCreditNoteCreateRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the customerCreditNotePrintBycreditNoteNumberRequest method in the CustomerCreditNote resource', function () {
    Saloon::fake([
        CustomerCreditNotePrintBycreditNoteNumberRequest::class => MockResponse::make([
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
            'lines' => [],
            'roundingDiff' => 42,
            'customerVatZone' => null,
            'sendToAutoInvoice' => true,
            'childRecord' => null,
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

    $request = new CustomerCreditNotePrintBycreditNoteNumberRequest(
        creditNoteNumber: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerCreditNotePrintBycreditNoteNumberRequest::class);

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
        ->roundingDiff->toBe(42)
        ->customerVatZone->toBeNull()
        ->sendToAutoInvoice->toBe(true)
        ->childRecord->toBeNull()
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

it('calls the customerCreditNoteReleaseDocumentBycreditNoteNumberRequest method in the CustomerCreditNote resource', function () {
    $bodyData = new CustomerCreditNoteUpdateDto(
        currencyId: 'mock-id-123',
        customerRefNumber: 'String value',
        externalReference: 'String value',
        contact: 42,
        project: 'String value',
        lines: [],
        taxDetails: [],
        applicationLines: [],
        customerVatZoneId: 'mock-id-123',
        invoiceAddress: null,
        invoiceContact: null,
        overrideNumberSeries: true,
        sendToAutoInvoice: true,
        exchangeRate: 42,
        referenceNumber: 'String value',
        customerNumber: 'String value',
        childCustomerNumber: 'String value',
        consolidateInvoices: true,
        documentDate: '2025-11-22T10:40:04+00:00',
        origInvoiceDate: '2025-11-22T10:40:04+00:00',
        hold: true,
        postPeriod: null,
        financialPeriod: null,
        invoiceText: 'String value',
        locationId: 'mock-id-123',
        salesPersonId: null,
        salesperson: null,
        note: 'String value',
        branchNumber: 'String value',
        cashAccount: 'String value',
        dontPrint: true,
        dontEmail: true
    );

    Saloon::fake([
        CustomerCreditNoteReleaseDocumentBycreditNoteNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new CustomerCreditNoteReleaseDocumentBycreditNoteNumberRequest(
        creditNoteNumber: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerCreditNoteReleaseDocumentBycreditNoteNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the customerCreditNoteSendToAutoInvoiceBycreditNoteNumberRequest method in the CustomerCreditNote resource', function () {
    $bodyData = new CustomerCreditNoteUpdateDto(
        currencyId: 'mock-id-123',
        customerRefNumber: 'String value',
        externalReference: 'String value',
        contact: 42,
        project: 'String value',
        lines: [],
        taxDetails: [],
        applicationLines: [],
        customerVatZoneId: 'mock-id-123',
        invoiceAddress: null,
        invoiceContact: null,
        overrideNumberSeries: true,
        sendToAutoInvoice: true,
        exchangeRate: 42,
        referenceNumber: 'String value',
        customerNumber: 'String value',
        childCustomerNumber: 'String value',
        consolidateInvoices: true,
        documentDate: '2025-11-22T10:40:04+00:00',
        origInvoiceDate: '2025-11-22T10:40:04+00:00',
        hold: true,
        postPeriod: null,
        financialPeriod: null,
        invoiceText: 'String value',
        locationId: 'mock-id-123',
        salesPersonId: null,
        salesperson: null,
        note: 'String value',
        branchNumber: 'String value',
        cashAccount: 'String value',
        dontPrint: true,
        dontEmail: true
    );

    Saloon::fake([
        CustomerCreditNoteSendToAutoInvoiceBycreditNoteNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new CustomerCreditNoteSendToAutoInvoiceBycreditNoteNumberRequest(
        creditNoteNumber: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerCreditNoteSendToAutoInvoiceBycreditNoteNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the customerCreditNoteCreateHeaderAttachmentBycreditNoteNumberRequest method in the CustomerCreditNote resource', function () {
    $bodyData = new CustomerCreditNoteUpdateDto(
        currencyId: 'mock-id-123',
        customerRefNumber: 'String value',
        externalReference: 'String value',
        contact: 42,
        project: 'String value',
        lines: [],
        taxDetails: [],
        applicationLines: [],
        customerVatZoneId: 'mock-id-123',
        invoiceAddress: null,
        invoiceContact: null,
        overrideNumberSeries: true,
        sendToAutoInvoice: true,
        exchangeRate: 42,
        referenceNumber: 'String value',
        customerNumber: 'String value',
        childCustomerNumber: 'String value',
        consolidateInvoices: true,
        documentDate: '2025-11-22T10:40:04+00:00',
        origInvoiceDate: '2025-11-22T10:40:04+00:00',
        hold: true,
        postPeriod: null,
        financialPeriod: null,
        invoiceText: 'String value',
        locationId: 'mock-id-123',
        salesPersonId: null,
        salesperson: null,
        note: 'String value',
        branchNumber: 'String value',
        cashAccount: 'String value',
        dontPrint: true,
        dontEmail: true
    );

    Saloon::fake([
        CustomerCreditNoteCreateHeaderAttachmentBycreditNoteNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new CustomerCreditNoteCreateHeaderAttachmentBycreditNoteNumberRequest(
        creditNoteNumber: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerCreditNoteCreateHeaderAttachmentBycreditNoteNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the customerCreditNoteCreateLineAttachmentBycreditNoteNumberlineNumberRequest method in the CustomerCreditNote resource', function () {
    $bodyData = new CustomerCreditNoteUpdateDto(
        currencyId: 'mock-id-123',
        customerRefNumber: 'String value',
        externalReference: 'String value',
        contact: 42,
        project: 'String value',
        lines: [],
        taxDetails: [],
        applicationLines: [],
        customerVatZoneId: 'mock-id-123',
        invoiceAddress: null,
        invoiceContact: null,
        overrideNumberSeries: true,
        sendToAutoInvoice: true,
        exchangeRate: 42,
        referenceNumber: 'String value',
        customerNumber: 'String value',
        childCustomerNumber: 'String value',
        consolidateInvoices: true,
        documentDate: '2025-11-22T10:40:04+00:00',
        origInvoiceDate: '2025-11-22T10:40:04+00:00',
        hold: true,
        postPeriod: null,
        financialPeriod: null,
        invoiceText: 'String value',
        locationId: 'mock-id-123',
        salesPersonId: null,
        salesperson: null,
        note: 'String value',
        branchNumber: 'String value',
        cashAccount: 'String value',
        dontPrint: true,
        dontEmail: true
    );

    Saloon::fake([
        CustomerCreditNoteCreateLineAttachmentBycreditNoteNumberlineNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new CustomerCreditNoteCreateLineAttachmentBycreditNoteNumberlineNumberRequest(
        creditNoteNumber: 'test string',
        lineNumber: 123,
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerCreditNoteCreateLineAttachmentBycreditNoteNumberlineNumberRequest::class);

    expect($response->status())->toBe(201);
});
