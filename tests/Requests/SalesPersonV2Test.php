<?php

use Pionect\VismaSdk\Requests\SalesPersonV2\SalesPersonV2GetSalespersonBysalespersonCdRequest;
use Pionect\VismaSdk\Requests\SalesPersonV2\SalesPersonV2GetSalespersonsRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the salesPersonV2getSalespersonBysalespersonCdRequest method in the SalesPersonV2 resource', function () {
    Saloon::fake([
        SalesPersonV2GetSalespersonBysalespersonCdRequest::class => MockResponse::make([
            'salespersonId' => 'mock-id-123',
            'name' => 'String value',
            'isActive' => true,
            'commissionPct' => 42,
            'salesSub' => [
                'active' => true,
                'description' => 'String value',
            ],
            'customers' => [],
            'commissionHistory' => [],
            'createdDateTime' => '2025-11-22T10:40:04+00:00',
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new SalesPersonV2GetSalespersonBysalespersonCdRequest(
        salespersonCd: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesPersonV2GetSalespersonBysalespersonCdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->salespersonId->toBe('mock-id-123')
        ->name->toBe('String value')
        ->isActive->toBe(true)
        ->commissionPct->toBe(42)
        ->salesSub->active->toBe(true)
        ->salesSub->description->toBe('String value')
        ->createdDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->errorInfo->toBe('String value');
});

it('calls the salesPersonV2getSalespersonsRequest method in the SalesPersonV2 resource', function () {
    Saloon::fake([
        SalesPersonV2GetSalespersonsRequest::class => MockResponse::make([
            0 => [
                'salespersonId' => 'mock-id-123',
                'name' => 'String value',
                'isActive' => true,
                'commissionPct' => 42,
                'salesSub' => [
                    'active' => true,
                    'description' => 'String value',
                ],
                'customers' => [],
                'commissionHistory' => [],
                'createdDateTime' => '2025-11-22T10:40:04+00:00',
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'errorInfo' => 'String value',
            ],
            1 => [
                'salespersonId' => 'mock-id-123',
                'name' => 'String value',
                'isActive' => true,
                'commissionPct' => 42,
                'salesSub' => [
                    'active' => true,
                    'description' => 'String value',
                ],
                'customers' => [],
                'commissionHistory' => [],
                'createdDateTime' => '2025-11-22T10:40:04+00:00',
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'errorInfo' => 'String value',
            ],
        ], 200),
    ]);

    $request = new SalesPersonV2GetSalespersonsRequest(
        salespersonCd: 'test string',
        name: 'test string',
        isActive: true,
        commissionPct: 123.45,
        salesSub: 'test string',
        greaterThanValue: 'test string',
        numberToRead: 123,
        skipRecords: 123,
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        createdDateTime: 'test string',
        createdDateTimeCondition: 'test string',
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesPersonV2GetSalespersonsRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toHaveCount(2);
    expect($collection->first())
        ->salespersonId->toBe('mock-id-123')
        ->name->toBe('String value')
        ->isActive->toBe(true)
        ->commissionPct->toBe(42)
        ->salesSub->active->toBe(true)
        ->salesSub->description->toBe('String value')
        ->createdDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->errorInfo->toBe('String value');
});
