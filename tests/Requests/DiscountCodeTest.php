<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\DiscountCode\DiscountCodeGetDiscountCodesCollectionRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the discountCodeGetDiscountCodesCollection method in the DiscountCode resource', function () {
    Saloon::fake([
        DiscountCodeGetDiscountCodesCollectionRequest::class => MockResponse::make([
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
                    'createdDateTime' => '2025-11-22T10:40:04.065Z',
                    'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
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
                    'createdDateTime' => '2025-11-22T10:40:04.065Z',
                    'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                    'errorInfo' => 'String value',
                ],
            ],
        ], 200),
    ]);

    $request = (new DiscountCodeGetDiscountCodesCollectionRequest(lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', createdDateTime: 'test string', createdDateTimeCondition: 'test string', discountCode: 'test string', pageNumber: 123, pageSize: 123));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (DiscountCodeGetDiscountCodesCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->discountCode->toBe('String value')
        ->description->toBe('String value')
        ->discountType->toBe('String value')
        ->applicableTo->toBe('String value')
        ->applyToDeferredRevenue->toBeTrue()
        ->manual->toBeTrue()
        ->excludeFromDiscountableAmount->toBeTrue()
        ->skipDocumentDiscounts->toBeTrue()
        ->autoNumbering->toBeTrue()
        ->lastNumber->toBe('String value')
        ->createdDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('String value');
});
