<?php

// auto-generated

use Pionect\VismaSdk\Requests\Inventory\InventoryChangeInventoryNbrActionByinternalIdRequest;
use Pionect\VismaSdk\Requests\Inventory\InventoryGetByinventoryIdRequest;
use Pionect\VismaSdk\Requests\Inventory\InventoryGetByinventoryNumberRequest;
use Pionect\VismaSdk\Requests\Inventory\InventoryGetInventoryCrossReferencesByinventoryNumberRequest;
use Pionect\VismaSdk\Requests\Inventory\InventoryGetInventoryPoreceiptTakeBarCodesByreceiptNbrRequest;
use Pionect\VismaSdk\Requests\Inventory\InventoryGetInventorySalesOrderBarCodesByorderNbrRequest;
use Pionect\VismaSdk\Requests\Inventory\InventoryGetInventoryShipmentBarCodesByshipmentNbrRequest;
use Pionect\VismaSdk\Requests\Inventory\InventoryGetInventoryStockTakeBarCodesByreferenceNumberRequest;
use Pionect\VismaSdk\Requests\Inventory\InventoryGetItemPostClassesCollectionRequest;
use Pionect\VismaSdk\Requests\Inventory\InventoryGetSpecificItemClassByitemClassNumberRequest;
use Pionect\VismaSdk\Requests\Inventory\InventoryUpdateCostNonStockItemByinventoryCdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Http\Request;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the inventoryGetSpecificItemClassByitemClassNumber method in the Inventory resource', function () {
    Saloon::fake([
        InventoryGetSpecificItemClassByitemClassNumberRequest::class => MockResponse::make([
            'data' => [
                'type' => 'inventories',
                'id' => 'mock-id-123',
                'attributes' => [
                    'name' => 'Mock value',
                ],
            ],
        ], 200),
    ]);

    $request = new InventoryGetSpecificItemClassByitemClassNumberRequest(
        itemClassNumberId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(InventoryGetSpecificItemClassByitemClassNumberRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->name->toBe('Mock value');
});

