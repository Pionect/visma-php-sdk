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
            0 => [
                'account' => null,
                'subaccount' => null,
                'amount' => 3.14,
                'amountInCurrency' => 3.14,
                'branch' => null,
                'supplier' => null,
                'documentType' => 'String value',
                'referenceNumber' => 'String value',
                'postPeriod' => 'String value',
                'financialPeriod' => 'String value',
                'date' => '2025-11-22T10:40:04.065Z',
                'origInvoiceDate' => '2025-11-22T10:40:04.065Z',
                'dueDate' => '2025-11-22T10:40:04.065Z',
                'approvalStatus' => 'String value',
                'status' => 'String value',
                'currencyId' => 'mock-id-123',
                'balance' => 3.14,
                'balanceInCurrency' => 3.14,
                'cashDiscount' => 3.14,
                'cashDiscountInCurrency' => 3.14,
                'paymentMethod' => null,
                'supplierReference' => 'String value',
                'description' => 'String value',
                'createdDateTime' => '2025-11-22T10:40:04.065Z',
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'note' => 'String value',
                'closedFinancialPeriod' => 'String value',
                'location' => null,
                'vatTotal' => 3.14,
                'vatTotalInCurrency' => 3.14,
                'branchNumber' => null,
                'payDate' => '2025-11-22T10:40:04.065Z',
                'paymentMessage' => 'String value',
                'cashAccount' => 'String value',
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'String value',
                'id' => 'mock-id-123',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
            1 => [
                'account' => null,
                'subaccount' => null,
                'amount' => 3.14,
                'amountInCurrency' => 3.14,
                'branch' => null,
                'supplier' => null,
                'documentType' => 'String value',
                'referenceNumber' => 'String value',
                'postPeriod' => 'String value',
                'financialPeriod' => 'String value',
                'date' => '2025-11-22T10:40:04.065Z',
                'origInvoiceDate' => '2025-11-22T10:40:04.065Z',
                'dueDate' => '2025-11-22T10:40:04.065Z',
                'approvalStatus' => 'String value',
                'status' => 'String value',
                'currencyId' => 'mock-id-123',
                'balance' => 3.14,
                'balanceInCurrency' => 3.14,
                'cashDiscount' => 3.14,
                'cashDiscountInCurrency' => 3.14,
                'paymentMethod' => null,
                'supplierReference' => 'String value',
                'description' => 'String value',
                'createdDateTime' => '2025-11-22T10:40:04.065Z',
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'note' => 'String value',
                'closedFinancialPeriod' => 'String value',
                'location' => null,
                'vatTotal' => 3.14,
                'vatTotalInCurrency' => 3.14,
                'branchNumber' => null,
                'payDate' => '2025-11-22T10:40:04.065Z',
                'paymentMessage' => 'String value',
                'cashAccount' => 'String value',
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'String value',
                'id' => 'mock-id-123',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
        ], 200),
    ]);

    $request = (new SupplierDocumentGetAllDocumentsForSupplierCollectionRequest(supplier: 'test string', documentType: 'test string', released: 123, project: 'test string', expandApproval: true, expandNote: true, numberToRead: 123, skipRecords: 123, status: 'test string', expandLinePrebookAccounts: true, branch: 'test string', financialPeriod: 'test string', dueDate: 'test string', dueDateCondition: 'test string', docDate: 'test string', docDateCondition: 'test string', item: 'test string', balance: null, balanceCondition: 'test string', greaterThanValue: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', createdDateTime: 'test string', createdDateTimeCondition: 'test string', pageNumber: 123, pageSize: 123));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (SupplierDocumentGetAllDocumentsForSupplierCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->account->toBeNull()
        ->subaccount->toBeNull()
        ->amount->toBe(3.14)
        ->amountInCurrency->toBe(3.14)
        ->branch->toBeNull()
        ->supplier->toBeNull()
        ->documentType->toBe('String value')
        ->referenceNumber->toBe('String value')
        ->postPeriod->toBe('String value')
        ->financialPeriod->toBe('String value')
        ->date->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->origInvoiceDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->dueDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->approvalStatus->toBe('String value')
        ->status->toBe('String value')
        ->currencyId->toBe('mock-id-123')
        ->balance->toBe(3.14)
        ->balanceInCurrency->toBe(3.14)
        ->cashDiscount->toBe(3.14)
        ->cashDiscountInCurrency->toBe(3.14)
        ->paymentMethod->toBeNull()
        ->supplierReference->toBe('String value')
        ->description->toBe('String value')
        ->createdDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->note->toBe('String value')
        ->closedFinancialPeriod->toBe('String value')
        ->location->toBeNull()
        ->vatTotal->toBe(3.14)
        ->vatTotalInCurrency->toBe(3.14)
        ->branchNumber->toBeNull()
        ->payDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->paymentMessage->toBe('String value')
        ->cashAccount->toBe('String value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('String value')
        ->id->toBe('mock-id-123');
});
