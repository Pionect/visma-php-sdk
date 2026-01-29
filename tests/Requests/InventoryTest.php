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
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the inventoryGetItemClassesCollection method in the Inventory resource', function () {
    Saloon::fake([
        InventoryGetItemClassesCollectionRequest::class => MockResponse::make([
            0 => [
                'type' => 'String value',
                'attributes' => [],
                'description' => 'String value',
                'errorInfo' => 'String value',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
            1 => [
                'type' => 'String value',
                'attributes' => [],
                'description' => 'String value',
                'errorInfo' => 'String value',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
        ], 200),
    ]);

    $request = (new InventoryGetItemClassesCollectionRequest(pageNumber: 123, pageSize: 123));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (InventoryGetItemClassesCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->type->toBe('String value')
        ->description->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the inventoryGetSpecificItemClassByitemClassNumber method in the Inventory resource', function () {
    Saloon::fake([
        InventoryGetSpecificItemClassByitemClassNumberRequest::class => MockResponse::make([
            'type' => 'String value',
            'attributes' => [],
            'description' => 'String value',
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new InventoryGetSpecificItemClassByitemClassNumberRequest(
        itemClassNumber: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(InventoryGetSpecificItemClassByitemClassNumberRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->type->toBe('String value')
        ->description->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the inventoryGetItemPostClassesCollection method in the Inventory resource', function () {
    Saloon::fake([
        InventoryGetItemPostClassesCollectionRequest::class => MockResponse::make([
            0 => [
                'description' => 'String value',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
            1 => [
                'description' => 'String value',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
        ], 200),
    ]);

    $request = (new InventoryGetItemPostClassesCollectionRequest(pageNumber: 123, pageSize: 123));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (InventoryGetItemPostClassesCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->description->toBe('String value');
});

it('calls the inventoryGetByinventoryId method in the Inventory resource', function () {
    Saloon::fake([
        InventoryGetByinventoryIdRequest::class => MockResponse::make([
            'inventoryId' => 42,
            'inventoryNumber' => 'String value',
            'status' => 'String value',
            'type' => 'String value',
            'description' => 'String value',
            'body' => 'String value',
            'itemClass' => null,
            'postingClass' => null,
            'vatCode' => null,
            'lotSerialClass' => null,
            'defaultPrice' => 3.14,
            'pendingCost' => 3.14,
            'pendingCostDate' => '2025-11-22T10:40:04.065Z',
            'currentCost' => 3.14,
            'effectiveDate' => '2025-11-22T10:40:04.065Z',
            'lastCost' => 3.14,
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'baseUnit' => 'String value',
            'salesUnit' => 'String value',
            'purchaseUnit' => 'String value',
            'stockItem' => true,
            'kitItem' => true,
            'accountInformation' => null,
            'costPriceStatistics' => null,
            'crossReferences' => [],
            'attachments' => [],
            'attributes' => [],
            'warehouseDetails' => [],
            'inventoryUnits' => [],
            'defaultWarehouse' => null,
            'defaultIssueFrom' => null,
            'defaultReceiptTo' => null,
            'supplierDetails' => [],
            'salesCategories' => [],
            'packaging' => null,
            'intrastat' => null,
            'recommendedPrice' => 3.14,
            'priceManagerId' => 'mock-id-123',
            'priceManager' => null,
            'priceClass' => null,
            'priceWorkgroupId' => 42,
            'priceClassId' => 'mock-id-123',
            'note' => 'String value',
            'timestamp' => 'String value',
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new InventoryGetByinventoryIdRequest(
        inventoryId: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(InventoryGetByinventoryIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->inventoryId->toBe(42)
        ->inventoryNumber->toBe('String value')
        ->status->toBe('String value')
        ->type->toBe('String value')
        ->description->toBe('String value')
        ->body->toBe('String value')
        ->itemClass->toBeNull()
        ->postingClass->toBeNull()
        ->vatCode->toBeNull()
        ->lotSerialClass->toBeNull()
        ->defaultPrice->toBe(3.14)
        ->pendingCost->toBe(3.14)
        ->pendingCostDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->currentCost->toBe(3.14)
        ->effectiveDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->lastCost->toBe(3.14)
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->baseUnit->toBe('String value')
        ->salesUnit->toBe('String value')
        ->purchaseUnit->toBe('String value')
        ->stockItem->toBeTrue()
        ->kitItem->toBeTrue()
        ->accountInformation->toBeNull()
        ->costPriceStatistics->toBeNull()
        ->defaultWarehouse->toBeNull()
        ->defaultIssueFrom->toBeNull()
        ->defaultReceiptTo->toBeNull()
        ->packaging->toBeNull()
        ->intrastat->toBeNull()
        ->recommendedPrice->toBe(3.14)
        ->priceManagerId->toBe('mock-id-123')
        ->priceManager->toBeNull()
        ->priceClass->toBeNull()
        ->priceWorkgroupId->toBe(42)
        ->priceClassId->toBe('mock-id-123')
        ->note->toBe('String value')
        ->timestamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the inventoryGetByinventoryNumber method in the Inventory resource', function () {
    Saloon::fake([
        InventoryGetByinventoryNumberRequest::class => MockResponse::make([
            'inventoryId' => 42,
            'inventoryNumber' => 'String value',
            'status' => 'String value',
            'type' => 'String value',
            'description' => 'String value',
            'body' => 'String value',
            'itemClass' => null,
            'postingClass' => null,
            'vatCode' => null,
            'lotSerialClass' => null,
            'defaultPrice' => 3.14,
            'pendingCost' => 3.14,
            'pendingCostDate' => '2025-11-22T10:40:04.065Z',
            'currentCost' => 3.14,
            'effectiveDate' => '2025-11-22T10:40:04.065Z',
            'lastCost' => 3.14,
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'baseUnit' => 'String value',
            'salesUnit' => 'String value',
            'purchaseUnit' => 'String value',
            'stockItem' => true,
            'kitItem' => true,
            'accountInformation' => null,
            'costPriceStatistics' => null,
            'crossReferences' => [],
            'attachments' => [],
            'attributes' => [],
            'warehouseDetails' => [],
            'inventoryUnits' => [],
            'defaultWarehouse' => null,
            'defaultIssueFrom' => null,
            'defaultReceiptTo' => null,
            'supplierDetails' => [],
            'salesCategories' => [],
            'packaging' => null,
            'intrastat' => null,
            'recommendedPrice' => 3.14,
            'priceManagerId' => 'mock-id-123',
            'priceManager' => null,
            'priceClass' => null,
            'priceWorkgroupId' => 42,
            'priceClassId' => 'mock-id-123',
            'note' => 'String value',
            'timestamp' => 'String value',
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new InventoryGetByinventoryNumberRequest(
        inventoryNumber: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(InventoryGetByinventoryNumberRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->inventoryId->toBe(42)
        ->inventoryNumber->toBe('String value')
        ->status->toBe('String value')
        ->type->toBe('String value')
        ->description->toBe('String value')
        ->body->toBe('String value')
        ->itemClass->toBeNull()
        ->postingClass->toBeNull()
        ->vatCode->toBeNull()
        ->lotSerialClass->toBeNull()
        ->defaultPrice->toBe(3.14)
        ->pendingCost->toBe(3.14)
        ->pendingCostDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->currentCost->toBe(3.14)
        ->effectiveDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->lastCost->toBe(3.14)
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->baseUnit->toBe('String value')
        ->salesUnit->toBe('String value')
        ->purchaseUnit->toBe('String value')
        ->stockItem->toBeTrue()
        ->kitItem->toBeTrue()
        ->accountInformation->toBeNull()
        ->costPriceStatistics->toBeNull()
        ->defaultWarehouse->toBeNull()
        ->defaultIssueFrom->toBeNull()
        ->defaultReceiptTo->toBeNull()
        ->packaging->toBeNull()
        ->intrastat->toBeNull()
        ->recommendedPrice->toBe(3.14)
        ->priceManagerId->toBe('mock-id-123')
        ->priceManager->toBeNull()
        ->priceClass->toBeNull()
        ->priceWorkgroupId->toBe(42)
        ->priceClassId->toBe('mock-id-123')
        ->note->toBe('String value')
        ->timestamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the inventoryGetAllCollection method in the Inventory resource', function () {
    Saloon::fake([
        InventoryGetAllCollectionRequest::class => MockResponse::make([
            0 => [
                'inventoryId' => 42,
                'inventoryNumber' => 'String value',
                'status' => 'String value',
                'type' => 'String value',
                'description' => 'String value',
                'body' => 'String value',
                'itemClass' => null,
                'postingClass' => null,
                'vatCode' => null,
                'lotSerialClass' => null,
                'defaultPrice' => 3.14,
                'pendingCost' => 3.14,
                'pendingCostDate' => '2025-11-22T10:40:04.065Z',
                'currentCost' => 3.14,
                'effectiveDate' => '2025-11-22T10:40:04.065Z',
                'lastCost' => 3.14,
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'baseUnit' => 'String value',
                'salesUnit' => 'String value',
                'purchaseUnit' => 'String value',
                'stockItem' => true,
                'kitItem' => true,
                'accountInformation' => null,
                'costPriceStatistics' => null,
                'crossReferences' => [],
                'attachments' => [],
                'attributes' => [],
                'warehouseDetails' => [],
                'inventoryUnits' => [],
                'defaultWarehouse' => null,
                'defaultIssueFrom' => null,
                'defaultReceiptTo' => null,
                'supplierDetails' => [],
                'salesCategories' => [],
                'packaging' => null,
                'intrastat' => null,
                'recommendedPrice' => 3.14,
                'priceManagerId' => 'mock-id-123',
                'priceManager' => null,
                'priceClass' => null,
                'priceWorkgroupId' => 42,
                'priceClassId' => 'mock-id-123',
                'note' => 'String value',
                'timestamp' => 'String value',
                'errorInfo' => 'String value',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
            1 => [
                'inventoryId' => 42,
                'inventoryNumber' => 'String value',
                'status' => 'String value',
                'type' => 'String value',
                'description' => 'String value',
                'body' => 'String value',
                'itemClass' => null,
                'postingClass' => null,
                'vatCode' => null,
                'lotSerialClass' => null,
                'defaultPrice' => 3.14,
                'pendingCost' => 3.14,
                'pendingCostDate' => '2025-11-22T10:40:04.065Z',
                'currentCost' => 3.14,
                'effectiveDate' => '2025-11-22T10:40:04.065Z',
                'lastCost' => 3.14,
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'baseUnit' => 'String value',
                'salesUnit' => 'String value',
                'purchaseUnit' => 'String value',
                'stockItem' => true,
                'kitItem' => true,
                'accountInformation' => null,
                'costPriceStatistics' => null,
                'crossReferences' => [],
                'attachments' => [],
                'attributes' => [],
                'warehouseDetails' => [],
                'inventoryUnits' => [],
                'defaultWarehouse' => null,
                'defaultIssueFrom' => null,
                'defaultReceiptTo' => null,
                'supplierDetails' => [],
                'salesCategories' => [],
                'packaging' => null,
                'intrastat' => null,
                'recommendedPrice' => 3.14,
                'priceManagerId' => 'mock-id-123',
                'priceManager' => null,
                'priceClass' => null,
                'priceWorkgroupId' => 42,
                'priceClassId' => 'mock-id-123',
                'note' => 'String value',
                'timestamp' => 'String value',
                'errorInfo' => 'String value',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
        ], 200),
    ]);

    $request = (new InventoryGetAllCollectionRequest(pageSize: 123, alternateId: 'test string', inventoryNumber: 'test string', salesCategory: 123, addCostPriceStatistics: true, attributes: 'test string', description: 'test string', availabilityLastModifiedDateTime: 'test string', availabilityLastModifiedDateTimeCondition: 'test string', inventoryTypes: [], expandCrossReference: true, expandAttachment: true, expandAttribute: true, expandWarehouseDetail: true, expandAccountInformation: true, expandInventoryUnits: true, expandSupplierDetails: true, expandSalesCategories: true, expandNote: true, attachmentLastModifiedDateTime: 'test string', attachmentLastModifiedDateTimeCondition: 'test string', status: 'test string', numberToRead: 123, skipRecords: 123, greaterThanValue: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', createdDateTime: 'test string', createdDateTimeCondition: 'test string', pageNumber: 123));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (InventoryGetAllCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->inventoryId->toBe(42)
        ->inventoryNumber->toBe('String value')
        ->status->toBe('String value')
        ->type->toBe('String value')
        ->description->toBe('String value')
        ->body->toBe('String value')
        ->itemClass->toBeNull()
        ->postingClass->toBeNull()
        ->vatCode->toBeNull()
        ->lotSerialClass->toBeNull()
        ->defaultPrice->toBe(3.14)
        ->pendingCost->toBe(3.14)
        ->pendingCostDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->currentCost->toBe(3.14)
        ->effectiveDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->lastCost->toBe(3.14)
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->baseUnit->toBe('String value')
        ->salesUnit->toBe('String value')
        ->purchaseUnit->toBe('String value')
        ->stockItem->toBeTrue()
        ->kitItem->toBeTrue()
        ->accountInformation->toBeNull()
        ->costPriceStatistics->toBeNull()
        ->defaultWarehouse->toBeNull()
        ->defaultIssueFrom->toBeNull()
        ->defaultReceiptTo->toBeNull()
        ->packaging->toBeNull()
        ->intrastat->toBeNull()
        ->recommendedPrice->toBe(3.14)
        ->priceManagerId->toBe('mock-id-123')
        ->priceManager->toBeNull()
        ->priceClass->toBeNull()
        ->priceWorkgroupId->toBe(42)
        ->priceClassId->toBe('mock-id-123')
        ->note->toBe('String value')
        ->timestamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the inventoryGetInventoryShipmentBarCodesByshipmentNbr method in the Inventory resource', function () {
    Saloon::fake([
        InventoryGetInventoryShipmentBarCodesByshipmentNbrRequest::class => MockResponse::make([
            'barCode' => 'String value',
            'inventoryNumber' => 'String value',
        ], 200),
    ]);

    $request = new InventoryGetInventoryShipmentBarCodesByshipmentNbrRequest(
        shipmentNbr: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(InventoryGetInventoryShipmentBarCodesByshipmentNbrRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->barCode->toBe('String value')
        ->inventoryNumber->toBe('String value');
});

it('calls the inventoryGetInventorySalesOrderBarCodesByorderNbr method in the Inventory resource', function () {
    Saloon::fake([
        InventoryGetInventorySalesOrderBarCodesByorderNbrRequest::class => MockResponse::make([
            'barCode' => 'String value',
            'inventoryNumber' => 'String value',
        ], 200),
    ]);

    $request = new InventoryGetInventorySalesOrderBarCodesByorderNbrRequest(
        orderNbr: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(InventoryGetInventorySalesOrderBarCodesByorderNbrRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->barCode->toBe('String value')
        ->inventoryNumber->toBe('String value');
});

it('calls the inventoryGetInventoryStockTakeBarCodesByreferenceNumber method in the Inventory resource', function () {
    Saloon::fake([
        InventoryGetInventoryStockTakeBarCodesByreferenceNumberRequest::class => MockResponse::make([
            'barCode' => 'String value',
            'inventoryNumber' => 'String value',
        ], 200),
    ]);

    $request = new InventoryGetInventoryStockTakeBarCodesByreferenceNumberRequest(
        referenceNumber: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(InventoryGetInventoryStockTakeBarCodesByreferenceNumberRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->barCode->toBe('String value')
        ->inventoryNumber->toBe('String value');
});

it('calls the inventoryGetInventoryPoreceiptTakeBarCodesByreceiptNbr method in the Inventory resource', function () {
    Saloon::fake([
        InventoryGetInventoryPoreceiptTakeBarCodesByreceiptNbrRequest::class => MockResponse::make([
            'barCode' => 'String value',
            'inventoryNumber' => 'String value',
        ], 200),
    ]);

    $request = new InventoryGetInventoryPoreceiptTakeBarCodesByreceiptNbrRequest(
        receiptNbr: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(InventoryGetInventoryPoreceiptTakeBarCodesByreceiptNbrRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->barCode->toBe('String value')
        ->inventoryNumber->toBe('String value');
});

it('calls the inventoryGetInventoryCrossReferencesByinventoryNumber method in the Inventory resource', function () {
    Saloon::fake([
        InventoryGetInventoryCrossReferencesByinventoryNumberRequest::class => MockResponse::make([
            'alternateType' => 'String value',
            'bAccount' => null,
            'alternateId' => 'mock-id-123',
            'description' => 'String value',
            'uom' => 'String value',
            'timestamp' => 'String value',
        ], 200),
    ]);

    $request = new InventoryGetInventoryCrossReferencesByinventoryNumberRequest(
        inventoryNumber: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(InventoryGetInventoryCrossReferencesByinventoryNumberRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->alternateType->toBe('String value')
        ->bAccount->toBeNull()
        ->alternateId->toBe('mock-id-123')
        ->description->toBe('String value')
        ->uom->toBe('String value')
        ->timestamp->toBe('String value');
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

    $request = new InventoryUpdateCostNonStockItemByinventoryCdRequest(inventoryCd: 'test value', data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(InventoryUpdateCostNonStockItemByinventoryCdRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value')
            ->errorInfo->toBe('test value');

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
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value')
            ->errorInfo->toBe('test value');

        return true;
    });
});
