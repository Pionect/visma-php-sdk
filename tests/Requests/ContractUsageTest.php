<?php

// Generated 2026-01-30 14:10:14
use Pionect\VismaSdk\Dto\ContractUsageUpdateDto;
use Pionect\VismaSdk\Requests\ContractUsage\ContractUsageGetAllRequest;
use Pionect\VismaSdk\Requests\ContractUsage\ContractUsageGetSpecificBycontractIdRequest;
use Pionect\VismaSdk\Requests\ContractUsage\ContractUsagePutBycontractIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the contractUsageGetSpecificBycontractIdRequest method in the ContractUsage resource', function () {
    Saloon::fake([
        ContractUsageGetSpecificBycontractIdRequest::class => MockResponse::make([
            'contract' => 'String value',
            'transaction' => [],
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
        ], 200),
    ]);

    $request = new ContractUsageGetSpecificBycontractIdRequest(
        contractId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(ContractUsageGetSpecificBycontractIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->contract->toBe('String value')
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'));
});

it('calls the contractUsagePutBycontractIdRequest method in the ContractUsage resource', function () {
    $bodyData = new ContractUsageUpdateDto(
        lines: []
    );

    Saloon::fake([
        ContractUsagePutBycontractIdRequest::class => MockResponse::make([], 201),
    ]);

    $request = new ContractUsagePutBycontractIdRequest(
        contractId: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(ContractUsagePutBycontractIdRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the contractUsageGetAllRequest method in the ContractUsage resource', function () {
    Saloon::fake([
        ContractUsageGetAllRequest::class => MockResponse::make([
            0 => [
                'contract' => 'String value',
                'transaction' => [],
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            ],
            1 => [
                'contract' => 'String value',
                'transaction' => [],
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            ],
        ], 200),
    ]);

    $request = new ContractUsageGetAllRequest(
        greaterThanValue: 'test string',
        numberToRead: 123,
        skipRecords: 123,
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(ContractUsageGetAllRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toBeArray()
        ->and($collection)->toHaveCount(2);

    $firstItem = $collection[0];

    expect($firstItem)
        ->contract->toBe('String value')
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'));
});
