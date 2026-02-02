<?php

use Pionect\VismaSdk\Dto\ChangeInventoryNbrActionDto;
use Pionect\VismaSdk\Dto\InventoryCrossReferenceUpdateDto;
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

    expect($collection)->toHaveCount(2);
    expect($collection->first())
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

    expect($collection)->toHaveCount(2);
    expect($collection->first())
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
            'itemClass' => [
                'type' => 'String value',
                'attributes' => [],
                'description' => 'String value',
                'errorInfo' => 'String value',
            ],
            'postingClass' => [
                'description' => 'String value',
            ],
            'vatCode' => [
                'description' => 'String value',
            ],
            'lotSerialClass' => [
                'description' => 'String value',
            ],
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
            'accountInformation' => [
                'expenseAccrualAccount' => [
                    'type' => 'String value',
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'inventoryAccount' => [
                    'type' => 'String value',
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'expenseAccount' => [
                    'type' => 'String value',
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'cogsAccount' => [
                    'type' => 'String value',
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'expenseNonTaxableAccount' => [
                    'type' => 'String value',
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'expenseEuAccount' => [
                    'type' => 'String value',
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'expenseImportAccount' => [
                    'type' => 'String value',
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'expenseSubaccount' => [
                    'active' => true,
                    'description' => 'String value',
                ],
                'cogsSubaccount' => [
                    'active' => true,
                    'description' => 'String value',
                ],
                'salesAccount' => [
                    'type' => 'String value',
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'salesNonTaxableAccount' => [
                    'type' => 'String value',
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'salesEuAccount' => [
                    'type' => 'String value',
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'salesExportAccount' => [
                    'type' => 'String value',
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'salesSubaccount' => [
                    'active' => true,
                    'description' => 'String value',
                ],
            ],
            'costPriceStatistics' => [
                'lastCost' => 42,
                'averageCost' => 42,
                'minCost' => 42,
                'maxCost' => 42,
            ],
            'crossReferences' => [],
            'attachments' => [],
            'attributes' => [],
            'warehouseDetails' => [],
            'inventoryUnits' => [],
            'defaultWarehouse' => [
                'description' => 'String value',
            ],
            'defaultIssueFrom' => [
                'description' => 'String value',
            ],
            'defaultReceiptTo' => [
                'description' => 'String value',
            ],
            'supplierDetails' => [],
            'salesCategories' => [],
            'packaging' => [
                'baseItemWeight' => 42,
                'weightUom' => 'String value',
                'baseItemVolume' => 42,
                'volumeUom' => 'String value',
            ],
            'intrastat' => [
                'cN8' => 'String value',
                'countryOfOrigin' => 'String value',
                'supplementaryMeasureUnit' => 'String value',
            ],
            'recommendedPrice' => 42,
            'priceManagerId' => 'mock-id-123',
            'priceManager' => [
                'name' => 'String value',
            ],
            'priceClass' => [
                'description' => 'String value',
            ],
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
        ->itemClass->type->toBe('String value')
        ->itemClass->description->toBe('String value')
        ->itemClass->errorInfo->toBe('String value')
        ->postingClass->description->toBe('String value')
        ->vatCode->description->toBe('String value')
        ->lotSerialClass->description->toBe('String value')
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
        ->accountInformation->expenseAccrualAccount->type->toBe('String value')
        ->accountInformation->expenseAccrualAccount->number->toBe('String value')
        ->accountInformation->expenseAccrualAccount->description->toBe('String value')
        ->accountInformation->inventoryAccount->type->toBe('String value')
        ->accountInformation->inventoryAccount->number->toBe('String value')
        ->accountInformation->inventoryAccount->description->toBe('String value')
        ->accountInformation->expenseAccount->type->toBe('String value')
        ->accountInformation->expenseAccount->number->toBe('String value')
        ->accountInformation->expenseAccount->description->toBe('String value')
        ->accountInformation->cogsAccount->type->toBe('String value')
        ->accountInformation->cogsAccount->number->toBe('String value')
        ->accountInformation->cogsAccount->description->toBe('String value')
        ->accountInformation->expenseNonTaxableAccount->type->toBe('String value')
        ->accountInformation->expenseNonTaxableAccount->number->toBe('String value')
        ->accountInformation->expenseNonTaxableAccount->description->toBe('String value')
        ->accountInformation->expenseEuAccount->type->toBe('String value')
        ->accountInformation->expenseEuAccount->number->toBe('String value')
        ->accountInformation->expenseEuAccount->description->toBe('String value')
        ->accountInformation->expenseImportAccount->type->toBe('String value')
        ->accountInformation->expenseImportAccount->number->toBe('String value')
        ->accountInformation->expenseImportAccount->description->toBe('String value')
        ->accountInformation->expenseSubaccount->active->toBe(true)
        ->accountInformation->expenseSubaccount->description->toBe('String value')
        ->accountInformation->cogsSubaccount->active->toBe(true)
        ->accountInformation->cogsSubaccount->description->toBe('String value')
        ->accountInformation->salesAccount->type->toBe('String value')
        ->accountInformation->salesAccount->number->toBe('String value')
        ->accountInformation->salesAccount->description->toBe('String value')
        ->accountInformation->salesNonTaxableAccount->type->toBe('String value')
        ->accountInformation->salesNonTaxableAccount->number->toBe('String value')
        ->accountInformation->salesNonTaxableAccount->description->toBe('String value')
        ->accountInformation->salesEuAccount->type->toBe('String value')
        ->accountInformation->salesEuAccount->number->toBe('String value')
        ->accountInformation->salesEuAccount->description->toBe('String value')
        ->accountInformation->salesExportAccount->type->toBe('String value')
        ->accountInformation->salesExportAccount->number->toBe('String value')
        ->accountInformation->salesExportAccount->description->toBe('String value')
        ->accountInformation->salesSubaccount->active->toBe(true)
        ->accountInformation->salesSubaccount->description->toBe('String value')
        ->costPriceStatistics->lastCost->toBe(42)
        ->costPriceStatistics->averageCost->toBe(42)
        ->costPriceStatistics->minCost->toBe(42)
        ->costPriceStatistics->maxCost->toBe(42)
        ->defaultWarehouse->description->toBe('String value')
        ->defaultIssueFrom->description->toBe('String value')
        ->defaultReceiptTo->description->toBe('String value')
        ->packaging->baseItemWeight->toBe(42)
        ->packaging->weightUom->toBe('String value')
        ->packaging->baseItemVolume->toBe(42)
        ->packaging->volumeUom->toBe('String value')
        ->intrastat->cN8->toBe('String value')
        ->intrastat->countryOfOrigin->toBe('String value')
        ->intrastat->supplementaryMeasureUnit->toBe('String value')
        ->recommendedPrice->toBe(42)
        ->priceManagerId->toBe('mock-id-123')
        ->priceManager->name->toBe('String value')
        ->priceClass->description->toBe('String value')
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
            'itemClass' => [
                'type' => 'String value',
                'attributes' => [],
                'description' => 'String value',
                'errorInfo' => 'String value',
            ],
            'postingClass' => [
                'description' => 'String value',
            ],
            'vatCode' => [
                'description' => 'String value',
            ],
            'lotSerialClass' => [
                'description' => 'String value',
            ],
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
            'accountInformation' => [
                'expenseAccrualAccount' => [
                    'type' => 'String value',
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'inventoryAccount' => [
                    'type' => 'String value',
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'expenseAccount' => [
                    'type' => 'String value',
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'cogsAccount' => [
                    'type' => 'String value',
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'expenseNonTaxableAccount' => [
                    'type' => 'String value',
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'expenseEuAccount' => [
                    'type' => 'String value',
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'expenseImportAccount' => [
                    'type' => 'String value',
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'expenseSubaccount' => [
                    'active' => true,
                    'description' => 'String value',
                ],
                'cogsSubaccount' => [
                    'active' => true,
                    'description' => 'String value',
                ],
                'salesAccount' => [
                    'type' => 'String value',
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'salesNonTaxableAccount' => [
                    'type' => 'String value',
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'salesEuAccount' => [
                    'type' => 'String value',
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'salesExportAccount' => [
                    'type' => 'String value',
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'salesSubaccount' => [
                    'active' => true,
                    'description' => 'String value',
                ],
            ],
            'costPriceStatistics' => [
                'lastCost' => 42,
                'averageCost' => 42,
                'minCost' => 42,
                'maxCost' => 42,
            ],
            'crossReferences' => [],
            'attachments' => [],
            'attributes' => [],
            'warehouseDetails' => [],
            'inventoryUnits' => [],
            'defaultWarehouse' => [
                'description' => 'String value',
            ],
            'defaultIssueFrom' => [
                'description' => 'String value',
            ],
            'defaultReceiptTo' => [
                'description' => 'String value',
            ],
            'supplierDetails' => [],
            'salesCategories' => [],
            'packaging' => [
                'baseItemWeight' => 42,
                'weightUom' => 'String value',
                'baseItemVolume' => 42,
                'volumeUom' => 'String value',
            ],
            'intrastat' => [
                'cN8' => 'String value',
                'countryOfOrigin' => 'String value',
                'supplementaryMeasureUnit' => 'String value',
            ],
            'recommendedPrice' => 42,
            'priceManagerId' => 'mock-id-123',
            'priceManager' => [
                'name' => 'String value',
            ],
            'priceClass' => [
                'description' => 'String value',
            ],
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
        ->itemClass->type->toBe('String value')
        ->itemClass->description->toBe('String value')
        ->itemClass->errorInfo->toBe('String value')
        ->postingClass->description->toBe('String value')
        ->vatCode->description->toBe('String value')
        ->lotSerialClass->description->toBe('String value')
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
        ->accountInformation->expenseAccrualAccount->type->toBe('String value')
        ->accountInformation->expenseAccrualAccount->number->toBe('String value')
        ->accountInformation->expenseAccrualAccount->description->toBe('String value')
        ->accountInformation->inventoryAccount->type->toBe('String value')
        ->accountInformation->inventoryAccount->number->toBe('String value')
        ->accountInformation->inventoryAccount->description->toBe('String value')
        ->accountInformation->expenseAccount->type->toBe('String value')
        ->accountInformation->expenseAccount->number->toBe('String value')
        ->accountInformation->expenseAccount->description->toBe('String value')
        ->accountInformation->cogsAccount->type->toBe('String value')
        ->accountInformation->cogsAccount->number->toBe('String value')
        ->accountInformation->cogsAccount->description->toBe('String value')
        ->accountInformation->expenseNonTaxableAccount->type->toBe('String value')
        ->accountInformation->expenseNonTaxableAccount->number->toBe('String value')
        ->accountInformation->expenseNonTaxableAccount->description->toBe('String value')
        ->accountInformation->expenseEuAccount->type->toBe('String value')
        ->accountInformation->expenseEuAccount->number->toBe('String value')
        ->accountInformation->expenseEuAccount->description->toBe('String value')
        ->accountInformation->expenseImportAccount->type->toBe('String value')
        ->accountInformation->expenseImportAccount->number->toBe('String value')
        ->accountInformation->expenseImportAccount->description->toBe('String value')
        ->accountInformation->expenseSubaccount->active->toBe(true)
        ->accountInformation->expenseSubaccount->description->toBe('String value')
        ->accountInformation->cogsSubaccount->active->toBe(true)
        ->accountInformation->cogsSubaccount->description->toBe('String value')
        ->accountInformation->salesAccount->type->toBe('String value')
        ->accountInformation->salesAccount->number->toBe('String value')
        ->accountInformation->salesAccount->description->toBe('String value')
        ->accountInformation->salesNonTaxableAccount->type->toBe('String value')
        ->accountInformation->salesNonTaxableAccount->number->toBe('String value')
        ->accountInformation->salesNonTaxableAccount->description->toBe('String value')
        ->accountInformation->salesEuAccount->type->toBe('String value')
        ->accountInformation->salesEuAccount->number->toBe('String value')
        ->accountInformation->salesEuAccount->description->toBe('String value')
        ->accountInformation->salesExportAccount->type->toBe('String value')
        ->accountInformation->salesExportAccount->number->toBe('String value')
        ->accountInformation->salesExportAccount->description->toBe('String value')
        ->accountInformation->salesSubaccount->active->toBe(true)
        ->accountInformation->salesSubaccount->description->toBe('String value')
        ->costPriceStatistics->lastCost->toBe(42)
        ->costPriceStatistics->averageCost->toBe(42)
        ->costPriceStatistics->minCost->toBe(42)
        ->costPriceStatistics->maxCost->toBe(42)
        ->defaultWarehouse->description->toBe('String value')
        ->defaultIssueFrom->description->toBe('String value')
        ->defaultReceiptTo->description->toBe('String value')
        ->packaging->baseItemWeight->toBe(42)
        ->packaging->weightUom->toBe('String value')
        ->packaging->baseItemVolume->toBe(42)
        ->packaging->volumeUom->toBe('String value')
        ->intrastat->cN8->toBe('String value')
        ->intrastat->countryOfOrigin->toBe('String value')
        ->intrastat->supplementaryMeasureUnit->toBe('String value')
        ->recommendedPrice->toBe(42)
        ->priceManagerId->toBe('mock-id-123')
        ->priceManager->name->toBe('String value')
        ->priceClass->description->toBe('String value')
        ->priceWorkgroupId->toBe(42)
        ->priceClassId->toBe('mock-id-123')
        ->note->toBe('String value')
        ->timestamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the inventoryPutByinventoryNumberRequest method in the Inventory resource', function () {
    $bodyData = new InventoryUpdateDto(
        inventoryNumber: 'String value',
        status: 'String value',
        type: 'String value',
        description: 'String value',
        body: 'String value',
        itemClass: 'String value',
        postingClass: 'String value',
        vatCode: 'String value',
        defaultPrice: 42,
        baseUnit: 'String value',
        salesUnit: 'String value',
        purchaseUnit: 'String value',
        expenseAccrualAccount: 'String value',
        inventoryAccount: 'String value',
        expenseAccount: 'String value',
        cogsAccount: 'String value',
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
        packaging: new PackagingUpdateDto(
            baseItemWeight: 42,
            weightUom: 'String value',
            baseItemVolume: 42,
            volumeUom: 'String value'
        ),
        supplierDetails: [],
        intrastat: new IntrastatUpdateDto(
            cN8: 'String value',
            countryOfOrigin: 'String value',
            supplementaryMeasureUnit: 'String value'
        ),
        crossReferences: [],
        defaultWarehouse: 'String value',
        defaultIssueFrom: 'String value',
        defaultReceiptTo: 'String value',
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
                'itemClass' => [
                    'type' => 'String value',
                    'attributes' => [],
                    'description' => 'String value',
                    'errorInfo' => 'String value',
                ],
                'postingClass' => [
                    'description' => 'String value',
                ],
                'vatCode' => [
                    'description' => 'String value',
                ],
                'lotSerialClass' => [
                    'description' => 'String value',
                ],
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
                'accountInformation' => [
                    'expenseAccrualAccount' => [
                        'type' => 'String value',
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'inventoryAccount' => [
                        'type' => 'String value',
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'expenseAccount' => [
                        'type' => 'String value',
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'cogsAccount' => [
                        'type' => 'String value',
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'expenseNonTaxableAccount' => [
                        'type' => 'String value',
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'expenseEuAccount' => [
                        'type' => 'String value',
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'expenseImportAccount' => [
                        'type' => 'String value',
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'expenseSubaccount' => [
                        'active' => true,
                        'description' => 'String value',
                    ],
                    'cogsSubaccount' => [
                        'active' => true,
                        'description' => 'String value',
                    ],
                    'salesAccount' => [
                        'type' => 'String value',
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'salesNonTaxableAccount' => [
                        'type' => 'String value',
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'salesEuAccount' => [
                        'type' => 'String value',
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'salesExportAccount' => [
                        'type' => 'String value',
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'salesSubaccount' => [
                        'active' => true,
                        'description' => 'String value',
                    ],
                ],
                'costPriceStatistics' => [
                    'lastCost' => 42,
                    'averageCost' => 42,
                    'minCost' => 42,
                    'maxCost' => 42,
                ],
                'crossReferences' => [],
                'attachments' => [],
                'attributes' => [],
                'warehouseDetails' => [],
                'inventoryUnits' => [],
                'defaultWarehouse' => [
                    'description' => 'String value',
                ],
                'defaultIssueFrom' => [
                    'description' => 'String value',
                ],
                'defaultReceiptTo' => [
                    'description' => 'String value',
                ],
                'supplierDetails' => [],
                'salesCategories' => [],
                'packaging' => [
                    'baseItemWeight' => 42,
                    'weightUom' => 'String value',
                    'baseItemVolume' => 42,
                    'volumeUom' => 'String value',
                ],
                'intrastat' => [
                    'cN8' => 'String value',
                    'countryOfOrigin' => 'String value',
                    'supplementaryMeasureUnit' => 'String value',
                ],
                'recommendedPrice' => 42,
                'priceManagerId' => 'mock-id-123',
                'priceManager' => [
                    'name' => 'String value',
                ],
                'priceClass' => [
                    'description' => 'String value',
                ],
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
                'itemClass' => [
                    'type' => 'String value',
                    'attributes' => [],
                    'description' => 'String value',
                    'errorInfo' => 'String value',
                ],
                'postingClass' => [
                    'description' => 'String value',
                ],
                'vatCode' => [
                    'description' => 'String value',
                ],
                'lotSerialClass' => [
                    'description' => 'String value',
                ],
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
                'accountInformation' => [
                    'expenseAccrualAccount' => [
                        'type' => 'String value',
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'inventoryAccount' => [
                        'type' => 'String value',
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'expenseAccount' => [
                        'type' => 'String value',
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'cogsAccount' => [
                        'type' => 'String value',
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'expenseNonTaxableAccount' => [
                        'type' => 'String value',
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'expenseEuAccount' => [
                        'type' => 'String value',
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'expenseImportAccount' => [
                        'type' => 'String value',
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'expenseSubaccount' => [
                        'active' => true,
                        'description' => 'String value',
                    ],
                    'cogsSubaccount' => [
                        'active' => true,
                        'description' => 'String value',
                    ],
                    'salesAccount' => [
                        'type' => 'String value',
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'salesNonTaxableAccount' => [
                        'type' => 'String value',
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'salesEuAccount' => [
                        'type' => 'String value',
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'salesExportAccount' => [
                        'type' => 'String value',
                        'number' => 'String value',
                        'description' => 'String value',
                    ],
                    'salesSubaccount' => [
                        'active' => true,
                        'description' => 'String value',
                    ],
                ],
                'costPriceStatistics' => [
                    'lastCost' => 42,
                    'averageCost' => 42,
                    'minCost' => 42,
                    'maxCost' => 42,
                ],
                'crossReferences' => [],
                'attachments' => [],
                'attributes' => [],
                'warehouseDetails' => [],
                'inventoryUnits' => [],
                'defaultWarehouse' => [
                    'description' => 'String value',
                ],
                'defaultIssueFrom' => [
                    'description' => 'String value',
                ],
                'defaultReceiptTo' => [
                    'description' => 'String value',
                ],
                'supplierDetails' => [],
                'salesCategories' => [],
                'packaging' => [
                    'baseItemWeight' => 42,
                    'weightUom' => 'String value',
                    'baseItemVolume' => 42,
                    'volumeUom' => 'String value',
                ],
                'intrastat' => [
                    'cN8' => 'String value',
                    'countryOfOrigin' => 'String value',
                    'supplementaryMeasureUnit' => 'String value',
                ],
                'recommendedPrice' => 42,
                'priceManagerId' => 'mock-id-123',
                'priceManager' => [
                    'name' => 'String value',
                ],
                'priceClass' => [
                    'description' => 'String value',
                ],
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

    expect($collection)->toHaveCount(2);
    expect($collection->first())
        ->inventoryId->toBe(42)
        ->inventoryNumber->toBe('String value')
        ->status->toBe('String value')
        ->type->toBe('String value')
        ->description->toBe('String value')
        ->body->toBe('String value')
        ->itemClass->type->toBe('String value')
        ->itemClass->description->toBe('String value')
        ->itemClass->errorInfo->toBe('String value')
        ->postingClass->description->toBe('String value')
        ->vatCode->description->toBe('String value')
        ->lotSerialClass->description->toBe('String value')
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
        ->accountInformation->expenseAccrualAccount->type->toBe('String value')
        ->accountInformation->expenseAccrualAccount->number->toBe('String value')
        ->accountInformation->expenseAccrualAccount->description->toBe('String value')
        ->accountInformation->inventoryAccount->type->toBe('String value')
        ->accountInformation->inventoryAccount->number->toBe('String value')
        ->accountInformation->inventoryAccount->description->toBe('String value')
        ->accountInformation->expenseAccount->type->toBe('String value')
        ->accountInformation->expenseAccount->number->toBe('String value')
        ->accountInformation->expenseAccount->description->toBe('String value')
        ->accountInformation->cogsAccount->type->toBe('String value')
        ->accountInformation->cogsAccount->number->toBe('String value')
        ->accountInformation->cogsAccount->description->toBe('String value')
        ->accountInformation->expenseNonTaxableAccount->type->toBe('String value')
        ->accountInformation->expenseNonTaxableAccount->number->toBe('String value')
        ->accountInformation->expenseNonTaxableAccount->description->toBe('String value')
        ->accountInformation->expenseEuAccount->type->toBe('String value')
        ->accountInformation->expenseEuAccount->number->toBe('String value')
        ->accountInformation->expenseEuAccount->description->toBe('String value')
        ->accountInformation->expenseImportAccount->type->toBe('String value')
        ->accountInformation->expenseImportAccount->number->toBe('String value')
        ->accountInformation->expenseImportAccount->description->toBe('String value')
        ->accountInformation->expenseSubaccount->active->toBe(true)
        ->accountInformation->expenseSubaccount->description->toBe('String value')
        ->accountInformation->cogsSubaccount->active->toBe(true)
        ->accountInformation->cogsSubaccount->description->toBe('String value')
        ->accountInformation->salesAccount->type->toBe('String value')
        ->accountInformation->salesAccount->number->toBe('String value')
        ->accountInformation->salesAccount->description->toBe('String value')
        ->accountInformation->salesNonTaxableAccount->type->toBe('String value')
        ->accountInformation->salesNonTaxableAccount->number->toBe('String value')
        ->accountInformation->salesNonTaxableAccount->description->toBe('String value')
        ->accountInformation->salesEuAccount->type->toBe('String value')
        ->accountInformation->salesEuAccount->number->toBe('String value')
        ->accountInformation->salesEuAccount->description->toBe('String value')
        ->accountInformation->salesExportAccount->type->toBe('String value')
        ->accountInformation->salesExportAccount->number->toBe('String value')
        ->accountInformation->salesExportAccount->description->toBe('String value')
        ->accountInformation->salesSubaccount->active->toBe(true)
        ->accountInformation->salesSubaccount->description->toBe('String value')
        ->costPriceStatistics->lastCost->toBe(42)
        ->costPriceStatistics->averageCost->toBe(42)
        ->costPriceStatistics->minCost->toBe(42)
        ->costPriceStatistics->maxCost->toBe(42)
        ->defaultWarehouse->description->toBe('String value')
        ->defaultIssueFrom->description->toBe('String value')
        ->defaultReceiptTo->description->toBe('String value')
        ->packaging->baseItemWeight->toBe(42)
        ->packaging->weightUom->toBe('String value')
        ->packaging->baseItemVolume->toBe(42)
        ->packaging->volumeUom->toBe('String value')
        ->intrastat->cN8->toBe('String value')
        ->intrastat->countryOfOrigin->toBe('String value')
        ->intrastat->supplementaryMeasureUnit->toBe('String value')
        ->recommendedPrice->toBe(42)
        ->priceManagerId->toBe('mock-id-123')
        ->priceManager->name->toBe('String value')
        ->priceClass->description->toBe('String value')
        ->priceWorkgroupId->toBe(42)
        ->priceClassId->toBe('mock-id-123')
        ->note->toBe('String value')
        ->timestamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the inventoryPostRequest method in the Inventory resource', function () {
    $bodyData = new InventoryUpdateDto(
        inventoryNumber: 'String value',
        status: 'String value',
        type: 'String value',
        description: 'String value',
        body: 'String value',
        itemClass: 'String value',
        postingClass: 'String value',
        vatCode: 'String value',
        defaultPrice: 42,
        baseUnit: 'String value',
        salesUnit: 'String value',
        purchaseUnit: 'String value',
        expenseAccrualAccount: 'String value',
        inventoryAccount: 'String value',
        expenseAccount: 'String value',
        cogsAccount: 'String value',
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
        packaging: new PackagingUpdateDto(
            baseItemWeight: 42,
            weightUom: 'String value',
            baseItemVolume: 42,
            volumeUom: 'String value'
        ),
        supplierDetails: [],
        intrastat: new IntrastatUpdateDto(
            cN8: 'String value',
            countryOfOrigin: 'String value',
            supplementaryMeasureUnit: 'String value'
        ),
        crossReferences: [],
        defaultWarehouse: 'String value',
        defaultIssueFrom: 'String value',
        defaultReceiptTo: 'String value',
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
            'bAccount' => [
                'internalId' => 42,
                'number' => 'String value',
                'name' => 'String value',
            ],
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
        ->bAccount->internalId->toBe(42)
        ->bAccount->number->toBe('String value')
        ->bAccount->name->toBe('String value')
        ->alternateId->toBe('mock-id-123')
        ->description->toBe('String value')
        ->uom->toBe('String value')
        ->timestamp->toBe('String value');
});

it('calls the inventoryCreateInventoryCrossReferencesByinventoryNumberRequest method in the Inventory resource', function () {
    $bodyData = new InventoryCrossReferenceUpdateDto(
        alternateType: 'String value',
        bAccount: 'String value',
        alternateId: 'mock-id-123',
        description: 'String value',
        uom: 'String value'
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
    $bodyData = [];

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
    $bodyData = [];

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
    $bodyData = new ChangeInventoryNbrActionDto(
        inventoryNbr: 'String value'
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
        inventoryNumber: 'String value',
        status: 'String value',
        type: 'String value',
        description: 'String value',
        body: 'String value',
        itemClass: 'String value',
        postingClass: 'String value',
        vatCode: 'String value',
        defaultPrice: 42,
        baseUnit: 'String value',
        salesUnit: 'String value',
        purchaseUnit: 'String value',
        expenseAccrualAccount: 'String value',
        inventoryAccount: 'String value',
        expenseAccount: 'String value',
        cogsAccount: 'String value',
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
        packaging: new PackagingUpdateDto(
            baseItemWeight: 42,
            weightUom: 'String value',
            baseItemVolume: 42,
            volumeUom: 'String value'
        ),
        supplierDetails: [],
        intrastat: new IntrastatUpdateDto(
            cN8: 'String value',
            countryOfOrigin: 'String value',
            supplementaryMeasureUnit: 'String value'
        ),
        crossReferences: [],
        defaultWarehouse: 'String value',
        defaultIssueFrom: 'String value',
        defaultReceiptTo: 'String value',
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
    $bodyData = new InventoryCrossReferenceUpdateDto(
        alternateType: 'String value',
        bAccount: 'String value',
        alternateId: 'mock-id-123',
        description: 'String value',
        uom: 'String value'
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
