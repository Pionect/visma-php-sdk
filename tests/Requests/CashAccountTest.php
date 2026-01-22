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
            'data' => [
                'type' => 'cashAccounts',
                'id' => 'mock-id-123',
                'attributes' => [
                    'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                    'entryTypes' => [],
                    'currency' => 'Mock value',
                    'account' => 'Mock value',
                    'subaccount' => 'Mock value',
                    'number' => 'Mock value',
                    'description' => 'Mock value',
                ],
            ],
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
        ->currency->toBe('Mock value')
        ->account->toBe('Mock value')
        ->subaccount->toBe('Mock value')
        ->number->toBe('Mock value')
        ->description->toBe('Mock value');
});

it('calls the cashAccountGetAllCollection method in the CashAccount resource', function () {
    Saloon::fake([
        CashAccountGetAllCollectionRequest::class => MockResponse::make([
            'data' => [
                0 => [
                    'type' => 'cashAccounts',
                    'id' => 'mock-id-1',
                    'attributes' => [
                        'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                        'entryTypes' => [],
                        'currency' => 'Mock value',
                        'account' => 'Mock value',
                        'subaccount' => 'Mock value',
                        'number' => 'Mock value',
                        'description' => 'Mock value',
                    ],
                ],
                1 => [
                    'type' => 'cashAccounts',
                    'id' => 'mock-id-2',
                    'attributes' => [
                        'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                        'entryTypes' => [],
                        'currency' => 'Mock value',
                        'account' => 'Mock value',
                        'subaccount' => 'Mock value',
                        'number' => 'Mock value',
                        'description' => 'Mock value',
                    ],
                ],
            ],
        ], 200),
    ]);

    $request = (new CashAccountGetAllCollectionRequest(greaterThanValue: 'test string', numberToRead: 123, skipRecords: 123, lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string'));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (CashAccountGetAllCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->currency->toBe('Mock value')
        ->account->toBe('Mock value')
        ->subaccount->toBe('Mock value')
        ->number->toBe('Mock value')
        ->description->toBe('Mock value');
});
