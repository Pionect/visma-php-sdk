<?php

use Pionect\VismaSdk\Dto\CustomerCreditNoteUpdateDto;
use Pionect\VismaSdk\Requests\CustomerCreditNoteV2\CustomerCreditNoteV2CreateRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the customerCreditNoteV2createRequest method in the CustomerCreditNoteV2 resource', function () {
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
        invoiceAddress: new \Pionect\VismaSdk\Dto\SalesInvoiceAddressUpdateDto(
            overrideAddress: true,
            addressLine1: 'String value',
            addressLine2: 'String value',
            addressLine3: 'String value',
            postalCode: 'String value',
            city: 'String value',
            countryId: 'mock-id-123',
            county: 'String value'
        ),
        invoiceContact: new \Pionect\VismaSdk\Dto\SalesInvoiceContactUpdateDto(
            overrideContact: true,
            name: 'String value',
            attention: 'String value',
            email: 'test@example.com',
            phone1: 'String value'
        ),
        overrideNumberSeries: true,
        sendToAutoInvoice: true,
        exchangeRate: 42,
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
        CustomerCreditNoteV2CreateRequest::class => MockResponse::make([], 201),
    ]);

    $request = new CustomerCreditNoteV2CreateRequest(
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerCreditNoteV2CreateRequest::class);

    expect($response->status())->toBe(201);
});
