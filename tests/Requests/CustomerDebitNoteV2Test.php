<?php

use Pionect\VismaSdk\Dto\CustomerDebitNoteUpdateDto;
use Pionect\VismaSdk\Enums\WorkTypeRutRotTypeEnum;
use Pionect\VismaSdk\Requests\CustomerDebitNoteV2\CustomerDebitNoteV2CreateRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the customerDebitNoteV2createRequest method in the CustomerDebitNoteV2 resource', function () {
    $bodyData = new CustomerDebitNoteUpdateDto(
        paymentMethodId: 'mock-id-123',
        creditTermsId: 'mock-id-123',
        currencyId: 'mock-id-123',
        customerRefNumber: 'String value',
        cashDiscountDate: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        documentDueDate: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        externalReference: 'String value',
        exchangeRate: 42,
        domesticServicesDeductibleDocument: true,
        paymentReference: 'String value',
        contact: 42,
        rotRutDetails: new \Pionect\VismaSdk\Dto\RotRutUpdateDto(
            distributedAutomaticaly: true,
            type: WorkTypeRutRotTypeEnum::RUT,
            appartment: 'String value',
            estate: 'String value',
            organizationNbr: 'String value',
            distribution: []
        ),
        taxDetailLines: [],
        lines: [],
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
        CustomerDebitNoteV2CreateRequest::class => MockResponse::make([], 201),
    ]);

    $request = new CustomerDebitNoteV2CreateRequest(
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerDebitNoteV2CreateRequest::class);

    expect($response->status())->toBe(201);
});
