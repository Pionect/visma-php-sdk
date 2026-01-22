<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\SupplierDocument\SupplierDocumentGetAllDocumentsForSupplierCollectionRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the supplierDocumentGetAllDocumentsForSupplierCollection method in the SupplierDocument resource', function () {
    Saloon::fake([
        SupplierDocumentGetAllDocumentsForSupplierCollectionRequest::class => MockResponse::make([
            'data' => [
                0 => [
                    'type' => 'supplierDocuments',
                    'id' => 'mock-id-1',
                    'attributes' => [
                        'account' => 'Mock value',
                        'subaccount' => 'Mock value',
                        'amount' => 3.14,
                        'amountInCurrency' => 3.14,
                        'branch' => 'Mock value',
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
                ],
                1 => [
                    'type' => 'supplierDocuments',
                    'id' => 'mock-id-2',
                    'attributes' => [
                        'account' => 'Mock value',
                        'subaccount' => 'Mock value',
                        'amount' => 3.14,
                        'amountInCurrency' => 3.14,
                        'branch' => 'Mock value',
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
                ],
            ],
        ], 200),
    ]);

    $request = (new SupplierDocumentGetAllDocumentsForSupplierCollectionRequest(supplier: 'test string', documentType: 'test string', released: 123, project: 'test string', expandApproval: true, expandNote: true, numberToRead: 123, skipRecords: 123, status: 'test string', expandLinePrebookAccounts: true, branch: 'test string', financialPeriod: 'test string', dueDate: 'test string', dueDateCondition: 'test string', docDate: 'test string', docDateCondition: 'test string', item: 'test string', balance: null, balanceCondition: 'test string', greaterThanValue: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', createdDateTime: 'test string', createdDateTimeCondition: 'test string', pageNumber: 123, pageSize: 123));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (SupplierDocumentGetAllDocumentsForSupplierCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->account->toBe('Mock value')
        ->subaccount->toBe('Mock value')
        ->amount->toBe(3.14)
        ->amountInCurrency->toBe(3.14)
        ->branch->toBe('Mock value')
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
