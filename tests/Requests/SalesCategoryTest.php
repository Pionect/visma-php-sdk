<?php

// auto-generated

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
            'data' => [
                'type' => 'salesCategories',
                'id' => 'mock-id-123',
                'attributes' => [
                    'categoryId' => 42,
                    'description' => 'Mock value',
                    'parentId' => 42,
                    'sortOrder' => 42,
                    'subCategories' => [],
                ],
            ],
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
            'data' => [
                0 => [
                    'type' => 'salesCategories',
                    'id' => 'mock-id-1',
                    'attributes' => [
                        'categoryId' => 42,
                        'description' => 'Mock value',
                        'parentId' => 42,
                        'sortOrder' => 42,
                        'subCategories' => [],
                    ],
                ],
                1 => [
                    'type' => 'salesCategories',
                    'id' => 'mock-id-2',
                    'attributes' => [
                        'categoryId' => 42,
                        'description' => 'Mock value',
                        'parentId' => 42,
                        'sortOrder' => 42,
                        'subCategories' => [],
                    ],
                ],
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
            'data' => [
                'type' => 'salesCategories',
                'id' => 'mock-id-123',
                'attributes' => [
                    'name' => 'Mock value',
                ],
            ],
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
        ->name->toBe('Mock value');
});
