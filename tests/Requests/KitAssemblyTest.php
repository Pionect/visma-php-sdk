<?php

use Pionect\VismaSdk\Dto\KitAssemblyInsertDto;
use Pionect\VismaSdk\Dto\KitAssemblyUpdateDto;
use Pionect\VismaSdk\Requests\KitAssembly\KitAssemblyDeleteBytyperefNoRequest;
use Pionect\VismaSdk\Requests\KitAssembly\KitAssemblyGetKitAssembliesRequest;
use Pionect\VismaSdk\Requests\KitAssembly\KitAssemblyGetKitAssemblyBytyperefNoRequest;
use Pionect\VismaSdk\Requests\KitAssembly\KitAssemblyPostRequest;
use Pionect\VismaSdk\Requests\KitAssembly\KitAssemblyPutBytyperefNoRequest;
use Pionect\VismaSdk\Requests\KitAssembly\KitAssemblyReleaseKitAssemblyBytyperefNoRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the kitAssemblyGetKitAssembliesRequest method in the KitAssembly resource', function () {
    Saloon::fake([
        KitAssemblyGetKitAssembliesRequest::class => MockResponse::make([
            0 => [],
            1 => [],
        ], 200),
    ]);

    $request = new KitAssemblyGetKitAssembliesRequest(
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        createdDateTime: 'test string',
        createdDateTimeCondition: 'test string',
        type: 'test string',
        refNo: 'test string',
        status: 'test string',
        expandStockComponents: true,
        expandNonStockComponents: true,
        expandKitAllocations: true,
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(KitAssemblyGetKitAssembliesRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toHaveCount(2);
    expect($collection->first())
        ->toBeInstanceOf(\Spatie\LaravelData\Data::class);
});

it('calls the kitAssemblyPostRequest method in the KitAssembly resource', function () {
    $bodyData = new KitAssemblyInsertDto(
        kitAssemblyLink: [
            'orderType' => 'String value',
            'orderNumber' => 'String value',
            'orderLineNumber' => 42,
        ],
        type: 'String value',
        refNo: 'String value',
        hold: true,
        date: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        postPeriod: 'String value',
        itemId: 'mock-id-123',
        revision: 'String value',
        reasonCode: 'String value',
        description: 'String value',
        warehouse: 'String value',
        location: 'String value',
        uoM: 'String value',
        quantity: 42,
        stockComponentLines: [],
        stockComponentAllocations: [],
        nonStockComponentLines: [],
        kitAllocations: []
    );

    Saloon::fake([
        KitAssemblyPostRequest::class => MockResponse::make([], 201),
    ]);

    $request = new KitAssemblyPostRequest(
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(KitAssemblyPostRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the kitAssemblyGetKitAssemblyBytyperefNoRequest method in the KitAssembly resource', function () {
    Saloon::fake([
        KitAssemblyGetKitAssemblyBytyperefNoRequest::class => MockResponse::make([
            'type' => 'String value',
            'refNo' => 'String value',
            'status' => 'String value',
            'hold' => true,
            'date' => '2025-11-22T10:40:04+00:00',
            'postPeriod' => 'String value',
            'itemId' => 'mock-id-123',
            'revision' => 'String value',
            'reasonCode' => 'String value',
            'description' => 'String value',
            'warehouse' => 'String value',
            'location' => 'String value',
            'uoM' => 'String value',
            'quantity' => 42,
            'createdDateTime' => '2025-11-22T10:40:04+00:00',
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'salesOrderLink' => 'String value',
            'stockComponentLines' => [],
            'nonStockComponentLines' => [],
            'kitAllocations' => [],
            'timestamp' => 'String value',
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new KitAssemblyGetKitAssemblyBytyperefNoRequest(
        type: 'test string',
        refNo: 'test string',
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
        ->hold->toBe(true)
        ->date->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->postPeriod->toBe('String value')
        ->itemId->toBe('mock-id-123')
        ->revision->toBe('String value')
        ->reasonCode->toBe('String value')
        ->description->toBe('String value')
        ->warehouse->toBe('String value')
        ->location->toBe('String value')
        ->uoM->toBe('String value')
        ->quantity->toBe(42)
        ->createdDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->salesOrderLink->toBe('String value')
        ->timestamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the kitAssemblyPutBytyperefNoRequest method in the KitAssembly resource', function () {
    $bodyData = new KitAssemblyUpdateDto(
        type: 'String value',
        refNo: 'String value',
        hold: true,
        date: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        postPeriod: 'String value',
        itemId: 'mock-id-123',
        revision: 'String value',
        reasonCode: 'String value',
        description: 'String value',
        warehouse: 'String value',
        location: 'String value',
        uoM: 'String value',
        quantity: 42,
        stockComponentLines: [],
        stockComponentAllocations: [],
        nonStockComponentLines: [],
        kitAllocations: []
    );

    Saloon::fake([
        KitAssemblyPutBytyperefNoRequest::class => MockResponse::make([], 201),
    ]);

    $request = new KitAssemblyPutBytyperefNoRequest(
        type: 'test string',
        refNo: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(KitAssemblyPutBytyperefNoRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the kitAssemblyDeleteBytyperefNoRequest method in the KitAssembly resource', function () {
    Saloon::fake([
        KitAssemblyDeleteBytyperefNoRequest::class => MockResponse::make([], 204),
    ]);

    $request = new KitAssemblyDeleteBytyperefNoRequest(
        type: 'test string',
        refNo: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(KitAssemblyDeleteBytyperefNoRequest::class);

    expect($response->status())->toBe(204);
});

it('calls the kitAssemblyReleaseKitAssemblyBytyperefNoRequest method in the KitAssembly resource', function () {
    $bodyData = [];

    Saloon::fake([
        KitAssemblyReleaseKitAssemblyBytyperefNoRequest::class => MockResponse::make([], 201),
    ]);

    $request = new KitAssemblyReleaseKitAssemblyBytyperefNoRequest(
        type: 'test string',
        refNo: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(KitAssemblyReleaseKitAssemblyBytyperefNoRequest::class);

    expect($response->status())->toBe(201);
});
