<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\VatCategory\VatCategoryGetAllVatCategoriesCollectionRequest;
use Pionect\VismaSdk\Requests\VatCategory\VatCategoryGetVatCategoryBytaxCategoryIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the vatCategoryGetVatCategoryBytaxCategoryId method in the VatCategory resource', function () {
    Saloon::fake([
        VatCategoryGetVatCategoryBytaxCategoryIdRequest::class => MockResponse::make([
            'data' => [
                'type' => 'vatCategories',
                'id' => 'mock-id-123',
                'attributes' => [
                    'vatCategoryId' => 'mock-id-123',
                    'description' => 'Mock value',
                    'active' => true,
                    'excludeListedTaxes' => true,
                    'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                    'vatCategoryLines' => [],
                ],
            ],
        ], 200),
    ]);

    $request = new VatCategoryGetVatCategoryBytaxCategoryIdRequest(
        taxCategoryIdId: 'test string',
        vendorCd: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(VatCategoryGetVatCategoryBytaxCategoryIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->vatCategoryId->toBe('mock-id-123')
        ->description->toBe('Mock value')
        ->active->toBe(true)
        ->excludeListedTaxes->toBe(true)
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'));
});

it('calls the vatCategoryGetAllVatCategoriesCollection method in the VatCategory resource', function () {
    Saloon::fake([
        VatCategoryGetAllVatCategoriesCollectionRequest::class => MockResponse::make([
            'data' => [
                0 => [
                    'type' => 'vatCategories',
                    'id' => 'mock-id-1',
                    'attributes' => [
                        'vatCategoryId' => 'mock-id-123',
                        'description' => 'Mock value',
                        'active' => true,
                        'excludeListedTaxes' => true,
                        'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                        'vatCategoryLines' => [],
                    ],
                ],
                1 => [
                    'type' => 'vatCategories',
                    'id' => 'mock-id-2',
                    'attributes' => [
                        'vatCategoryId' => 'mock-id-123',
                        'description' => 'Mock value',
                        'active' => true,
                        'excludeListedTaxes' => true,
                        'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                        'vatCategoryLines' => [],
                    ],
                ],
            ],
        ], 200),
    ]);

    $request = (new VatCategoryGetAllVatCategoriesCollectionRequest(vendorCd: 'test string', greaterThanValue: 'test string', numberToRead: 123, skipRecords: 123, lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', createdDateTime: 'test string', createdDateTimeCondition: 'test string'));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (VatCategoryGetAllVatCategoriesCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->vatCategoryId->toBe('mock-id-123')
        ->description->toBe('Mock value')
        ->active->toBe(true)
        ->excludeListedTaxes->toBe(true)
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'));
});
