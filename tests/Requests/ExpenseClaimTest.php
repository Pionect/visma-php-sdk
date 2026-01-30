<?php

// Generated 2026-01-30 14:10:14
use Pionect\VismaSdk\Dto\ExpenseClaimUpdateDto;
use Pionect\VismaSdk\Requests\ExpenseClaim\ExpenseClaimCreateExpenseClaimRequest;
use Pionect\VismaSdk\Requests\ExpenseClaim\ExpenseClaimDeleteByexpenseClaimNbrRequest;
use Pionect\VismaSdk\Requests\ExpenseClaim\ExpenseClaimGetAllRequest;
use Pionect\VismaSdk\Requests\ExpenseClaim\ExpenseClaimGetExpenseClaimByexpenseClaimNbrRequest;
use Pionect\VismaSdk\Requests\ExpenseClaim\ExpenseClaimPutByexpenseClaimNbrRequest;
use Pionect\VismaSdk\Requests\ExpenseClaim\ExpenseClaimPutExpenseClaimOnHoldByexpenseClaimRequest;
use Pionect\VismaSdk\Requests\ExpenseClaim\ExpenseClaimSendExpenseClaimToApprovalByexpenseClaimRequest;
use Pionect\VismaSdk\Requests\ExpenseClaim\ExpenseClaimSubmitExpenseClaimByexpenseClaimRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the expenseClaimGetExpenseClaimByexpenseClaimNbrRequest method in the ExpenseClaim resource', function () {
    Saloon::fake([
        ExpenseClaimGetExpenseClaimByexpenseClaimNbrRequest::class => MockResponse::make([
            'refNbr' => 'String value',
            'status' => 'String value',
            'approvalStatus' => 'String value',
            'date' => '2025-11-22T10:40:04+00:00',
            'description' => 'String value',
            'claimedBy' => null,
            'claimTotal' => 42,
            'vatTaxableTotal' => 42,
            'vatExemptTotal' => 42,
            'customer' => null,
            'currency' => 'String value',
            'approvalDate' => '2025-11-22T10:40:04+00:00',
            'department' => null,
            'location' => null,
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'details' => [],
            'approvalStatusText' => 'String value',
            'timeStamp' => 'String value',
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new ExpenseClaimGetExpenseClaimByexpenseClaimNbrRequest(
        expenseClaimNbr: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(ExpenseClaimGetExpenseClaimByexpenseClaimNbrRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->refNbr->toBe('String value')
        ->status->toBe('String value')
        ->approvalStatus->toBe('String value')
        ->date->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->description->toBe('String value')
        ->claimedBy->toBeNull()
        ->claimTotal->toBe(42)
        ->vatTaxableTotal->toBe(42)
        ->vatExemptTotal->toBe(42)
        ->customer->toBeNull()
        ->currency->toBe('String value')
        ->approvalDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->department->toBeNull()
        ->location->toBeNull()
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->approvalStatusText->toBe('String value')
        ->timeStamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the expenseClaimPutByexpenseClaimNbrRequest method in the ExpenseClaim resource', function () {
    $bodyData = new ExpenseClaimUpdateDto(
        date: null,
        description: null,
        claimedBy: null,
        customer: null,
        customerUpdateAnswer: 'String value',
        location: null,
        details: []
    );

    Saloon::fake([
        ExpenseClaimPutByexpenseClaimNbrRequest::class => MockResponse::make([], 201),
    ]);

    $request = new ExpenseClaimPutByexpenseClaimNbrRequest(
        expenseClaimNbr: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(ExpenseClaimPutByexpenseClaimNbrRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the expenseClaimDeleteByexpenseClaimNbrRequest method in the ExpenseClaim resource', function () {
    Saloon::fake([
        ExpenseClaimDeleteByexpenseClaimNbrRequest::class => MockResponse::make([], 204),
    ]);

    $request = new ExpenseClaimDeleteByexpenseClaimNbrRequest(
        expenseClaimNbr: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(ExpenseClaimDeleteByexpenseClaimNbrRequest::class);

    expect($response->status())->toBe(204);
});

it('calls the expenseClaimGetAllRequest method in the ExpenseClaim resource', function () {
    Saloon::fake([
        ExpenseClaimGetAllRequest::class => MockResponse::make([
            0 => [
                'refNbr' => 'String value',
                'status' => 'String value',
                'approvalStatus' => 'String value',
                'date' => '2025-11-22T10:40:04+00:00',
                'description' => 'String value',
                'claimedBy' => null,
                'claimTotal' => 42,
                'vatTaxableTotal' => 42,
                'vatExemptTotal' => 42,
                'customer' => null,
                'currency' => 'String value',
                'approvalDate' => '2025-11-22T10:40:04+00:00',
                'department' => null,
                'location' => null,
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'details' => [],
                'approvalStatusText' => 'String value',
                'timeStamp' => 'String value',
                'errorInfo' => 'String value',
            ],
            1 => [
                'refNbr' => 'String value',
                'status' => 'String value',
                'approvalStatus' => 'String value',
                'date' => '2025-11-22T10:40:04+00:00',
                'description' => 'String value',
                'claimedBy' => null,
                'claimTotal' => 42,
                'vatTaxableTotal' => 42,
                'vatExemptTotal' => 42,
                'customer' => null,
                'currency' => 'String value',
                'approvalDate' => '2025-11-22T10:40:04+00:00',
                'department' => null,
                'location' => null,
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'details' => [],
                'approvalStatusText' => 'String value',
                'timeStamp' => 'String value',
                'errorInfo' => 'String value',
            ],
        ], 200),
    ]);

    $request = new ExpenseClaimGetAllRequest(
        status: 'test string',
        date: 'test string',
        customer: 'test string',
        departmentId: 'test string',
        greaterThanValue: 'test string',
        numberToRead: 123,
        skipRecords: 123,
        orderBy: 'test string',
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(ExpenseClaimGetAllRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toBeArray()
        ->and($collection)->toHaveCount(2);

    $firstItem = $collection[0];

    expect($firstItem)
        ->refNbr->toBe('String value')
        ->status->toBe('String value')
        ->approvalStatus->toBe('String value')
        ->date->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->description->toBe('String value')
        ->claimedBy->toBeNull()
        ->claimTotal->toBe(42)
        ->vatTaxableTotal->toBe(42)
        ->vatExemptTotal->toBe(42)
        ->customer->toBeNull()
        ->currency->toBe('String value')
        ->approvalDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->department->toBeNull()
        ->location->toBeNull()
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->approvalStatusText->toBe('String value')
        ->timeStamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the expenseClaimCreateExpenseClaimRequest method in the ExpenseClaim resource', function () {
    $bodyData = new ExpenseClaimUpdateDto(
        date: null,
        description: null,
        claimedBy: null,
        customer: null,
        customerUpdateAnswer: 'String value',
        location: null,
        details: []
    );

    Saloon::fake([
        ExpenseClaimCreateExpenseClaimRequest::class => MockResponse::make([], 201),
    ]);

    $request = new ExpenseClaimCreateExpenseClaimRequest(
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(ExpenseClaimCreateExpenseClaimRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the expenseClaimPutExpenseClaimOnHoldByexpenseClaimRequest method in the ExpenseClaim resource', function () {
    $bodyData = new ExpenseClaimUpdateDto(
        date: null,
        description: null,
        claimedBy: null,
        customer: null,
        customerUpdateAnswer: 'String value',
        location: null,
        details: []
    );

    Saloon::fake([
        ExpenseClaimPutExpenseClaimOnHoldByexpenseClaimRequest::class => MockResponse::make([], 201),
    ]);

    $request = new ExpenseClaimPutExpenseClaimOnHoldByexpenseClaimRequest(
        expenseClaim: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(ExpenseClaimPutExpenseClaimOnHoldByexpenseClaimRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the expenseClaimSubmitExpenseClaimByexpenseClaimRequest method in the ExpenseClaim resource', function () {
    $bodyData = new ExpenseClaimUpdateDto(
        date: null,
        description: null,
        claimedBy: null,
        customer: null,
        customerUpdateAnswer: 'String value',
        location: null,
        details: []
    );

    Saloon::fake([
        ExpenseClaimSubmitExpenseClaimByexpenseClaimRequest::class => MockResponse::make([], 201),
    ]);

    $request = new ExpenseClaimSubmitExpenseClaimByexpenseClaimRequest(
        expenseClaim: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(ExpenseClaimSubmitExpenseClaimByexpenseClaimRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the expenseClaimSendExpenseClaimToApprovalByexpenseClaimRequest method in the ExpenseClaim resource', function () {
    $bodyData = new ExpenseClaimUpdateDto(
        date: null,
        description: null,
        claimedBy: null,
        customer: null,
        customerUpdateAnswer: 'String value',
        location: null,
        details: []
    );

    Saloon::fake([
        ExpenseClaimSendExpenseClaimToApprovalByexpenseClaimRequest::class => MockResponse::make([], 201),
    ]);

    $request = new ExpenseClaimSendExpenseClaimToApprovalByexpenseClaimRequest(
        expenseClaim: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(ExpenseClaimSendExpenseClaimToApprovalByexpenseClaimRequest::class);

    expect($response->status())->toBe(201);
});
