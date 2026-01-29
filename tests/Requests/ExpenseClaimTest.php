<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\ExpenseClaim\ExpenseClaimGetAllCollectionRequest;
use Pionect\VismaSdk\Requests\ExpenseClaim\ExpenseClaimGetExpenseClaimByexpenseClaimNbrRequest;
use Pionect\VismaSdk\Requests\ExpenseClaim\ExpenseClaimPutExpenseClaimOnHoldByexpenseClaimRequest;
use Pionect\VismaSdk\Requests\ExpenseClaim\ExpenseClaimSendExpenseClaimToApprovalByexpenseClaimRequest;
use Pionect\VismaSdk\Requests\ExpenseClaim\ExpenseClaimSubmitExpenseClaimByexpenseClaimRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Http\Request;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the expenseClaimGetExpenseClaimByexpenseClaimNbr method in the ExpenseClaim resource', function () {
    Saloon::fake([
        ExpenseClaimGetExpenseClaimByexpenseClaimNbrRequest::class => MockResponse::make([
            'refNbr' => 'String value',
            'status' => 'String value',
            'approvalStatus' => 'String value',
            'date' => '2025-11-22T10:40:04.065Z',
            'description' => 'String value',
            'claimedBy' => null,
            'claimTotal' => 3.14,
            'vatTaxableTotal' => 3.14,
            'vatExemptTotal' => 3.14,
            'customer' => null,
            'currency' => 'String value',
            'approvalDate' => '2025-11-22T10:40:04.065Z',
            'department' => null,
            'location' => null,
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'details' => [],
            'approvalStatusText' => 'String value',
            'timeStamp' => '2025-11-22T10:40:04.065Z',
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
        ->date->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->description->toBe('String value')
        ->claimedBy->toBeNull()
        ->claimTotal->toBe(3.14)
        ->vatTaxableTotal->toBe(3.14)
        ->vatExemptTotal->toBe(3.14)
        ->customer->toBeNull()
        ->currency->toBe('String value')
        ->approvalDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->department->toBeNull()
        ->location->toBeNull()
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->approvalStatusText->toBe('String value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('String value');
});

it('calls the expenseClaimGetAllCollection method in the ExpenseClaim resource', function () {
    Saloon::fake([
        ExpenseClaimGetAllCollectionRequest::class => MockResponse::make([
            0 => [
                'refNbr' => 'String value',
                'status' => 'String value',
                'approvalStatus' => 'String value',
                'date' => '2025-11-22T10:40:04.065Z',
                'description' => 'String value',
                'claimedBy' => null,
                'claimTotal' => 3.14,
                'vatTaxableTotal' => 3.14,
                'vatExemptTotal' => 3.14,
                'customer' => null,
                'currency' => 'String value',
                'approvalDate' => '2025-11-22T10:40:04.065Z',
                'department' => null,
                'location' => null,
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'details' => [],
                'approvalStatusText' => 'String value',
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'String value',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
            1 => [
                'refNbr' => 'String value',
                'status' => 'String value',
                'approvalStatus' => 'String value',
                'date' => '2025-11-22T10:40:04.065Z',
                'description' => 'String value',
                'claimedBy' => null,
                'claimTotal' => 3.14,
                'vatTaxableTotal' => 3.14,
                'vatExemptTotal' => 3.14,
                'customer' => null,
                'currency' => 'String value',
                'approvalDate' => '2025-11-22T10:40:04.065Z',
                'department' => null,
                'location' => null,
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'details' => [],
                'approvalStatusText' => 'String value',
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'String value',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
        ], 200),
    ]);

    $request = (new ExpenseClaimGetAllCollectionRequest(status: 'test string', date: 'test string', customer: 'test string', departmentId: 'test string', greaterThanValue: 'test string', numberToRead: 123, skipRecords: 123, orderBy: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', pageNumber: 123, pageSize: 123));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (ExpenseClaimGetAllCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->refNbr->toBe('String value')
        ->status->toBe('String value')
        ->approvalStatus->toBe('String value')
        ->date->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->description->toBe('String value')
        ->claimedBy->toBeNull()
        ->claimTotal->toBe(3.14)
        ->vatTaxableTotal->toBe(3.14)
        ->vatExemptTotal->toBe(3.14)
        ->customer->toBeNull()
        ->currency->toBe('String value')
        ->approvalDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->department->toBeNull()
        ->location->toBeNull()
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->approvalStatusText->toBe('String value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('String value');
});

it('calls the expenseClaimPutExpenseClaimOnHoldByexpenseClaim method in the ExpenseClaim resource', function () {
    $mockClient = Saloon::fake([
        ExpenseClaimPutExpenseClaimOnHoldByexpenseClaimRequest::class => MockResponse::make([], 200),
    ]);

    // Create DTO with sample data
    $dto = \Pionect\VismaSdk\Dto\PutExpenseClaimOnHoldActionResultDto::factory()->state([
        'actionId' => 'action_id-123',
        'actionResult' => 'test value',
        'errorInfo' => 'test value',
    ])->make();

    $request = new ExpenseClaimPutExpenseClaimOnHoldByexpenseClaimRequest(expenseClaim: 'test value', data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(ExpenseClaimPutExpenseClaimOnHoldByexpenseClaimRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value')
            ->errorInfo->toBe('test value');

        return true;
    });
});

it('calls the expenseClaimSubmitExpenseClaimByexpenseClaim method in the ExpenseClaim resource', function () {
    $mockClient = Saloon::fake([
        ExpenseClaimSubmitExpenseClaimByexpenseClaimRequest::class => MockResponse::make([], 200),
    ]);

    // Create DTO with sample data
    $dto = \Pionect\VismaSdk\Dto\SubmitExpenseClaimActionResultDto::factory()->state([
        'actionId' => 'action_id-123',
        'actionResult' => 'test value',
        'errorInfo' => 'test value',
    ])->make();

    $request = new ExpenseClaimSubmitExpenseClaimByexpenseClaimRequest(expenseClaim: 'test value', data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(ExpenseClaimSubmitExpenseClaimByexpenseClaimRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value')
            ->errorInfo->toBe('test value');

        return true;
    });
});

it('calls the expenseClaimSendExpenseClaimToApprovalByexpenseClaim method in the ExpenseClaim resource', function () {
    $mockClient = Saloon::fake([
        ExpenseClaimSendExpenseClaimToApprovalByexpenseClaimRequest::class => MockResponse::make([], 200),
    ]);

    // Create DTO with sample data
    $dto = \Pionect\VismaSdk\Dto\SendExpenseClaimToApprovalActionResultDto::factory()->state([
        'actionId' => 'action_id-123',
        'actionResult' => 'test value',
        'errorInfo' => 'test value',
    ])->make();

    $request = new ExpenseClaimSendExpenseClaimToApprovalByexpenseClaimRequest(expenseClaim: 'test value', data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(ExpenseClaimSendExpenseClaimToApprovalByexpenseClaimRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value')
            ->errorInfo->toBe('test value');

        return true;
    });
});
