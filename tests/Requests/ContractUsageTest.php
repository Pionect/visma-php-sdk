<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\ContractUsage\ContractUsageGetAllCollectionRequest;
use Pionect\VismaSdk\Requests\ContractUsage\ContractUsageGetSpecificBycontractIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the contractUsageGetSpecificBycontractId method in the ContractUsage resource', function () {
    Saloon::fake([
        ContractUsageGetSpecificBycontractIdRequest::class => MockResponse::make([
            'data' => [
                'type' => 'contractUsages',
                'id' => 'mock-id-123',
                'attributes' => [
                    'contract' => 'Mock value',
                    'transaction' => [],
                    'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                ],
            ],
        ], 200),
    ]);

    $request = new ContractUsageGetSpecificBycontractIdRequest(
        contractIdId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(ContractUsageGetSpecificBycontractIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->contract->toBe('Mock value')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'));
});

it('calls the contractUsageGetAllCollection method in the ContractUsage resource', function () {
    Saloon::fake([
        ContractUsageGetAllCollectionRequest::class => MockResponse::make([
            'data' => [
                0 => [
                    'type' => 'contractUsages',
                    'id' => 'mock-id-1',
                    'attributes' => [
                        'contract' => 'Mock value',
                        'transaction' => [],
                        'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                    ],
                ],
                1 => [
                    'type' => 'contractUsages',
                    'id' => 'mock-id-2',
                    'attributes' => [
                        'contract' => 'Mock value',
                        'transaction' => [],
                        'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                    ],
                ],
            ],
        ], 200),
    ]);

    $request = (new ContractUsageGetAllCollectionRequest(greaterThanValue: 'test string', numberToRead: 123, skipRecords: 123, lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string'));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (ContractUsageGetAllCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->contract->toBe('Mock value')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'));
});
