<?php

use Pionect\VismaSdk\Dto\SubAccountUpdateDto;
use Pionect\VismaSdk\Requests\Subaccount\SubaccountGetAllSubaccountsRequest;
use Pionect\VismaSdk\Requests\Subaccount\SubaccountGetSubaccountBysubAccountNumberRequest;
use Pionect\VismaSdk\Requests\Subaccount\SubaccountPostRequest;
use Pionect\VismaSdk\Requests\Subaccount\SubaccountPutBysubAccountNumberRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the subaccountGetSubaccountBysubAccountNumberRequest method in the Subaccount resource', function () {
    Saloon::fake([
        SubaccountGetSubaccountBysubAccountNumberRequest::class => MockResponse::make([
            'subaccountNumber' => 'String value',
            'subaccountId' => 42,
            'description' => 'String value',
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'active' => true,
            'segments' => [],
            'timeStamp' => 'String value',
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new SubaccountGetSubaccountBysubAccountNumberRequest(
        subAccountNumber: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SubaccountGetSubaccountBysubAccountNumberRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->subaccountNumber->toBe('String value')
        ->subaccountId->toBe(42)
        ->description->toBe('String value')
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->active->toBe(true)
        ->timeStamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the subaccountPutBysubAccountNumberRequest method in the Subaccount resource', function () {
    $bodyData = new SubAccountUpdateDto(
        subaccountNumber: null,
        subaccountId: null,
        description: 'String value',
        active: true
    );

    Saloon::fake([
        SubaccountPutBysubAccountNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SubaccountPutBysubAccountNumberRequest(
        subAccountNumber: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SubaccountPutBysubAccountNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the subaccountGetAllSubaccountsRequest method in the Subaccount resource', function () {
    Saloon::fake([
        SubaccountGetAllSubaccountsRequest::class => MockResponse::make([
            0 => [
                'subaccountNumber' => 'String value',
                'subaccountId' => 42,
                'description' => 'String value',
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'active' => true,
                'segments' => [],
                'timeStamp' => 'String value',
                'errorInfo' => 'String value',
            ],
            1 => [
                'subaccountNumber' => 'String value',
                'subaccountId' => 42,
                'description' => 'String value',
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'active' => true,
                'segments' => [],
                'timeStamp' => 'String value',
                'errorInfo' => 'String value',
            ],
        ], 200),
    ]);

    $request = new SubaccountGetAllSubaccountsRequest(
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        active: true,
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SubaccountGetAllSubaccountsRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toHaveCount(2);
    expect($collection->first())
        ->subaccountNumber->toBe('String value')
        ->subaccountId->toBe(42)
        ->description->toBe('String value')
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->active->toBe(true)
        ->timeStamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the subaccountPostRequest method in the Subaccount resource', function () {
    $bodyData = new SubAccountUpdateDto(
        subaccountNumber: null,
        subaccountId: null,
        description: 'String value',
        active: true
    );

    Saloon::fake([
        SubaccountPostRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SubaccountPostRequest(
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SubaccountPostRequest::class);

    expect($response->status())->toBe(201);
});
