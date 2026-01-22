<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\DiscountCodeV2\DiscountCodeV2GetDiscountCodesCollectionRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the discountCodeV2getDiscountCodesCollection method in the DiscountCodeV2 resource', function () {
    Saloon::fake([
        DiscountCodeV2GetDiscountCodesCollectionRequest::class => MockResponse::make([
            'data' => [
                0 => [
                    'type' => 'discountCodeV2s',
                    'id' => 'mock-id-1',
                    'attributes' => [
                        'discountCode' => 'Mock value',
                        'description' => 'Mock value',
                        'discountType' => 'Mock value',
                        'applicableTo' => 'Mock value',
                        'applyToDeferredRevenue' => true,
                        'manual' => true,
                        'excludeFromDiscountableAmount' => true,
                        'skipDocumentDiscounts' => true,
                        'autoNumbering' => true,
                        'lastNumber' => 'Mock value',
                        'createdDateTime' => '2025-11-22T10:40:04.065Z',
                        'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                        'errorInfo' => 'Mock value',
                        'metadata' => 'Mock value',
                    ],
                ],
                1 => [
                    'type' => 'discountCodeV2s',
                    'id' => 'mock-id-2',
                    'attributes' => [
                        'discountCode' => 'Mock value',
                        'description' => 'Mock value',
                        'discountType' => 'Mock value',
                        'applicableTo' => 'Mock value',
                        'applyToDeferredRevenue' => true,
                        'manual' => true,
                        'excludeFromDiscountableAmount' => true,
                        'skipDocumentDiscounts' => true,
                        'autoNumbering' => true,
                        'lastNumber' => 'Mock value',
                        'createdDateTime' => '2025-11-22T10:40:04.065Z',
                        'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                        'errorInfo' => 'Mock value',
                        'metadata' => 'Mock value',
                    ],
                ],
            ],
        ], 200),
    ]);

    $request = (new DiscountCodeV2GetDiscountCodesCollectionRequest(lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', createdDateTime: 'test string', createdDateTimeCondition: 'test string', discountCode: 'test string', pageNumber: 123, pageSize: 123));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (DiscountCodeV2GetDiscountCodesCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->discountCode->toBe('Mock value')
        ->description->toBe('Mock value')
        ->discountType->toBe('Mock value')
        ->applicableTo->toBe('Mock value')
        ->applyToDeferredRevenue->toBe(true)
        ->manual->toBe(true)
        ->excludeFromDiscountableAmount->toBe(true)
        ->skipDocumentDiscounts->toBe(true)
        ->autoNumbering->toBe(true)
        ->lastNumber->toBe('Mock value')
        ->createdDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});
