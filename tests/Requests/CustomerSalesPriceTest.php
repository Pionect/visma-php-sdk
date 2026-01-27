<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\CustomerSalesPrice\CustomerSalesPriceGetCustomerSalesPriceByrecordIdRequest;
use Pionect\VismaSdk\Requests\CustomerSalesPrice\CustomerSalesPriceGetCustomerSalesPricesCollectionRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the customerSalesPriceGetCustomerSalesPricesCollection method in the CustomerSalesPrice resource', function () {
    Saloon::fake([
        CustomerSalesPriceGetCustomerSalesPricesCollectionRequest::class => MockResponse::make([
            0 => [
                'recordId' => 42,
                'priceType' => 'String value',
                'priceCode' => 'String value',
                'inventoryId' => 'mock-id-123',
                'description' => 'String value',
                'uoM' => 'String value',
                'promotion' => true,
                'breakQty' => 3.14,
                'price' => 3.14,
                'currency' => 'String value',
                'vat' => 'String value',
                'effectiveDate' => '2025-11-22T10:40:04.065Z',
                'expirationDate' => '2025-11-22T10:40:04.065Z',
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'warehouse' => 'String value',
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'String value',
                'id' => 'mock-id-123',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
            1 => [
                'recordId' => 42,
                'priceType' => 'String value',
                'priceCode' => 'String value',
                'inventoryId' => 'mock-id-123',
                'description' => 'String value',
                'uoM' => 'String value',
                'promotion' => true,
                'breakQty' => 3.14,
                'price' => 3.14,
                'currency' => 'String value',
                'vat' => 'String value',
                'effectiveDate' => '2025-11-22T10:40:04.065Z',
                'expirationDate' => '2025-11-22T10:40:04.065Z',
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'warehouse' => 'String value',
                'timeStamp' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'String value',
                'id' => 'mock-id-123',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
        ], 200),
    ]);

    $request = (new CustomerSalesPriceGetCustomerSalesPricesCollectionRequest(greaterThanValue: 'test string', numberToRead: 123, skipRecords: 123, priceType: 'test string', priceCode: 'test string', inventoryId: 'test string', effectiveAsOf: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', pageNumber: 123, pageSize: 123));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (CustomerSalesPriceGetCustomerSalesPricesCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->recordId->toBe(42)
        ->priceType->toBe('String value')
        ->priceCode->toBe('String value')
        ->inventoryId->toBe('mock-id-123')
        ->description->toBe('String value')
        ->uoM->toBe('String value')
        ->promotion->toBeTrue()
        ->breakQty->toBe(3.14)
        ->price->toBe(3.14)
        ->currency->toBe('String value')
        ->vat->toBe('String value')
        ->effectiveDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->expirationDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->warehouse->toBe('String value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('String value')
        ->id->toBe('mock-id-123');
});

it('calls the customerSalesPriceGetCustomerSalesPriceByrecordId method in the CustomerSalesPrice resource', function () {
    Saloon::fake([
        CustomerSalesPriceGetCustomerSalesPriceByrecordIdRequest::class => MockResponse::make([
            'recordId' => 42,
            'priceType' => 'String value',
            'priceCode' => 'String value',
            'inventoryId' => 'mock-id-123',
            'description' => 'String value',
            'uoM' => 'String value',
            'promotion' => true,
            'breakQty' => 3.14,
            'price' => 3.14,
            'currency' => 'String value',
            'vat' => 'String value',
            'effectiveDate' => '2025-11-22T10:40:04.065Z',
            'expirationDate' => '2025-11-22T10:40:04.065Z',
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'warehouse' => 'String value',
            'timeStamp' => '2025-11-22T10:40:04.065Z',
            'errorInfo' => 'String value',
            'id' => 'mock-id-123',
        ], 200),
    ]);

    $request = new CustomerSalesPriceGetCustomerSalesPriceByrecordIdRequest(
        recordId: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerSalesPriceGetCustomerSalesPriceByrecordIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->recordId->toBe(42)
        ->priceType->toBe('String value')
        ->priceCode->toBe('String value')
        ->inventoryId->toBe('mock-id-123')
        ->description->toBe('String value')
        ->uoM->toBe('String value')
        ->promotion->toBeTrue()
        ->breakQty->toBe(3.14)
        ->price->toBe(3.14)
        ->currency->toBe('String value')
        ->vat->toBe('String value')
        ->effectiveDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->expirationDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->warehouse->toBe('String value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('String value')
        ->id->toBe('mock-id-123');
});
