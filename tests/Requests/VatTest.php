<?php

use Pionect\VismaSdk\Dto\UpdateNoteDto;
use Pionect\VismaSdk\Enums\AccountTypeEnum;
use Pionect\VismaSdk\Enums\VatCategoryLineCalculateOnEnum;
use Pionect\VismaSdk\Enums\VatCategoryLineCashDiscountEnum;
use Pionect\VismaSdk\Enums\VatCategoryLineTypeEnum;
use Pionect\VismaSdk\Enums\VatInformationEuReportCodeEnum;
use Pionect\VismaSdk\Enums\VatInformationVismaXmlVatTypeEnum;
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
            'type' => 'Sales',
            'deductibleVat' => true,
            'reverseVat' => true,
            'statisticalVat' => true,
            'pendingVat' => true,
            'includeinVatExemptTotal' => true,
            'includeinVatTotal' => true,
            'enterFromVatInvoice' => true,
            'calculateOn' => 'ExtractFromItemAmount',
            'cashDiscount' => 'ToTaxableAmount',
            'vatAgencyId' => [
                'internalId' => 42,
                'number' => 'String value',
                'name' => 'String value',
            ],
            'notValidAfter' => '2025-11-22T10:40:04+00:00',
            'euReportCode' => 'SalesOfGoods',
            'documentText' => 'String value',
            'defaultNonStockItem' => [
                'number' => 'String value',
                'description' => 'String value',
            ],
            'vismaXmlVatType' => 'VatTypeHigh',
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'glAccounts' => [
                'vatPayableAccount' => [
                    'type' => 'Asset',
                    'externalCode1' => 'String value',
                    'externalCode2' => 'String value',
                    'active' => true,
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'vatPayableSubaccount' => [
                    'active' => true,
                    'description' => 'String value',
                ],
                'vatClaimableAccount' => [
                    'type' => 'Asset',
                    'externalCode1' => 'String value',
                    'externalCode2' => 'String value',
                    'active' => true,
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'vatClaimableSubccount' => [
                    'active' => true,
                    'description' => 'String value',
                ],
            ],
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
        ->type->toEqual(VatCategoryLineTypeEnum::SALES)
        ->deductibleVat->toBe(true)
        ->reverseVat->toBe(true)
        ->statisticalVat->toBe(true)
        ->pendingVat->toBe(true)
        ->includeinVatExemptTotal->toBe(true)
        ->includeinVatTotal->toBe(true)
        ->enterFromVatInvoice->toBe(true)
        ->calculateOn->toEqual(VatCategoryLineCalculateOnEnum::EXTRACT_FROM_ITEM_AMOUNT)
        ->cashDiscount->toEqual(VatCategoryLineCashDiscountEnum::TO_TAXABLE_AMOUNT)
        ->vatAgencyId->internalId->toBe(42)
        ->vatAgencyId->number->toBe('String value')
        ->vatAgencyId->name->toBe('String value')
        ->notValidAfter->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->euReportCode->toEqual(VatInformationEuReportCodeEnum::SALES_OF_GOODS)
        ->documentText->toBe('String value')
        ->defaultNonStockItem->number->toBe('String value')
        ->defaultNonStockItem->description->toBe('String value')
        ->vismaXmlVatType->toEqual(VatInformationVismaXmlVatTypeEnum::VAT_TYPE_HIGH)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->glAccounts->vatPayableAccount->type->toEqual(AccountTypeEnum::ASSET)
        ->glAccounts->vatPayableAccount->externalCode1->toBe('String value')
        ->glAccounts->vatPayableAccount->externalCode2->toBe('String value')
        ->glAccounts->vatPayableAccount->active->toBe(true)
        ->glAccounts->vatPayableAccount->number->toBe('String value')
        ->glAccounts->vatPayableAccount->description->toBe('String value')
        ->glAccounts->vatPayableSubaccount->active->toBe(true)
        ->glAccounts->vatPayableSubaccount->description->toBe('String value')
        ->glAccounts->vatClaimableAccount->type->toEqual(AccountTypeEnum::ASSET)
        ->glAccounts->vatClaimableAccount->externalCode1->toBe('String value')
        ->glAccounts->vatClaimableAccount->externalCode2->toBe('String value')
        ->glAccounts->vatClaimableAccount->active->toBe(true)
        ->glAccounts->vatClaimableAccount->number->toBe('String value')
        ->glAccounts->vatClaimableAccount->description->toBe('String value')
        ->glAccounts->vatClaimableSubccount->active->toBe(true)
        ->glAccounts->vatClaimableSubccount->description->toBe('String value');
});

