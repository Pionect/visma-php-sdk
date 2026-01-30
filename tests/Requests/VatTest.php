<?php

use Pionect\VismaSdk\Dto\UpdateNoteDto;
use Pionect\VismaSdk\Requests\Vat\VatGetAllVatsRequest;
use Pionect\VismaSdk\Requests\Vat\VatGetVatByvatIdRequest;
use Pionect\VismaSdk\Requests\Vat\VatPutVatHeaderNoteByvendorCdtaxPeriodIdrevisionIdRequest;
use Pionect\VismaSdk\Requests\Vat\VatPutVatLineNoteByvendorCdtaxPeriodIdrevisionIdlineNumberRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the vatGetVatByvatIdRequest method in the Vat resource', function () {
    Saloon::fake([
        VatGetVatByvatIdRequest::class => MockResponse::make([
            'vatCategoryId' => 'mock-id-123',
            'vatId' => 'mock-id-123',
            'description' => 'String value',
            'type' => 'String value',
            'deductibleVat' => true,
            'reverseVat' => true,
            'statisticalVat' => true,
            'pendingVat' => true,
            'includeinVatExemptTotal' => true,
            'includeinVatTotal' => true,
            'enterFromVatInvoice' => true,
            'calculateOn' => 'String value',
            'cashDiscount' => 'String value',
            'vatAgencyId' => null,
            'notValidAfter' => '2025-11-22T10:40:04+00:00',
            'euReportCode' => 'String value',
            'documentText' => 'String value',
            'defaultNonStockItem' => null,
            'vismaXmlVatType' => 'String value',
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'glAccounts' => null,
            'schedules' => [],
            'categories' => [],
            'zones' => [],
        ], 200),
    ]);

    $request = new VatGetVatByvatIdRequest(
        vatId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(VatGetVatByvatIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->vatCategoryId->toBe('mock-id-123')
        ->vatId->toBe('mock-id-123')
        ->description->toBe('String value')
        ->type->toBe('String value')
        ->deductibleVat->toBe(true)
        ->reverseVat->toBe(true)
        ->statisticalVat->toBe(true)
        ->pendingVat->toBe(true)
        ->includeinVatExemptTotal->toBe(true)
        ->includeinVatTotal->toBe(true)
        ->enterFromVatInvoice->toBe(true)
        ->calculateOn->toBe('String value')
        ->cashDiscount->toBe('String value')
        ->vatAgencyId->toBeNull()
        ->notValidAfter->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->euReportCode->toBe('String value')
        ->documentText->toBe('String value')
        ->defaultNonStockItem->toBeNull()
        ->vismaXmlVatType->toBe('String value')
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->glAccounts->toBeNull();
});

it('calls the vatGetAllVatsRequest method in the Vat resource', function () {
    Saloon::fake([
        VatGetAllVatsRequest::class => MockResponse::make([
            0 => [
                'vatCategoryId' => 'mock-id-123',
                'vatId' => 'mock-id-123',
                'description' => 'String value',
                'type' => 'String value',
                'deductibleVat' => true,
                'reverseVat' => true,
                'statisticalVat' => true,
                'pendingVat' => true,
                'includeinVatExemptTotal' => true,
                'includeinVatTotal' => true,
                'enterFromVatInvoice' => true,
                'calculateOn' => 'String value',
                'cashDiscount' => 'String value',
                'vatAgencyId' => null,
                'notValidAfter' => '2025-11-22T10:40:04+00:00',
                'euReportCode' => 'String value',
                'documentText' => 'String value',
                'defaultNonStockItem' => null,
                'vismaXmlVatType' => 'String value',
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'glAccounts' => null,
                'schedules' => [],
                'categories' => [],
                'zones' => [],
            ],
            1 => [
                'vatCategoryId' => 'mock-id-123',
                'vatId' => 'mock-id-123',
                'description' => 'String value',
                'type' => 'String value',
                'deductibleVat' => true,
                'reverseVat' => true,
                'statisticalVat' => true,
                'pendingVat' => true,
                'includeinVatExemptTotal' => true,
                'includeinVatTotal' => true,
                'enterFromVatInvoice' => true,
                'calculateOn' => 'String value',
                'cashDiscount' => 'String value',
                'vatAgencyId' => null,
                'notValidAfter' => '2025-11-22T10:40:04+00:00',
                'euReportCode' => 'String value',
                'documentText' => 'String value',
                'defaultNonStockItem' => null,
                'vismaXmlVatType' => 'String value',
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'glAccounts' => null,
                'schedules' => [],
                'categories' => [],
                'zones' => [],
            ],
        ], 200),
    ]);

    $request = new VatGetAllVatsRequest(
        numberToRead: 123,
        skipRecords: 123,
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(VatGetAllVatsRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toHaveCount(2);
    expect($collection->first())
        ->vatCategoryId->toBe('mock-id-123')
        ->vatId->toBe('mock-id-123')
        ->description->toBe('String value')
        ->type->toBe('String value')
        ->deductibleVat->toBe(true)
        ->reverseVat->toBe(true)
        ->statisticalVat->toBe(true)
        ->pendingVat->toBe(true)
        ->includeinVatExemptTotal->toBe(true)
        ->includeinVatTotal->toBe(true)
        ->enterFromVatInvoice->toBe(true)
        ->calculateOn->toBe('String value')
        ->cashDiscount->toBe('String value')
        ->vatAgencyId->toBeNull()
        ->notValidAfter->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->euReportCode->toBe('String value')
        ->documentText->toBe('String value')
        ->defaultNonStockItem->toBeNull()
        ->vismaXmlVatType->toBe('String value')
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->glAccounts->toBeNull();
});

it('calls the vatPutVatHeaderNoteByvendorCdtaxPeriodIdrevisionIdRequest method in the Vat resource', function () {
    $bodyData = new UpdateNoteDto(
        note: null
    );

    Saloon::fake([
        VatPutVatHeaderNoteByvendorCdtaxPeriodIdrevisionIdRequest::class => MockResponse::make([], 201),
    ]);

    $request = new VatPutVatHeaderNoteByvendorCdtaxPeriodIdrevisionIdRequest(
        vendorCd: 'test string',
        taxPeriodId: 'test string',
        revisionId: 123,
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(VatPutVatHeaderNoteByvendorCdtaxPeriodIdrevisionIdRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the vatPutVatLineNoteByvendorCdtaxPeriodIdrevisionIdlineNumberRequest method in the Vat resource', function () {
    $bodyData = new UpdateNoteDto(
        note: null
    );

    Saloon::fake([
        VatPutVatLineNoteByvendorCdtaxPeriodIdrevisionIdlineNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new VatPutVatLineNoteByvendorCdtaxPeriodIdrevisionIdlineNumberRequest(
        vendorCd: 'test string',
        taxPeriodId: 'test string',
        revisionId: 123,
        lineNumber: 123,
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(VatPutVatLineNoteByvendorCdtaxPeriodIdrevisionIdlineNumberRequest::class);

    expect($response->status())->toBe(201);
});
