<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\SalesPerson\SalesPersonGetSalespersonBysalespersonCdRequest;
use Pionect\VismaSdk\Requests\SalesPerson\SalesPersonGetSalespersonsCollectionRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the salesPersonGetSalespersonBysalespersonCd method in the SalesPerson resource', function () {
    Saloon::fake([
        SalesPersonGetSalespersonBysalespersonCdRequest::class => MockResponse::make([
            'salespersonId' => 'mock-id-123',
            'name' => 'String value',
            'isActive' => true,
            'commissionPct' => 3.14,
            'salesSub' => null,
            'customers' => [],
            'commissionHistory' => [],
            'createdDateTime' => '2025-11-22T10:40:04.065Z',
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'errorInfo' => 'String value',
            'id' => 'mock-id-123',
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
        ->name->toBe('String value')
        ->isActive->toBeTrue()
        ->commissionPct->toBe(3.14)
        ->salesSub->toBeNull()
        ->createdDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('String value')
        ->id->toBe('mock-id-123');
});

it('calls the salesPersonGetSalespersonsCollection method in the SalesPerson resource', function () {
    Saloon::fake([
        SalesPersonGetSalespersonsCollectionRequest::class => MockResponse::make([
            'records' => [
                0 => [
                    'salespersonId' => 'mock-id-123',
                    'name' => 'String value',
                    'isActive' => true,
                    'commissionPct' => 3.14,
                    'salesSub' => null,
                    'customers' => [],
                    'commissionHistory' => [],
                    'createdDateTime' => '2025-11-22T10:40:04.065Z',
                    'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                    'errorInfo' => 'String value',
                ],
                1 => [
                    'salespersonId' => 'mock-id-123',
                    'name' => 'String value',
                    'isActive' => true,
                    'commissionPct' => 3.14,
                    'salesSub' => null,
                    'customers' => [],
                    'commissionHistory' => [],
                    'createdDateTime' => '2025-11-22T10:40:04.065Z',
                    'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                    'errorInfo' => 'String value',
                ],
            ],
        ], 200),
    ]);

    $request = (new SalesPersonGetSalespersonsCollectionRequest(salespersonCd: 'test string', name: 'test string', isActive: true, commissionPct: null, salesSub: 'test string', greaterThanValue: 'test string', numberToRead: 123, skipRecords: 123, lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', createdDateTime: 'test string', createdDateTimeCondition: 'test string', pageNumber: 123, pageSize: 123));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (SalesPersonGetSalespersonsCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->salespersonId->toBe('mock-id-123')
        ->name->toBe('String value')
        ->isActive->toBeTrue()
        ->commissionPct->toBe(3.14)
        ->salesSub->toBeNull()
        ->createdDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('String value');
});
