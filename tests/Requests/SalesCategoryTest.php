<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\SalesCategory\SalesCategoryGetCategoryBycategoryIdRequest;
use Pionect\VismaSdk\Requests\SalesCategory\SalesCategoryGetCollectionRequest;
use Pionect\VismaSdk\Requests\SalesCategory\SalesCategoryGetItemsForCategoryBycategoryIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the salesCategoryGetCategoryBycategoryId method in the SalesCategory resource', function () {
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

it('calls the salesCategoryGetCollection method in the SalesCategory resource', function () {
    Saloon::fake([
        SalesCategoryGetCollectionRequest::class => MockResponse::make([
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

    $request = (new SalesCategoryGetCollectionRequest);

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (SalesCategoryGetCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->categoryId->toBe(42)
        ->description->toBe('String value')
        ->parentId->toBe(42)
        ->sortOrder->toBe(42);
});

it('calls the salesCategoryGetItemsForCategoryBycategoryId method in the SalesCategory resource', function () {
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
