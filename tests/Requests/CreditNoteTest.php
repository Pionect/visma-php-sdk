<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\CreditNote\CreditNoteGetAllCreditNotesDtoCollectionRequest;
use Pionect\VismaSdk\Requests\CreditNote\CreditNoteGetBycreditNoteNumberRequest;
use Pionect\VismaSdk\Requests\CreditNote\CreditNoteReleaseInvoiceBycreditNoteNumberRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Http\Request;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector(
        clientId: 'replace',
        clientSecret: 'replace'
    );
});

it('calls the creditNoteGetBycreditNoteNumber method in the CreditNote resource', function () {
    Saloon::fake([
        CreditNoteGetBycreditNoteNumberRequest::class => MockResponse::make([
            'externalReference' => 'Mock value',
            'contact' => 'Mock value',
            'attachments' => [],
            'invoiceLines' => [],
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
            'salesPersonDescr' => 'Mock value',
            'salesPerson' => 'Mock value',
            'paymentReference' => 'Mock value',
            'invoiceAddress' => 'Mock value',
            'invoiceContact' => 'Mock value',
            'applications' => [],
            'dontPrint' => true,
            'dontEmail' => true,
            'revoked' => true,
            'customer' => 'Mock value',
            'documentType' => 'Mock value',
            'referenceNumber' => 'Mock value',
            'postPeriod' => 'Mock value',
            'financialPeriod' => 'Mock value',
            'closedFinancialPeriod' => 'Mock value',
            'documentDate' => '2025-11-22T10:40:04.065Z',
            'origInvoiceDate' => '2025-11-22T10:40:04.065Z',
            'status' => 'Mock value',
            'currencyId' => 'mock-id-123',
            'amount' => 3.14,
            'amountInCurrency' => 3.14,
            'balance' => 3.14,
            'balanceInCurrency' => 3.14,
            'cashDiscount' => 3.14,
            'cashDiscountInCurrency' => 3.14,
            'paymentMethod' => 'Mock value',
            'customerRefNumber' => 'Mock value',
            'invoiceText' => 'Mock value',
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'createdDateTime' => '2025-11-22T10:40:04.065Z',
            'note' => 'Mock value',
            'vatTotal' => 3.14,
            'vatTotalInCurrency' => 3.14,
            'location' => 'Mock value',
            'branchNumber' => 'Mock value',
            'cashAccount' => 'Mock value',
            'project' => 'Mock value',
            'account' => 'Mock value',
            'subaccount' => 'Mock value',
            'customerProject' => 'Mock value',
            'errorInfo' => 'Mock value',
            'metadata' => 'Mock value',
        ], 200),
    ]);

    $request = new CreditNoteGetBycreditNoteNumberRequest(
        creditNoteNumberId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CreditNoteGetBycreditNoteNumberRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->externalReference->toBe('Mock value')
        ->contact->toBe('Mock value')
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
        ->salesPersonDescr->toBe('Mock value')
        ->salesPerson->toBe('Mock value')
        ->paymentReference->toBe('Mock value')
        ->invoiceAddress->toBe('Mock value')
        ->invoiceContact->toBe('Mock value')
        ->dontPrint->toBeTrue()
        ->dontEmail->toBeTrue()
        ->revoked->toBeTrue()
        ->customer->toBe('Mock value')
        ->documentType->toBe('Mock value')
        ->referenceNumber->toBe('Mock value')
        ->postPeriod->toBe('Mock value')
        ->financialPeriod->toBe('Mock value')
        ->closedFinancialPeriod->toBe('Mock value')
        ->documentDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->origInvoiceDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->status->toBe('Mock value')
        ->currencyId->toBe('mock-id-123')
        ->amount->toBe(3.14)
        ->amountInCurrency->toBe(3.14)
        ->balance->toBe(3.14)
        ->balanceInCurrency->toBe(3.14)
        ->cashDiscount->toBe(3.14)
        ->cashDiscountInCurrency->toBe(3.14)
        ->paymentMethod->toBe('Mock value')
        ->customerRefNumber->toBe('Mock value')
        ->invoiceText->toBe('Mock value')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->createdDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->note->toBe('Mock value')
        ->vatTotal->toBe(3.14)
        ->vatTotalInCurrency->toBe(3.14)
        ->location->toBe('Mock value')
        ->branchNumber->toBe('Mock value')
        ->cashAccount->toBe('Mock value')
        ->project->toBe('Mock value')
        ->account->toBe('Mock value')
        ->subaccount->toBe('Mock value')
        ->customerProject->toBe('Mock value')
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the creditNoteGetAllCreditNotesDtoCollection method in the CreditNote resource', function () {
    Saloon::fake([
        CreditNoteGetAllCreditNotesDtoCollectionRequest::class => MockResponse::make([
            0 => [
                'externalReference' => 'Mock value',
                'contact' => 'Mock value',
                'attachments' => [],
                'invoiceLines' => [],
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
                'salesPersonDescr' => 'Mock value',
                'salesPerson' => 'Mock value',
                'paymentReference' => 'Mock value',
                'invoiceAddress' => 'Mock value',
                'invoiceContact' => 'Mock value',
                'applications' => [],
                'dontPrint' => true,
                'dontEmail' => true,
                'revoked' => true,
                'customer' => 'Mock value',
                'documentType' => 'Mock value',
                'referenceNumber' => 'Mock value',
                'postPeriod' => 'Mock value',
                'financialPeriod' => 'Mock value',
                'closedFinancialPeriod' => 'Mock value',
                'documentDate' => '2025-11-22T10:40:04.065Z',
                'origInvoiceDate' => '2025-11-22T10:40:04.065Z',
                'status' => 'Mock value',
                'currencyId' => 'mock-id-123',
                'amount' => 3.14,
                'amountInCurrency' => 3.14,
                'balance' => 3.14,
                'balanceInCurrency' => 3.14,
                'cashDiscount' => 3.14,
                'cashDiscountInCurrency' => 3.14,
                'paymentMethod' => 'Mock value',
                'customerRefNumber' => 'Mock value',
                'invoiceText' => 'Mock value',
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'createdDateTime' => '2025-11-22T10:40:04.065Z',
                'note' => 'Mock value',
                'vatTotal' => 3.14,
                'vatTotalInCurrency' => 3.14,
                'location' => 'Mock value',
                'branchNumber' => 'Mock value',
                'cashAccount' => 'Mock value',
                'project' => 'Mock value',
                'account' => 'Mock value',
                'subaccount' => 'Mock value',
                'customerProject' => 'Mock value',
                'errorInfo' => 'Mock value',
                'metadata' => 'Mock value',
            ],
            1 => [
                'externalReference' => 'Mock value',
                'contact' => 'Mock value',
                'attachments' => [],
                'invoiceLines' => [],
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
                'salesPersonDescr' => 'Mock value',
                'salesPerson' => 'Mock value',
                'paymentReference' => 'Mock value',
                'invoiceAddress' => 'Mock value',
                'invoiceContact' => 'Mock value',
                'applications' => [],
                'dontPrint' => true,
                'dontEmail' => true,
                'revoked' => true,
                'customer' => 'Mock value',
                'documentType' => 'Mock value',
                'referenceNumber' => 'Mock value',
                'postPeriod' => 'Mock value',
                'financialPeriod' => 'Mock value',
                'closedFinancialPeriod' => 'Mock value',
                'documentDate' => '2025-11-22T10:40:04.065Z',
                'origInvoiceDate' => '2025-11-22T10:40:04.065Z',
                'status' => 'Mock value',
                'currencyId' => 'mock-id-123',
                'amount' => 3.14,
                'amountInCurrency' => 3.14,
                'balance' => 3.14,
                'balanceInCurrency' => 3.14,
                'cashDiscount' => 3.14,
                'cashDiscountInCurrency' => 3.14,
                'paymentMethod' => 'Mock value',
                'customerRefNumber' => 'Mock value',
                'invoiceText' => 'Mock value',
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'createdDateTime' => '2025-11-22T10:40:04.065Z',
                'note' => 'Mock value',
                'vatTotal' => 3.14,
                'vatTotalInCurrency' => 3.14,
                'location' => 'Mock value',
                'branchNumber' => 'Mock value',
                'cashAccount' => 'Mock value',
                'project' => 'Mock value',
                'account' => 'Mock value',
                'subaccount' => 'Mock value',
                'customerProject' => 'Mock value',
                'errorInfo' => 'Mock value',
                'metadata' => 'Mock value',
            ],
        ], 200),
    ]);

    $request = (new CreditNoteGetAllCreditNotesDtoCollectionRequest(documentType: 'test string', released: 123, dunningLevel: 123, closedFinancialPeriod: 'test string', dunningLetterDateTime: 'test string', dunningLetterDateTimeCondition: 'test string', project: 'test string', expandApplications: true, expandDunningInformation: true, expandAttachments: true, expandTaxDetails: true, expandInvoiceAddress: true, financialPeriod: 'test string', documentDueDate: 'test string', documentDueDateCondition: 'test string', status: 'test string', numberToRead: 123, skipRecords: 123, externalReference: 'test string', paymentReference: 'test string', customerRefNumber: 'test string', customer: 'test string', branch: 'test string', documentDate: 'test string', documentDateCondition: 'test string', greaterThanValue: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', createdDateTime: 'test string', createdDateTimeCondition: 'test string', pageNumber: 123, pageSize: 123));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (CreditNoteGetAllCreditNotesDtoCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->externalReference->toBe('Mock value')
        ->contact->toBe('Mock value')
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
        ->salesPersonDescr->toBe('Mock value')
        ->salesPerson->toBe('Mock value')
        ->paymentReference->toBe('Mock value')
        ->invoiceAddress->toBe('Mock value')
        ->invoiceContact->toBe('Mock value')
        ->dontPrint->toBeTrue()
        ->dontEmail->toBeTrue()
        ->revoked->toBeTrue()
        ->customer->toBe('Mock value')
        ->documentType->toBe('Mock value')
        ->referenceNumber->toBe('Mock value')
        ->postPeriod->toBe('Mock value')
        ->financialPeriod->toBe('Mock value')
        ->closedFinancialPeriod->toBe('Mock value')
        ->documentDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->origInvoiceDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->status->toBe('Mock value')
        ->currencyId->toBe('mock-id-123')
        ->amount->toBe(3.14)
        ->amountInCurrency->toBe(3.14)
        ->balance->toBe(3.14)
        ->balanceInCurrency->toBe(3.14)
        ->cashDiscount->toBe(3.14)
        ->cashDiscountInCurrency->toBe(3.14)
        ->paymentMethod->toBe('Mock value')
        ->customerRefNumber->toBe('Mock value')
        ->invoiceText->toBe('Mock value')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->createdDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->note->toBe('Mock value')
        ->vatTotal->toBe(3.14)
        ->vatTotalInCurrency->toBe(3.14)
        ->location->toBe('Mock value')
        ->branchNumber->toBe('Mock value')
        ->cashAccount->toBe('Mock value')
        ->project->toBe('Mock value')
        ->account->toBe('Mock value')
        ->subaccount->toBe('Mock value')
        ->customerProject->toBe('Mock value')
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the creditNoteReleaseInvoiceBycreditNoteNumber method in the CreditNote resource', function () {
    $mockClient = Saloon::fake([
        CreditNoteReleaseInvoiceBycreditNoteNumberRequest::class => MockResponse::make([], 200),
    ]);

    // Create DTO with sample data
    $dto = \Pionect\VismaSdk\Dto\ReleaseInvoiceActionResultDto::factory()->state([
        'actionId' => 'action_id-123',
        'actionResult' => 'test value',
        'errorInfo' => 'test value',
    ])->make();

    $request = new CreditNoteReleaseInvoiceBycreditNoteNumberRequest(creditNoteNumberId: 'credit_note_number_id-123', data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(CreditNoteReleaseInvoiceBycreditNoteNumberRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->toHaveKey('data')
            ->data->type->toBe('creditNotes')
            ->data->attributes->scoped(fn ($attributes) => $attributes
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value')
            ->errorInfo->toBe('test value')
            );

        return true;
    });
});
