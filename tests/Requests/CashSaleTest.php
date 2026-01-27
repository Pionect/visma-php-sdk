<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\CashSale\CashSaleGetAllCashSalesCollectionRequest;
use Pionect\VismaSdk\Requests\CashSale\CashSaleGetBydocumentNumberRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the cashSaleGetBydocumentNumber method in the CashSale resource', function () {
    Saloon::fake([
        CashSaleGetBydocumentNumberRequest::class => MockResponse::make([
            'creditTerms' => null,
            'cashSaleLines' => [],
            'timeStamp' => '2025-11-22T10:40:04.065Z',
            'hold' => true,
            'discountTotal' => 3.14,
            'discountTotalInCurrency' => 3.14,
            'detailTotal' => 3.14,
            'detailTotalInCurrency' => 3.14,
            'vatTaxableTotal' => 3.14,
            'vatTaxableTotalInCurrency' => 3.14,
            'vatExemptTotal' => 3.14,
            'vatExemptTotalInCurrency' => 3.14,
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
            'documentDate' => '2025-11-22T10:40:04.065Z',
            'origInvoiceDate' => '2025-11-22T10:40:04.065Z',
            'status' => 'String value',
            'currencyId' => 'mock-id-123',
            'amount' => 3.14,
            'amountInCurrency' => 3.14,
            'balance' => 3.14,
            'balanceInCurrency' => 3.14,
            'cashDiscount' => 3.14,
            'cashDiscountInCurrency' => 3.14,
            'paymentMethod' => null,
            'customerRefNumber' => 'String value',
            'invoiceText' => 'String value',
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'createdDateTime' => '2025-11-22T10:40:04.065Z',
            'note' => 'String value',
            'vatTotal' => 3.14,
            'vatTotalInCurrency' => 3.14,
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

    $request = new CashSaleGetBydocumentNumberRequest(
        documentNumberId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CashSaleGetBydocumentNumberRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->creditTerms->toBeNull()
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->hold->toBeTrue()
        ->discountTotal->toBe(3.14)
        ->discountTotalInCurrency->toBe(3.14)
        ->detailTotal->toBe(3.14)
        ->detailTotalInCurrency->toBe(3.14)
        ->vatTaxableTotal->toBe(3.14)
        ->vatTaxableTotalInCurrency->toBe(3.14)
        ->vatExemptTotal->toBe(3.14)
        ->vatExemptTotalInCurrency->toBe(3.14)
        ->salesPersonId->toBe(42)
        ->salesPersonDescr->toBe('String value')
        ->salesPerson->toBeNull()
        ->paymentReference->toBe('String value')
        ->invoiceAddress->toBeNull()
        ->invoiceContact->toBeNull()
        ->dontPrint->toBeTrue()
        ->dontEmail->toBeTrue()
        ->revoked->toBeTrue()
        ->customer->toBeNull()
        ->documentType->toBe('String value')
        ->referenceNumber->toBe('String value')
        ->postPeriod->toBe('String value')
        ->financialPeriod->toBe('String value')
        ->closedFinancialPeriod->toBe('String value')
        ->documentDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->origInvoiceDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->status->toBe('String value')
        ->currencyId->toBe('mock-id-123')
        ->amount->toBe(3.14)
        ->amountInCurrency->toBe(3.14)
        ->balance->toBe(3.14)
        ->balanceInCurrency->toBe(3.14)
        ->cashDiscount->toBe(3.14)
        ->cashDiscountInCurrency->toBe(3.14)
        ->paymentMethod->toBeNull()
        ->customerRefNumber->toBe('String value')
        ->invoiceText->toBe('String value')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->createdDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->note->toBe('String value')
        ->vatTotal->toBe(3.14)
        ->vatTotalInCurrency->toBe(3.14)
        ->location->toBeNull()
        ->branchNumber->toBeNull()
        ->cashAccount->toBe('String value')
        ->project->toBeNull()
        ->account->toBeNull()
        ->subaccount->toBeNull()
        ->customerProject->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the cashSaleGetAllCashSalesCollection method in the CashSale resource', function () {
    Saloon::fake([
        CashSaleGetAllCashSalesCollectionRequest::class => MockResponse::make([
            0 => [
                'creditTerms' => null,
                'cashSaleLines' => [],
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'hold' => true,
                'discountTotal' => 3.14,
                'discountTotalInCurrency' => 3.14,
                'detailTotal' => 3.14,
                'detailTotalInCurrency' => 3.14,
                'vatTaxableTotal' => 3.14,
                'vatTaxableTotalInCurrency' => 3.14,
                'vatExemptTotal' => 3.14,
                'vatExemptTotalInCurrency' => 3.14,
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
                'documentDate' => '2025-11-22T10:40:04.065Z',
                'origInvoiceDate' => '2025-11-22T10:40:04.065Z',
                'status' => 'String value',
                'currencyId' => 'mock-id-123',
                'amount' => 3.14,
                'amountInCurrency' => 3.14,
                'balance' => 3.14,
                'balanceInCurrency' => 3.14,
                'cashDiscount' => 3.14,
                'cashDiscountInCurrency' => 3.14,
                'paymentMethod' => null,
                'customerRefNumber' => 'String value',
                'invoiceText' => 'String value',
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'createdDateTime' => '2025-11-22T10:40:04.065Z',
                'note' => 'String value',
                'vatTotal' => 3.14,
                'vatTotalInCurrency' => 3.14,
                'location' => null,
                'branchNumber' => null,
                'cashAccount' => 'String value',
                'project' => null,
                'account' => null,
                'subaccount' => null,
                'customerProject' => 'String value',
                'errorInfo' => 'String value',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
            1 => [
                'creditTerms' => null,
                'cashSaleLines' => [],
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'hold' => true,
                'discountTotal' => 3.14,
                'discountTotalInCurrency' => 3.14,
                'detailTotal' => 3.14,
                'detailTotalInCurrency' => 3.14,
                'vatTaxableTotal' => 3.14,
                'vatTaxableTotalInCurrency' => 3.14,
                'vatExemptTotal' => 3.14,
                'vatExemptTotalInCurrency' => 3.14,
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
                'documentDate' => '2025-11-22T10:40:04.065Z',
                'origInvoiceDate' => '2025-11-22T10:40:04.065Z',
                'status' => 'String value',
                'currencyId' => 'mock-id-123',
                'amount' => 3.14,
                'amountInCurrency' => 3.14,
                'balance' => 3.14,
                'balanceInCurrency' => 3.14,
                'cashDiscount' => 3.14,
                'cashDiscountInCurrency' => 3.14,
                'paymentMethod' => null,
                'customerRefNumber' => 'String value',
                'invoiceText' => 'String value',
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'createdDateTime' => '2025-11-22T10:40:04.065Z',
                'note' => 'String value',
                'vatTotal' => 3.14,
                'vatTotalInCurrency' => 3.14,
                'location' => null,
                'branchNumber' => null,
                'cashAccount' => 'String value',
                'project' => null,
                'account' => null,
                'subaccount' => null,
                'customerProject' => 'String value',
                'errorInfo' => 'String value',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
        ], 200),
    ]);

    $request = (new CashSaleGetAllCashSalesCollectionRequest(documentType: 'test string', released: 123, dunningLevel: 123, closedFinancialPeriod: 'test string', dunningLetterDateTime: 'test string', dunningLetterDateTimeCondition: 'test string', project: 'test string', expandApplications: true, expandDunningInformation: true, expandAttachments: true, expandTaxDetails: true, expandInvoiceAddress: true, financialPeriod: 'test string', documentDueDate: 'test string', documentDueDateCondition: 'test string', status: 'test string', numberToRead: 123, skipRecords: 123, externalReference: 'test string', paymentReference: 'test string', customerRefNumber: 'test string', customer: 'test string', branch: 'test string', documentDate: 'test string', documentDateCondition: 'test string', greaterThanValue: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', createdDateTime: 'test string', createdDateTimeCondition: 'test string', pageNumber: 123, pageSize: 123));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (CashSaleGetAllCashSalesCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->creditTerms->toBeNull()
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->hold->toBeTrue()
        ->discountTotal->toBe(3.14)
        ->discountTotalInCurrency->toBe(3.14)
        ->detailTotal->toBe(3.14)
        ->detailTotalInCurrency->toBe(3.14)
        ->vatTaxableTotal->toBe(3.14)
        ->vatTaxableTotalInCurrency->toBe(3.14)
        ->vatExemptTotal->toBe(3.14)
        ->vatExemptTotalInCurrency->toBe(3.14)
        ->salesPersonId->toBe(42)
        ->salesPersonDescr->toBe('String value')
        ->salesPerson->toBeNull()
        ->paymentReference->toBe('String value')
        ->invoiceAddress->toBeNull()
        ->invoiceContact->toBeNull()
        ->dontPrint->toBeTrue()
        ->dontEmail->toBeTrue()
        ->revoked->toBeTrue()
        ->customer->toBeNull()
        ->documentType->toBe('String value')
        ->referenceNumber->toBe('String value')
        ->postPeriod->toBe('String value')
        ->financialPeriod->toBe('String value')
        ->closedFinancialPeriod->toBe('String value')
        ->documentDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->origInvoiceDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->status->toBe('String value')
        ->currencyId->toBe('mock-id-123')
        ->amount->toBe(3.14)
        ->amountInCurrency->toBe(3.14)
        ->balance->toBe(3.14)
        ->balanceInCurrency->toBe(3.14)
        ->cashDiscount->toBe(3.14)
        ->cashDiscountInCurrency->toBe(3.14)
        ->paymentMethod->toBeNull()
        ->customerRefNumber->toBe('String value')
        ->invoiceText->toBe('String value')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->createdDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->note->toBe('String value')
        ->vatTotal->toBe(3.14)
        ->vatTotalInCurrency->toBe(3.14)
        ->location->toBeNull()
        ->branchNumber->toBeNull()
        ->cashAccount->toBe('String value')
        ->project->toBeNull()
        ->account->toBeNull()
        ->subaccount->toBeNull()
        ->customerProject->toBe('String value')
        ->errorInfo->toBe('String value');
});
