<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\Subaccount\SubaccountGetAllSubaccountsCollectionRequest;
use Pionect\VismaSdk\Requests\Subaccount\SubaccountGetSubaccountBysubAccountNumberRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the subaccountGetSubaccountBysubAccountNumber method in the Subaccount resource', function () {
    Saloon::fake([
        SubaccountGetSubaccountBysubAccountNumberRequest::class => MockResponse::make([
            'subaccountNumber' => 'String value',
            'subaccountId' => 42,
            'description' => 'String value',
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'active' => true,
            'segments' => [],
            'timeStamp' => '2025-11-22T10:40:04.065Z',
            'errorInfo' => 'String value',
            'id' => 'mock-id-123',
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
        ->subaccountNumber->toBe('String value')
        ->subaccountId->toBe(42)
        ->description->toBe('String value')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->active->toBeTrue()
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('String value')
        ->id->toBe('mock-id-123');
});

it('calls the subaccountGetAllSubaccountsCollection method in the Subaccount resource', function () {
    Saloon::fake([
        SubaccountGetAllSubaccountsCollectionRequest::class => MockResponse::make([
            0 => [
                'subaccountNumber' => 'String value',
                'subaccountId' => 42,
                'description' => 'String value',
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'active' => true,
                'segments' => [],
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'String value',
                'id' => 'mock-id-123',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
            1 => [
                'subaccountNumber' => 'String value',
                'subaccountId' => 42,
                'description' => 'String value',
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'active' => true,
                'segments' => [],
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'String value',
                'id' => 'mock-id-123',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
        ], 200),
    ]);

    $request = (new SubaccountGetAllSubaccountsCollectionRequest(lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', active: true, pageNumber: 123, pageSize: 123));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (SubaccountGetAllSubaccountsCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->subaccountNumber->toBe('String value')
        ->subaccountId->toBe(42)
        ->description->toBe('String value')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->active->toBeTrue()
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('String value')
        ->id->toBe('mock-id-123');
});
