<?php

// auto-generated

use Pionect\VismaSdk\Requests\Warehouse\WarehouseGetAllCollectionRequest;
use Pionect\VismaSdk\Requests\Warehouse\WarehouseGetBywarehouseIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the warehouseGetBywarehouseId method in the Warehouse resource', function () {
    Saloon::fake([
        WarehouseGetBywarehouseIdRequest::class => MockResponse::make([
            'data' => [
                'type' => 'warehouses',
                'id' => 'mock-id-123',
                'attributes' => [
                    'warehouseId' => 'mock-id-123',
                    'branch' => 'Mock value',
                    'replenishmentClass' => 'Mock value',
                    'active' => true,
                    'lockSitePicountEntry' => true,
                    'description' => 'Mock value',
                    'locationEntry' => 'Mock value',
                    'avgDefaultCost' => 'Mock value',
                    'fifoDefaultCost' => 'Mock value',
                    'receiptLocation' => 'Mock value',
                    'shipLocation' => 'Mock value',
                    'returnLocation' => 'Mock value',
                    'dropShipLocation' => 'Mock value',
                    'contact' => 'Mock value',
                    'address' => 'Mock value',
                    'locations' => [],
                    'timestamp' => 'Mock value',
                    'metadata' => 'Mock value',
                ],
            ],
        ], 200),
    ]);

    $request = new WarehouseGetBywarehouseIdRequest(
        warehouseIdId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(WarehouseGetBywarehouseIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->warehouseId->toBe('mock-id-123')
        ->branch->toBe('Mock value')
        ->replenishmentClass->toBe('Mock value')
        ->active->toBe(true)
        ->lockSitePicountEntry->toBe(true)
        ->description->toBe('Mock value')
        ->locationEntry->toBe('Mock value')
        ->avgDefaultCost->toBe('Mock value')
        ->fifoDefaultCost->toBe('Mock value')
        ->receiptLocation->toBe('Mock value')
        ->shipLocation->toBe('Mock value')
        ->returnLocation->toBe('Mock value')
        ->dropShipLocation->toBe('Mock value')
        ->contact->toBe('Mock value')
        ->address->toBe('Mock value')
        ->timestamp->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the warehouseGetAllCollection method in the Warehouse resource', function () {
    Saloon::fake([
        WarehouseGetAllCollectionRequest::class => MockResponse::make([
            'data' => [
                0 => [
                    'type' => 'warehouses',
                    'id' => 'mock-id-1',
                    'attributes' => [
                        'warehouseId' => 'mock-id-123',
                        'branch' => 'Mock value',
                        'replenishmentClass' => 'Mock value',
                        'active' => true,
                        'lockSitePicountEntry' => true,
                        'description' => 'Mock value',
                        'locationEntry' => 'Mock value',
                        'avgDefaultCost' => 'Mock value',
                        'fifoDefaultCost' => 'Mock value',
                        'receiptLocation' => 'Mock value',
                        'shipLocation' => 'Mock value',
                        'returnLocation' => 'Mock value',
                        'dropShipLocation' => 'Mock value',
                        'contact' => 'Mock value',
                        'address' => 'Mock value',
                        'locations' => [],
                        'timestamp' => 'Mock value',
                        'metadata' => 'Mock value',
                    ],
                ],
                1 => [
                    'type' => 'warehouses',
                    'id' => 'mock-id-2',
                    'attributes' => [
                        'warehouseId' => 'mock-id-123',
                        'branch' => 'Mock value',
                        'replenishmentClass' => 'Mock value',
                        'active' => true,
                        'lockSitePicountEntry' => true,
                        'description' => 'Mock value',
                        'locationEntry' => 'Mock value',
                        'avgDefaultCost' => 'Mock value',
                        'fifoDefaultCost' => 'Mock value',
                        'receiptLocation' => 'Mock value',
                        'shipLocation' => 'Mock value',
                        'returnLocation' => 'Mock value',
                        'dropShipLocation' => 'Mock value',
                        'contact' => 'Mock value',
                        'address' => 'Mock value',
                        'locations' => [],
                        'timestamp' => 'Mock value',
                        'metadata' => 'Mock value',
                    ],
                ],
            ],
        ], 200),
    ]);

    $request = (new WarehouseGetAllCollectionRequest(active: true, branch: 'test string', pageNumber: 123, pageSize: 123));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (WarehouseGetAllCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->warehouseId->toBe('mock-id-123')
        ->branch->toBe('Mock value')
        ->replenishmentClass->toBe('Mock value')
        ->active->toBe(true)
        ->lockSitePicountEntry->toBe(true)
        ->description->toBe('Mock value')
        ->locationEntry->toBe('Mock value')
        ->avgDefaultCost->toBe('Mock value')
        ->fifoDefaultCost->toBe('Mock value')
        ->receiptLocation->toBe('Mock value')
        ->shipLocation->toBe('Mock value')
        ->returnLocation->toBe('Mock value')
        ->dropShipLocation->toBe('Mock value')
        ->contact->toBe('Mock value')
        ->address->toBe('Mock value')
        ->timestamp->toBe('Mock value')
        ->metadata->toBe('Mock value');
});
