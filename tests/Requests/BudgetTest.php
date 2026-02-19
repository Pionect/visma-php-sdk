<?php

use Pionect\VismaSdk\Dto\BudgetUpdateDto;
use Pionect\VismaSdk\Enums\AccountTypeEnum;
use Pionect\VismaSdk\Requests\Budget\BudgetCreateBudgetRequest;
use Pionect\VismaSdk\Requests\Budget\BudgetGetAllRequest;
use Pionect\VismaSdk\Requests\Budget\BudgetPutRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the budgetGetAllRequest method in the Budget resource', function () {
    Saloon::fake([
        BudgetGetAllRequest::class => MockResponse::make([
            0 => [
                'financialYear' => 'String value',
                'released' => true,
                'releasedAmount' => 42,
                'account' => [
                    'type' => 'Asset',
                    'externalCode1' => 'String value',
                    'externalCode2' => 'String value',
                    'active' => true,
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'subaccount' => [
                    'active' => true,
                    'description' => 'String value',
                ],
                'description' => 'String value',
                'amount' => 42,
                'distributedAmount' => 42,
                'periods' => [],
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'branchNumber' => [
                    'number' => 'String value',
                    'name' => 'String value',
                ],
                'timeStamp' => 'String value',
            ],
            1 => [
                'financialYear' => 'String value',
                'released' => true,
                'releasedAmount' => 42,
                'account' => [
                    'type' => 'Asset',
                    'externalCode1' => 'String value',
                    'externalCode2' => 'String value',
                    'active' => true,
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'subaccount' => [
                    'active' => true,
                    'description' => 'String value',
                ],
                'description' => 'String value',
                'amount' => 42,
                'distributedAmount' => 42,
                'periods' => [],
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'branchNumber' => [
                    'number' => 'String value',
                    'name' => 'String value',
                ],
                'timeStamp' => 'String value',
            ],
        ], 200),
    ]);

    $request = new BudgetGetAllRequest(
        isReleased: true,
        greaterThanValue: 'test string',
        numberToRead: 123,
        skipRecords: 123,
        orderBy: 'test string',
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        branch: 'test string',
        ledger: 'test string',
        financialYear: 'test string',
        subaccount: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(BudgetGetAllRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toHaveCount(2);
    expect($collection->first())
        ->financialYear->toBe('String value')
        ->released->toBe(true)
        ->releasedAmount->toBe(42)
        ->account->type->toEqual(AccountTypeEnum::ASSET)
        ->account->externalCode1->toBe('String value')
        ->account->externalCode2->toBe('String value')
        ->account->active->toBe(true)
        ->account->number->toBe('String value')
        ->account->description->toBe('String value')
        ->subaccount->active->toBe(true)
        ->subaccount->description->toBe('String value')
        ->description->toBe('String value')
        ->amount->toBe(42)
        ->distributedAmount->toBe(42)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->branchNumber->number->toBe('String value')
        ->branchNumber->name->toBe('String value')
        ->timeStamp->toBe('String value');
});

it('calls the budgetPutRequest method in the Budget resource', function () {
    $bodyData = new BudgetUpdateDto(
        ledger: 'String value',
        financialYear: 'String value',
        account: 'String value',
        subaccount: [],
        description: 'String value',
        amount: 42,
        branchNumber: 'String value',
        periods: []
    );

    Saloon::fake([
        BudgetPutRequest::class => MockResponse::make([], 201),
    ]);

    $request = new BudgetPutRequest(
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(BudgetPutRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the budgetCreateBudgetRequest method in the Budget resource', function () {
    $bodyData = new BudgetUpdateDto(
        ledger: 'String value',
        financialYear: 'String value',
        account: 'String value',
        subaccount: [],
        description: 'String value',
        amount: 42,
        branchNumber: 'String value',
        periods: []
    );

    Saloon::fake([
        BudgetCreateBudgetRequest::class => MockResponse::make([], 201),
    ]);

    $request = new BudgetCreateBudgetRequest(
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(BudgetCreateBudgetRequest::class);

    expect($response->status())->toBe(201);
});
