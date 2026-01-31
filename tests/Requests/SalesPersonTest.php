<?php

use Pionect\VismaSdk\Dto\SalesPersonUpdateDto;
use Pionect\VismaSdk\Requests\SalesPerson\SalesPersonCreateSalespersonRequest;
use Pionect\VismaSdk\Requests\SalesPerson\SalesPersonGetSalespersonBysalespersonCdRequest;
use Pionect\VismaSdk\Requests\SalesPerson\SalesPersonGetSalespersonsRequest;
use Pionect\VismaSdk\Requests\SalesPerson\SalesPersonUpdateSalespersonBysalespersonCdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the salesPersonGetSalespersonBysalespersonCdRequest method in the SalesPerson resource', function () {
    Saloon::fake([
        SalesPersonGetSalespersonBysalespersonCdRequest::class => MockResponse::make([
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

    $request = new SalesPersonGetSalespersonBysalespersonCdRequest(
        salespersonCd: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesPersonGetSalespersonBysalespersonCdRequest::class);

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

it('calls the salesPersonUpdateSalespersonBysalespersonCdRequest method in the SalesPerson resource', function () {
    $bodyData = new SalesPersonUpdateDto(
        salespersonId: 'mock-id-123',
        name: 'String value',
        isActive: true,
        commissionPct: 42,
        salesSub: 'String value',
        customers: []
    );

    Saloon::fake([
        SalesPersonUpdateSalespersonBysalespersonCdRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SalesPersonUpdateSalespersonBysalespersonCdRequest(
        salespersonCd: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesPersonUpdateSalespersonBysalespersonCdRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the salesPersonGetSalespersonsRequest method in the SalesPerson resource', function () {
    Saloon::fake([
        SalesPersonGetSalespersonsRequest::class => MockResponse::make([
            0 => [],
            1 => [],
        ], 200),
    ]);

    $request = new SalesPersonGetSalespersonsRequest(
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

    Saloon::assertSent(SalesPersonGetSalespersonsRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toHaveCount(2);
    expect($collection->first())
        ->toBeInstanceOf(\Spatie\LaravelData\Data::class);
});

it('calls the salesPersonCreateSalespersonRequest method in the SalesPerson resource', function () {
    $bodyData = new SalesPersonUpdateDto(
        salespersonId: 'mock-id-123',
        name: 'String value',
        isActive: true,
        commissionPct: 42,
        salesSub: 'String value',
        customers: []
    );

    Saloon::fake([
        SalesPersonCreateSalespersonRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SalesPersonCreateSalespersonRequest(
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesPersonCreateSalespersonRequest::class);

    expect($response->status())->toBe(201);
});
