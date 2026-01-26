<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\SalesPersonV2\SalesPersonV2GetSalespersonBysalespersonCdRequest;
use Pionect\VismaSdk\Requests\SalesPersonV2\SalesPersonV2GetSalespersonsCollectionRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector(
        clientId: 'replace',
        clientSecret: 'replace'
    );
});

it('calls the salesPersonV2getSalespersonBysalespersonCd method in the SalesPersonV2 resource', function () {
    Saloon::fake([
        SalesPersonV2GetSalespersonBysalespersonCdRequest::class => MockResponse::make([
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

    $request = new SalesPersonV2GetSalespersonBysalespersonCdRequest(
        salespersonCdId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesPersonV2GetSalespersonBysalespersonCdRequest::class);

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

it('calls the salesPersonV2getSalespersonsCollection method in the SalesPersonV2 resource', function () {
    Saloon::fake([
        SalesPersonV2GetSalespersonsCollectionRequest::class => MockResponse::make([
            0 => [
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
            ],
            1 => [
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
            ],
        ], 200),
    ]);

    $request = (new SalesPersonV2GetSalespersonsCollectionRequest(salespersonCd: 'test string', name: 'test string', isActive: true, commissionPct: null, salesSub: 'test string', greaterThanValue: 'test string', numberToRead: 123, skipRecords: 123, lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', createdDateTime: 'test string', createdDateTimeCondition: 'test string', pageNumber: 123, pageSize: 123));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (SalesPersonV2GetSalespersonsCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
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
