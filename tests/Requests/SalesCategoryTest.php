<?php

use Pionect\VismaSdk\Enums\InventoryStatusEnum;
use Pionect\VismaSdk\Enums\ItemClassTypeEnum;
use Pionect\VismaSdk\Requests\SalesCategory\SalesCategoryGetCategoryBycategoryIdRequest;
use Pionect\VismaSdk\Requests\SalesCategory\SalesCategoryGetItemsForCategoryBycategoryIdRequest;
use Pionect\VismaSdk\Requests\SalesCategory\SalesCategoryGetRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the salesCategoryGetCategoryBycategoryIdRequest method in the SalesCategory resource', function () {
    Saloon::fake([
        SalesCategoryGetCategoryBycategoryIdRequest::class => MockResponse::make([
            'categoryId' => 42,
            'description' => 'String value',
            'parentId' => 42,
            'sortOrder' => 42,
            'subCategories' => [],
        ], 200),
    ]);

    $request = new SalesCategoryGetCategoryBycategoryIdRequest(
        categoryId: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesCategoryGetCategoryBycategoryIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->categoryId->toBe(42)
        ->description->toBe('String value')
        ->parentId->toBe(42)
        ->sortOrder->toBe(42);
});

it('calls the salesCategoryGetRequest method in the SalesCategory resource', function () {
    Saloon::fake([
        SalesCategoryGetRequest::class => MockResponse::make([
            0 => [
                'categoryId' => 42,
                'description' => 'String value',
                'parentId' => 42,
                'sortOrder' => 42,
                'subCategories' => [],
            ],
            1 => [
                'categoryId' => 42,
                'description' => 'String value',
                'parentId' => 42,
                'sortOrder' => 42,
                'subCategories' => [],
            ],
        ], 200),
    ]);

    $request = new SalesCategoryGetRequest(
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesCategoryGetRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toHaveCount(2);
    expect($collection->first())
        ->categoryId->toBe(42)
        ->description->toBe('String value')
        ->parentId->toBe(42)
        ->sortOrder->toBe(42);
});

it('calls the salesCategoryGetItemsForCategoryBycategoryIdRequest method in the SalesCategory resource', function () {
    Saloon::fake([
        SalesCategoryGetItemsForCategoryBycategoryIdRequest::class => MockResponse::make([
            'inventoryId' => 42,
            'inventoryNumber' => 'String value',
            'status' => 'Active',
            'type' => 'NonStockItem',
            'description' => 'String value',
            'body' => 'String value',
            'itemClass' => [
                'type' => 'NonStockItem',
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

    $request = new SalesCategoryGetItemsForCategoryBycategoryIdRequest(
        categoryId: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesCategoryGetItemsForCategoryBycategoryIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->inventoryId->toBe(42)
        ->inventoryNumber->toBe('String value')
        ->status->toEqual(InventoryStatusEnum::ACTIVE)
        ->type->toEqual(ItemClassTypeEnum::NON_STOCK_ITEM)
        ->description->toBe('String value')
        ->body->toBe('String value')
        ->itemClass->type->toEqual(ItemClassTypeEnum::NON_STOCK_ITEM)
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
