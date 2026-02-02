<?php

use Pionect\VismaSdk\Requests\DiscountCode\DiscountCodeGetDiscountCodesRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the discountCodeGetDiscountCodesRequest method in the DiscountCode resource', function () {
    Saloon::fake([
        DiscountCodeGetDiscountCodesRequest::class => MockResponse::make([
            'pageNumber' => 1,
            'pageSize' => 2,
            'totalCount' => 2,
            'records' => [
                0 => [
                    'discountCode' => 'String value',
                    'description' => 'String value',
                    'discountType' => 'String value',
                    'applicableTo' => 'String value',
                    'applyToDeferredRevenue' => true,
                    'manual' => true,
                    'excludeFromDiscountableAmount' => true,
                    'skipDocumentDiscounts' => true,
                    'autoNumbering' => true,
                    'lastNumber' => 'String value',
                    'createdDateTime' => '2025-11-22T10:40:04+00:00',
                    'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                    'errorInfo' => 'String value',
                ],
                1 => [
                    'discountCode' => 'String value',
                    'description' => 'String value',
                    'discountType' => 'String value',
                    'applicableTo' => 'String value',
                    'applyToDeferredRevenue' => true,
                    'manual' => true,
                    'excludeFromDiscountableAmount' => true,
                    'skipDocumentDiscounts' => true,
                    'autoNumbering' => true,
                    'lastNumber' => 'String value',
                    'createdDateTime' => '2025-11-22T10:40:04+00:00',
                    'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                    'errorInfo' => 'String value',
                ],
            ],
        ], 200),
    ]);

    $request = new DiscountCodeGetDiscountCodesRequest(
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        createdDateTime: 'test string',
        createdDateTimeCondition: 'test string',
        discountCode: 'test string',
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(DiscountCodeGetDiscountCodesRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toHaveCount(2);
    expect($collection->first())
        ->toBeInstanceOf(\Spatie\LaravelData\Data::class);
});
