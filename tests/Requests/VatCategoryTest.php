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
            'vatCategoryId' => 'mock-id-123',
            'description' => 'String value',
            'active' => true,
            'excludeListedTaxes' => true,
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'vatCategoryLines' => [],
            'id' => 'mock-id-123',
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
        ->active->toBeTrue()
        ->excludeListedTaxes->toBeTrue()
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->id->toBe('mock-id-123');
});

it('calls the vatCategoryGetAllVatCategoriesCollection method in the VatCategory resource', function () {
    Saloon::fake([
        VatCategoryGetAllVatCategoriesCollectionRequest::class => MockResponse::make([
            0 => [
                'vatCategoryId' => 'mock-id-123',
                'description' => 'String value',
                'active' => true,
                'excludeListedTaxes' => true,
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'vatCategoryLines' => [],
                'id' => 'mock-id-123',
            ],
            1 => [
                'vatCategoryId' => 'mock-id-123',
                'description' => 'String value',
                'active' => true,
                'excludeListedTaxes' => true,
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'vatCategoryLines' => [],
                'id' => 'mock-id-123',
            ],
        ], 200),
    ]);

    $request = (new VatCategoryGetAllVatCategoriesCollectionRequest(vendorCd: 'test string', greaterThanValue: 'test string', numberToRead: 123, skipRecords: 123, lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', createdDateTime: 'test string', createdDateTimeCondition: 'test string'));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (VatCategoryGetAllVatCategoriesCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->vatCategoryId->toBe('mock-id-123')
        ->description->toBe('String value')
        ->active->toBeTrue()
        ->excludeListedTaxes->toBeTrue()
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->id->toBe('mock-id-123');
});
