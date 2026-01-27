<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\KitAssembly\KitAssemblyGetKitAssembliesCollectionRequest;
use Pionect\VismaSdk\Requests\KitAssembly\KitAssemblyGetKitAssemblyBytyperefNoRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
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

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (KitAssemblyGetKitAssembliesCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->pageNumber->toBe(42)
        ->pageSize->toBe(42)
        ->totalCount->toBe(42);
});

it('calls the kitAssemblyGetKitAssemblyBytyperefNo method in the KitAssembly resource', function () {
    Saloon::fake([
        KitAssemblyGetKitAssemblyBytyperefNoRequest::class => MockResponse::make([
            'type' => 'String value',
            'refNo' => 'String value',
            'status' => 'String value',
            'hold' => true,
            'date' => '2025-11-22T10:40:04.065Z',
            'postPeriod' => 'String value',
            'itemId' => 'mock-id-123',
            'revision' => 'String value',
            'reasonCode' => 'String value',
            'description' => 'String value',
            'warehouse' => 'String value',
            'location' => 'String value',
            'uoM' => 'String value',
            'quantity' => 3.14,
            'createdDateTime' => '2025-11-22T10:40:04.065Z',
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'salesOrderLink' => 'String value',
            'stockComponentLines' => [],
            'nonStockComponentLines' => [],
            'kitAllocations' => [],
            'timestamp' => 'String value',
            'errorInfo' => 'String value',
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
        ->type->toBe('String value')
        ->refNo->toBe('String value')
        ->status->toBe('String value')
        ->hold->toBeTrue()
        ->date->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->postPeriod->toBe('String value')
        ->itemId->toBe('mock-id-123')
        ->revision->toBe('String value')
        ->reasonCode->toBe('String value')
        ->description->toBe('String value')
        ->warehouse->toBe('String value')
        ->location->toBe('String value')
        ->uoM->toBe('String value')
        ->quantity->toBe(3.14)
        ->createdDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->salesOrderLink->toBe('String value')
        ->timestamp->toBe('String value')
        ->errorInfo->toBe('String value');
});
