<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\Discount\DiscountGetDiscountsCollectionRequest;
use Pionect\VismaSdk\Requests\Discount\DiscountUpdateDiscountsBydiscountCodeseriesfilerDateRequest;
use Pionect\VismaSdk\Requests\Discount\DiscountUpdateDiscountsBydiscountCodeseriesRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Http\Request;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the discountGetDiscountsCollection method in the Discount resource', function () {
    Saloon::fake([
        DiscountGetDiscountsCollectionRequest::class => MockResponse::make([
            'records' => [
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
                ],
            ],
        ], 200),
    ]);

    $request = (new DiscountGetDiscountsCollectionRequest(lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', createdDateTime: 'test string', createdDateTimeCondition: 'test string', discountCode: 'test string', series: 'test string', pageNumber: 123, pageSize: 123));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (DiscountGetDiscountsCollectionRequest $request) {
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

it('calls the discountUpdateDiscountsBydiscountCodeseriesfilerDate method in the Discount resource', function () {
    $mockClient = Saloon::fake([
        DiscountUpdateDiscountsBydiscountCodeseriesfilerDateRequest::class => MockResponse::make([], 200),
    ]);

    // Create DTO with sample data
    $dto = \Pionect\VismaSdk\Dto\UpdateDiscountsActionResultDto::factory()->state([
        'actionId' => 'action_id-123',
        'actionResult' => 'test value',
        'errorInfo' => 'test value',
    ])->make();

    $request = new DiscountUpdateDiscountsBydiscountCodeseriesfilerDateRequest(discountCode: 'test value', series: 'test value', filerDate: '2025-01-15T10:30:00Z', filterDate: '2025-01-15T10:30:00Z', data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(DiscountUpdateDiscountsBydiscountCodeseriesfilerDateRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value')
            ->errorInfo->toBe('test value');

        return true;
    });
});

it('calls the discountUpdateDiscountsBydiscountCodeseries method in the Discount resource', function () {
    $mockClient = Saloon::fake([
        DiscountUpdateDiscountsBydiscountCodeseriesRequest::class => MockResponse::make([], 200),
    ]);

    // Create DTO with sample data
    $dto = \Pionect\VismaSdk\Dto\UpdateDiscountsActionResultDto::factory()->state([
        'actionId' => 'action_id-123',
        'actionResult' => 'test value',
        'errorInfo' => 'test value',
    ])->make();

    $request = new DiscountUpdateDiscountsBydiscountCodeseriesRequest(discountCode: 'test value', series: 'test value', data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(DiscountUpdateDiscountsBydiscountCodeseriesRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value')
            ->errorInfo->toBe('test value');

        return true;
    });
});
