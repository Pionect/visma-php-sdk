<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\SalesCategory\SalesCategoryGetCategoryBycategoryIdRequest;
use Pionect\VismaSdk\Requests\SalesCategory\SalesCategoryGetCollectionRequest;
use Pionect\VismaSdk\Requests\SalesCategory\SalesCategoryGetItemsForCategoryBycategoryIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector(
        clientId: 'replace',
        clientSecret: 'replace'
    );
});

it('calls the salesCategoryGetCategoryBycategoryId method in the SalesCategory resource', function () {
    Saloon::fake([
        SalesCategoryGetCategoryBycategoryIdRequest::class => MockResponse::make([
            'categoryId' => 42,
            'description' => 'Mock value',
            'parentId' => 42,
            'sortOrder' => 42,
            'subCategories' => [],
        ], 200),
    ]);

    $request = new SalesCategoryGetCategoryBycategoryIdRequest(
        categoryIdId: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesCategoryGetCategoryBycategoryIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->categoryId->toBe(42)
        ->description->toBe('Mock value')
        ->parentId->toBe(42)
        ->sortOrder->toBe(42);
});

it('calls the salesCategoryGetCollection method in the SalesCategory resource', function () {
    Saloon::fake([
        SalesCategoryGetCollectionRequest::class => MockResponse::make([
            0 => [
                'categoryId' => 42,
                'description' => 'Mock value',
                'parentId' => 42,
                'sortOrder' => 42,
                'subCategories' => [],
            ],
            1 => [
                'categoryId' => 42,
                'description' => 'Mock value',
                'parentId' => 42,
                'sortOrder' => 42,
                'subCategories' => [],
            ],
        ], 200),
    ]);

    $request = (new SalesCategoryGetCollectionRequest);

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (SalesCategoryGetCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->categoryId->toBe(42)
        ->description->toBe('Mock value')
        ->parentId->toBe(42)
        ->sortOrder->toBe(42);
});

it('calls the salesCategoryGetItemsForCategoryBycategoryId method in the SalesCategory resource', function () {
    Saloon::fake([
        SalesCategoryGetItemsForCategoryBycategoryIdRequest::class => MockResponse::make([
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

    $request = new SalesCategoryGetItemsForCategoryBycategoryIdRequest(
        categoryIdId: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesCategoryGetItemsForCategoryBycategoryIdRequest::class);

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
