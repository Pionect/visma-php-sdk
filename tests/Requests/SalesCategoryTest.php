<?php

// Generated 2026-01-30 15:19:40

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

    expect($collection)->toBeArray()
        ->and($collection)->toHaveCount(2);

    $firstItem = $collection[0];

    expect($firstItem)
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