it('calls the vatGetAllVatsRequest method in the Vat resource', function () {
    Saloon::fake([
        VatGetAllVatsRequest::class => MockResponse::make([
            0 => [
                'vatCategoryId' => 'mock-id-123',
                'vatId' => 'mock-id-123',
                'description' => 'String value',
                'type' => 'Sales',
                'deductibleVat' => true,
                'reverseVat' => true,
                'statisticalVat' => true,
                'pendingVat' => true,
                'includeinVatExemptTotal' => true,
                'includeinVatTotal' => true,
                'enterFromVatInvoice' => true,
                'calculateOn' => 'ExtractFromItemAmount',
                'cashDiscount' => 'ToTaxableAmount',
                'vatAgencyId' => [
                    'internalId' => 42,
                    'number' => 'String value',
                    'name' => 'String value',
                ],
                'notValidAfter' => '2025-11-22T10:40:04+00:00',
                'euReportCode' => 'SalesOfGoods',
                'documentText' => 'String value',
                'defaultNonStockItem' => [
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'vismaXmlVatType' => 'VatTypeHigh',
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'glAccounts' => [
                    'vatPayableAccount' => [
                        'type' => 'Asset',
                        'externalCode1' => 'String value',
                        'externalCode2' => 'String value',
                        'active' => true,
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'vatPayableSubaccount' => [
                        'active' => true,
                        'description' => 'String value',
                    ],
                    'vatClaimableAccount' => [
                        'type' => 'Asset',
                        'externalCode1' => 'String value',
                        'externalCode2' => 'String value',
                        'active' => true,
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'vatClaimableSubccount' => [
                        'active' => true,
                        'description' => 'String value',
                    ],
                ],
                'schedules' => [],
                'categories' => [],
                'zones' => [],
            ],
            1 => [
                'vatCategoryId' => 'mock-id-123',
                'vatId' => 'mock-id-123',
                'description' => 'String value',
                'type' => 'Sales',
                'deductibleVat' => true,
                'reverseVat' => true,
                'statisticalVat' => true,
                'pendingVat' => true,
                'includeinVatExemptTotal' => true,
                'includeinVatTotal' => true,
                'enterFromVatInvoice' => true,
                'calculateOn' => 'ExtractFromItemAmount',
                'cashDiscount' => 'ToTaxableAmount',
                'vatAgencyId' => [
                    'internalId' => 42,
                    'number' => 'String value',
                    'name' => 'String value',
                ],
                'notValidAfter' => '2025-11-22T10:40:04+00:00',
                'euReportCode' => 'SalesOfGoods',
                'documentText' => 'String value',
                'defaultNonStockItem' => [
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'vismaXmlVatType' => 'VatTypeHigh',
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'glAccounts' => [
                    'vatPayableAccount' => [
                        'type' => 'Asset',
                        'externalCode1' => 'String value',
                        'externalCode2' => 'String value',
                        'active' => true,
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'vatPayableSubaccount' => [
                        'active' => true,
                        'description' => 'String value',
                    ],
                    'vatClaimableAccount' => [
                        'type' => 'Asset',
                        'externalCode1' => 'String value',
                        'externalCode2' => 'String value',
                        'active' => true,
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'vatClaimableSubccount' => [
                        'active' => true,
                        'description' => 'String value',
                    ],
                ],
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
        ->type->toEqual(VatCategoryLineTypeEnum::SALES)
        ->deductibleVat->toBe(true)
        ->reverseVat->toBe(true)
        ->statisticalVat->toBe(true)
        ->pendingVat->toBe(true)
        ->includeinVatExemptTotal->toBe(true)
        ->includeinVatTotal->toBe(true)
        ->enterFromVatInvoice->toBe(true)
        ->calculateOn->toEqual(VatCategoryLineCalculateOnEnum::EXTRACT_FROM_ITEM_AMOUNT)
        ->cashDiscount->toEqual(VatCategoryLineCashDiscountEnum::TO_TAXABLE_AMOUNT)
        ->vatAgencyId->internalId->toBe(42)
        ->vatAgencyId->number->toBe('String value')
        ->vatAgencyId->name->toBe('String value')
        ->notValidAfter->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->euReportCode->toEqual(VatInformationEuReportCodeEnum::SALES_OF_GOODS)
        ->documentText->toBe('String value')
        ->defaultNonStockItem->number->toBe('String value')
        ->defaultNonStockItem->description->toBe('String value')
        ->vismaXmlVatType->toEqual(VatInformationVismaXmlVatTypeEnum::VAT_TYPE_HIGH)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->glAccounts->vatPayableAccount->type->toEqual(AccountTypeEnum::ASSET)
        ->glAccounts->vatPayableAccount->externalCode1->toBe('String value')
        ->glAccounts->vatPayableAccount->externalCode2->toBe('String value')
        ->glAccounts->vatPayableAccount->active->toBe(true)
        ->glAccounts->vatPayableAccount->number->toBe('String value')
        ->glAccounts->vatPayableAccount->description->toBe('String value')
        ->glAccounts->vatPayableSubaccount->active->toBe(true)
        ->glAccounts->vatPayableSubaccount->description->toBe('String value')
        ->glAccounts->vatClaimableAccount->type->toEqual(AccountTypeEnum::ASSET)
        ->glAccounts->vatClaimableAccount->externalCode1->toBe('String value')
        ->glAccounts->vatClaimableAccount->externalCode2->toBe('String value')
        ->glAccounts->vatClaimableAccount->active->toBe(true)
        ->glAccounts->vatClaimableAccount->number->toBe('String value')
        ->glAccounts->vatClaimableAccount->description->toBe('String value')
        ->glAccounts->vatClaimableSubccount->active->toBe(true)
        ->glAccounts->vatClaimableSubccount->description->toBe('String value');
});

it('calls the vatPutVatHeaderNoteByvendorCdtaxPeriodIdrevisionIdRequest method in the Vat resource', function () {
    $bodyData = new UpdateNoteDto(
        note: 'String value'
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
        note: 'String value'
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
