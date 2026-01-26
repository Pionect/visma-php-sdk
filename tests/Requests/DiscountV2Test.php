<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\DiscountV2\DiscountV2GetDiscountsCollectionRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector(
        clientId: 'replace',
        clientSecret: 'replace'
    );
});

it('calls the discountV2getDiscountsCollection method in the DiscountV2 resource', function () {
    Saloon::fake([
        DiscountV2GetDiscountsCollectionRequest::class => MockResponse::make([
            0 => [
                'discountCode' => 'Mock value',
                'series' => 'Mock value',
                'description' => 'Mock value',
                'discountBy' => 'Mock value',
                'breakBy' => 'Mock value',
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
                'errorInfo' => 'Mock value',
                'metadata' => 'Mock value',
            ],
            1 => [
                'discountCode' => 'Mock value',
                'series' => 'Mock value',
                'description' => 'Mock value',
                'discountBy' => 'Mock value',
                'breakBy' => 'Mock value',
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
                'errorInfo' => 'Mock value',
                'metadata' => 'Mock value',
            ],
        ], 200),
    ]);

    $request = (new DiscountV2GetDiscountsCollectionRequest(lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', createdDateTime: 'test string', createdDateTimeCondition: 'test string', discountCode: 'test string', series: 'test string', pageNumber: 123, pageSize: 123));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (DiscountV2GetDiscountsCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->discountCode->toBe('Mock value')
        ->series->toBe('Mock value')
        ->description->toBe('Mock value')
        ->discountBy->toBe('Mock value')
        ->breakBy->toBe('Mock value')
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
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});
