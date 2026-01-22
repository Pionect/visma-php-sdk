<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\CustomerDocument\CustomerDocumentGetAllDocumentsCollectionRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the customerDocumentGetAllDocumentsCollection method in the CustomerDocument resource', function () {
    Saloon::fake([
        CustomerDocumentGetAllDocumentsCollectionRequest::class => MockResponse::make([
            'data' => [
                0 => [
                    'type' => 'customerDocuments',
                    'id' => 'mock-id-1',
                    'attributes' => [
                        'documentDueDate' => '2025-11-22T10:40:04.065Z',
                        'branch' => 'Mock value',
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
                    'type' => 'customerDocuments',
                    'id' => 'mock-id-2',
                    'attributes' => [
                        'documentDueDate' => '2025-11-22T10:40:04.065Z',
                        'branch' => 'Mock value',
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

    $request = (new CustomerDocumentGetAllDocumentsCollectionRequest(documentType: 'test string', released: 123, dunningLevel: 123, closedFinancialPeriod: 'test string', dunningLetterDateTime: 'test string', dunningLetterDateTimeCondition: 'test string', project: 'test string', expandApplications: true, expandDunningInformation: true, expandAttachments: true, expandTaxDetails: true, expandInvoiceAddress: true, financialPeriod: 'test string', documentDueDate: 'test string', documentDueDateCondition: 'test string', status: 'test string', numberToRead: 123, skipRecords: 123, externalReference: 'test string', paymentReference: 'test string', customerRefNumber: 'test string', customer: 'test string', branch: 'test string', documentDate: 'test string', documentDateCondition: 'test string', greaterThanValue: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', createdDateTime: 'test string', createdDateTimeCondition: 'test string', pageNumber: 123, pageSize: 123));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (CustomerDocumentGetAllDocumentsCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->documentDueDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->branch->toBe('Mock value')
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
