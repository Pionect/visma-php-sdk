<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\Subaccount\SubaccountGetAllSubaccountsCollectionRequest;
use Pionect\VismaSdk\Requests\Subaccount\SubaccountGetSubaccountBysubAccountNumberRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector(
        clientId: 'replace',
        clientSecret: 'replace'
    );
});

it('calls the subaccountGetSubaccountBysubAccountNumber method in the Subaccount resource', function () {
    Saloon::fake([
        SubaccountGetSubaccountBysubAccountNumberRequest::class => MockResponse::make([
            'subaccountNumber' => 'Mock value',
            'subaccountId' => 42,
            'description' => 'Mock value',
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'active' => true,
            'segments' => [],
            'timeStamp' => '2025-11-22T10:40:04.065Z',
            'errorInfo' => 'Mock value',
            'metadata' => 'Mock value',
        ], 200),
    ]);

    $request = new SubaccountGetSubaccountBysubAccountNumberRequest(
        subAccountNumberId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SubaccountGetSubaccountBysubAccountNumberRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->subaccountNumber->toBe('Mock value')
        ->subaccountId->toBe(42)
        ->description->toBe('Mock value')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->active->toBeTrue()
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the subaccountGetAllSubaccountsCollection method in the Subaccount resource', function () {
    Saloon::fake([
        SubaccountGetAllSubaccountsCollectionRequest::class => MockResponse::make([
            0 => [
                'subaccountNumber' => 'Mock value',
                'subaccountId' => 42,
                'description' => 'Mock value',
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'active' => true,
                'segments' => [],
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'Mock value',
                'metadata' => 'Mock value',
            ],
            1 => [
                'subaccountNumber' => 'Mock value',
                'subaccountId' => 42,
                'description' => 'Mock value',
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'active' => true,
                'segments' => [],
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'Mock value',
                'metadata' => 'Mock value',
            ],
        ], 200),
    ]);

    $request = (new SubaccountGetAllSubaccountsCollectionRequest(lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', active: true, pageNumber: 123, pageSize: 123));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (SubaccountGetAllSubaccountsCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->subaccountNumber->toBe('Mock value')
        ->subaccountId->toBe(42)
        ->description->toBe('Mock value')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->active->toBeTrue()
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});
