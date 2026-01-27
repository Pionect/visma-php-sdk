<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\CustomerInvoice\CustomerInvoiceGetAllCollectionRequest;
use Pionect\VismaSdk\Requests\CustomerInvoice\CustomerInvoiceGetByinvoiceNumberRequest;
use Pionect\VismaSdk\Requests\CustomerInvoice\CustomerInvoiceGetRotRutByrefNbrRequest;
use Pionect\VismaSdk\Requests\CustomerInvoice\CustomerInvoiceGetWorkTypesCollectionRequest;
use Pionect\VismaSdk\Requests\CustomerInvoice\CustomerInvoiceReleaseInvoiceByinvoiceNumberRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Http\Request;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the customerInvoiceGetWorkTypesCollection method in the CustomerInvoice resource', function () {
    Saloon::fake([
        CustomerInvoiceGetWorkTypesCollectionRequest::class => MockResponse::make([
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

    $request = (new CustomerInvoiceGetWorkTypesCollectionRequest);

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (CustomerInvoiceGetWorkTypesCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->rutRotType->toBe('String value')
        ->description->toBe('String value')
        ->xmlTag->toBe('String value');
});

it('calls the customerInvoiceGetByinvoiceNumber method in the CustomerInvoice resource', function () {
    Saloon::fake([
        CustomerInvoiceGetByinvoiceNumberRequest::class => MockResponse::make([
            'creditTerms' => null,
            'documentDueDate' => '2025-11-22T10:40:04.065Z',
            'cashDiscountDate' => '2025-11-22T10:40:04.065Z',
            'externalReference' => 'String value',
            'isRotRutDeductible' => true,
            'exchangeRate' => 3.14,
            'dunningLetterDate' => '2025-11-22T10:40:04.065Z',
            'dunningLetterLevel' => 42,
            'contact' => null,
            'attachments' => [],
            'taxDetails' => [],
            'invoiceLines' => [],
            'sendToAutoInvoice' => true,
            'roundingDiff' => 3.14,
            'customerVatZone' => null,
            'startDate' => '2025-11-22T10:40:04.065Z',
            'endDate' => '2025-11-22T10:40:04.065Z',
            'accountingCostRef' => 'String value',
            'originatorDocRef' => 'String value',
            'contractDocRef' => 'String value',
            'childRecord' => null,
            'directDebitMandate' => null,
            'excludeDebtCollection' => true,
            'debtCollection' => null,
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

    $request = new CustomerInvoiceGetByinvoiceNumberRequest(
        invoiceNumberId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerInvoiceGetByinvoiceNumberRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->creditTerms->toBeNull()
        ->documentDueDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->cashDiscountDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->externalReference->toBe('String value')
        ->isRotRutDeductible->toBeTrue()
        ->exchangeRate->toBe(3.14)
        ->dunningLetterDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->dunningLetterLevel->toBe(42)
        ->contact->toBeNull()
        ->sendToAutoInvoice->toBeTrue()
        ->roundingDiff->toBe(3.14)
        ->customerVatZone->toBeNull()
        ->startDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->endDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->accountingCostRef->toBe('String value')
        ->originatorDocRef->toBe('String value')
        ->contractDocRef->toBe('String value')
        ->childRecord->toBeNull()
        ->directDebitMandate->toBeNull()
        ->excludeDebtCollection->toBeTrue()
        ->debtCollection->toBeNull()
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

it('calls the customerInvoiceGetRotRutByrefNbr method in the CustomerInvoice resource', function () {
    Saloon::fake([
        CustomerInvoiceGetRotRutByrefNbrRequest::class => MockResponse::make([
            'docType' => 'String value',
            'refNbr' => 'String value',
            'distributedAutomaticaly' => true,
            'type' => 'String value',
            'totalDeductableAmount' => 3.14,
            'otherCost' => 3.14,
            'materialCost' => 3.14,
            'workPrice' => 3.14,
            'distributedAmount' => 3.14,
            'appartment' => 'String value',
            'estate' => 'String value',
            'organizationNbr' => 'String value',
            'distribution' => [],
        ], 200),
    ]);

    $request = new CustomerInvoiceGetRotRutByrefNbrRequest(
        refNbrId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerInvoiceGetRotRutByrefNbrRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->docType->toBe('String value')
        ->refNbr->toBe('String value')
        ->distributedAutomaticaly->toBeTrue()
        ->type->toBe('String value')
        ->totalDeductableAmount->toBe(3.14)
        ->otherCost->toBe(3.14)
        ->materialCost->toBe(3.14)
        ->workPrice->toBe(3.14)
        ->distributedAmount->toBe(3.14)
        ->appartment->toBe('String value')
        ->estate->toBe('String value')
        ->organizationNbr->toBe('String value');
});

it('calls the customerInvoiceGetAllCollection method in the CustomerInvoice resource', function () {
    Saloon::fake([
        CustomerInvoiceGetAllCollectionRequest::class => MockResponse::make([
            0 => [
                'creditTerms' => null,
                'documentDueDate' => '2025-11-22T10:40:04.065Z',
                'cashDiscountDate' => '2025-11-22T10:40:04.065Z',
                'externalReference' => 'String value',
                'isRotRutDeductible' => true,
                'exchangeRate' => 3.14,
                'dunningLetterDate' => '2025-11-22T10:40:04.065Z',
                'dunningLetterLevel' => 42,
                'contact' => null,
                'attachments' => [],
                'taxDetails' => [],
                'invoiceLines' => [],
                'sendToAutoInvoice' => true,
                'roundingDiff' => 3.14,
                'customerVatZone' => null,
                'startDate' => '2025-11-22T10:40:04.065Z',
                'endDate' => '2025-11-22T10:40:04.065Z',
                'accountingCostRef' => 'String value',
                'originatorDocRef' => 'String value',
                'contractDocRef' => 'String value',
                'childRecord' => null,
                'directDebitMandate' => null,
                'excludeDebtCollection' => true,
                'debtCollection' => null,
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
                'documentDueDate' => '2025-11-22T10:40:04.065Z',
                'cashDiscountDate' => '2025-11-22T10:40:04.065Z',
                'externalReference' => 'String value',
                'isRotRutDeductible' => true,
                'exchangeRate' => 3.14,
                'dunningLetterDate' => '2025-11-22T10:40:04.065Z',
                'dunningLetterLevel' => 42,
                'contact' => null,
                'attachments' => [],
                'taxDetails' => [],
                'invoiceLines' => [],
                'sendToAutoInvoice' => true,
                'roundingDiff' => 3.14,
                'customerVatZone' => null,
                'startDate' => '2025-11-22T10:40:04.065Z',
                'endDate' => '2025-11-22T10:40:04.065Z',
                'accountingCostRef' => 'String value',
                'originatorDocRef' => 'String value',
                'contractDocRef' => 'String value',
                'childRecord' => null,
                'directDebitMandate' => null,
                'excludeDebtCollection' => true,
                'debtCollection' => null,
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

    $request = (new CustomerInvoiceGetAllCollectionRequest(documentType: 'test string', released: 123, dunningLevel: 123, closedFinancialPeriod: 'test string', dunningLetterDateTime: 'test string', dunningLetterDateTimeCondition: 'test string', project: 'test string', expandApplications: true, expandDunningInformation: true, expandAttachments: true, expandTaxDetails: true, expandInvoiceAddress: true, financialPeriod: 'test string', documentDueDate: 'test string', documentDueDateCondition: 'test string', status: 'test string', numberToRead: 123, skipRecords: 123, externalReference: 'test string', paymentReference: 'test string', customerRefNumber: 'test string', customer: 'test string', branch: 'test string', documentDate: 'test string', documentDateCondition: 'test string', greaterThanValue: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', createdDateTime: 'test string', createdDateTimeCondition: 'test string', pageNumber: 123, pageSize: 123));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (CustomerInvoiceGetAllCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->creditTerms->toBeNull()
        ->documentDueDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->cashDiscountDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->externalReference->toBe('String value')
        ->isRotRutDeductible->toBeTrue()
        ->exchangeRate->toBe(3.14)
        ->dunningLetterDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->dunningLetterLevel->toBe(42)
        ->contact->toBeNull()
        ->sendToAutoInvoice->toBeTrue()
        ->roundingDiff->toBe(3.14)
        ->customerVatZone->toBeNull()
        ->startDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->endDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->accountingCostRef->toBe('String value')
        ->originatorDocRef->toBe('String value')
        ->contractDocRef->toBe('String value')
        ->childRecord->toBeNull()
        ->directDebitMandate->toBeNull()
        ->excludeDebtCollection->toBeTrue()
        ->debtCollection->toBeNull()
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

it('calls the customerInvoiceReleaseInvoiceByinvoiceNumber method in the CustomerInvoice resource', function () {
    $mockClient = Saloon::fake([
        CustomerInvoiceReleaseInvoiceByinvoiceNumberRequest::class => MockResponse::make([], 200),
    ]);

    // Create DTO with sample data
    $dto = \Pionect\VismaSdk\Dto\ReleaseInvoiceActionResultDto::factory()->state([
        'actionId' => 'action_id-123',
        'actionResult' => 'test value',
        'errorInfo' => 'test value',
    ])->make();

    $request = new CustomerInvoiceReleaseInvoiceByinvoiceNumberRequest(invoiceNumberId: 'invoice_number_id-123', data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerInvoiceReleaseInvoiceByinvoiceNumberRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->toHaveKey('data')
            ->data->type->toBe('customerInvoices')
            ->data->attributes->scoped(fn ($attributes) => $attributes
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value')
            ->errorInfo->toBe('test value')
            );

        return true;
    });
});
