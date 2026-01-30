<?php

use Pionect\VismaSdk\Requests\DiscountCodeV2\DiscountCodeV2GetDiscountCodesRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the discountCodeV2getDiscountCodesRequest method in the DiscountCodeV2 resource', function () {
    Saloon::fake([
        DiscountCodeV2GetDiscountCodesRequest::class => MockResponse::make([
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
        ], 200),
    ]);

    $request = new DiscountCodeV2GetDiscountCodesRequest(
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

    Saloon::assertSent(DiscountCodeV2GetDiscountCodesRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toBeArray()
        ->and($collection)->toHaveCount(2);

    $firstItem = $collection[0];

    expect($firstItem)
        ->discountCode->toBe('String value')
        ->description->toBe('String value')
        ->discountType->toBe('String value')
        ->applicableTo->toBe('String value')
        ->applyToDeferredRevenue->toBe(true)
        ->manual->toBe(true)
        ->excludeFromDiscountableAmount->toBe(true)
        ->skipDocumentDiscounts->toBe(true)
        ->autoNumbering->toBe(true)
        ->lastNumber->toBe('String value')
        ->createdDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->errorInfo->toBe('String value');
});
