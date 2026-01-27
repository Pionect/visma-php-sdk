<?php

// auto-generated

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
            0 => [
                'pageNumber' => 42,
                'pageSize' => 42,
                'totalCount' => 42,
                'records' => [],
                'id' => 'mock-id-123',
            ],
            1 => [
                'pageNumber' => 42,
                'pageSize' => 42,
                'totalCount' => 42,
                'records' => [],
                'id' => 'mock-id-123',
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
        ->pageNumber->toBe(42)
        ->pageSize->toBe(42)
        ->totalCount->toBe(42)
        ->id->toBe('mock-id-123');
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

    $request = new DiscountUpdateDiscountsBydiscountCodeseriesfilerDateRequest(discountCodeId: 'discount_code_id-123', seriesId: 'series_id-123', filerDateId: '2025-01-15T10:30:00Z', data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(DiscountUpdateDiscountsBydiscountCodeseriesfilerDateRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->toHaveKey('data')
            ->data->type->toBe('discounts')
            ->data->attributes->scoped(fn ($attributes) => $attributes
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value')
            ->errorInfo->toBe('test value')
            );

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

    $request = new DiscountUpdateDiscountsBydiscountCodeseriesRequest(discountCodeId: 'discount_code_id-123', seriesId: 'series_id-123', data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(DiscountUpdateDiscountsBydiscountCodeseriesRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->toHaveKey('data')
            ->data->type->toBe('discounts')
            ->data->attributes->scoped(fn ($attributes) => $attributes
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value')
            ->errorInfo->toBe('test value')
            );

        return true;
    });
});
