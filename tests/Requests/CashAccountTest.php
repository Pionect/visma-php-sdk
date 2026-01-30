<?php

use Pionect\VismaSdk\Requests\CashAccount\CashAccountGetAllRequest;
use Pionect\VismaSdk\Requests\CashAccount\CashAccountGetByaccountNumberRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the cashAccountGetByaccountNumberRequest method in the CashAccount resource', function () {
    Saloon::fake([
        CashAccountGetByaccountNumberRequest::class => MockResponse::make([
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'entryTypes' => [],
            'currency' => 'String value',
            'account' => null,
            'subaccount' => null,
            'number' => 'String value',
            'description' => 'String value',
        ], 200),
    ]);

    $request = new CashAccountGetByaccountNumberRequest(
        accountNumber: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CashAccountGetByaccountNumberRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->currency->toBe('String value')
        ->account->toBeNull()
        ->subaccount->toBeNull()
        ->number->toBe('String value')
        ->description->toBe('String value');
});

it('calls the cashAccountGetAllRequest method in the CashAccount resource', function () {
    Saloon::fake([
        CashAccountGetAllRequest::class => MockResponse::make([
            0 => [
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'entryTypes' => [],
                'currency' => 'String value',
                'account' => null,
                'subaccount' => null,
                'number' => 'String value',
                'description' => 'String value',
            ],
            1 => [
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'entryTypes' => [],
                'currency' => 'String value',
                'account' => null,
                'subaccount' => null,
                'number' => 'String value',
                'description' => 'String value',
            ],
        ], 200),
    ]);

    $request = new CashAccountGetAllRequest(
        greaterThanValue: 'test string',
        numberToRead: 123,
        skipRecords: 123,
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CashAccountGetAllRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toHaveCount(2);
    expect($collection->first())
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->currency->toBe('String value')
        ->account->toBeNull()
        ->subaccount->toBeNull()
        ->number->toBe('String value')
        ->description->toBe('String value');
});
