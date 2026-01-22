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
            'data' => [
                0 => [
                    'type' => 'customerSalesPrices',
                    'id' => 'mock-id-1',
                    'attributes' => [
                        'recordId' => 42,
                        'priceType' => 'Mock value',
                        'priceCode' => 'Mock value',
                        'inventoryId' => 'mock-id-123',
                        'description' => 'Mock value',
                        'uoM' => 'Mock value',
                        'promotion' => true,
                        'breakQty' => 3.14,
                        'price' => 3.14,
                        'currency' => 'Mock value',
                        'vat' => 'Mock value',
                        'effectiveDate' => '2025-11-22T10:40:04.065Z',
                        'expirationDate' => '2025-11-22T10:40:04.065Z',
                        'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                        'warehouse' => 'Mock value',
                        'timeStamp' => '2025-11-22T10:40:04.065Z',
                        'errorInfo' => 'Mock value',
                        'metadata' => 'Mock value',
                    ],
                ],
                1 => [
                    'type' => 'customerSalesPrices',
                    'id' => 'mock-id-2',
                    'attributes' => [
                        'recordId' => 42,
                        'priceType' => 'Mock value',
                        'priceCode' => 'Mock value',
                        'inventoryId' => 'mock-id-123',
                        'description' => 'Mock value',
                        'uoM' => 'Mock value',
                        'promotion' => true,
                        'breakQty' => 3.14,
                        'price' => 3.14,
                        'currency' => 'Mock value',
                        'vat' => 'Mock value',
                        'effectiveDate' => '2025-11-22T10:40:04.065Z',
                        'expirationDate' => '2025-11-22T10:40:04.065Z',
                        'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                        'warehouse' => 'Mock value',
                        'timeStamp' => '2025-11-22T10:40:04.065Z',
                        'errorInfo' => 'Mock value',
                        'metadata' => 'Mock value',
                    ],
                ],
            ],
        ], 200),
    ]);

    $request = (new CustomerSalesPriceGetCustomerSalesPricesCollectionRequest(greaterThanValue: 'test string', numberToRead: 123, skipRecords: 123, priceType: 'test string', priceCode: 'test string', inventoryId: 'test string', effectiveAsOf: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', pageNumber: 123, pageSize: 123));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (CustomerSalesPriceGetCustomerSalesPricesCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->recordId->toBe(42)
        ->priceType->toBe('Mock value')
        ->priceCode->toBe('Mock value')
        ->inventoryId->toBe('mock-id-123')
        ->description->toBe('Mock value')
        ->uoM->toBe('Mock value')
        ->promotion->toBe(true)
        ->breakQty->toBe(3.14)
        ->price->toBe(3.14)
        ->currency->toBe('Mock value')
        ->vat->toBe('Mock value')
        ->effectiveDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->expirationDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->warehouse->toBe('Mock value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the customerSalesPriceGetCustomerSalesPriceByrecordId method in the CustomerSalesPrice resource', function () {
    Saloon::fake([
        CustomerSalesPriceGetCustomerSalesPriceByrecordIdRequest::class => MockResponse::make([
            'data' => [
                'type' => 'customerSalesPrices',
                'id' => 'mock-id-123',
                'attributes' => [
                    'recordId' => 42,
                    'priceType' => 'Mock value',
                    'priceCode' => 'Mock value',
                    'inventoryId' => 'mock-id-123',
                    'description' => 'Mock value',
                    'uoM' => 'Mock value',
                    'promotion' => true,
                    'breakQty' => 3.14,
                    'price' => 3.14,
                    'currency' => 'Mock value',
                    'vat' => 'Mock value',
                    'effectiveDate' => '2025-11-22T10:40:04.065Z',
                    'expirationDate' => '2025-11-22T10:40:04.065Z',
                    'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                    'warehouse' => 'Mock value',
                    'timeStamp' => '2025-11-22T10:40:04.065Z',
                    'errorInfo' => 'Mock value',
                    'metadata' => 'Mock value',
                ],
            ],
        ], 200),
    ]);

    $request = new CustomerSalesPriceGetCustomerSalesPriceByrecordIdRequest(
        recordIdId: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerSalesPriceGetCustomerSalesPriceByrecordIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->recordId->toBe(42)
        ->priceType->toBe('Mock value')
        ->priceCode->toBe('Mock value')
        ->inventoryId->toBe('mock-id-123')
        ->description->toBe('Mock value')
        ->uoM->toBe('Mock value')
        ->promotion->toBe(true)
        ->breakQty->toBe(3.14)
        ->price->toBe(3.14)
        ->currency->toBe('Mock value')
        ->vat->toBe('Mock value')
        ->effectiveDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->expirationDate->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->warehouse->toBe('Mock value')
        ->timeStamp->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});
