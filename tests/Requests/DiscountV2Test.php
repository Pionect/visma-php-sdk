<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\DiscountV2\DiscountV2GetDiscountsCollectionRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the discountV2getDiscountsCollection method in the DiscountV2 resource', function () {
    Saloon::fake([
        DiscountV2GetDiscountsCollectionRequest::class => MockResponse::make([
            0 => [
                'discountCode' => 'String value',
                'series' => 'String value',
                'description' => 'String value',
                'discountBy' => 'String value',
                'breakBy' => 'String value',
                'promotional' => true,
                'active' => true,
                'prorateDiscount' => true,
                'effectiveDate' => '2025-11-22T10:40:04.065Z',
                'expirationDate' => '2025-11-22T10:40:04.065Z',
                'lastUpdateDate' => '2025-11-22T10:40:04.065Z',
                'freeItem' => 42,
                'pendingFreeItem' => 42,
                'lastFreeItem' => 42,
                'lineCntr' => 42,
                'createdDateTime' => '2025-11-22T10:40:04.065Z',
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'discountBreakpoints' => [],
                'customers' => [],
                'items' => [],
                'warehouses' => [],
                'customerPriceClasses' => [],
                'itemPriceClasses' => [],
                'branches' => [],
                'errorInfo' => 'String value',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
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
                'effectiveDate' => '2025-11-22T10:40:04.065Z',
                'expirationDate' => '2025-11-22T10:40:04.065Z',
                'lastUpdateDate' => '2025-11-22T10:40:04.065Z',
                'freeItem' => 42,
                'pendingFreeItem' => 42,
                'lastFreeItem' => 42,
                'lineCntr' => 42,
                'createdDateTime' => '2025-11-22T10:40:04.065Z',
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'discountBreakpoints' => [],
                'customers' => [],
                'items' => [],
                'warehouses' => [],
                'customerPriceClasses' => [],
                'itemPriceClasses' => [],
                'branches' => [],
                'errorInfo' => 'String value',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
        ], 200),
    ]);

    $request = (new DiscountV2GetDiscountsCollectionRequest(lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', createdDateTime: 'test string', createdDateTimeCondition: 'test string', discountCode: 'test string', series: 'test string', pageNumber: 123, pageSize: 123));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (DiscountV2GetDiscountsCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->discountCode->toBe('String value')
        ->series->toBe('String value')
        ->description->toBe('String value')
        ->discountBy->toBe('String value')
        ->breakBy->toBe('String value')
        ->promotional->toBeTrue()
        ->active->toBeTrue()
        ->prorateDiscount->toBeTrue()
        ->effectiveDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->expirationDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->lastUpdateDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->freeItem->toBe(42)
        ->pendingFreeItem->toBe(42)
        ->lastFreeItem->toBe(42)
        ->lineCntr->toBe(42)
        ->createdDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('String value');
});
