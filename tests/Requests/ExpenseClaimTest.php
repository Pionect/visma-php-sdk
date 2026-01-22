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
            'data' => [
                'type' => 'expenseClaims',
                'id' => 'mock-id-123',
                'attributes' => [
                    'refNbr' => 'Mock value',
                    'status' => 'Mock value',
                    'approvalStatus' => 'Mock value',
                    'date' => '2025-11-22T10:40:04.065Z',
                    'description' => 'Mock value',
                    'claimedBy' => 'Mock value',
                    'claimTotal' => 3.14,
                    'vatTaxableTotal' => 3.14,
                    'vatExemptTotal' => 3.14,
                    'customer' => 'Mock value',
                    'currency' => 'Mock value',
                    'approvalDate' => '2025-11-22T10:40:04.065Z',
                    'department' => 'Mock value',
                    'location' => 'Mock value',
                    'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                    'details' => [],
                    'approvalStatusText' => 'Mock value',
                    'timeStamp' => '2025-11-22T10:40:04.065Z',
                    'errorInfo' => 'Mock value',
                    'metadata' => 'Mock value',
                ],
            ],
        ], 200),
    ]);

    $request = new ExpenseClaimGetExpenseClaimByexpenseClaimNbrRequest(
        expenseClaimNbrId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(ExpenseClaimGetExpenseClaimByexpenseClaimNbrRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->refNbr->toBe('Mock value')
        ->status->toBe('Mock value')
        ->approvalStatus->toBe('Mock value')
        ->date->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->description->toBe('Mock value')
        ->claimedBy->toBe('Mock value')
        ->claimTotal->toBe(3.14)
        ->vatTaxableTotal->toBe(3.14)
        ->vatExemptTotal->toBe(3.14)
        ->customer->toBe('Mock value')
        ->currency->toBe('Mock value')
        ->approvalDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->department->toBe('Mock value')
        ->location->toBe('Mock value')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->approvalStatusText->toBe('Mock value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the expenseClaimGetAllCollection method in the ExpenseClaim resource', function () {
    Saloon::fake([
        ExpenseClaimGetAllCollectionRequest::class => MockResponse::make([
            'data' => [
                0 => [
                    'type' => 'expenseClaims',
                    'id' => 'mock-id-1',
                    'attributes' => [
                        'refNbr' => 'Mock value',
                        'status' => 'Mock value',
                        'approvalStatus' => 'Mock value',
                        'date' => '2025-11-22T10:40:04.065Z',
                        'description' => 'Mock value',
                        'claimedBy' => 'Mock value',
                        'claimTotal' => 3.14,
                        'vatTaxableTotal' => 3.14,
                        'vatExemptTotal' => 3.14,
                        'customer' => 'Mock value',
                        'currency' => 'Mock value',
                        'approvalDate' => '2025-11-22T10:40:04.065Z',
                        'department' => 'Mock value',
                        'location' => 'Mock value',
                        'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                        'details' => [],
                        'approvalStatusText' => 'Mock value',
                        'timeStamp' => '2025-11-22T10:40:04.065Z',
                        'errorInfo' => 'Mock value',
                        'metadata' => 'Mock value',
                    ],
                ],
                1 => [
                    'type' => 'expenseClaims',
                    'id' => 'mock-id-2',
                    'attributes' => [
                        'refNbr' => 'Mock value',
                        'status' => 'Mock value',
                        'approvalStatus' => 'Mock value',
                        'date' => '2025-11-22T10:40:04.065Z',
                        'description' => 'Mock value',
                        'claimedBy' => 'Mock value',
                        'claimTotal' => 3.14,
                        'vatTaxableTotal' => 3.14,
                        'vatExemptTotal' => 3.14,
                        'customer' => 'Mock value',
                        'currency' => 'Mock value',
                        'approvalDate' => '2025-11-22T10:40:04.065Z',
                        'department' => 'Mock value',
                        'location' => 'Mock value',
                        'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                        'details' => [],
                        'approvalStatusText' => 'Mock value',
                        'timeStamp' => '2025-11-22T10:40:04.065Z',
                        'errorInfo' => 'Mock value',
                        'metadata' => 'Mock value',
                    ],
                ],
            ],
        ], 200),
    ]);

    $request = (new ExpenseClaimGetAllCollectionRequest(status: 'test string', date: 'test string', customer: 'test string', departmentId: 'test string', greaterThanValue: 'test string', numberToRead: 123, skipRecords: 123, orderBy: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', pageNumber: 123, pageSize: 123));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (ExpenseClaimGetAllCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->refNbr->toBe('Mock value')
        ->status->toBe('Mock value')
        ->approvalStatus->toBe('Mock value')
        ->date->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->description->toBe('Mock value')
        ->claimedBy->toBe('Mock value')
        ->claimTotal->toBe(3.14)
        ->vatTaxableTotal->toBe(3.14)
        ->vatExemptTotal->toBe(3.14)
        ->customer->toBe('Mock value')
        ->currency->toBe('Mock value')
        ->approvalDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->department->toBe('Mock value')
        ->location->toBe('Mock value')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->approvalStatusText->toBe('Mock value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
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

    $request = new ExpenseClaimPutExpenseClaimOnHoldByexpenseClaimRequest(expenseClaimId: 'expense_claim_id-123', data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(ExpenseClaimPutExpenseClaimOnHoldByexpenseClaimRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->toHaveKey('data')
            ->data->type->toBe('expenseClaims')
            ->data->attributes->scoped(fn ($attributes) => $attributes
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value')
            ->errorInfo->toBe('test value')
            );

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

    $request = new ExpenseClaimSubmitExpenseClaimByexpenseClaimRequest(expenseClaimId: 'expense_claim_id-123', data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(ExpenseClaimSubmitExpenseClaimByexpenseClaimRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->toHaveKey('data')
            ->data->type->toBe('expenseClaims')
            ->data->attributes->scoped(fn ($attributes) => $attributes
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value')
            ->errorInfo->toBe('test value')
            );

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

    $request = new ExpenseClaimSendExpenseClaimToApprovalByexpenseClaimRequest(expenseClaimId: 'expense_claim_id-123', data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(ExpenseClaimSendExpenseClaimToApprovalByexpenseClaimRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->toHaveKey('data')
            ->data->type->toBe('expenseClaims')
            ->data->attributes->scoped(fn ($attributes) => $attributes
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value')
            ->errorInfo->toBe('test value')
            );

        return true;
    });
});
