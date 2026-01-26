<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\KitAssembly\KitAssemblyGetKitAssembliesCollectionRequest;
use Pionect\VismaSdk\Requests\KitAssembly\KitAssemblyGetKitAssemblyBytyperefNoRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector(
        clientId: 'replace',
        clientSecret: 'replace'
    );
});

it('calls the kitAssemblyGetKitAssembliesCollection method in the KitAssembly resource', function () {
    Saloon::fake([
        KitAssemblyGetKitAssembliesCollectionRequest::class => MockResponse::make([
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

    $request = (new KitAssemblyGetKitAssembliesCollectionRequest(lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', createdDateTime: 'test string', createdDateTimeCondition: 'test string', type: 'test string', refNo: 'test string', status: 'test string', expandStockComponents: true, expandNonStockComponents: true, expandKitAllocations: true, pageNumber: 123, pageSize: 123));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (KitAssemblyGetKitAssembliesCollectionRequest $request) {
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

it('calls the kitAssemblyGetKitAssemblyBytyperefNo method in the KitAssembly resource', function () {
    Saloon::fake([
        KitAssemblyGetKitAssemblyBytyperefNoRequest::class => MockResponse::make([
            'refNo' => 'Mock value',
            'status' => 'Mock value',
            'hold' => true,
            'date' => '2025-11-22T10:40:04.065Z',
            'postPeriod' => 'Mock value',
            'itemId' => 'mock-id-123',
            'revision' => 'Mock value',
            'reasonCode' => 'Mock value',
            'description' => 'Mock value',
            'warehouse' => 'Mock value',
            'location' => 'Mock value',
            'uoM' => 'Mock value',
            'quantity' => 3.14,
            'createdDateTime' => '2025-11-22T10:40:04.065Z',
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'salesOrderLink' => 'Mock value',
            'stockComponentLines' => [],
            'nonStockComponentLines' => [],
            'kitAllocations' => [],
            'timestamp' => 'Mock value',
            'errorInfo' => 'Mock value',
            'metadata' => 'Mock value',
        ], 200),
    ]);

    $request = new KitAssemblyGetKitAssemblyBytyperefNoRequest(
        typeId: 'test string',
        refNoId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(KitAssemblyGetKitAssemblyBytyperefNoRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->refNo->toBe('Mock value')
        ->status->toBe('Mock value')
        ->hold->toBeTrue()
        ->date->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->postPeriod->toBe('Mock value')
        ->itemId->toBe('mock-id-123')
        ->revision->toBe('Mock value')
        ->reasonCode->toBe('Mock value')
        ->description->toBe('Mock value')
        ->warehouse->toBe('Mock value')
        ->location->toBe('Mock value')
        ->uoM->toBe('Mock value')
        ->quantity->toBe(3.14)
        ->createdDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->salesOrderLink->toBe('Mock value')
        ->timestamp->toBe('Mock value')
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});
