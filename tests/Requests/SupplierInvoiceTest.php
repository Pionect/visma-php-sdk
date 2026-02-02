<?php

use Pionect\VismaSdk\Dto\PrebookingUpdateDto;
use Pionect\VismaSdk\Dto\SupplierInvoiceUpdateDto;
use Pionect\VismaSdk\Requests\SupplierInvoice\SupplierInvoiceCorrectInvoiceByinvoiceNumberRequest;
use Pionect\VismaSdk\Requests\SupplierInvoice\SupplierInvoiceCreateHeaderAttachmentByinvoiceNumberRequest;
use Pionect\VismaSdk\Requests\SupplierInvoice\SupplierInvoiceCreateHeaderAttachmentByTypeBydocumentTypeinvoiceNumberRequest;
use Pionect\VismaSdk\Requests\SupplierInvoice\SupplierInvoiceCreateLineAttachmentByinvoiceNumberlineNumberRequest;
use Pionect\VismaSdk\Requests\SupplierInvoice\SupplierInvoiceCreateLineAttachmentByTypeBydocumentTypeinvoiceNumberlineNumberRequest;
use Pionect\VismaSdk\Requests\SupplierInvoice\SupplierInvoiceDeleteBydocumentTypeinvoiceNumberRequest;
use Pionect\VismaSdk\Requests\SupplierInvoice\SupplierInvoiceDeleteByinvoiceNumberRequest;
use Pionect\VismaSdk\Requests\SupplierInvoice\SupplierInvoiceGetAllInvoicesRequest;
use Pionect\VismaSdk\Requests\SupplierInvoice\SupplierInvoiceGetByApprovalDocumentIdRequest;
use Pionect\VismaSdk\Requests\SupplierInvoice\SupplierInvoiceGetByinvoiceNumberRequest;
use Pionect\VismaSdk\Requests\SupplierInvoice\SupplierInvoiceGetByTypeBydocumentTypeinvoiceNumberRequest;
use Pionect\VismaSdk\Requests\SupplierInvoice\SupplierInvoicePostRequest;
use Pionect\VismaSdk\Requests\SupplierInvoice\SupplierInvoicePrebookInvoiceBydocumentTypeinvoiceNumberRequest;
use Pionect\VismaSdk\Requests\SupplierInvoice\SupplierInvoicePutByinvoiceNumberRequest;
use Pionect\VismaSdk\Requests\SupplierInvoice\SupplierInvoicePutByTypeBydocumentTypeinvoiceNumberRequest;
use Pionect\VismaSdk\Requests\SupplierInvoice\SupplierInvoiceReleaseInvoiceByinvoiceNumberRequest;
use Pionect\VismaSdk\Requests\SupplierInvoice\SupplierInvoiceReleaseInvoiceByTypeBydocumentTypeinvoiceNumberRequest;
use Pionect\VismaSdk\Requests\SupplierInvoice\SupplierInvoiceReverseInvoiceBydocumentTypeinvoiceNumberRequest;
use Pionect\VismaSdk\Requests\SupplierInvoice\SupplierInvoiceSendToApprovalBydocumentTypeinvoiceNumberRequest;
use Pionect\VismaSdk\Requests\SupplierInvoice\SupplierInvoiceVoidInvoiceBydocumentTypeinvoiceNumberRequest;
use Pionect\VismaSdk\Requests\SupplierInvoice\SupplierInvoiceWriteoffInvoiceBydocumentTypeinvoiceNumberRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the supplierInvoiceGetByinvoiceNumberRequest method in the SupplierInvoice resource', function () {
    Saloon::fake([
        SupplierInvoiceGetByinvoiceNumberRequest::class => MockResponse::make([
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
            'taxCalculationMode' => 'String value',
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
            'documentType' => 'String value',
            'referenceNumber' => 'String value',
            'postPeriod' => 'String value',
            'financialPeriod' => 'String value',
            'date' => '2025-11-22T10:40:04+00:00',
            'origInvoiceDate' => '2025-11-22T10:40:04+00:00',
            'dueDate' => '2025-11-22T10:40:04+00:00',
            'approvalStatus' => 'String value',
            'status' => 'String value',
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

    $request = new SupplierInvoiceGetByinvoiceNumberRequest(
        invoiceNumber: 'test string',
        expandLinePrebookAccounts: true,
        expandLandedCosts: true,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierInvoiceGetByinvoiceNumberRequest::class);

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
        ->taxCalculationMode->toBe('String value')
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
        ->documentType->toBe('String value')
        ->referenceNumber->toBe('String value')
        ->postPeriod->toBe('String value')
        ->financialPeriod->toBe('String value')
        ->date->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->origInvoiceDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->dueDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->approvalStatus->toBe('String value')
        ->status->toBe('String value')
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

it('calls the supplierInvoicePutByinvoiceNumberRequest method in the SupplierInvoice resource', function () {
    $bodyData = new SupplierInvoiceUpdateDto(
        documentType: 'String value',
        referenceNumber: 'String value',
        hold: true,
        date: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        origInvoiceDate: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        postPeriod: 'String value',
        financialPeriod: 'String value',
        supplierReference: 'String value',
        description: 'String value',
        supplierNumber: 'String value',
        locationId: 'mock-id-123',
        currencyId: 'mock-id-123',
        paymentRefNo: 'String value',
        creditTermsId: 'mock-id-123',
        dueDate: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        cashDiscountDate: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        note: 'String value',
        exchangeRate: 42,
        branchNumber: 'String value',
        roundingDiffInCurrency: 42,
        taxCalculationMode: 'String value',
        supplierTaxZone: 'String value',
        cashAccount: 'String value',
        paymentMethod: 'String value',
        payDate: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        amount: 42,
        vatAmount: 42,
        paymentMessage: 'String value',
        applyRetainage: true,
        taxDetailLines: [],
        invoiceLines: [],
        approvalDetails: new ApprovalDetailsUpdateDto(
            attachmentId: 'mock-id-123',
            comment: 'String value'
        ),
        addPoreceiptLines: [],
        addPurchaseOrders: [],
        landedCosts: [],
        paySelected: true,
        overrideNumberSeries: true,
        validateLineDetails: true
    );

    Saloon::fake([
        SupplierInvoicePutByinvoiceNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SupplierInvoicePutByinvoiceNumberRequest(
        invoiceNumber: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierInvoicePutByinvoiceNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the supplierInvoiceDeleteByinvoiceNumberRequest method in the SupplierInvoice resource', function () {
    Saloon::fake([
        SupplierInvoiceDeleteByinvoiceNumberRequest::class => MockResponse::make([], 204),
    ]);

    $request = new SupplierInvoiceDeleteByinvoiceNumberRequest(
        invoiceNumber: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierInvoiceDeleteByinvoiceNumberRequest::class);

    expect($response->status())->toBe(204);
});

it('calls the supplierInvoiceGetByTypeBydocumentTypeinvoiceNumberRequest method in the SupplierInvoice resource', function () {
    Saloon::fake([
        SupplierInvoiceGetByTypeBydocumentTypeinvoiceNumberRequest::class => MockResponse::make([
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
            'taxCalculationMode' => 'String value',
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
            'documentType' => 'String value',
            'referenceNumber' => 'String value',
            'postPeriod' => 'String value',
            'financialPeriod' => 'String value',
            'date' => '2025-11-22T10:40:04+00:00',
            'origInvoiceDate' => '2025-11-22T10:40:04+00:00',
            'dueDate' => '2025-11-22T10:40:04+00:00',
            'approvalStatus' => 'String value',
            'status' => 'String value',
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

    $request = new SupplierInvoiceGetByTypeBydocumentTypeinvoiceNumberRequest(
        documentType: 'test string',
        invoiceNumber: 'test string',
        expandLinePrebookAccounts: true,
        expandLandedCosts: true,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierInvoiceGetByTypeBydocumentTypeinvoiceNumberRequest::class);

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
        ->taxCalculationMode->toBe('String value')
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
        ->documentType->toBe('String value')
        ->referenceNumber->toBe('String value')
        ->postPeriod->toBe('String value')
        ->financialPeriod->toBe('String value')
        ->date->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->origInvoiceDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->dueDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->approvalStatus->toBe('String value')
        ->status->toBe('String value')
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

it('calls the supplierInvoicePutByTypeBydocumentTypeinvoiceNumberRequest method in the SupplierInvoice resource', function () {
    $bodyData = new SupplierInvoiceUpdateDto(
        documentType: 'String value',
        referenceNumber: 'String value',
        hold: true,
        date: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        origInvoiceDate: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        postPeriod: 'String value',
        financialPeriod: 'String value',
        supplierReference: 'String value',
        description: 'String value',
        supplierNumber: 'String value',
        locationId: 'mock-id-123',
        currencyId: 'mock-id-123',
        paymentRefNo: 'String value',
        creditTermsId: 'mock-id-123',
        dueDate: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        cashDiscountDate: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        note: 'String value',
        exchangeRate: 42,
        branchNumber: 'String value',
        roundingDiffInCurrency: 42,
        taxCalculationMode: 'String value',
        supplierTaxZone: 'String value',
        cashAccount: 'String value',
        paymentMethod: 'String value',
        payDate: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        amount: 42,
        vatAmount: 42,
        paymentMessage: 'String value',
        applyRetainage: true,
        taxDetailLines: [],
        invoiceLines: [],
        approvalDetails: new ApprovalDetailsUpdateDto(
            attachmentId: 'mock-id-123',
            comment: 'String value'
        ),
        addPoreceiptLines: [],
        addPurchaseOrders: [],
        landedCosts: [],
        paySelected: true,
        overrideNumberSeries: true,
        validateLineDetails: true
    );

    Saloon::fake([
        SupplierInvoicePutByTypeBydocumentTypeinvoiceNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SupplierInvoicePutByTypeBydocumentTypeinvoiceNumberRequest(
        documentType: 'test string',
        invoiceNumber: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierInvoicePutByTypeBydocumentTypeinvoiceNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the supplierInvoiceDeleteBydocumentTypeinvoiceNumberRequest method in the SupplierInvoice resource', function () {
    Saloon::fake([
        SupplierInvoiceDeleteBydocumentTypeinvoiceNumberRequest::class => MockResponse::make([], 204),
    ]);

    $request = new SupplierInvoiceDeleteBydocumentTypeinvoiceNumberRequest(
        documentType: 'test string',
        invoiceNumber: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierInvoiceDeleteBydocumentTypeinvoiceNumberRequest::class);

    expect($response->status())->toBe(204);
});

it('calls the supplierInvoiceGetAllInvoicesRequest method in the SupplierInvoice resource', function () {
    Saloon::fake([
        SupplierInvoiceGetAllInvoicesRequest::class => MockResponse::make([
            0 => [
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
                'taxCalculationMode' => 'String value',
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
                'documentType' => 'String value',
                'referenceNumber' => 'String value',
                'postPeriod' => 'String value',
                'financialPeriod' => 'String value',
                'date' => '2025-11-22T10:40:04+00:00',
                'origInvoiceDate' => '2025-11-22T10:40:04+00:00',
                'dueDate' => '2025-11-22T10:40:04+00:00',
                'approvalStatus' => 'String value',
                'status' => 'String value',
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
            ],
            1 => [
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
                'taxCalculationMode' => 'String value',
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
                'documentType' => 'String value',
                'referenceNumber' => 'String value',
                'postPeriod' => 'String value',
                'financialPeriod' => 'String value',
                'date' => '2025-11-22T10:40:04+00:00',
                'origInvoiceDate' => '2025-11-22T10:40:04+00:00',
                'dueDate' => '2025-11-22T10:40:04+00:00',
                'approvalStatus' => 'String value',
                'status' => 'String value',
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
            ],
        ], 200),
    ]);

    $request = new SupplierInvoiceGetAllInvoicesRequest(
        supplier: 'test string',
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

    Saloon::assertSent(SupplierInvoiceGetAllInvoicesRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toHaveCount(2);
    expect($collection->first())
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
        ->taxCalculationMode->toBe('String value')
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
        ->documentType->toBe('String value')
        ->referenceNumber->toBe('String value')
        ->postPeriod->toBe('String value')
        ->financialPeriod->toBe('String value')
        ->date->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->origInvoiceDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->dueDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->approvalStatus->toBe('String value')
        ->status->toBe('String value')
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

it('calls the supplierInvoicePostRequest method in the SupplierInvoice resource', function () {
    $bodyData = new SupplierInvoiceUpdateDto(
        documentType: 'String value',
        referenceNumber: 'String value',
        hold: true,
        date: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        origInvoiceDate: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        postPeriod: 'String value',
        financialPeriod: 'String value',
        supplierReference: 'String value',
        description: 'String value',
        supplierNumber: 'String value',
        locationId: 'mock-id-123',
        currencyId: 'mock-id-123',
        paymentRefNo: 'String value',
        creditTermsId: 'mock-id-123',
        dueDate: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        cashDiscountDate: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        note: 'String value',
        exchangeRate: 42,
        branchNumber: 'String value',
        roundingDiffInCurrency: 42,
        taxCalculationMode: 'String value',
        supplierTaxZone: 'String value',
        cashAccount: 'String value',
        paymentMethod: 'String value',
        payDate: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        amount: 42,
        vatAmount: 42,
        paymentMessage: 'String value',
        applyRetainage: true,
        taxDetailLines: [],
        invoiceLines: [],
        approvalDetails: new ApprovalDetailsUpdateDto(
            attachmentId: 'mock-id-123',
            comment: 'String value'
        ),
        addPoreceiptLines: [],
        addPurchaseOrders: [],
        landedCosts: [],
        paySelected: true,
        overrideNumberSeries: true,
        validateLineDetails: true
    );

    Saloon::fake([
        SupplierInvoicePostRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SupplierInvoicePostRequest(
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierInvoicePostRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the supplierInvoiceGetByApprovalDocumentIdRequest method in the SupplierInvoice resource', function () {
    Saloon::fake([
        SupplierInvoiceGetByApprovalDocumentIdRequest::class => MockResponse::make([
            0 => [
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
                'taxCalculationMode' => 'String value',
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
                'documentType' => 'String value',
                'referenceNumber' => 'String value',
                'postPeriod' => 'String value',
                'financialPeriod' => 'String value',
                'date' => '2025-11-22T10:40:04+00:00',
                'origInvoiceDate' => '2025-11-22T10:40:04+00:00',
                'dueDate' => '2025-11-22T10:40:04+00:00',
                'approvalStatus' => 'String value',
                'status' => 'String value',
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
            ],
            1 => [
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
                'taxCalculationMode' => 'String value',
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
                'documentType' => 'String value',
                'referenceNumber' => 'String value',
                'postPeriod' => 'String value',
                'financialPeriod' => 'String value',
                'date' => '2025-11-22T10:40:04+00:00',
                'origInvoiceDate' => '2025-11-22T10:40:04+00:00',
                'dueDate' => '2025-11-22T10:40:04+00:00',
                'approvalStatus' => 'String value',
                'status' => 'String value',
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
            ],
        ], 200),
    ]);

    $request = new SupplierInvoiceGetByApprovalDocumentIdRequest(
        systemId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierInvoiceGetByApprovalDocumentIdRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toHaveCount(2);
    expect($collection->first())
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
        ->taxCalculationMode->toBe('String value')
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
        ->documentType->toBe('String value')
        ->referenceNumber->toBe('String value')
        ->postPeriod->toBe('String value')
        ->financialPeriod->toBe('String value')
        ->date->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->origInvoiceDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->dueDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->approvalStatus->toBe('String value')
        ->status->toBe('String value')
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

it('calls the supplierInvoiceReleaseInvoiceByinvoiceNumberRequest method in the SupplierInvoice resource', function () {
    $bodyData = [];

    Saloon::fake([
        SupplierInvoiceReleaseInvoiceByinvoiceNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SupplierInvoiceReleaseInvoiceByinvoiceNumberRequest(
        invoiceNumber: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierInvoiceReleaseInvoiceByinvoiceNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the supplierInvoiceCorrectInvoiceByinvoiceNumberRequest method in the SupplierInvoice resource', function () {
    $bodyData = [];

    Saloon::fake([
        SupplierInvoiceCorrectInvoiceByinvoiceNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SupplierInvoiceCorrectInvoiceByinvoiceNumberRequest(
        invoiceNumber: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierInvoiceCorrectInvoiceByinvoiceNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the supplierInvoiceReverseInvoiceBydocumentTypeinvoiceNumberRequest method in the SupplierInvoice resource', function () {
    $bodyData = [];

    Saloon::fake([
        SupplierInvoiceReverseInvoiceBydocumentTypeinvoiceNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SupplierInvoiceReverseInvoiceBydocumentTypeinvoiceNumberRequest(
        documentType: 'test string',
        invoiceNumber: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierInvoiceReverseInvoiceBydocumentTypeinvoiceNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the supplierInvoiceSendToApprovalBydocumentTypeinvoiceNumberRequest method in the SupplierInvoice resource', function () {
    $bodyData = [];

    Saloon::fake([
        SupplierInvoiceSendToApprovalBydocumentTypeinvoiceNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SupplierInvoiceSendToApprovalBydocumentTypeinvoiceNumberRequest(
        documentType: 'test string',
        invoiceNumber: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierInvoiceSendToApprovalBydocumentTypeinvoiceNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the supplierInvoiceReleaseInvoiceByTypeBydocumentTypeinvoiceNumberRequest method in the SupplierInvoice resource', function () {
    $bodyData = [];

    Saloon::fake([
        SupplierInvoiceReleaseInvoiceByTypeBydocumentTypeinvoiceNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SupplierInvoiceReleaseInvoiceByTypeBydocumentTypeinvoiceNumberRequest(
        documentType: 'test string',
        invoiceNumber: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierInvoiceReleaseInvoiceByTypeBydocumentTypeinvoiceNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the supplierInvoicePrebookInvoiceBydocumentTypeinvoiceNumberRequest method in the SupplierInvoice resource', function () {
    $bodyData = new PrebookingUpdateDto(
        accountNumber: 'String value',
        subaccount: []
    );

    Saloon::fake([
        SupplierInvoicePrebookInvoiceBydocumentTypeinvoiceNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SupplierInvoicePrebookInvoiceBydocumentTypeinvoiceNumberRequest(
        documentType: 'test string',
        invoiceNumber: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierInvoicePrebookInvoiceBydocumentTypeinvoiceNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the supplierInvoiceVoidInvoiceBydocumentTypeinvoiceNumberRequest method in the SupplierInvoice resource', function () {
    $bodyData = [];

    Saloon::fake([
        SupplierInvoiceVoidInvoiceBydocumentTypeinvoiceNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SupplierInvoiceVoidInvoiceBydocumentTypeinvoiceNumberRequest(
        documentType: 'test string',
        invoiceNumber: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierInvoiceVoidInvoiceBydocumentTypeinvoiceNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the supplierInvoiceWriteoffInvoiceBydocumentTypeinvoiceNumberRequest method in the SupplierInvoice resource', function () {
    $bodyData = [];

    Saloon::fake([
        SupplierInvoiceWriteoffInvoiceBydocumentTypeinvoiceNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SupplierInvoiceWriteoffInvoiceBydocumentTypeinvoiceNumberRequest(
        documentType: 'test string',
        invoiceNumber: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierInvoiceWriteoffInvoiceBydocumentTypeinvoiceNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the supplierInvoiceCreateHeaderAttachmentByinvoiceNumberRequest method in the SupplierInvoice resource', function () {
    $bodyData = [];

    Saloon::fake([
        SupplierInvoiceCreateHeaderAttachmentByinvoiceNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SupplierInvoiceCreateHeaderAttachmentByinvoiceNumberRequest(
        invoiceNumber: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierInvoiceCreateHeaderAttachmentByinvoiceNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the supplierInvoiceCreateLineAttachmentByinvoiceNumberlineNumberRequest method in the SupplierInvoice resource', function () {
    $bodyData = [];

    Saloon::fake([
        SupplierInvoiceCreateLineAttachmentByinvoiceNumberlineNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SupplierInvoiceCreateLineAttachmentByinvoiceNumberlineNumberRequest(
        invoiceNumber: 'test string',
        lineNumber: 123,
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierInvoiceCreateLineAttachmentByinvoiceNumberlineNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the supplierInvoiceCreateHeaderAttachmentByTypeBydocumentTypeinvoiceNumberRequest method in the SupplierInvoice resource', function () {
    $bodyData = [];

    Saloon::fake([
        SupplierInvoiceCreateHeaderAttachmentByTypeBydocumentTypeinvoiceNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SupplierInvoiceCreateHeaderAttachmentByTypeBydocumentTypeinvoiceNumberRequest(
        documentType: 'test string',
        invoiceNumber: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierInvoiceCreateHeaderAttachmentByTypeBydocumentTypeinvoiceNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the supplierInvoiceCreateLineAttachmentByTypeBydocumentTypeinvoiceNumberlineNumberRequest method in the SupplierInvoice resource', function () {
    $bodyData = [];

    Saloon::fake([
        SupplierInvoiceCreateLineAttachmentByTypeBydocumentTypeinvoiceNumberlineNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SupplierInvoiceCreateLineAttachmentByTypeBydocumentTypeinvoiceNumberlineNumberRequest(
        documentType: 'test string',
        invoiceNumber: 'test string',
        lineNumber: 123,
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierInvoiceCreateLineAttachmentByTypeBydocumentTypeinvoiceNumberlineNumberRequest::class);

    expect($response->status())->toBe(201);
});
