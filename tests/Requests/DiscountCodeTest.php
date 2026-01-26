<?php

// auto-generated

use Pionect\VismaSdk\Requests\DiscountCode\DiscountCodeGetDiscountCodesCollectionRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector(
        clientId: 'replace',
        clientSecret: 'replace'
    );
});

it('calls the discountCodeGetDiscountCodesCollection method in the DiscountCode resource', function () {
    Saloon::fake([
        DiscountCodeGetDiscountCodesCollectionRequest::class => MockResponse::make([
            0 => [
                'pageNumber' => 42,
                'pageSize' => 42,
                'totalCount' => 42,
                'records' => [],
            ],
            1 => [
                'pageNumber' => 42,
                'pageSize' => 42,
                'totalCount' => 42,
                'records' => [],
            ],
        ], 200),
    ]);

    $request = (new DiscountCodeGetDiscountCodesCollectionRequest(lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', createdDateTime: 'test string', createdDateTimeCondition: 'test string', discountCode: 'test string', pageNumber: 123, pageSize: 123));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (DiscountCodeGetDiscountCodesCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->pageNumber->toBe(42)
        ->pageSize->toBe(42)
        ->totalCount->toBe(42);
});
