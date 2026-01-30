<?php

use Pionect\VismaSdk\Dto\InventoryUpdateDto;
use Pionect\VismaSdk\Requests\Inventory\InventoryChangeInventoryNbrActionByinternalIdRequest;
use Pionect\VismaSdk\Requests\Inventory\InventoryCreateInventoryAttachmentByinventoryNumberRequest;
use Pionect\VismaSdk\Requests\Inventory\InventoryCreateInventoryCrossReferencesByinventoryNumberRequest;
use Pionect\VismaSdk\Requests\Inventory\InventoryGetAllRequest;
use Pionect\VismaSdk\Requests\Inventory\InventoryGetByinventoryIdRequest;
use Pionect\VismaSdk\Requests\Inventory\InventoryGetByinventoryNumberRequest;
use Pionect\VismaSdk\Requests\Inventory\InventoryGetInventoryCrossReferencesByinventoryNumberRequest;
use Pionect\VismaSdk\Requests\Inventory\InventoryGetInventoryPoreceiptTakeBarCodesByreceiptNbrRequest;
use Pionect\VismaSdk\Requests\Inventory\InventoryGetInventorySalesOrderBarCodesByorderNbrRequest;
use Pionect\VismaSdk\Requests\Inventory\InventoryGetInventoryShipmentBarCodesByshipmentNbrRequest;
use Pionect\VismaSdk\Requests\Inventory\InventoryGetInventoryStockTakeBarCodesByreferenceNumberRequest;
use Pionect\VismaSdk\Requests\Inventory\InventoryGetItemClassesRequest;
use Pionect\VismaSdk\Requests\Inventory\InventoryGetItemPostClassesRequest;
use Pionect\VismaSdk\Requests\Inventory\InventoryGetSpecificItemClassByitemClassNumberRequest;
use Pionect\VismaSdk\Requests\Inventory\InventoryPostRequest;
use Pionect\VismaSdk\Requests\Inventory\InventoryPutByinventoryIdRequest;
use Pionect\VismaSdk\Requests\Inventory\InventoryPutByinventoryNumberRequest;
use Pionect\VismaSdk\Requests\Inventory\InventoryUpdateCostNonStockItemByinventoryCdRequest;
use Pionect\VismaSdk\Requests\Inventory\InventoryUpdateInventoryCrossReferencesByinventoryNumberalternateTypealternateIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the inventoryGetItemClassesRequest method in the Inventory resource', function () {
    Saloon::fake([
        InventoryGetItemClassesRequest::class => MockResponse::make([
            0 => [
                'type' => 'String value',
                'attributes' => [],
                'description' => 'String value',
                'errorInfo' => 'String value',
            ],
            1 => [
                'type' => 'String value',
                'attributes' => [],
                'description' => 'String value',
                'errorInfo' => 'String value',
            ],
        ], 200),
    ]);

    $request = new InventoryGetItemClassesRequest(
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(InventoryGetItemClassesRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toBeArray()
        ->and($collection)->toHaveCount(2);

    $firstItem = $collection[0];

    expect($firstItem)
        ->type->toBe('String value')
        ->description->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the inventoryGetSpecificItemClassByitemClassNumberRequest method in the Inventory resource', function () {
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

it('calls the inventoryGetItemPostClassesRequest method in the Inventory resource', function () {
    Saloon::fake([
        InventoryGetItemPostClassesRequest::class => MockResponse::make([
            0 => [
                'description' => 'String value',
            ],
            1 => [
                'description' => 'String value',
            ],
        ], 200),
    ]);

    $request = new InventoryGetItemPostClassesRequest(
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(InventoryGetItemPostClassesRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toBeArray()
        ->and($collection)->toHaveCount(2);

    $firstItem = $collection[0];

    expect($firstItem)
        ->description->toBe('String value');
});

it('calls the inventoryGetByinventoryIdRequest method in the Inventory resource', function () {
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
            'defaultPrice' => 42,
            'pendingCost' => 42,
            'pendingCostDate' => '2025-11-22T10:40:04+00:00',
            'currentCost' => 42,
            'effectiveDate' => '2025-11-22T10:40:04+00:00',
            'lastCost' => 42,
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
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
            'recommendedPrice' => 42,
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
        ->defaultPrice->toBe(42)
        ->pendingCost->toBe(42)
        ->pendingCostDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->currentCost->toBe(42)
        ->effectiveDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->lastCost->toBe(42)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->baseUnit->toBe('String value')
        ->salesUnit->toBe('String value')
        ->purchaseUnit->toBe('String value')
        ->stockItem->toBe(true)
        ->kitItem->toBe(true)
        ->accountInformation->toBeNull()
        ->costPriceStatistics->toBeNull()
        ->defaultWarehouse->toBeNull()
        ->defaultIssueFrom->toBeNull()
        ->defaultReceiptTo->toBeNull()
        ->packaging->toBeNull()
        ->intrastat->toBeNull()
        ->recommendedPrice->toBe(42)
        ->priceManagerId->toBe('mock-id-123')
        ->priceManager->toBeNull()
        ->priceClass->toBeNull()
        ->priceWorkgroupId->toBe(42)
        ->priceClassId->toBe('mock-id-123')
        ->note->toBe('String value')
        ->timestamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the inventoryGetByinventoryNumberRequest method in the Inventory resource', function () {
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
            'defaultPrice' => 42,
            'pendingCost' => 42,
            'pendingCostDate' => '2025-11-22T10:40:04+00:00',
            'currentCost' => 42,
            'effectiveDate' => '2025-11-22T10:40:04+00:00',
            'lastCost' => 42,
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
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
            'recommendedPrice' => 42,
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
        ->defaultPrice->toBe(42)
        ->pendingCost->toBe(42)
        ->pendingCostDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->currentCost->toBe(42)
        ->effectiveDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->lastCost->toBe(42)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->baseUnit->toBe('String value')
        ->salesUnit->toBe('String value')
        ->purchaseUnit->toBe('String value')
        ->stockItem->toBe(true)
        ->kitItem->toBe(true)
        ->accountInformation->toBeNull()
        ->costPriceStatistics->toBeNull()
        ->defaultWarehouse->toBeNull()
        ->defaultIssueFrom->toBeNull()
        ->defaultReceiptTo->toBeNull()
        ->packaging->toBeNull()
        ->intrastat->toBeNull()
        ->recommendedPrice->toBe(42)
        ->priceManagerId->toBe('mock-id-123')
        ->priceManager->toBeNull()
        ->priceClass->toBeNull()
        ->priceWorkgroupId->toBe(42)
        ->priceClassId->toBe('mock-id-123')
        ->note->toBe('String value')
        ->timestamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the inventoryPutByinventoryNumberRequest method in the Inventory resource', function () {
    $bodyData = new InventoryUpdateDto(
        inventoryNumber: null,
        status: 'String value',
        type: 'String value',
        description: 'String value',
        body: 'String value',
        itemClass: null,
        postingClass: null,
        vatCode: null,
        defaultPrice: null,
        baseUnit: 'String value',
        salesUnit: 'String value',
        purchaseUnit: 'String value',
        expenseAccrualAccount: null,
        inventoryAccount: null,
        expenseAccount: null,
        cogsAccount: null,
        expenseNonTaxableAccount: 'String value',
        expenseEuAccount: 'String value',
        expenseImportAccount: 'String value',
        expenseSubaccount: [],
        cogsSubaccount: [],
        salesAccount: 'String value',
        salesNonTaxableAccount: 'String value',
        salesEuAccount: 'String value',
        salesExportAccount: 'String value',
        salesSubaccount: [],
        attributeLines: [],
        packaging: null,
        supplierDetails: [],
        intrastat: null,
        crossReferences: [],
        defaultWarehouse: null,
        defaultIssueFrom: null,
        defaultReceiptTo: null,
        kitItem: true,
        note: 'String value'
    );

    Saloon::fake([
        InventoryPutByinventoryNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new InventoryPutByinventoryNumberRequest(
        inventoryNumber: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(InventoryPutByinventoryNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the inventoryGetAllRequest method in the Inventory resource', function () {
    Saloon::fake([
        InventoryGetAllRequest::class => MockResponse::make([
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
                'defaultPrice' => 42,
                'pendingCost' => 42,
                'pendingCostDate' => '2025-11-22T10:40:04+00:00',
                'currentCost' => 42,
                'effectiveDate' => '2025-11-22T10:40:04+00:00',
                'lastCost' => 42,
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
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
                'recommendedPrice' => 42,
                'priceManagerId' => 'mock-id-123',
                'priceManager' => null,
                'priceClass' => null,
                'priceWorkgroupId' => 42,
                'priceClassId' => 'mock-id-123',
                'note' => 'String value',
                'timestamp' => 'String value',
                'errorInfo' => 'String value',
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
                'defaultPrice' => 42,
                'pendingCost' => 42,
                'pendingCostDate' => '2025-11-22T10:40:04+00:00',
                'currentCost' => 42,
                'effectiveDate' => '2025-11-22T10:40:04+00:00',
                'lastCost' => 42,
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
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
                'recommendedPrice' => 42,
                'priceManagerId' => 'mock-id-123',
                'priceManager' => null,
                'priceClass' => null,
                'priceWorkgroupId' => 42,
                'priceClassId' => 'mock-id-123',
                'note' => 'String value',
                'timestamp' => 'String value',
                'errorInfo' => 'String value',
            ],
        ], 200),
    ]);

    $request = new InventoryGetAllRequest(
        pageSize: 123,
        alternateId: 'test string',
        inventoryNumber: 'test string',
        salesCategory: 123,
        addCostPriceStatistics: true,
        attributes: 'test string',
        description: 'test string',
        availabilityLastModifiedDateTime: 'test string',
        availabilityLastModifiedDateTimeCondition: 'test string',
        inventoryTypes: [],
        expandCrossReference: true,
        expandAttachment: true,
        expandAttribute: true,
        expandWarehouseDetail: true,
        expandAccountInformation: true,
        expandInventoryUnits: true,
        expandSupplierDetails: true,
        expandSalesCategories: true,
        expandNote: true,
        attachmentLastModifiedDateTime: 'test string',
        attachmentLastModifiedDateTimeCondition: 'test string',
        status: 'test string',
        numberToRead: 123,
        skipRecords: 123,
        greaterThanValue: 'test string',
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        createdDateTime: 'test string',
        createdDateTimeCondition: 'test string',
        pageNumber: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(InventoryGetAllRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toBeArray()
        ->and($collection)->toHaveCount(2);

    $firstItem = $collection[0];

    expect($firstItem)
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
        ->defaultPrice->toBe(42)
        ->pendingCost->toBe(42)
        ->pendingCostDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->currentCost->toBe(42)
        ->effectiveDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->lastCost->toBe(42)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->baseUnit->toBe('String value')
        ->salesUnit->toBe('String value')
        ->purchaseUnit->toBe('String value')
        ->stockItem->toBe(true)
        ->kitItem->toBe(true)
        ->accountInformation->toBeNull()
        ->costPriceStatistics->toBeNull()
        ->defaultWarehouse->toBeNull()
        ->defaultIssueFrom->toBeNull()
        ->defaultReceiptTo->toBeNull()
        ->packaging->toBeNull()
        ->intrastat->toBeNull()
        ->recommendedPrice->toBe(42)
        ->priceManagerId->toBe('mock-id-123')
        ->priceManager->toBeNull()
        ->priceClass->toBeNull()
        ->priceWorkgroupId->toBe(42)
        ->priceClassId->toBe('mock-id-123')
        ->note->toBe('String value')
        ->timestamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the inventoryPostRequest method in the Inventory resource', function () {
    $bodyData = new InventoryUpdateDto(
        inventoryNumber: null,
        status: 'String value',
        type: 'String value',
        description: 'String value',
        body: 'String value',
        itemClass: null,
        postingClass: null,
        vatCode: null,
        defaultPrice: null,
        baseUnit: 'String value',
        salesUnit: 'String value',
        purchaseUnit: 'String value',
        expenseAccrualAccount: null,
        inventoryAccount: null,
        expenseAccount: null,
        cogsAccount: null,
        expenseNonTaxableAccount: 'String value',
        expenseEuAccount: 'String value',
        expenseImportAccount: 'String value',
        expenseSubaccount: [],
        cogsSubaccount: [],
        salesAccount: 'String value',
        salesNonTaxableAccount: 'String value',
        salesEuAccount: 'String value',
        salesExportAccount: 'String value',
        salesSubaccount: [],
        attributeLines: [],
        packaging: null,
        supplierDetails: [],
        intrastat: null,
        crossReferences: [],
        defaultWarehouse: null,
        defaultIssueFrom: null,
        defaultReceiptTo: null,
        kitItem: true,
        note: 'String value'
    );

    Saloon::fake([
        InventoryPostRequest::class => MockResponse::make([], 201),
    ]);

    $request = new InventoryPostRequest(
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(InventoryPostRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the inventoryGetInventoryShipmentBarCodesByshipmentNbrRequest method in the Inventory resource', function () {
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

it('calls the inventoryGetInventorySalesOrderBarCodesByorderNbrRequest method in the Inventory resource', function () {
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

it('calls the inventoryGetInventoryStockTakeBarCodesByreferenceNumberRequest method in the Inventory resource', function () {
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

it('calls the inventoryGetInventoryPoreceiptTakeBarCodesByreceiptNbrRequest method in the Inventory resource', function () {
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

it('calls the inventoryGetInventoryCrossReferencesByinventoryNumberRequest method in the Inventory resource', function () {
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

it('calls the inventoryCreateInventoryCrossReferencesByinventoryNumberRequest method in the Inventory resource', function () {
    $bodyData = new InventoryUpdateDto(
        inventoryNumber: null,
        status: 'String value',
        type: 'String value',
        description: 'String value',
        body: 'String value',
        itemClass: null,
        postingClass: null,
        vatCode: null,
        defaultPrice: null,
        baseUnit: 'String value',
        salesUnit: 'String value',
        purchaseUnit: 'String value',
        expenseAccrualAccount: null,
        inventoryAccount: null,
        expenseAccount: null,
        cogsAccount: null,
        expenseNonTaxableAccount: 'String value',
        expenseEuAccount: 'String value',
        expenseImportAccount: 'String value',
        expenseSubaccount: [],
        cogsSubaccount: [],
        salesAccount: 'String value',
        salesNonTaxableAccount: 'String value',
        salesEuAccount: 'String value',
        salesExportAccount: 'String value',
        salesSubaccount: [],
        attributeLines: [],
        packaging: null,
        supplierDetails: [],
        intrastat: null,
        crossReferences: [],
        defaultWarehouse: null,
        defaultIssueFrom: null,
        defaultReceiptTo: null,
        kitItem: true,
        note: 'String value'
    );

    Saloon::fake([
        InventoryCreateInventoryCrossReferencesByinventoryNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new InventoryCreateInventoryCrossReferencesByinventoryNumberRequest(
        inventoryNumber: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(InventoryCreateInventoryCrossReferencesByinventoryNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the inventoryUpdateCostNonStockItemByinventoryCdRequest method in the Inventory resource', function () {
    $bodyData = new InventoryUpdateDto(
        inventoryNumber: null,
        status: 'String value',
        type: 'String value',
        description: 'String value',
        body: 'String value',
        itemClass: null,
        postingClass: null,
        vatCode: null,
        defaultPrice: null,
        baseUnit: 'String value',
        salesUnit: 'String value',
        purchaseUnit: 'String value',
        expenseAccrualAccount: null,
        inventoryAccount: null,
        expenseAccount: null,
        cogsAccount: null,
        expenseNonTaxableAccount: 'String value',
        expenseEuAccount: 'String value',
        expenseImportAccount: 'String value',
        expenseSubaccount: [],
        cogsSubaccount: [],
        salesAccount: 'String value',
        salesNonTaxableAccount: 'String value',
        salesEuAccount: 'String value',
        salesExportAccount: 'String value',
        salesSubaccount: [],
        attributeLines: [],
        packaging: null,
        supplierDetails: [],
        intrastat: null,
        crossReferences: [],
        defaultWarehouse: null,
        defaultIssueFrom: null,
        defaultReceiptTo: null,
        kitItem: true,
        note: 'String value'
    );

    Saloon::fake([
        InventoryUpdateCostNonStockItemByinventoryCdRequest::class => MockResponse::make([], 201),
    ]);

    $request = new InventoryUpdateCostNonStockItemByinventoryCdRequest(
        inventoryCd: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(InventoryUpdateCostNonStockItemByinventoryCdRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the inventoryCreateInventoryAttachmentByinventoryNumberRequest method in the Inventory resource', function () {
    $bodyData = new InventoryUpdateDto(
        inventoryNumber: null,
        status: 'String value',
        type: 'String value',
        description: 'String value',
        body: 'String value',
        itemClass: null,
        postingClass: null,
        vatCode: null,
        defaultPrice: null,
        baseUnit: 'String value',
        salesUnit: 'String value',
        purchaseUnit: 'String value',
        expenseAccrualAccount: null,
        inventoryAccount: null,
        expenseAccount: null,
        cogsAccount: null,
        expenseNonTaxableAccount: 'String value',
        expenseEuAccount: 'String value',
        expenseImportAccount: 'String value',
        expenseSubaccount: [],
        cogsSubaccount: [],
        salesAccount: 'String value',
        salesNonTaxableAccount: 'String value',
        salesEuAccount: 'String value',
        salesExportAccount: 'String value',
        salesSubaccount: [],
        attributeLines: [],
        packaging: null,
        supplierDetails: [],
        intrastat: null,
        crossReferences: [],
        defaultWarehouse: null,
        defaultIssueFrom: null,
        defaultReceiptTo: null,
        kitItem: true,
        note: 'String value'
    );

    Saloon::fake([
        InventoryCreateInventoryAttachmentByinventoryNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new InventoryCreateInventoryAttachmentByinventoryNumberRequest(
        inventoryNumber: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(InventoryCreateInventoryAttachmentByinventoryNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the inventoryChangeInventoryNbrActionByinternalIdRequest method in the Inventory resource', function () {
    $bodyData = new InventoryUpdateDto(
        inventoryNumber: null,
        status: 'String value',
        type: 'String value',
        description: 'String value',
        body: 'String value',
        itemClass: null,
        postingClass: null,
        vatCode: null,
        defaultPrice: null,
        baseUnit: 'String value',
        salesUnit: 'String value',
        purchaseUnit: 'String value',
        expenseAccrualAccount: null,
        inventoryAccount: null,
        expenseAccount: null,
        cogsAccount: null,
        expenseNonTaxableAccount: 'String value',
        expenseEuAccount: 'String value',
        expenseImportAccount: 'String value',
        expenseSubaccount: [],
        cogsSubaccount: [],
        salesAccount: 'String value',
        salesNonTaxableAccount: 'String value',
        salesEuAccount: 'String value',
        salesExportAccount: 'String value',
        salesSubaccount: [],
        attributeLines: [],
        packaging: null,
        supplierDetails: [],
        intrastat: null,
        crossReferences: [],
        defaultWarehouse: null,
        defaultIssueFrom: null,
        defaultReceiptTo: null,
        kitItem: true,
        note: 'String value'
    );

    Saloon::fake([
        InventoryChangeInventoryNbrActionByinternalIdRequest::class => MockResponse::make([], 201),
    ]);

    $request = new InventoryChangeInventoryNbrActionByinternalIdRequest(
        internalId: 123,
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(InventoryChangeInventoryNbrActionByinternalIdRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the inventoryPutByinventoryIdRequest method in the Inventory resource', function () {
    $bodyData = new InventoryUpdateDto(
        inventoryNumber: null,
        status: 'String value',
        type: 'String value',
        description: 'String value',
        body: 'String value',
        itemClass: null,
        postingClass: null,
        vatCode: null,
        defaultPrice: null,
        baseUnit: 'String value',
        salesUnit: 'String value',
        purchaseUnit: 'String value',
        expenseAccrualAccount: null,
        inventoryAccount: null,
        expenseAccount: null,
        cogsAccount: null,
        expenseNonTaxableAccount: 'String value',
        expenseEuAccount: 'String value',
        expenseImportAccount: 'String value',
        expenseSubaccount: [],
        cogsSubaccount: [],
        salesAccount: 'String value',
        salesNonTaxableAccount: 'String value',
        salesEuAccount: 'String value',
        salesExportAccount: 'String value',
        salesSubaccount: [],
        attributeLines: [],
        packaging: null,
        supplierDetails: [],
        intrastat: null,
        crossReferences: [],
        defaultWarehouse: null,
        defaultIssueFrom: null,
        defaultReceiptTo: null,
        kitItem: true,
        note: 'String value'
    );

    Saloon::fake([
        InventoryPutByinventoryIdRequest::class => MockResponse::make([], 201),
    ]);

    $request = new InventoryPutByinventoryIdRequest(
        inventoryId: 123,
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(InventoryPutByinventoryIdRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the inventoryUpdateInventoryCrossReferencesByinventoryNumberalternateTypealternateIdRequest method in the Inventory resource', function () {
    $bodyData = new InventoryUpdateDto(
        inventoryNumber: null,
        status: 'String value',
        type: 'String value',
        description: 'String value',
        body: 'String value',
        itemClass: null,
        postingClass: null,
        vatCode: null,
        defaultPrice: null,
        baseUnit: 'String value',
        salesUnit: 'String value',
        purchaseUnit: 'String value',
        expenseAccrualAccount: null,
        inventoryAccount: null,
        expenseAccount: null,
        cogsAccount: null,
        expenseNonTaxableAccount: 'String value',
        expenseEuAccount: 'String value',
        expenseImportAccount: 'String value',
        expenseSubaccount: [],
        cogsSubaccount: [],
        salesAccount: 'String value',
        salesNonTaxableAccount: 'String value',
        salesEuAccount: 'String value',
        salesExportAccount: 'String value',
        salesSubaccount: [],
        attributeLines: [],
        packaging: null,
        supplierDetails: [],
        intrastat: null,
        crossReferences: [],
        defaultWarehouse: null,
        defaultIssueFrom: null,
        defaultReceiptTo: null,
        kitItem: true,
        note: 'String value'
    );

    Saloon::fake([
        InventoryUpdateInventoryCrossReferencesByinventoryNumberalternateTypealternateIdRequest::class => MockResponse::make([], 201),
    ]);

    $request = new InventoryUpdateInventoryCrossReferencesByinventoryNumberalternateTypealternateIdRequest(
        inventoryNumber: 'test string',
        alternateType: 'test string',
        alternateId: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(InventoryUpdateInventoryCrossReferencesByinventoryNumberalternateTypealternateIdRequest::class);

    expect($response->status())->toBe(201);
});
