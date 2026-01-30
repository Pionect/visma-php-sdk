<?php

use Pionect\VismaSdk\Dto\CustomerInvoiceUpdateDto;
use Pionect\VismaSdk\Requests\CustomerInvoiceV2\CustomerInvoiceV2CreateRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the customerInvoiceV2createRequest method in the CustomerInvoiceV2 resource', function () {
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
        rotRutDetails: null,
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
        overrideNumberSeries: null,
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
        CustomerInvoiceV2CreateRequest::class => MockResponse::make([], 201),
    ]);

    $request = new CustomerInvoiceV2CreateRequest(
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerInvoiceV2CreateRequest::class);

    expect($response->status())->toBe(201);
});
