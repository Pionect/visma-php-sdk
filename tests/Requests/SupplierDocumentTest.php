<?php

// Generated 2026-01-30 14:10:14

use Pionect\VismaSdk\Requests\SupplierDocument\SupplierDocumentGetAllDocumentsForSupplierRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the supplierDocumentGetAllDocumentsForSupplierRequest method in the SupplierDocument resource', function () {
    Saloon::fake([
        SupplierDocumentGetAllDocumentsForSupplierRequest::class => MockResponse::make([
            0 => [
                'account' => null,
                'subaccount' => null,
                'amount' => 42,
                'amountInCurrency' => 42,
                'branch' => null,
                'supplier' => null,
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
                'paymentMethod' => null,
                'supplierReference' => 'String value',
                'description' => 'String value',
                'createdDateTime' => '2025-11-22T10:40:04+00:00',
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'note' => 'String value',
                'closedFinancialPeriod' => 'String value',
                'location' => null,
                'vatTotal' => 42,
                'vatTotalInCurrency' => 42,
                'branchNumber' => null,
                'payDate' => '2025-11-22T10:40:04+00:00',
                'paymentMessage' => 'String value',
                'cashAccount' => 'String value',
                'timeStamp' => 'String value',
                'errorInfo' => 'String value',
            ],
            1 => [
                'account' => null,
                'subaccount' => null,
                'amount' => 42,
                'amountInCurrency' => 42,
                'branch' => null,
                'supplier' => null,
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
                'paymentMethod' => null,
                'supplierReference' => 'String value',
                'description' => 'String value',
                'createdDateTime' => '2025-11-22T10:40:04+00:00',
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'note' => 'String value',
                'closedFinancialPeriod' => 'String value',
                'location' => null,
                'vatTotal' => 42,
                'vatTotalInCurrency' => 42,
                'branchNumber' => null,
                'payDate' => '2025-11-22T10:40:04+00:00',
                'paymentMessage' => 'String value',
                'cashAccount' => 'String value',
                'timeStamp' => 'String value',
                'errorInfo' => 'String value',
            ],
        ], 200),
    ]);

    $request = new SupplierDocumentGetAllDocumentsForSupplierRequest(
        supplier: 'test string',
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

    Saloon::assertSent(SupplierDocumentGetAllDocumentsForSupplierRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toBeArray()
        ->and($collection)->toHaveCount(2);

    $firstItem = $collection[0];

    expect($firstItem)
        ->account->toBeNull()
        ->subaccount->toBeNull()
        ->amount->toBe(42)
        ->amountInCurrency->toBe(42)
        ->branch->toBeNull()
        ->supplier->toBeNull()
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
        ->paymentMethod->toBeNull()
        ->supplierReference->toBe('String value')
        ->description->toBe('String value')
        ->createdDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->note->toBe('String value')
        ->closedFinancialPeriod->toBe('String value')
        ->location->toBeNull()
        ->vatTotal->toBe(42)
        ->vatTotalInCurrency->toBe(42)
        ->branchNumber->toBeNull()
        ->payDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->paymentMessage->toBe('String value')
        ->cashAccount->toBe('String value')
        ->timeStamp->toBe('String value')
        ->errorInfo->toBe('String value');
});
