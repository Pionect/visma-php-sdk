<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\SupplierInvoice\SupplierInvoiceGetAllInvoicesCollectionRequest;
use Pionect\VismaSdk\Requests\SupplierInvoice\SupplierInvoiceGetByApprovalDocumentIdCollectionRequest;
use Pionect\VismaSdk\Requests\SupplierInvoice\SupplierInvoiceGetByinvoiceNumberRequest;
use Pionect\VismaSdk\Requests\SupplierInvoice\SupplierInvoiceGetByTypeBydocumentTypeinvoiceNumberRequest;
use Pionect\VismaSdk\Requests\SupplierInvoice\SupplierInvoiceWriteoffInvoiceBydocumentTypeinvoiceNumberRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Http\Request;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector(
        clientId: 'replace',
        clientSecret: 'replace'
    );
});

it('calls the supplierInvoiceGetByinvoiceNumber method in the SupplierInvoice resource', function () {
    Saloon::fake([
        SupplierInvoiceGetByinvoiceNumberRequest::class => MockResponse::make([
            'taxDetailLines' => [],
            'attachments' => [],
            'approvalDetails' => 'Mock value',
            'invoiceLines' => [],
            'landedCosts' => [],
            'hold' => true,
            'exchangeRate' => 3.14,
            'paymentRefNo' => 'Mock value',
            'creditTerms' => 'Mock value',
            'retainageApply' => true,
            'cashDiscountDate' => '2025-11-22T10:40:04.065Z',
            'detailTotal' => 3.14,
            'detailTotalInCurrency' => 3.14,
            'discountTotal' => 3.14,
            'discountTotalInCurrency' => 3.14,
            'vatTaxableTotal' => 3.14,
            'vatTaxableTotalInCurrency' => 3.14,
            'vatExemptTotal' => 3.14,
            'vatExemptTotalInCurrency' => 3.14,
            'withholdingTax' => 3.14,
            'withholdingTaxInCurrency' => 3.14,
            'buyerReference' => 'Mock value',
            'roundingDiff' => 3.14,
            'roundingDiffInCurrency' => 3.14,
            'amount' => 3.14,
            'vatAmount' => 3.14,
            'taxCalculationMode' => 'Mock value',
            'supplierTaxZone' => 'Mock value',
            'paySelected' => true,
            'curyRetainageTotal' => 3.14,
            'curyRetainageUnreleasedAmt' => 3.14,
            'documentVersionNumber' => 42,
            'supplier' => 'Mock value',
            'documentType' => 'Mock value',
            'referenceNumber' => 'Mock value',
            'postPeriod' => 'Mock value',
            'financialPeriod' => 'Mock value',
            'date' => '2025-11-22T10:40:04.065Z',
            'origInvoiceDate' => '2025-11-22T10:40:04.065Z',
            'dueDate' => '2025-11-22T10:40:04.065Z',
            'approvalStatus' => 'Mock value',
            'status' => 'Mock value',
            'currencyId' => 'mock-id-123',
            'balance' => 3.14,
            'balanceInCurrency' => 3.14,
            'cashDiscount' => 3.14,
            'cashDiscountInCurrency' => 3.14,
            'paymentMethod' => 'Mock value',
            'supplierReference' => 'Mock value',
            'description' => 'Mock value',
            'createdDateTime' => '2025-11-22T10:40:04.065Z',
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'note' => 'Mock value',
            'closedFinancialPeriod' => 'Mock value',
            'location' => 'Mock value',
            'vatTotal' => 3.14,
            'vatTotalInCurrency' => 3.14,
            'branchNumber' => 'Mock value',
            'payDate' => '2025-11-22T10:40:04.065Z',
            'paymentMessage' => 'Mock value',
            'cashAccount' => 'Mock value',
            'timeStamp' => '2025-11-22T10:40:04.065Z',
            'errorInfo' => 'Mock value',
            'metadata' => 'Mock value',
        ], 200),
    ]);

    $request = new SupplierInvoiceGetByinvoiceNumberRequest(
        invoiceNumberId: 'test string',
        expandLinePrebookAccounts: true,
        expandLandedCosts: true,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierInvoiceGetByinvoiceNumberRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->approvalDetails->toBe('Mock value')
        ->hold->toBeTrue()
        ->exchangeRate->toBe(3.14)
        ->paymentRefNo->toBe('Mock value')
        ->creditTerms->toBe('Mock value')
        ->retainageApply->toBeTrue()
        ->cashDiscountDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->detailTotal->toBe(3.14)
        ->detailTotalInCurrency->toBe(3.14)
        ->discountTotal->toBe(3.14)
        ->discountTotalInCurrency->toBe(3.14)
        ->vatTaxableTotal->toBe(3.14)
        ->vatTaxableTotalInCurrency->toBe(3.14)
        ->vatExemptTotal->toBe(3.14)
        ->vatExemptTotalInCurrency->toBe(3.14)
        ->withholdingTax->toBe(3.14)
        ->withholdingTaxInCurrency->toBe(3.14)
        ->buyerReference->toBe('Mock value')
        ->roundingDiff->toBe(3.14)
        ->roundingDiffInCurrency->toBe(3.14)
        ->amount->toBe(3.14)
        ->vatAmount->toBe(3.14)
        ->taxCalculationMode->toBe('Mock value')
        ->supplierTaxZone->toBe('Mock value')
        ->paySelected->toBeTrue()
        ->curyRetainageTotal->toBe(3.14)
        ->curyRetainageUnreleasedAmt->toBe(3.14)
        ->documentVersionNumber->toBe(42)
        ->supplier->toBe('Mock value')
        ->documentType->toBe('Mock value')
        ->referenceNumber->toBe('Mock value')
        ->postPeriod->toBe('Mock value')
        ->financialPeriod->toBe('Mock value')
        ->date->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->origInvoiceDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->dueDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->approvalStatus->toBe('Mock value')
        ->status->toBe('Mock value')
        ->currencyId->toBe('mock-id-123')
        ->balance->toBe(3.14)
        ->balanceInCurrency->toBe(3.14)
        ->cashDiscount->toBe(3.14)
        ->cashDiscountInCurrency->toBe(3.14)
        ->paymentMethod->toBe('Mock value')
        ->supplierReference->toBe('Mock value')
        ->description->toBe('Mock value')
        ->createdDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->note->toBe('Mock value')
        ->closedFinancialPeriod->toBe('Mock value')
        ->location->toBe('Mock value')
        ->vatTotal->toBe(3.14)
        ->vatTotalInCurrency->toBe(3.14)
        ->branchNumber->toBe('Mock value')
        ->payDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->paymentMessage->toBe('Mock value')
        ->cashAccount->toBe('Mock value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the supplierInvoiceGetByTypeBydocumentTypeinvoiceNumber method in the SupplierInvoice resource', function () {
    Saloon::fake([
        SupplierInvoiceGetByTypeBydocumentTypeinvoiceNumberRequest::class => MockResponse::make([
            'taxDetailLines' => [],
            'attachments' => [],
            'approvalDetails' => 'Mock value',
            'invoiceLines' => [],
            'landedCosts' => [],
            'hold' => true,
            'exchangeRate' => 3.14,
            'paymentRefNo' => 'Mock value',
            'creditTerms' => 'Mock value',
            'retainageApply' => true,
            'cashDiscountDate' => '2025-11-22T10:40:04.065Z',
            'detailTotal' => 3.14,
            'detailTotalInCurrency' => 3.14,
            'discountTotal' => 3.14,
            'discountTotalInCurrency' => 3.14,
            'vatTaxableTotal' => 3.14,
            'vatTaxableTotalInCurrency' => 3.14,
            'vatExemptTotal' => 3.14,
            'vatExemptTotalInCurrency' => 3.14,
            'withholdingTax' => 3.14,
            'withholdingTaxInCurrency' => 3.14,
            'buyerReference' => 'Mock value',
            'roundingDiff' => 3.14,
            'roundingDiffInCurrency' => 3.14,
            'amount' => 3.14,
            'vatAmount' => 3.14,
            'taxCalculationMode' => 'Mock value',
            'supplierTaxZone' => 'Mock value',
            'paySelected' => true,
            'curyRetainageTotal' => 3.14,
            'curyRetainageUnreleasedAmt' => 3.14,
            'documentVersionNumber' => 42,
            'supplier' => 'Mock value',
            'documentType' => 'Mock value',
            'referenceNumber' => 'Mock value',
            'postPeriod' => 'Mock value',
            'financialPeriod' => 'Mock value',
            'date' => '2025-11-22T10:40:04.065Z',
            'origInvoiceDate' => '2025-11-22T10:40:04.065Z',
            'dueDate' => '2025-11-22T10:40:04.065Z',
            'approvalStatus' => 'Mock value',
            'status' => 'Mock value',
            'currencyId' => 'mock-id-123',
            'balance' => 3.14,
            'balanceInCurrency' => 3.14,
            'cashDiscount' => 3.14,
            'cashDiscountInCurrency' => 3.14,
            'paymentMethod' => 'Mock value',
            'supplierReference' => 'Mock value',
            'description' => 'Mock value',
            'createdDateTime' => '2025-11-22T10:40:04.065Z',
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'note' => 'Mock value',
            'closedFinancialPeriod' => 'Mock value',
            'location' => 'Mock value',
            'vatTotal' => 3.14,
            'vatTotalInCurrency' => 3.14,
            'branchNumber' => 'Mock value',
            'payDate' => '2025-11-22T10:40:04.065Z',
            'paymentMessage' => 'Mock value',
            'cashAccount' => 'Mock value',
            'timeStamp' => '2025-11-22T10:40:04.065Z',
            'errorInfo' => 'Mock value',
            'metadata' => 'Mock value',
        ], 200),
    ]);

    $request = new SupplierInvoiceGetByTypeBydocumentTypeinvoiceNumberRequest(
        documentTypeId: 'test string',
        invoiceNumberId: 'test string',
        expandLinePrebookAccounts: true,
        expandLandedCosts: true,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierInvoiceGetByTypeBydocumentTypeinvoiceNumberRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->approvalDetails->toBe('Mock value')
        ->hold->toBeTrue()
        ->exchangeRate->toBe(3.14)
        ->paymentRefNo->toBe('Mock value')
        ->creditTerms->toBe('Mock value')
        ->retainageApply->toBeTrue()
        ->cashDiscountDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->detailTotal->toBe(3.14)
        ->detailTotalInCurrency->toBe(3.14)
        ->discountTotal->toBe(3.14)
        ->discountTotalInCurrency->toBe(3.14)
        ->vatTaxableTotal->toBe(3.14)
        ->vatTaxableTotalInCurrency->toBe(3.14)
        ->vatExemptTotal->toBe(3.14)
        ->vatExemptTotalInCurrency->toBe(3.14)
        ->withholdingTax->toBe(3.14)
        ->withholdingTaxInCurrency->toBe(3.14)
        ->buyerReference->toBe('Mock value')
        ->roundingDiff->toBe(3.14)
        ->roundingDiffInCurrency->toBe(3.14)
        ->amount->toBe(3.14)
        ->vatAmount->toBe(3.14)
        ->taxCalculationMode->toBe('Mock value')
        ->supplierTaxZone->toBe('Mock value')
        ->paySelected->toBeTrue()
        ->curyRetainageTotal->toBe(3.14)
        ->curyRetainageUnreleasedAmt->toBe(3.14)
        ->documentVersionNumber->toBe(42)
        ->supplier->toBe('Mock value')
        ->documentType->toBe('Mock value')
        ->referenceNumber->toBe('Mock value')
        ->postPeriod->toBe('Mock value')
        ->financialPeriod->toBe('Mock value')
        ->date->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->origInvoiceDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->dueDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->approvalStatus->toBe('Mock value')
        ->status->toBe('Mock value')
        ->currencyId->toBe('mock-id-123')
        ->balance->toBe(3.14)
        ->balanceInCurrency->toBe(3.14)
        ->cashDiscount->toBe(3.14)
        ->cashDiscountInCurrency->toBe(3.14)
        ->paymentMethod->toBe('Mock value')
        ->supplierReference->toBe('Mock value')
        ->description->toBe('Mock value')
        ->createdDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->note->toBe('Mock value')
        ->closedFinancialPeriod->toBe('Mock value')
        ->location->toBe('Mock value')
        ->vatTotal->toBe(3.14)
        ->vatTotalInCurrency->toBe(3.14)
        ->branchNumber->toBe('Mock value')
        ->payDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->paymentMessage->toBe('Mock value')
        ->cashAccount->toBe('Mock value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the supplierInvoiceGetAllInvoicesCollection method in the SupplierInvoice resource', function () {
    Saloon::fake([
        SupplierInvoiceGetAllInvoicesCollectionRequest::class => MockResponse::make([
            0 => [
                'taxDetailLines' => [],
                'attachments' => [],
                'approvalDetails' => 'Mock value',
                'invoiceLines' => [],
                'landedCosts' => [],
                'hold' => true,
                'exchangeRate' => 3.14,
                'paymentRefNo' => 'Mock value',
                'creditTerms' => 'Mock value',
                'retainageApply' => true,
                'cashDiscountDate' => '2025-11-22T10:40:04.065Z',
                'detailTotal' => 3.14,
                'detailTotalInCurrency' => 3.14,
                'discountTotal' => 3.14,
                'discountTotalInCurrency' => 3.14,
                'vatTaxableTotal' => 3.14,
                'vatTaxableTotalInCurrency' => 3.14,
                'vatExemptTotal' => 3.14,
                'vatExemptTotalInCurrency' => 3.14,
                'withholdingTax' => 3.14,
                'withholdingTaxInCurrency' => 3.14,
                'buyerReference' => 'Mock value',
                'roundingDiff' => 3.14,
                'roundingDiffInCurrency' => 3.14,
                'amount' => 3.14,
                'vatAmount' => 3.14,
                'taxCalculationMode' => 'Mock value',
                'supplierTaxZone' => 'Mock value',
                'paySelected' => true,
                'curyRetainageTotal' => 3.14,
                'curyRetainageUnreleasedAmt' => 3.14,
                'documentVersionNumber' => 42,
                'supplier' => 'Mock value',
                'documentType' => 'Mock value',
                'referenceNumber' => 'Mock value',
                'postPeriod' => 'Mock value',
                'financialPeriod' => 'Mock value',
                'date' => '2025-11-22T10:40:04.065Z',
                'origInvoiceDate' => '2025-11-22T10:40:04.065Z',
                'dueDate' => '2025-11-22T10:40:04.065Z',
                'approvalStatus' => 'Mock value',
                'status' => 'Mock value',
                'currencyId' => 'mock-id-123',
                'balance' => 3.14,
                'balanceInCurrency' => 3.14,
                'cashDiscount' => 3.14,
                'cashDiscountInCurrency' => 3.14,
                'paymentMethod' => 'Mock value',
                'supplierReference' => 'Mock value',
                'description' => 'Mock value',
                'createdDateTime' => '2025-11-22T10:40:04.065Z',
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'note' => 'Mock value',
                'closedFinancialPeriod' => 'Mock value',
                'location' => 'Mock value',
                'vatTotal' => 3.14,
                'vatTotalInCurrency' => 3.14,
                'branchNumber' => 'Mock value',
                'payDate' => '2025-11-22T10:40:04.065Z',
                'paymentMessage' => 'Mock value',
                'cashAccount' => 'Mock value',
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'Mock value',
                'metadata' => 'Mock value',
            ],
            1 => [
                'taxDetailLines' => [],
                'attachments' => [],
                'approvalDetails' => 'Mock value',
                'invoiceLines' => [],
                'landedCosts' => [],
                'hold' => true,
                'exchangeRate' => 3.14,
                'paymentRefNo' => 'Mock value',
                'creditTerms' => 'Mock value',
                'retainageApply' => true,
                'cashDiscountDate' => '2025-11-22T10:40:04.065Z',
                'detailTotal' => 3.14,
                'detailTotalInCurrency' => 3.14,
                'discountTotal' => 3.14,
                'discountTotalInCurrency' => 3.14,
                'vatTaxableTotal' => 3.14,
                'vatTaxableTotalInCurrency' => 3.14,
                'vatExemptTotal' => 3.14,
                'vatExemptTotalInCurrency' => 3.14,
                'withholdingTax' => 3.14,
                'withholdingTaxInCurrency' => 3.14,
                'buyerReference' => 'Mock value',
                'roundingDiff' => 3.14,
                'roundingDiffInCurrency' => 3.14,
                'amount' => 3.14,
                'vatAmount' => 3.14,
                'taxCalculationMode' => 'Mock value',
                'supplierTaxZone' => 'Mock value',
                'paySelected' => true,
                'curyRetainageTotal' => 3.14,
                'curyRetainageUnreleasedAmt' => 3.14,
                'documentVersionNumber' => 42,
                'supplier' => 'Mock value',
                'documentType' => 'Mock value',
                'referenceNumber' => 'Mock value',
                'postPeriod' => 'Mock value',
                'financialPeriod' => 'Mock value',
                'date' => '2025-11-22T10:40:04.065Z',
                'origInvoiceDate' => '2025-11-22T10:40:04.065Z',
                'dueDate' => '2025-11-22T10:40:04.065Z',
                'approvalStatus' => 'Mock value',
                'status' => 'Mock value',
                'currencyId' => 'mock-id-123',
                'balance' => 3.14,
                'balanceInCurrency' => 3.14,
                'cashDiscount' => 3.14,
                'cashDiscountInCurrency' => 3.14,
                'paymentMethod' => 'Mock value',
                'supplierReference' => 'Mock value',
                'description' => 'Mock value',
                'createdDateTime' => '2025-11-22T10:40:04.065Z',
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'note' => 'Mock value',
                'closedFinancialPeriod' => 'Mock value',
                'location' => 'Mock value',
                'vatTotal' => 3.14,
                'vatTotalInCurrency' => 3.14,
                'branchNumber' => 'Mock value',
                'payDate' => '2025-11-22T10:40:04.065Z',
                'paymentMessage' => 'Mock value',
                'cashAccount' => 'Mock value',
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'Mock value',
                'metadata' => 'Mock value',
            ],
        ], 200),
    ]);

    $request = (new SupplierInvoiceGetAllInvoicesCollectionRequest(supplier: 'test string', expandAttachment: true, expandLandedCosts: true, documentType: 'test string', released: 123, project: 'test string', expandApproval: true, expandNote: true, numberToRead: 123, skipRecords: 123, status: 'test string', expandLinePrebookAccounts: true, branch: 'test string', financialPeriod: 'test string', dueDate: 'test string', dueDateCondition: 'test string', docDate: 'test string', docDateCondition: 'test string', item: 'test string', balance: null, balanceCondition: 'test string', greaterThanValue: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', createdDateTime: 'test string', createdDateTimeCondition: 'test string', pageNumber: 123, pageSize: 123));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (SupplierInvoiceGetAllInvoicesCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->approvalDetails->toBe('Mock value')
        ->hold->toBeTrue()
        ->exchangeRate->toBe(3.14)
        ->paymentRefNo->toBe('Mock value')
        ->creditTerms->toBe('Mock value')
        ->retainageApply->toBeTrue()
        ->cashDiscountDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->detailTotal->toBe(3.14)
        ->detailTotalInCurrency->toBe(3.14)
        ->discountTotal->toBe(3.14)
        ->discountTotalInCurrency->toBe(3.14)
        ->vatTaxableTotal->toBe(3.14)
        ->vatTaxableTotalInCurrency->toBe(3.14)
        ->vatExemptTotal->toBe(3.14)
        ->vatExemptTotalInCurrency->toBe(3.14)
        ->withholdingTax->toBe(3.14)
        ->withholdingTaxInCurrency->toBe(3.14)
        ->buyerReference->toBe('Mock value')
        ->roundingDiff->toBe(3.14)
        ->roundingDiffInCurrency->toBe(3.14)
        ->amount->toBe(3.14)
        ->vatAmount->toBe(3.14)
        ->taxCalculationMode->toBe('Mock value')
        ->supplierTaxZone->toBe('Mock value')
        ->paySelected->toBeTrue()
        ->curyRetainageTotal->toBe(3.14)
        ->curyRetainageUnreleasedAmt->toBe(3.14)
        ->documentVersionNumber->toBe(42)
        ->supplier->toBe('Mock value')
        ->documentType->toBe('Mock value')
        ->referenceNumber->toBe('Mock value')
        ->postPeriod->toBe('Mock value')
        ->financialPeriod->toBe('Mock value')
        ->date->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->origInvoiceDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->dueDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->approvalStatus->toBe('Mock value')
        ->status->toBe('Mock value')
        ->currencyId->toBe('mock-id-123')
        ->balance->toBe(3.14)
        ->balanceInCurrency->toBe(3.14)
        ->cashDiscount->toBe(3.14)
        ->cashDiscountInCurrency->toBe(3.14)
        ->paymentMethod->toBe('Mock value')
        ->supplierReference->toBe('Mock value')
        ->description->toBe('Mock value')
        ->createdDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->note->toBe('Mock value')
        ->closedFinancialPeriod->toBe('Mock value')
        ->location->toBe('Mock value')
        ->vatTotal->toBe(3.14)
        ->vatTotalInCurrency->toBe(3.14)
        ->branchNumber->toBe('Mock value')
        ->payDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->paymentMessage->toBe('Mock value')
        ->cashAccount->toBe('Mock value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the supplierInvoiceGetByApprovalDocumentIdCollection method in the SupplierInvoice resource', function () {
    Saloon::fake([
        SupplierInvoiceGetByApprovalDocumentIdCollectionRequest::class => MockResponse::make([
            0 => [
                'taxDetailLines' => [],
                'attachments' => [],
                'approvalDetails' => 'Mock value',
                'invoiceLines' => [],
                'landedCosts' => [],
                'hold' => true,
                'exchangeRate' => 3.14,
                'paymentRefNo' => 'Mock value',
                'creditTerms' => 'Mock value',
                'retainageApply' => true,
                'cashDiscountDate' => '2025-11-22T10:40:04.065Z',
                'detailTotal' => 3.14,
                'detailTotalInCurrency' => 3.14,
                'discountTotal' => 3.14,
                'discountTotalInCurrency' => 3.14,
                'vatTaxableTotal' => 3.14,
                'vatTaxableTotalInCurrency' => 3.14,
                'vatExemptTotal' => 3.14,
                'vatExemptTotalInCurrency' => 3.14,
                'withholdingTax' => 3.14,
                'withholdingTaxInCurrency' => 3.14,
                'buyerReference' => 'Mock value',
                'roundingDiff' => 3.14,
                'roundingDiffInCurrency' => 3.14,
                'amount' => 3.14,
                'vatAmount' => 3.14,
                'taxCalculationMode' => 'Mock value',
                'supplierTaxZone' => 'Mock value',
                'paySelected' => true,
                'curyRetainageTotal' => 3.14,
                'curyRetainageUnreleasedAmt' => 3.14,
                'documentVersionNumber' => 42,
                'supplier' => 'Mock value',
                'documentType' => 'Mock value',
                'referenceNumber' => 'Mock value',
                'postPeriod' => 'Mock value',
                'financialPeriod' => 'Mock value',
                'date' => '2025-11-22T10:40:04.065Z',
                'origInvoiceDate' => '2025-11-22T10:40:04.065Z',
                'dueDate' => '2025-11-22T10:40:04.065Z',
                'approvalStatus' => 'Mock value',
                'status' => 'Mock value',
                'currencyId' => 'mock-id-123',
                'balance' => 3.14,
                'balanceInCurrency' => 3.14,
                'cashDiscount' => 3.14,
                'cashDiscountInCurrency' => 3.14,
                'paymentMethod' => 'Mock value',
                'supplierReference' => 'Mock value',
                'description' => 'Mock value',
                'createdDateTime' => '2025-11-22T10:40:04.065Z',
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'note' => 'Mock value',
                'closedFinancialPeriod' => 'Mock value',
                'location' => 'Mock value',
                'vatTotal' => 3.14,
                'vatTotalInCurrency' => 3.14,
                'branchNumber' => 'Mock value',
                'payDate' => '2025-11-22T10:40:04.065Z',
                'paymentMessage' => 'Mock value',
                'cashAccount' => 'Mock value',
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'Mock value',
                'metadata' => 'Mock value',
            ],
            1 => [
                'taxDetailLines' => [],
                'attachments' => [],
                'approvalDetails' => 'Mock value',
                'invoiceLines' => [],
                'landedCosts' => [],
                'hold' => true,
                'exchangeRate' => 3.14,
                'paymentRefNo' => 'Mock value',
                'creditTerms' => 'Mock value',
                'retainageApply' => true,
                'cashDiscountDate' => '2025-11-22T10:40:04.065Z',
                'detailTotal' => 3.14,
                'detailTotalInCurrency' => 3.14,
                'discountTotal' => 3.14,
                'discountTotalInCurrency' => 3.14,
                'vatTaxableTotal' => 3.14,
                'vatTaxableTotalInCurrency' => 3.14,
                'vatExemptTotal' => 3.14,
                'vatExemptTotalInCurrency' => 3.14,
                'withholdingTax' => 3.14,
                'withholdingTaxInCurrency' => 3.14,
                'buyerReference' => 'Mock value',
                'roundingDiff' => 3.14,
                'roundingDiffInCurrency' => 3.14,
                'amount' => 3.14,
                'vatAmount' => 3.14,
                'taxCalculationMode' => 'Mock value',
                'supplierTaxZone' => 'Mock value',
                'paySelected' => true,
                'curyRetainageTotal' => 3.14,
                'curyRetainageUnreleasedAmt' => 3.14,
                'documentVersionNumber' => 42,
                'supplier' => 'Mock value',
                'documentType' => 'Mock value',
                'referenceNumber' => 'Mock value',
                'postPeriod' => 'Mock value',
                'financialPeriod' => 'Mock value',
                'date' => '2025-11-22T10:40:04.065Z',
                'origInvoiceDate' => '2025-11-22T10:40:04.065Z',
                'dueDate' => '2025-11-22T10:40:04.065Z',
                'approvalStatus' => 'Mock value',
                'status' => 'Mock value',
                'currencyId' => 'mock-id-123',
                'balance' => 3.14,
                'balanceInCurrency' => 3.14,
                'cashDiscount' => 3.14,
                'cashDiscountInCurrency' => 3.14,
                'paymentMethod' => 'Mock value',
                'supplierReference' => 'Mock value',
                'description' => 'Mock value',
                'createdDateTime' => '2025-11-22T10:40:04.065Z',
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'note' => 'Mock value',
                'closedFinancialPeriod' => 'Mock value',
                'location' => 'Mock value',
                'vatTotal' => 3.14,
                'vatTotalInCurrency' => 3.14,
                'branchNumber' => 'Mock value',
                'payDate' => '2025-11-22T10:40:04.065Z',
                'paymentMessage' => 'Mock value',
                'cashAccount' => 'Mock value',
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'Mock value',
                'metadata' => 'Mock value',
            ],
        ], 200),
    ]);

    $request = (new SupplierInvoiceGetByApprovalDocumentIdCollectionRequest(systemId: 'test string'));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (SupplierInvoiceGetByApprovalDocumentIdCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->approvalDetails->toBe('Mock value')
        ->hold->toBeTrue()
        ->exchangeRate->toBe(3.14)
        ->paymentRefNo->toBe('Mock value')
        ->creditTerms->toBe('Mock value')
        ->retainageApply->toBeTrue()
        ->cashDiscountDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->detailTotal->toBe(3.14)
        ->detailTotalInCurrency->toBe(3.14)
        ->discountTotal->toBe(3.14)
        ->discountTotalInCurrency->toBe(3.14)
        ->vatTaxableTotal->toBe(3.14)
        ->vatTaxableTotalInCurrency->toBe(3.14)
        ->vatExemptTotal->toBe(3.14)
        ->vatExemptTotalInCurrency->toBe(3.14)
        ->withholdingTax->toBe(3.14)
        ->withholdingTaxInCurrency->toBe(3.14)
        ->buyerReference->toBe('Mock value')
        ->roundingDiff->toBe(3.14)
        ->roundingDiffInCurrency->toBe(3.14)
        ->amount->toBe(3.14)
        ->vatAmount->toBe(3.14)
        ->taxCalculationMode->toBe('Mock value')
        ->supplierTaxZone->toBe('Mock value')
        ->paySelected->toBeTrue()
        ->curyRetainageTotal->toBe(3.14)
        ->curyRetainageUnreleasedAmt->toBe(3.14)
        ->documentVersionNumber->toBe(42)
        ->supplier->toBe('Mock value')
        ->documentType->toBe('Mock value')
        ->referenceNumber->toBe('Mock value')
        ->postPeriod->toBe('Mock value')
        ->financialPeriod->toBe('Mock value')
        ->date->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->origInvoiceDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->dueDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->approvalStatus->toBe('Mock value')
        ->status->toBe('Mock value')
        ->currencyId->toBe('mock-id-123')
        ->balance->toBe(3.14)
        ->balanceInCurrency->toBe(3.14)
        ->cashDiscount->toBe(3.14)
        ->cashDiscountInCurrency->toBe(3.14)
        ->paymentMethod->toBe('Mock value')
        ->supplierReference->toBe('Mock value')
        ->description->toBe('Mock value')
        ->createdDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->note->toBe('Mock value')
        ->closedFinancialPeriod->toBe('Mock value')
        ->location->toBe('Mock value')
        ->vatTotal->toBe(3.14)
        ->vatTotalInCurrency->toBe(3.14)
        ->branchNumber->toBe('Mock value')
        ->payDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->paymentMessage->toBe('Mock value')
        ->cashAccount->toBe('Mock value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the supplierInvoiceWriteoffInvoiceBydocumentTypeinvoiceNumber method in the SupplierInvoice resource', function () {
    $mockClient = Saloon::fake([
        SupplierInvoiceWriteoffInvoiceBydocumentTypeinvoiceNumberRequest::class => MockResponse::make([], 200),
    ]);

    // Create DTO with sample data
    $dto = \Pionect\VismaSdk\Dto\BackgroundApiAcceptedDto::factory()->state([
        'stateLocation' => 'test value',
    ])->make();

    $request = new SupplierInvoiceWriteoffInvoiceBydocumentTypeinvoiceNumberRequest(documentTypeId: 'document_type_id-123', invoiceNumberId: 'invoice_number_id-123', data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(SupplierInvoiceWriteoffInvoiceBydocumentTypeinvoiceNumberRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->toHaveKey('data')
            ->data->type->toBe('supplierInvoices')
            ->data->attributes->scoped(fn ($attributes) => $attributes
            ->stateLocation->toBe('test value')
            );

        return true;
    });
});
