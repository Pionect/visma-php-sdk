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
            0 => [
                'financialYear' => 'String value',
                'released' => true,
                'releasedAmount' => 3.14,
                'account' => null,
                'subaccount' => null,
                'description' => 'String value',
                'amount' => 3.14,
                'distributedAmount' => 3.14,
                'periods' => [],
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'branchNumber' => null,
                'timeStamp' => '2025-11-22T10:40:04.065Z',
            ],
            1 => [
                'financialYear' => 'String value',
                'released' => true,
                'releasedAmount' => 3.14,
                'account' => null,
                'subaccount' => null,
                'description' => 'String value',
                'amount' => 3.14,
                'distributedAmount' => 3.14,
                'periods' => [],
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'branchNumber' => null,
                'timeStamp' => '2025-11-22T10:40:04.065Z',
            ],
        ], 200),
    ]);

    $request = (new BudgetGetAllCollectionRequest(isReleased: true, greaterThanValue: 'test string', numberToRead: 123, skipRecords: 123, orderBy: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', branch: 'test string', ledger: 'test string', financialYear: 'test string', subaccount: 'test string'));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (BudgetGetAllCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->financialYear->toBe('String value')
        ->released->toBeTrue()
        ->releasedAmount->toBe(3.14)
        ->account->toBeNull()
        ->subaccount->toBeNull()
        ->description->toBe('String value')
        ->amount->toBe(3.14)
        ->distributedAmount->toBe(3.14)
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->branchNumber->toBeNull()
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'));
});
