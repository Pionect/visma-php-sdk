<?php

use Pionect\VismaSdk\Enums\AccountTypeEnum;
use Pionect\VismaSdk\Enums\CashSaleDocumentTypeEnum;
use Pionect\VismaSdk\Enums\CashSaleStatusEnum;
use Pionect\VismaSdk\Requests\CustomerDocument\CustomerDocumentGetAllDocumentsRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the customerDocumentGetAllDocumentsRequest method in the CustomerDocument resource', function () {
    Saloon::fake([
        CustomerDocumentGetAllDocumentsRequest::class => MockResponse::make([
            0 => [
                'documentDueDate' => '2025-11-22T10:40:04+00:00',
                'branch' => [
                    'number' => 'String value',
                    'name' => 'String value',
                ],
                'customer' => [
                    'number' => 'String value',
                    'name' => 'String value',
                ],
                'documentType' => 'Invoice',
                'referenceNumber' => 'String value',
                'postPeriod' => 'String value',
                'financialPeriod' => 'String value',
                'closedFinancialPeriod' => 'String value',
                'documentDate' => '2025-11-22T10:40:04+00:00',
                'origInvoiceDate' => '2025-11-22T10:40:04+00:00',
                'status' => 'Hold',
                'currencyId' => 'mock-id-123',
                'amount' => 42,
                'amountInCurrency' => 42,
                'balance' => 42,
                'balanceInCurrency' => 42,
                'cashDiscount' => 42,
                'cashDiscountInCurrency' => 42,
                'paymentMethod' => [
                    'description' => 'String value',
                ],
                'customerRefNumber' => 'String value',
                'invoiceText' => 'String value',
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'createdDateTime' => '2025-11-22T10:40:04+00:00',
                'note' => 'String value',
                'vatTotal' => 42,
                'vatTotalInCurrency' => 42,
                'location' => [
                    'countryId' => 'mock-id-123',
                    'name' => 'String value',
                ],
                'branchNumber' => [
                    'number' => 'String value',
                    'name' => 'String value',
                ],
                'cashAccount' => 'String value',
                'project' => [
                    'internalId' => 42,
                    'description' => 'String value',
                ],
                'account' => [
                    'type' => 'Asset',
                    'externalCode1' => 'String value',
                    'externalCode2' => 'String value',
                    'active' => true,
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'subaccount' => [
                    'subaccountNumber' => 'String value',
                    'subaccountId' => 42,
                    'description' => 'String value',
                    'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                    'active' => true,
                    'segments' => [],
                    'timeStamp' => 'String value',
                    'errorInfo' => 'String value',
                ],
                'customerProject' => 'String value',
                'errorInfo' => 'String value',
            ],
            1 => [
                'documentDueDate' => '2025-11-22T10:40:04+00:00',
                'branch' => [
                    'number' => 'String value',
                    'name' => 'String value',
                ],
                'customer' => [
                    'number' => 'String value',
                    'name' => 'String value',
                ],
                'documentType' => 'Invoice',
                'referenceNumber' => 'String value',
                'postPeriod' => 'String value',
                'financialPeriod' => 'String value',
                'closedFinancialPeriod' => 'String value',
                'documentDate' => '2025-11-22T10:40:04+00:00',
                'origInvoiceDate' => '2025-11-22T10:40:04+00:00',
                'status' => 'Hold',
                'currencyId' => 'mock-id-123',
                'amount' => 42,
                'amountInCurrency' => 42,
                'balance' => 42,
                'balanceInCurrency' => 42,
                'cashDiscount' => 42,
                'cashDiscountInCurrency' => 42,
                'paymentMethod' => [
                    'description' => 'String value',
                ],
                'customerRefNumber' => 'String value',
                'invoiceText' => 'String value',
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'createdDateTime' => '2025-11-22T10:40:04+00:00',
                'note' => 'String value',
                'vatTotal' => 42,
                'vatTotalInCurrency' => 42,
                'location' => [
                    'countryId' => 'mock-id-123',
                    'name' => 'String value',
                ],
                'branchNumber' => [
                    'number' => 'String value',
                    'name' => 'String value',
                ],
                'cashAccount' => 'String value',
                'project' => [
                    'internalId' => 42,
                    'description' => 'String value',
                ],
                'account' => [
                    'type' => 'Asset',
                    'externalCode1' => 'String value',
                    'externalCode2' => 'String value',
                    'active' => true,
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'subaccount' => [
                    'subaccountNumber' => 'String value',
                    'subaccountId' => 42,
                    'description' => 'String value',
                    'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                    'active' => true,
                    'segments' => [],
                    'timeStamp' => 'String value',
                    'errorInfo' => 'String value',
                ],
                'customerProject' => 'String value',
                'errorInfo' => 'String value',
            ],
        ], 200),
    ]);

    $request = new CustomerDocumentGetAllDocumentsRequest(
        documentType: 'test string',
        released: 123,
        dunningLevel: 123,
        closedFinancialPeriod: 'test string',
        dunningLetterDateTime: 'test string',
        dunningLetterDateTimeCondition: 'test string',
        project: 'test string',
        expandApplications: true,
        expandDunningInformation: true,
        expandAttachments: true,
        expandTaxDetails: true,
        expandInvoiceAddress: true,
        financialPeriod: 'test string',
        documentDueDate: 'test string',
        documentDueDateCondition: 'test string',
        status: 'test string',
        numberToRead: 123,
        skipRecords: 123,
        externalReference: 'test string',
        paymentReference: 'test string',
        customerRefNumber: 'test string',
        customer: 'test string',
        branch: 'test string',
        documentDate: 'test string',
        documentDateCondition: 'test string',
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

    Saloon::assertSent(CustomerDocumentGetAllDocumentsRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toHaveCount(2);
    expect($collection->first())
        ->documentDueDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->branch->number->toBe('String value')
        ->branch->name->toBe('String value')
        ->customer->number->toBe('String value')
        ->customer->name->toBe('String value')
        ->documentType->toEqual(CashSaleDocumentTypeEnum::INVOICE)
        ->referenceNumber->toBe('String value')
        ->postPeriod->toBe('String value')
        ->financialPeriod->toBe('String value')
        ->closedFinancialPeriod->toBe('String value')
        ->documentDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->origInvoiceDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->status->toEqual(CashSaleStatusEnum::HOLD)
        ->currencyId->toBe('mock-id-123')
        ->amount->toBe(42)
        ->amountInCurrency->toBe(42)
        ->balance->toBe(42)
        ->balanceInCurrency->toBe(42)
        ->cashDiscount->toBe(42)
        ->cashDiscountInCurrency->toBe(42)
        ->paymentMethod->description->toBe('String value')
        ->customerRefNumber->toBe('String value')
        ->invoiceText->toBe('String value')
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->createdDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->note->toBe('String value')
        ->vatTotal->toBe(42)
        ->vatTotalInCurrency->toBe(42)
        ->location->countryId->toBe('mock-id-123')
        ->location->name->toBe('String value')
        ->branchNumber->number->toBe('String value')
        ->branchNumber->name->toBe('String value')
        ->cashAccount->toBe('String value')
        ->project->internalId->toBe(42)
        ->project->description->toBe('String value')
        ->account->type->toEqual(AccountTypeEnum::ASSET)
        ->account->externalCode1->toBe('String value')
        ->account->externalCode2->toBe('String value')
        ->account->active->toBe(true)
        ->account->number->toBe('String value')
        ->account->description->toBe('String value')
        ->subaccount->subaccountNumber->toBe('String value')
        ->subaccount->subaccountId->toBe(42)
        ->subaccount->description->toBe('String value')
        ->subaccount->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->subaccount->active->toBe(true)
        ->subaccount->timeStamp->toBe('String value')
        ->subaccount->errorInfo->toBe('String value')
        ->customerProject->toBe('String value')
        ->errorInfo->toBe('String value');
});
