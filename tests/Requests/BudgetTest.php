<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\Budget\BudgetGetAllCollectionRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the budgetGetAllCollection method in the Budget resource', function () {
    Saloon::fake([
        BudgetGetAllCollectionRequest::class => MockResponse::make([
            'data' => [
                0 => [
                    'type' => 'budgets',
                    'id' => 'mock-id-1',
                    'attributes' => [
                        'financialYear' => 'Mock value',
                        'released' => true,
                        'releasedAmount' => 3.14,
                        'account' => 'Mock value',
                        'subaccount' => 'Mock value',
                        'description' => 'Mock value',
                        'amount' => 3.14,
                        'distributedAmount' => 3.14,
                        'periods' => [],
                        'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                        'branchNumber' => 'Mock value',
                        'timeStamp' => '2025-11-22T10:40:04.065Z',
                    ],
                ],
                1 => [
                    'type' => 'budgets',
                    'id' => 'mock-id-2',
                    'attributes' => [
                        'financialYear' => 'Mock value',
                        'released' => true,
                        'releasedAmount' => 3.14,
                        'account' => 'Mock value',
                        'subaccount' => 'Mock value',
                        'description' => 'Mock value',
                        'amount' => 3.14,
                        'distributedAmount' => 3.14,
                        'periods' => [],
                        'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                        'branchNumber' => 'Mock value',
                        'timeStamp' => '2025-11-22T10:40:04.065Z',
                    ],
                ],
            ],
        ], 200),
    ]);

    $request = (new BudgetGetAllCollectionRequest(isReleased: true, greaterThanValue: 'test string', numberToRead: 123, skipRecords: 123, orderBy: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', branch: 'test string', ledger: 'test string', financialYear: 'test string', subaccount: 'test string'));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (BudgetGetAllCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->financialYear->toBe('Mock value')
        ->released->toBe(true)
        ->releasedAmount->toBe(3.14)
        ->account->toBe('Mock value')
        ->subaccount->toBe('Mock value')
        ->description->toBe('Mock value')
        ->amount->toBe(3.14)
        ->distributedAmount->toBe(3.14)
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->branchNumber->toBe('Mock value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'));
});