it('calls the inventoryGetItemPostClassesCollection method in the Inventory resource', function () {
    Saloon::fake([
        InventoryGetItemPostClassesCollectionRequest::class => MockResponse::make([
            'data' => [
                0 => [
                    'type' => 'inventories',
                    'id' => 'mock-id-1',
                    'attributes' => [
                        'description' => 'Mock value',
                        'metadata' => 'Mock value',
                    ],
                ],
                1 => [
                    'type' => 'inventories',
                    'id' => 'mock-id-2',
                    'attributes' => [
                        'description' => 'Mock value',
                        'metadata' => 'Mock value',
                    ],
                ],
            ],
        ], 200),
    ]);

    $request = (new InventoryGetItemPostClassesCollectionRequest(pageNumber: 123, pageSize: 123));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (InventoryGetItemPostClassesCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->description->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the inventoryGetByinventoryId method in the Inventory resource', function () {
    Saloon::fake([
        InventoryGetByinventoryIdRequest::class => MockResponse::make([
            'data' => [
                'type' => 'inventories',
                'id' => 'mock-id-123',
                'attributes' => [
                    'name' => 'Mock value',
                ],
            ],
        ], 200),
    ]);

    $request = new InventoryGetByinventoryIdRequest(
        inventoryIdId: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(InventoryGetByinventoryIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->name->toBe('Mock value');
});

it('calls the inventoryGetByinventoryNumber method in the Inventory resource', function () {
    Saloon::fake([
        InventoryGetByinventoryNumberRequest::class => MockResponse::make([
            'data' => [
                'type' => 'inventories',
                'id' => 'mock-id-123',
                'attributes' => [
                    'name' => 'Mock value',
                ],
            ],
        ], 200),
    ]);

    $request = new InventoryGetByinventoryNumberRequest(
        inventoryNumberId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(InventoryGetByinventoryNumberRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->name->toBe('Mock value');
});

it('calls the inventoryGetInventoryShipmentBarCodesByshipmentNbr method in the Inventory resource', function () {
    Saloon::fake([
        InventoryGetInventoryShipmentBarCodesByshipmentNbrRequest::class => MockResponse::make([
            'data' => [
                'type' => 'inventories',
                'id' => 'mock-id-123',
                'attributes' => [
                    'barCode' => 'Mock value',
                    'inventoryNumber' => 'Mock value',
                    'metadata' => 'Mock value',
                ],
            ],
        ], 200),
    ]);

    $request = new InventoryGetInventoryShipmentBarCodesByshipmentNbrRequest(
        shipmentNbrId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(InventoryGetInventoryShipmentBarCodesByshipmentNbrRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->barCode->toBe('Mock value')
        ->inventoryNumber->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the inventoryGetInventorySalesOrderBarCodesByorderNbr method in the Inventory resource', function () {
    Saloon::fake([
        InventoryGetInventorySalesOrderBarCodesByorderNbrRequest::class => MockResponse::make([
            'data' => [
                'type' => 'inventories',
                'id' => 'mock-id-123',
                'attributes' => [
                    'barCode' => 'Mock value',
                    'inventoryNumber' => 'Mock value',
                    'metadata' => 'Mock value',
                ],
            ],
        ], 200),
    ]);

    $request = new InventoryGetInventorySalesOrderBarCodesByorderNbrRequest(
        orderNbrId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(InventoryGetInventorySalesOrderBarCodesByorderNbrRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->barCode->toBe('Mock value')
        ->inventoryNumber->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the inventoryGetInventoryStockTakeBarCodesByreferenceNumber method in the Inventory resource', function () {
    Saloon::fake([
        InventoryGetInventoryStockTakeBarCodesByreferenceNumberRequest::class => MockResponse::make([
            'data' => [
                'type' => 'inventories',
                'id' => 'mock-id-123',
                'attributes' => [
                    'barCode' => 'Mock value',
                    'inventoryNumber' => 'Mock value',
                    'metadata' => 'Mock value',
                ],
            ],
        ], 200),
    ]);

    $request = new InventoryGetInventoryStockTakeBarCodesByreferenceNumberRequest(
        referenceNumberId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(InventoryGetInventoryStockTakeBarCodesByreferenceNumberRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->barCode->toBe('Mock value')
        ->inventoryNumber->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the inventoryGetInventoryPoreceiptTakeBarCodesByreceiptNbr method in the Inventory resource', function () {
    Saloon::fake([
        InventoryGetInventoryPoreceiptTakeBarCodesByreceiptNbrRequest::class => MockResponse::make([
            'data' => [
                'type' => 'inventories',
                'id' => 'mock-id-123',
                'attributes' => [
                    'barCode' => 'Mock value',
                    'inventoryNumber' => 'Mock value',
                    'metadata' => 'Mock value',
                ],
            ],
        ], 200),
    ]);

    $request = new InventoryGetInventoryPoreceiptTakeBarCodesByreceiptNbrRequest(
        receiptNbrId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(InventoryGetInventoryPoreceiptTakeBarCodesByreceiptNbrRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->barCode->toBe('Mock value')
        ->inventoryNumber->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the inventoryGetInventoryCrossReferencesByinventoryNumber method in the Inventory resource', function () {
    Saloon::fake([
        InventoryGetInventoryCrossReferencesByinventoryNumberRequest::class => MockResponse::make([
            'data' => [
                'type' => 'inventories',
                'id' => 'mock-id-123',
                'attributes' => [
                    'alternateType' => 'Mock value',
                    'bAccount' => 'Mock value',
                    'alternateId' => 'mock-id-123',
                    'description' => 'Mock value',
                    'uom' => 'Mock value',
                    'timestamp' => 'Mock value',
                ],
            ],
        ], 200),
    ]);

    $request = new InventoryGetInventoryCrossReferencesByinventoryNumberRequest(
        inventoryNumberId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(InventoryGetInventoryCrossReferencesByinventoryNumberRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->alternateType->toBe('Mock value')
        ->bAccount->toBe('Mock value')
        ->alternateId->toBe('mock-id-123')
        ->description->toBe('Mock value')
        ->uom->toBe('Mock value')
        ->timestamp->toBe('Mock value');
});

it('calls the inventoryUpdateCostNonStockItemByinventoryCd method in the Inventory resource', function () {
    $mockClient = Saloon::fake([
        InventoryUpdateCostNonStockItemByinventoryCdRequest::class => MockResponse::make([], 200),
    ]);

    // Create DTO with sample data
    $dto = \Pionect\VismaSdk\Dto\UpdateCostActionResultDto::factory()->state([
        'actionId' => 'action_id-123',
        'actionResult' => 'test value',
        'errorInfo' => 'test value',
    ])->make();

    $request = new InventoryUpdateCostNonStockItemByinventoryCdRequest(inventoryCdId: 'inventory_cd_id-123', data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(InventoryUpdateCostNonStockItemByinventoryCdRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->toHaveKey('data')
            ->data->type->toBe('inventories')
            ->data->attributes->scoped(fn ($attributes) => $attributes
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value')
            ->errorInfo->toBe('test value')
            );

        return true;
    });
});

it('calls the inventoryChangeInventoryNbrActionByinternalId method in the Inventory resource', function () {
    $mockClient = Saloon::fake([
        InventoryChangeInventoryNbrActionByinternalIdRequest::class => MockResponse::make([], 200),
    ]);

    // Create DTO with sample data
    $dto = \Pionect\VismaSdk\Dto\ChangeInventoryNbrActionResultDto::factory()->state([
        'actionId' => 'action_id-123',
        'actionResult' => 'test value',
        'errorInfo' => 'test value',
    ])->make();

    $request = new InventoryChangeInventoryNbrActionByinternalIdRequest(internalId: 42, data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(InventoryChangeInventoryNbrActionByinternalIdRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->toHaveKey('data')
            ->data->type->toBe('inventories')
            ->data->attributes->scoped(fn ($attributes) => $attributes
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value')
            ->errorInfo->toBe('test value')
            );

        return true;
    });
});
