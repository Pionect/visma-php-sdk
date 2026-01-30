<?php

// Generated 2026-01-30 14:10:14

use Pionect\VismaSdk\Requests\DiscountV2\DiscountV2GetDiscountsRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the discountV2getDiscountsRequest method in the DiscountV2 resource', function () {
    Saloon::fake([
        DiscountV2GetDiscountsRequest::class => MockResponse::make([
            0 => [
                'discountCode' => 'String value',
                'series' => 'String value',
                'description' => 'String value',
                'discountBy' => 'String value',
                'breakBy' => 'String value',
                'promotional' => true,
                'active' => true,
                'prorateDiscount' => true,
                'effectiveDate' => '2025-11-22T10:40:04+00:00',
                'expirationDate' => '2025-11-22T10:40:04+00:00',
                'lastUpdateDate' => '2025-11-22T10:40:04+00:00',
                'freeItem' => 42,
                'pendingFreeItem' => 42,
                'lastFreeItem' => 42,
                'lineCntr' => 42,
                'createdDateTime' => '2025-11-22T10:40:04+00:00',
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'discountBreakpoints' => [],
                'customers' => [],
                'items' => [],
                'warehouses' => [],
                'customerPriceClasses' => [],
                'itemPriceClasses' => [],
                'branches' => [],
                'errorInfo' => 'String value',
            ],
            1 => [
                'discountCode' => 'String value',
                'series' => 'String value',
                'description' => 'String value',
                'discountBy' => 'String value',
                'breakBy' => 'String value',
                'promotional' => true,
                'active' => true,
                'prorateDiscount' => true,
                'effectiveDate' => '2025-11-22T10:40:04+00:00',
                'expirationDate' => '2025-11-22T10:40:04+00:00',
                'lastUpdateDate' => '2025-11-22T10:40:04+00:00',
                'freeItem' => 42,
                'pendingFreeItem' => 42,
                'lastFreeItem' => 42,
                'lineCntr' => 42,
                'createdDateTime' => '2025-11-22T10:40:04+00:00',
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'discountBreakpoints' => [],
                'customers' => [],
                'items' => [],
                'warehouses' => [],
                'customerPriceClasses' => [],
                'itemPriceClasses' => [],
                'branches' => [],
                'errorInfo' => 'String value',
            ],
        ], 200),
    ]);

    $request = new DiscountV2GetDiscountsRequest(
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        createdDateTime: 'test string',
        createdDateTimeCondition: 'test string',
        discountCode: 'test string',
        series: 'test string',
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(DiscountV2GetDiscountsRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toBeArray()
        ->and($collection)->toHaveCount(2);

    $firstItem = $collection[0];

    expect($firstItem)
        ->discountCode->toBe('String value')
        ->series->toBe('String value')
        ->description->toBe('String value')
        ->discountBy->toBe('String value')
        ->breakBy->toBe('String value')
        ->promotional->toBe(true)
        ->active->toBe(true)
        ->prorateDiscount->toBe(true)
        ->effectiveDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->expirationDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->lastUpdateDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->freeItem->toBe(42)
        ->pendingFreeItem->toBe(42)
        ->lastFreeItem->toBe(42)
        ->lineCntr->toBe(42)
        ->createdDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->errorInfo->toBe('String value');
});
