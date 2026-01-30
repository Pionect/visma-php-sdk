<?php

use Pionect\VismaSdk\Requests\VatCategory\VatCategoryGetAllVatCategoriesRequest;
use Pionect\VismaSdk\Requests\VatCategory\VatCategoryGetVatCategoryBytaxCategoryIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the vatCategoryGetVatCategoryBytaxCategoryIdRequest method in the VatCategory resource', function () {
    Saloon::fake([
        VatCategoryGetVatCategoryBytaxCategoryIdRequest::class => MockResponse::make([
            'vatCategoryId' => 'mock-id-123',
            'description' => 'String value',
            'active' => true,
            'excludeListedTaxes' => true,
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'vatCategoryLines' => [],
        ], 200),
    ]);

    $request = new VatCategoryGetVatCategoryBytaxCategoryIdRequest(
        taxCategoryId: 'test string',
        vendorCd: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(VatCategoryGetVatCategoryBytaxCategoryIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->vatCategoryId->toBe('mock-id-123')
        ->description->toBe('String value')
        ->active->toBe(true)
        ->excludeListedTaxes->toBe(true)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'));
});

it('calls the vatCategoryGetAllVatCategoriesRequest method in the VatCategory resource', function () {
    Saloon::fake([
        VatCategoryGetAllVatCategoriesRequest::class => MockResponse::make([
            0 => [
                'vatCategoryId' => 'mock-id-123',
                'description' => 'String value',
                'active' => true,
                'excludeListedTaxes' => true,
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'vatCategoryLines' => [],
            ],
            1 => [
                'vatCategoryId' => 'mock-id-123',
                'description' => 'String value',
                'active' => true,
                'excludeListedTaxes' => true,
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'vatCategoryLines' => [],
            ],
        ], 200),
    ]);

    $request = new VatCategoryGetAllVatCategoriesRequest(
        vendorCd: 'test string',
        greaterThanValue: 'test string',
        numberToRead: 123,
        skipRecords: 123,
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        createdDateTime: 'test string',
        createdDateTimeCondition: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(VatCategoryGetAllVatCategoriesRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toHaveCount(2);
    expect($collection->first())
        ->vatCategoryId->toBe('mock-id-123')
        ->description->toBe('String value')
        ->active->toBe(true)
        ->excludeListedTaxes->toBe(true)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'));
});
