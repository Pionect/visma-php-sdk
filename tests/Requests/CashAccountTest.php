<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\CashAccount\CashAccountGetAllCollectionRequest;
use Pionect\VismaSdk\Requests\CashAccount\CashAccountGetByaccountNumberRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the cashAccountGetByaccountNumber method in the CashAccount resource', function () {
    Saloon::fake([
        CashAccountGetByaccountNumberRequest::class => MockResponse::make([
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'entryTypes' => [],
            'currency' => 'String value',
            'account' => null,
            'subaccount' => null,
            'number' => 'String value',
            'description' => 'String value',
        ], 200),
    ]);

    $request = new CashAccountGetByaccountNumberRequest(
        accountNumberId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CashAccountGetByaccountNumberRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->currency->toBe('String value')
        ->account->toBeNull()
        ->subaccount->toBeNull()
        ->number->toBe('String value')
        ->description->toBe('String value');
});

it('calls the cashAccountGetAllCollection method in the CashAccount resource', function () {
    Saloon::fake([
        CashAccountGetAllCollectionRequest::class => MockResponse::make([
            0 => [
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'entryTypes' => [],
                'currency' => 'String value',
                'account' => null,
                'subaccount' => null,
                'number' => 'String value',
                'description' => 'String value',
            ],
            1 => [
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'entryTypes' => [],
                'currency' => 'String value',
                'account' => null,
                'subaccount' => null,
                'number' => 'String value',
                'description' => 'String value',
            ],
        ], 200),
    ]);

    $request = (new CashAccountGetAllCollectionRequest(greaterThanValue: 'test string', numberToRead: 123, skipRecords: 123, lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string'));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (CashAccountGetAllCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->currency->toBe('String value')
        ->account->toBeNull()
        ->subaccount->toBeNull()
        ->number->toBe('String value')
        ->description->toBe('String value');
});
