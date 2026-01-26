<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\SalesPerson\SalesPersonGetSalespersonBysalespersonCdRequest;
use Pionect\VismaSdk\Requests\SalesPerson\SalesPersonGetSalespersonsCollectionRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector(
        clientId: 'replace',
        clientSecret: 'replace'
    );
});

it('calls the salesPersonGetSalespersonBysalespersonCd method in the SalesPerson resource', function () {
    Saloon::fake([
        SalesPersonGetSalespersonBysalespersonCdRequest::class => MockResponse::make([
            'salespersonId' => 'mock-id-123',
            'name' => 'Mock value',
            'isActive' => true,
            'commissionPct' => 3.14,
            'salesSub' => 'Mock value',
            'customers' => [],
            'commissionHistory' => [],
            'createdDateTime' => '2025-11-22T10:40:04.065Z',
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'errorInfo' => 'Mock value',
            'metadata' => 'Mock value',
        ], 200),
    ]);

    $request = new SalesPersonGetSalespersonBysalespersonCdRequest(
        salespersonCdId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesPersonGetSalespersonBysalespersonCdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->salespersonId->toBe('mock-id-123')
        ->name->toBe('Mock value')
        ->isActive->toBeTrue()
        ->commissionPct->toBe(3.14)
        ->salesSub->toBe('Mock value')
        ->createdDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the salesPersonGetSalespersonsCollection method in the SalesPerson resource', function () {
    Saloon::fake([
        SalesPersonGetSalespersonsCollectionRequest::class => MockResponse::make([
            0 => [
                'pageNumber' => 42,
                'pageSize' => 42,
                'totalCount' => 42,
                'records' => [],
            ],
            1 => [
                'pageNumber' => 42,
                'pageSize' => 42,
                'totalCount' => 42,
                'records' => [],
            ],
        ], 200),
    ]);

    $request = (new SalesPersonGetSalespersonsCollectionRequest(salespersonCd: 'test string', name: 'test string', isActive: true, commissionPct: null, salesSub: 'test string', greaterThanValue: 'test string', numberToRead: 123, skipRecords: 123, lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', createdDateTime: 'test string', createdDateTimeCondition: 'test string', pageNumber: 123, pageSize: 123));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (SalesPersonGetSalespersonsCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->pageNumber->toBe(42)
        ->pageSize->toBe(42)
        ->totalCount->toBe(42);
});
