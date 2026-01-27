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
        warehouseIdId: 'test string',
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
        ->active->toBeTrue()
        ->lockSitePicountEntry->toBeTrue()
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

it('calls the warehouseGetAllCollection method in the Warehouse resource', function () {
    Saloon::fake([
        WarehouseGetAllCollectionRequest::class => MockResponse::make([
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
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
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
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
        ], 200),
    ]);

    $request = (new WarehouseGetAllCollectionRequest(active: true, branch: 'test string', pageNumber: 123, pageSize: 123));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (WarehouseGetAllCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->warehouseId->toBe('mock-id-123')
        ->branch->toBeNull()
        ->replenishmentClass->toBeNull()
        ->active->toBeTrue()
        ->lockSitePicountEntry->toBeTrue()
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
