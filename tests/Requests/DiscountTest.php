<?php

use Pionect\VismaSdk\Dto\DiscountUpdateDto;
use Pionect\VismaSdk\Requests\Discount\DiscountDeleteBydiscountCodeseriesRequest;
use Pionect\VismaSdk\Requests\Discount\DiscountGetDiscountsRequest;
use Pionect\VismaSdk\Requests\Discount\DiscountPostRequest;
use Pionect\VismaSdk\Requests\Discount\DiscountPutBydiscountCodeseriesRequest;
use Pionect\VismaSdk\Requests\Discount\DiscountUpdateDiscountsBydiscountCodeseriesfilerDateRequest;
use Pionect\VismaSdk\Requests\Discount\DiscountUpdateDiscountsBydiscountCodeseriesRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the discountGetDiscountsRequest method in the Discount resource', function () {
    Saloon::fake([
        DiscountGetDiscountsRequest::class => MockResponse::make([
            'pageNumber' => 1,
            'pageSize' => 2,
            'totalCount' => 2,
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
            ],
        ], 200),
    ]);

    $request = new DiscountGetDiscountsRequest(
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

    Saloon::assertSent(DiscountGetDiscountsRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toHaveCount(2);
    expect($collection->first())
        ->toBeInstanceOf(\Spatie\LaravelData\Data::class);
});

it('calls the discountPostRequest method in the Discount resource', function () {
    $bodyData = new DiscountUpdateDto(
        discountCode: 'String value',
        series: 'String value',
        description: 'String value',
        discountBy: 'String value',
        breakBy: 'String value',
        promotional: true,
        active: true,
        prorateDiscount: true,
        effectiveDate: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        expirationDate: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        discountBreakpoints: []
    );

    Saloon::fake([
        DiscountPostRequest::class => MockResponse::make([], 201),
    ]);

    $request = new DiscountPostRequest(
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(DiscountPostRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the discountPutBydiscountCodeseriesRequest method in the Discount resource', function () {
    $bodyData = new DiscountUpdateDto(
        discountCode: 'String value',
        series: 'String value',
        description: 'String value',
        discountBy: 'String value',
        breakBy: 'String value',
        promotional: true,
        active: true,
        prorateDiscount: true,
        effectiveDate: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        expirationDate: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        discountBreakpoints: []
    );

    Saloon::fake([
        DiscountPutBydiscountCodeseriesRequest::class => MockResponse::make([], 201),
    ]);

    $request = new DiscountPutBydiscountCodeseriesRequest(
        discountCode: 'test string',
        series: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(DiscountPutBydiscountCodeseriesRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the discountDeleteBydiscountCodeseriesRequest method in the Discount resource', function () {
    Saloon::fake([
        DiscountDeleteBydiscountCodeseriesRequest::class => MockResponse::make([], 204),
    ]);

    $request = new DiscountDeleteBydiscountCodeseriesRequest(
        discountCode: 'test string',
        series: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(DiscountDeleteBydiscountCodeseriesRequest::class);

    expect($response->status())->toBe(204);
});

it('calls the discountUpdateDiscountsBydiscountCodeseriesfilerDateRequest method in the Discount resource', function () {
    $bodyData = [];

    Saloon::fake([
        DiscountUpdateDiscountsBydiscountCodeseriesfilerDateRequest::class => MockResponse::make([], 201),
    ]);

    $request = new DiscountUpdateDiscountsBydiscountCodeseriesfilerDateRequest(
        discountCode: 'test string',
        series: 'test string',
        filerDate: 'test string',
        filterDate: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(DiscountUpdateDiscountsBydiscountCodeseriesfilerDateRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the discountUpdateDiscountsBydiscountCodeseriesRequest method in the Discount resource', function () {
    $bodyData = [];

    Saloon::fake([
        DiscountUpdateDiscountsBydiscountCodeseriesRequest::class => MockResponse::make([], 201),
    ]);

    $request = new DiscountUpdateDiscountsBydiscountCodeseriesRequest(
        discountCode: 'test string',
        series: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(DiscountUpdateDiscountsBydiscountCodeseriesRequest::class);

    expect($response->status())->toBe(201);
});
