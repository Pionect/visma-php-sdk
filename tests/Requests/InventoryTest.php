<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\Inventory\InventoryChangeInventoryNbrActionByinternalIdRequest;
use Pionect\VismaSdk\Requests\Inventory\InventoryGetAllCollectionRequest;
use Pionect\VismaSdk\Requests\Inventory\InventoryGetByinventoryIdRequest;
use Pionect\VismaSdk\Requests\Inventory\InventoryGetByinventoryNumberRequest;
use Pionect\VismaSdk\Requests\Inventory\InventoryGetInventoryCrossReferencesByinventoryNumberRequest;
use Pionect\VismaSdk\Requests\Inventory\InventoryGetInventoryPoreceiptTakeBarCodesByreceiptNbrRequest;
use Pionect\VismaSdk\Requests\Inventory\InventoryGetInventorySalesOrderBarCodesByorderNbrRequest;
use Pionect\VismaSdk\Requests\Inventory\InventoryGetInventoryShipmentBarCodesByshipmentNbrRequest;
use Pionect\VismaSdk\Requests\Inventory\InventoryGetInventoryStockTakeBarCodesByreferenceNumberRequest;
use Pionect\VismaSdk\Requests\Inventory\InventoryGetItemClassesCollectionRequest;
use Pionect\VismaSdk\Requests\Inventory\InventoryGetItemPostClassesCollectionRequest;
use Pionect\VismaSdk\Requests\Inventory\InventoryGetSpecificItemClassByitemClassNumberRequest;
use Pionect\VismaSdk\Requests\Inventory\InventoryUpdateCostNonStockItemByinventoryCdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Http\Request;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector(
        clientId: 'replace',
        clientSecret: 'replace'
    );
});

