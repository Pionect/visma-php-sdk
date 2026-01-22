<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\CustomerDebitNote\CustomerDebitNoteGetAllCollectionRequest;
use Pionect\VismaSdk\Requests\CustomerDebitNote\CustomerDebitNoteGetBydebitNoteNumberRequest;
use Pionect\VismaSdk\Requests\CustomerDebitNote\CustomerDebitNoteReleaseDocumentBydebitNoteNumberRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Http\Request;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the customerDebitNoteGetBydebitNoteNumber method in the CustomerDebitNote resource', function () {
    Saloon::fake([
        CustomerDebitNoteGetBydebitNoteNumberRequest::class => MockResponse::make([
            'data' => [
                'type' => 'customerDebitNotes',
                'id' => 'mock-id-123',
                'attributes' => [
                    'creditTerms' => 'Mock value',
                    'documentDueDate' => '2025-11-22T10:40:04.065Z',
                    'cashDiscountDate' => '2025-11-22T10:40:04.065Z',
                    'externalReference' => 'Mock value',
                    'isRotRutDeductible' => true,
                    'exchangeRate' => 3.14,
                    'dunningLetterDate' => '2025-11-22T10:40:04.065Z',
                    'dunningLetterLevel' => 42,
                    'contact' => 'Mock value',
                    'attachments' => [],
                    'taxDetails' => [],
                    'lines' => [],
                    'roundingDiff' => 3.14,
                    'customerVatZone' => 'Mock value',
                    'childRecord' => 'Mock value',
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
            ],
        ], 200),
    ]);

    $request = new CustomerDebitNoteGetBydebitNoteNumberRequest(
        debitNoteNumberId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerDebitNoteGetBydebitNoteNumberRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->creditTerms->toBe('Mock value')
        ->documentDueDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->cashDiscountDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->externalReference->toBe('Mock value')
        ->isRotRutDeductible->toBe(true)
        ->exchangeRate->toBe(3.14)
        ->dunningLetterDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->dunningLetterLevel->toBe(42)
        ->contact->toBe('Mock value')
        ->roundingDiff->toBe(3.14)
        ->customerVatZone->toBe('Mock value')
        ->childRecord->toBe('Mock value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->hold->toBe(true)
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
        ->dontPrint->toBe(true)
        ->dontEmail->toBe(true)
        ->revoked->toBe(true)
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

it('calls the customerDebitNoteGetAllCollection method in the CustomerDebitNote resource', function () {
    Saloon::fake([
        CustomerDebitNoteGetAllCollectionRequest::class => MockResponse::make([
            'data' => [
                0 => [
                    'type' => 'customerDebitNotes',
                    'id' => 'mock-id-1',
                    'attributes' => [
                        'creditTerms' => 'Mock value',
                        'documentDueDate' => '2025-11-22T10:40:04.065Z',
                        'cashDiscountDate' => '2025-11-22T10:40:04.065Z',
                        'externalReference' => 'Mock value',
                        'isRotRutDeductible' => true,
                        'exchangeRate' => 3.14,
                        'dunningLetterDate' => '2025-11-22T10:40:04.065Z',
                        'dunningLetterLevel' => 42,
                        'contact' => 'Mock value',
                        'attachments' => [],
                        'taxDetails' => [],
                        'lines' => [],
                        'roundingDiff' => 3.14,
                        'customerVatZone' => 'Mock value',
                        'childRecord' => 'Mock value',
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
                ],
                1 => [
                    'type' => 'customerDebitNotes',
                    'id' => 'mock-id-2',
                    'attributes' => [
                        'creditTerms' => 'Mock value',
                        'documentDueDate' => '2025-11-22T10:40:04.065Z',
                        'cashDiscountDate' => '2025-11-22T10:40:04.065Z',
                        'externalReference' => 'Mock value',
                        'isRotRutDeductible' => true,
                        'exchangeRate' => 3.14,
                        'dunningLetterDate' => '2025-11-22T10:40:04.065Z',
                        'dunningLetterLevel' => 42,
                        'contact' => 'Mock value',
                        'attachments' => [],
                        'taxDetails' => [],
                        'lines' => [],
                        'roundingDiff' => 3.14,
                        'customerVatZone' => 'Mock value',
                        'childRecord' => 'Mock value',
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
                ],
            ],
        ], 200),
    ]);

    $request = (new CustomerDebitNoteGetAllCollectionRequest(documentType: 'test string', released: 123, dunningLevel: 123, closedFinancialPeriod: 'test string', dunningLetterDateTime: 'test string', dunningLetterDateTimeCondition: 'test string', project: 'test string', expandApplications: true, expandDunningInformation: true, expandAttachments: true, expandTaxDetails: true, expandInvoiceAddress: true, financialPeriod: 'test string', documentDueDate: 'test string', documentDueDateCondition: 'test string', status: 'test string', numberToRead: 123, skipRecords: 123, externalReference: 'test string', paymentReference: 'test string', customerRefNumber: 'test string', customer: 'test string', branch: 'test string', documentDate: 'test string', documentDateCondition: 'test string', greaterThanValue: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', createdDateTime: 'test string', createdDateTimeCondition: 'test string', pageNumber: 123, pageSize: 123));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (CustomerDebitNoteGetAllCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->creditTerms->toBe('Mock value')
        ->documentDueDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->cashDiscountDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->externalReference->toBe('Mock value')
        ->isRotRutDeductible->toBe(true)
        ->exchangeRate->toBe(3.14)
        ->dunningLetterDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->dunningLetterLevel->toBe(42)
        ->contact->toBe('Mock value')
        ->roundingDiff->toBe(3.14)
        ->customerVatZone->toBe('Mock value')
        ->childRecord->toBe('Mock value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->hold->toBe(true)
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
        ->dontPrint->toBe(true)
        ->dontEmail->toBe(true)
        ->revoked->toBe(true)
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

it('calls the customerDebitNoteReleaseDocumentBydebitNoteNumber method in the CustomerDebitNote resource', function () {
    $mockClient = Saloon::fake([
        CustomerDebitNoteReleaseDocumentBydebitNoteNumberRequest::class => MockResponse::make([], 200),
    ]);

    // Create DTO with sample data
    $dto = \Pionect\VismaSdk\Dto\ReleaseCustomerDebitNoteActionResultDto::factory()->state([
        'actionId' => 'action_id-123',
        'actionResult' => 'test value',
        'errorInfo' => 'test value',
    ])->make();

    $request = new CustomerDebitNoteReleaseDocumentBydebitNoteNumberRequest(debitNoteNumberId: 'debit_note_number_id-123', data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerDebitNoteReleaseDocumentBydebitNoteNumberRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->toHaveKey('data')
            ->data->type->toBe('customerDebitNotes')
            ->data->attributes->scoped(fn ($attributes) => $attributes
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value')
            ->errorInfo->toBe('test value')
            );

        return true;
    });
});
