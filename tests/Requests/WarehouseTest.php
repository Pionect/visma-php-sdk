<?php

// Generated 2026-01-30 15:19:40
use Pionect\VismaSdk\Dto\WarehouseDto;
use Pionect\VismaSdk\Requests\Warehouse\WarehouseGetAllRequest;
use Pionect\VismaSdk\Requests\Warehouse\WarehouseGetBywarehouseIdRequest;
use Pionect\VismaSdk\Requests\Warehouse\WarehousePostBywarehouseIdRequest;
use Pionect\VismaSdk\Requests\Warehouse\WarehousePutBywarehouseIdlocationIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the warehouseGetBywarehouseIdRequest method in the Warehouse resource', function () {
    Saloon::fake([
        WarehouseGetBywarehouseIdRequest::class => MockResponse::make([
            'warehouseId' => 'mock-id-123',
            'branch' => null,
            'replenishmentClass' => null,
            'active' => true,
            'lockSitePicountEntry' => true,
            'description' => 'String value',
            'locationEntry' => 'String value',
            'avgDefaultCost' => 'String value',
            'fifoDefaultCost' => 'String value',
            'receiptLocation' => null,
            'shipLocation' => null,
            'returnLocation' => null,
            'dropShipLocation' => null,
            'contact' => null,
            'address' => null,
            'locations' => [],
            'timestamp' => 'String value',
        ], 200),
    ]);

    $request = new WarehouseGetBywarehouseIdRequest(
        warehouseId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(WarehouseGetBywarehouseIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->warehouseId->toBe('mock-id-123')
        ->branch->toBeNull()
        ->replenishmentClass->toBeNull()
        ->active->toBe(true)
        ->lockSitePicountEntry->toBe(true)
        ->description->toBe('String value')
        ->locationEntry->toBe('String value')
        ->avgDefaultCost->toBe('String value')
        ->fifoDefaultCost->toBe('String value')
        ->receiptLocation->toBeNull()
        ->shipLocation->toBeNull()
        ->returnLocation->toBeNull()
        ->dropShipLocation->toBeNull()
        ->contact->toBeNull()
        ->address->toBeNull()
        ->timestamp->toBe('String value');
});

it('calls the warehouseGetAllRequest method in the Warehouse resource', function () {
    Saloon::fake([
        WarehouseGetAllRequest::class => MockResponse::make([
            0 => [
                'warehouseId' => 'mock-id-123',
                'branch' => null,
                'replenishmentClass' => null,
                'active' => true,
                'lockSitePicountEntry' => true,
                'description' => 'String value',
                'locationEntry' => 'String value',
                'avgDefaultCost' => 'String value',
                'fifoDefaultCost' => 'String value',
                'receiptLocation' => null,
                'shipLocation' => null,
                'returnLocation' => null,
                'dropShipLocation' => null,
                'contact' => null,
                'address' => null,
                'locations' => [],
                'timestamp' => 'String value',
            ],
            1 => [
                'warehouseId' => 'mock-id-123',
                'branch' => null,
                'replenishmentClass' => null,
                'active' => true,
                'lockSitePicountEntry' => true,
                'description' => 'String value',
                'locationEntry' => 'String value',
                'avgDefaultCost' => 'String value',
                'fifoDefaultCost' => 'String value',
                'receiptLocation' => null,
                'shipLocation' => null,
                'returnLocation' => null,
                'dropShipLocation' => null,
                'contact' => null,
                'address' => null,
                'locations' => [],
                'timestamp' => 'String value',
            ],
        ], 200),
    ]);

    $request = new WarehouseGetAllRequest(
        active: true,
        branch: 'test string',
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(WarehouseGetAllRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toBeArray()
        ->and($collection)->toHaveCount(2);

    $firstItem = $collection[0];

    expect($firstItem)
        ->warehouseId->toBe('mock-id-123')
        ->branch->toBeNull()
        ->replenishmentClass->toBeNull()
        ->active->toBe(true)
        ->lockSitePicountEntry->toBe(true)
        ->description->toBe('String value')
        ->locationEntry->toBe('String value')
        ->avgDefaultCost->toBe('String value')
        ->fifoDefaultCost->toBe('String value')
        ->receiptLocation->toBeNull()
        ->shipLocation->toBeNull()
        ->returnLocation->toBeNull()
        ->dropShipLocation->toBeNull()
        ->contact->toBeNull()
        ->address->toBeNull()
        ->timestamp->toBe('String value');
});

it('calls the warehousePostBywarehouseIdRequest method in the Warehouse resource', function () {
    $bodyData = new WarehouseDto(
        warehouseId: 'mock-id-123',
        branch: null,
        replenishmentClass: null,
        active: true,
        lockSitePicountEntry: true,
        description: 'String value',
        locationEntry: 'String value',
        avgDefaultCost: 'String value',
        fifoDefaultCost: 'String value',
        receiptLocation: null,
        shipLocation: null,
        returnLocation: null,
        dropShipLocation: null,
        contact: null,
        address: null,
        locations: [],
        timestamp: 'String value'
    );

    Saloon::fake([
        WarehousePostBywarehouseIdRequest::class => MockResponse::make([], 201),
    ]);

    $request = new WarehousePostBywarehouseIdRequest(
        warehouseId: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(WarehousePostBywarehouseIdRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the warehousePutBywarehouseIdlocationIdRequest method in the Warehouse resource', function () {
    $bodyData = new WarehouseDto(
        warehouseId: 'mock-id-123',
        branch: null,
        replenishmentClass: null,
        active: true,
        lockSitePicountEntry: true,
        description: 'String value',
        locationEntry: 'String value',
        avgDefaultCost: 'String value',
        fifoDefaultCost: 'String value',
        receiptLocation: null,
        shipLocation: null,
        returnLocation: null,
        dropShipLocation: null,
        contact: null,
        address: null,
        locations: [],
        timestamp: 'String value'
    );

    Saloon::fake([
        WarehousePutBywarehouseIdlocationIdRequest::class => MockResponse::make([], 201),
    ]);

    $request = new WarehousePutBywarehouseIdlocationIdRequest(
        warehouseId: 'test string',
        locationId: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(WarehousePutBywarehouseIdlocationIdRequest::class);

    expect($response->status())->toBe(201);
});