it('calls the inventoryGetItemClassesCollection method in the Inventory resource', function () {
    Saloon::fake([
        InventoryGetItemClassesCollectionRequest::class => MockResponse::make([
            0 => [
                'attributes' => [],
                'description' => 'Mock value',
                'errorInfo' => 'Mock value',
                'metadata' => 'Mock value',
            ],
            1 => [
                'attributes' => [],
                'description' => 'Mock value',
                'errorInfo' => 'Mock value',
                'metadata' => 'Mock value',
            ],
        ], 200),
    ]);

    $request = (new InventoryGetItemClassesCollectionRequest(pageNumber: 123, pageSize: 123));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (InventoryGetItemClassesCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->description->toBe('Mock value')
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the inventoryGetSpecificItemClassByitemClassNumber method in the Inventory resource', function () {
    Saloon::fake([
        InventoryGetSpecificItemClassByitemClassNumberRequest::class => MockResponse::make([
            'attributes' => [],
            'description' => 'Mock value',
            'errorInfo' => 'Mock value',
            'metadata' => 'Mock value',
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
        ->description->toBe('Mock value')
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the inventoryGetItemPostClassesCollection method in the Inventory resource', function () {
    Saloon::fake([
        InventoryGetItemPostClassesCollectionRequest::class => MockResponse::make([
            0 => [
                'description' => 'Mock value',
                'metadata' => 'Mock value',
            ],
            1 => [
                'description' => 'Mock value',
                'metadata' => 'Mock value',
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
            'inventoryId' => 42,
            'inventoryNumber' => 'Mock value',
            'status' => 'Mock value',
            'description' => 'Mock value',
            'body' => 'Mock value',
            'itemClass' => 'Mock value',
            'postingClass' => 'Mock value',
            'vatCode' => 'Mock value',
            'lotSerialClass' => 'Mock value',
            'defaultPrice' => 3.14,
            'pendingCost' => 3.14,
            'pendingCostDate' => '2025-11-22T10:40:04.065Z',
            'currentCost' => 3.14,
            'effectiveDate' => '2025-11-22T10:40:04.065Z',
            'lastCost' => 3.14,
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'baseUnit' => 'Mock value',
            'salesUnit' => 'Mock value',
            'purchaseUnit' => 'Mock value',
            'stockItem' => true,
            'kitItem' => true,
            'accountInformation' => 'Mock value',
            'costPriceStatistics' => 'Mock value',
            'crossReferences' => [],
            'attachments' => [],
            'attributes' => [],
            'warehouseDetails' => [],
            'inventoryUnits' => [],
            'defaultWarehouse' => 'Mock value',
            'defaultIssueFrom' => 'Mock value',
            'defaultReceiptTo' => 'Mock value',
            'supplierDetails' => [],
            'salesCategories' => [],
            'packaging' => 'Mock value',
            'intrastat' => 'Mock value',
            'recommendedPrice' => 3.14,
            'priceManagerId' => 'mock-id-123',
            'priceManager' => 'Mock value',
            'priceClass' => 'Mock value',
            'priceWorkgroupId' => 42,
            'priceClassId' => 'mock-id-123',
            'note' => 'Mock value',
            'timestamp' => 'Mock value',
            'errorInfo' => 'Mock value',
            'metadata' => 'Mock value',
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
        ->inventoryId->toBe(42)
        ->inventoryNumber->toBe('Mock value')
        ->status->toBe('Mock value')
        ->description->toBe('Mock value')
        ->body->toBe('Mock value')
        ->itemClass->toBe('Mock value')
        ->postingClass->toBe('Mock value')
        ->vatCode->toBe('Mock value')
        ->lotSerialClass->toBe('Mock value')
        ->defaultPrice->toBe(3.14)
        ->pendingCost->toBe(3.14)
        ->pendingCostDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->currentCost->toBe(3.14)
        ->effectiveDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->lastCost->toBe(3.14)
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->baseUnit->toBe('Mock value')
        ->salesUnit->toBe('Mock value')
        ->purchaseUnit->toBe('Mock value')
        ->stockItem->toBeTrue()
        ->kitItem->toBeTrue()
        ->accountInformation->toBe('Mock value')
        ->costPriceStatistics->toBe('Mock value')
        ->defaultWarehouse->toBe('Mock value')
        ->defaultIssueFrom->toBe('Mock value')
        ->defaultReceiptTo->toBe('Mock value')
        ->packaging->toBe('Mock value')
        ->intrastat->toBe('Mock value')
        ->recommendedPrice->toBe(3.14)
        ->priceManagerId->toBe('mock-id-123')
        ->priceManager->toBe('Mock value')
        ->priceClass->toBe('Mock value')
        ->priceWorkgroupId->toBe(42)
        ->priceClassId->toBe('mock-id-123')
        ->note->toBe('Mock value')
        ->timestamp->toBe('Mock value')
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the inventoryGetByinventoryNumber method in the Inventory resource', function () {
    Saloon::fake([
        InventoryGetByinventoryNumberRequest::class => MockResponse::make([
            'inventoryId' => 42,
            'inventoryNumber' => 'Mock value',
            'status' => 'Mock value',
            'description' => 'Mock value',
            'body' => 'Mock value',
            'itemClass' => 'Mock value',
            'postingClass' => 'Mock value',
            'vatCode' => 'Mock value',
            'lotSerialClass' => 'Mock value',
            'defaultPrice' => 3.14,
            'pendingCost' => 3.14,
            'pendingCostDate' => '2025-11-22T10:40:04.065Z',
            'currentCost' => 3.14,
            'effectiveDate' => '2025-11-22T10:40:04.065Z',
            'lastCost' => 3.14,
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'baseUnit' => 'Mock value',
            'salesUnit' => 'Mock value',
            'purchaseUnit' => 'Mock value',
            'stockItem' => true,
            'kitItem' => true,
            'accountInformation' => 'Mock value',
            'costPriceStatistics' => 'Mock value',
            'crossReferences' => [],
            'attachments' => [],
            'attributes' => [],
            'warehouseDetails' => [],
            'inventoryUnits' => [],
            'defaultWarehouse' => 'Mock value',
            'defaultIssueFrom' => 'Mock value',
            'defaultReceiptTo' => 'Mock value',
            'supplierDetails' => [],
            'salesCategories' => [],
            'packaging' => 'Mock value',
            'intrastat' => 'Mock value',
            'recommendedPrice' => 3.14,
            'priceManagerId' => 'mock-id-123',
            'priceManager' => 'Mock value',
            'priceClass' => 'Mock value',
            'priceWorkgroupId' => 42,
            'priceClassId' => 'mock-id-123',
            'note' => 'Mock value',
            'timestamp' => 'Mock value',
            'errorInfo' => 'Mock value',
            'metadata' => 'Mock value',
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
        ->inventoryId->toBe(42)
        ->inventoryNumber->toBe('Mock value')
        ->status->toBe('Mock value')
        ->description->toBe('Mock value')
        ->body->toBe('Mock value')
        ->itemClass->toBe('Mock value')
        ->postingClass->toBe('Mock value')
        ->vatCode->toBe('Mock value')
        ->lotSerialClass->toBe('Mock value')
        ->defaultPrice->toBe(3.14)
        ->pendingCost->toBe(3.14)
        ->pendingCostDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->currentCost->toBe(3.14)
        ->effectiveDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->lastCost->toBe(3.14)
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->baseUnit->toBe('Mock value')
        ->salesUnit->toBe('Mock value')
        ->purchaseUnit->toBe('Mock value')
        ->stockItem->toBeTrue()
        ->kitItem->toBeTrue()
        ->accountInformation->toBe('Mock value')
        ->costPriceStatistics->toBe('Mock value')
        ->defaultWarehouse->toBe('Mock value')
        ->defaultIssueFrom->toBe('Mock value')
        ->defaultReceiptTo->toBe('Mock value')
        ->packaging->toBe('Mock value')
        ->intrastat->toBe('Mock value')
        ->recommendedPrice->toBe(3.14)
        ->priceManagerId->toBe('mock-id-123')
        ->priceManager->toBe('Mock value')
        ->priceClass->toBe('Mock value')
        ->priceWorkgroupId->toBe(42)
        ->priceClassId->toBe('mock-id-123')
        ->note->toBe('Mock value')
        ->timestamp->toBe('Mock value')
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the inventoryGetAllCollection method in the Inventory resource', function () {
    Saloon::fake([
        InventoryGetAllCollectionRequest::class => MockResponse::make([
            0 => [
                'inventoryId' => 42,
                'inventoryNumber' => 'Mock value',
                'status' => 'Mock value',
                'description' => 'Mock value',
                'body' => 'Mock value',
                'itemClass' => 'Mock value',
                'postingClass' => 'Mock value',
                'vatCode' => 'Mock value',
                'lotSerialClass' => 'Mock value',
                'defaultPrice' => 3.14,
                'pendingCost' => 3.14,
                'pendingCostDate' => '2025-11-22T10:40:04.065Z',
                'currentCost' => 3.14,
                'effectiveDate' => '2025-11-22T10:40:04.065Z',
                'lastCost' => 3.14,
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'baseUnit' => 'Mock value',
                'salesUnit' => 'Mock value',
                'purchaseUnit' => 'Mock value',
                'stockItem' => true,
                'kitItem' => true,
                'accountInformation' => 'Mock value',
                'costPriceStatistics' => 'Mock value',
                'crossReferences' => [],
                'attachments' => [],
                'attributes' => [],
                'warehouseDetails' => [],
                'inventoryUnits' => [],
                'defaultWarehouse' => 'Mock value',
                'defaultIssueFrom' => 'Mock value',
                'defaultReceiptTo' => 'Mock value',
                'supplierDetails' => [],
                'salesCategories' => [],
                'packaging' => 'Mock value',
                'intrastat' => 'Mock value',
                'recommendedPrice' => 3.14,
                'priceManagerId' => 'mock-id-123',
                'priceManager' => 'Mock value',
                'priceClass' => 'Mock value',
                'priceWorkgroupId' => 42,
                'priceClassId' => 'mock-id-123',
                'note' => 'Mock value',
                'timestamp' => 'Mock value',
                'errorInfo' => 'Mock value',
                'metadata' => 'Mock value',
            ],
            1 => [
                'inventoryId' => 42,
                'inventoryNumber' => 'Mock value',
                'status' => 'Mock value',
                'description' => 'Mock value',
                'body' => 'Mock value',
                'itemClass' => 'Mock value',
                'postingClass' => 'Mock value',
                'vatCode' => 'Mock value',
                'lotSerialClass' => 'Mock value',
                'defaultPrice' => 3.14,
                'pendingCost' => 3.14,
                'pendingCostDate' => '2025-11-22T10:40:04.065Z',
                'currentCost' => 3.14,
                'effectiveDate' => '2025-11-22T10:40:04.065Z',
                'lastCost' => 3.14,
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'baseUnit' => 'Mock value',
                'salesUnit' => 'Mock value',
                'purchaseUnit' => 'Mock value',
                'stockItem' => true,
                'kitItem' => true,
                'accountInformation' => 'Mock value',
                'costPriceStatistics' => 'Mock value',
                'crossReferences' => [],
                'attachments' => [],
                'attributes' => [],
                'warehouseDetails' => [],
                'inventoryUnits' => [],
                'defaultWarehouse' => 'Mock value',
                'defaultIssueFrom' => 'Mock value',
                'defaultReceiptTo' => 'Mock value',
                'supplierDetails' => [],
                'salesCategories' => [],
                'packaging' => 'Mock value',
                'intrastat' => 'Mock value',
                'recommendedPrice' => 3.14,
                'priceManagerId' => 'mock-id-123',
                'priceManager' => 'Mock value',
                'priceClass' => 'Mock value',
                'priceWorkgroupId' => 42,
                'priceClassId' => 'mock-id-123',
                'note' => 'Mock value',
                'timestamp' => 'Mock value',
                'errorInfo' => 'Mock value',
                'metadata' => 'Mock value',
            ],
        ], 200),
    ]);

    $request = (new InventoryGetAllCollectionRequest(pageSize: 123, alternateId: 'test string', inventoryNumber: 'test string', salesCategory: 123, addCostPriceStatistics: true, attributes: 'test string', description: 'test string', availabilityLastModifiedDateTime: 'test string', availabilityLastModifiedDateTimeCondition: 'test string', inventoryTypes: [], expandCrossReference: true, expandAttachment: true, expandAttribute: true, expandWarehouseDetail: true, expandAccountInformation: true, expandInventoryUnits: true, expandSupplierDetails: true, expandSalesCategories: true, expandNote: true, attachmentLastModifiedDateTime: 'test string', attachmentLastModifiedDateTimeCondition: 'test string', status: 'test string', numberToRead: 123, skipRecords: 123, greaterThanValue: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', createdDateTime: 'test string', createdDateTimeCondition: 'test string', pageNumber: 123));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (InventoryGetAllCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->inventoryId->toBe(42)
        ->inventoryNumber->toBe('Mock value')
        ->status->toBe('Mock value')
        ->description->toBe('Mock value')
        ->body->toBe('Mock value')
        ->itemClass->toBe('Mock value')
        ->postingClass->toBe('Mock value')
        ->vatCode->toBe('Mock value')
        ->lotSerialClass->toBe('Mock value')
        ->defaultPrice->toBe(3.14)
        ->pendingCost->toBe(3.14)
        ->pendingCostDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->currentCost->toBe(3.14)
        ->effectiveDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->lastCost->toBe(3.14)
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->baseUnit->toBe('Mock value')
        ->salesUnit->toBe('Mock value')
        ->purchaseUnit->toBe('Mock value')
        ->stockItem->toBeTrue()
        ->kitItem->toBeTrue()
        ->accountInformation->toBe('Mock value')
        ->costPriceStatistics->toBe('Mock value')
        ->defaultWarehouse->toBe('Mock value')
        ->defaultIssueFrom->toBe('Mock value')
        ->defaultReceiptTo->toBe('Mock value')
        ->packaging->toBe('Mock value')
        ->intrastat->toBe('Mock value')
        ->recommendedPrice->toBe(3.14)
        ->priceManagerId->toBe('mock-id-123')
        ->priceManager->toBe('Mock value')
        ->priceClass->toBe('Mock value')
        ->priceWorkgroupId->toBe(42)
        ->priceClassId->toBe('mock-id-123')
        ->note->toBe('Mock value')
        ->timestamp->toBe('Mock value')
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the inventoryGetInventoryShipmentBarCodesByshipmentNbr method in the Inventory resource', function () {
    Saloon::fake([
        InventoryGetInventoryShipmentBarCodesByshipmentNbrRequest::class => MockResponse::make([
            'barCode' => 'Mock value',
            'inventoryNumber' => 'Mock value',
            'metadata' => 'Mock value',
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
            'barCode' => 'Mock value',
            'inventoryNumber' => 'Mock value',
            'metadata' => 'Mock value',
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
            'barCode' => 'Mock value',
            'inventoryNumber' => 'Mock value',
            'metadata' => 'Mock value',
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
            'barCode' => 'Mock value',
            'inventoryNumber' => 'Mock value',
            'metadata' => 'Mock value',
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
            'alternateType' => 'Mock value',
            'bAccount' => 'Mock value',
            'alternateId' => 'mock-id-123',
            'description' => 'Mock value',
            'uom' => 'Mock value',
            'timestamp' => 'Mock value',
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
