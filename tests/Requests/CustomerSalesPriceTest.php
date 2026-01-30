<?php

use Pionect\VismaSdk\Dto\CustomerSalesPriceUpdateDto;
use Pionect\VismaSdk\Requests\CustomerSalesPrice\CustomerSalesPriceGetCustomerSalesPriceByrecordIdRequest;
use Pionect\VismaSdk\Requests\CustomerSalesPrice\CustomerSalesPriceGetCustomerSalesPricesRequest;
use Pionect\VismaSdk\Requests\CustomerSalesPrice\CustomerSalesPricePostCustomerSalesPriceRequest;
use Pionect\VismaSdk\Requests\CustomerSalesPrice\CustomerSalesPricePutCustomerSalesPriceByrecordIdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the customerSalesPriceGetCustomerSalesPricesRequest method in the CustomerSalesPrice resource', function () {
    Saloon::fake([
        CustomerSalesPriceGetCustomerSalesPricesRequest::class => MockResponse::make([
            0 => [
                'recordId' => 42,
                'priceType' => 'String value',
                'priceCode' => 'String value',
                'inventoryId' => 'mock-id-123',
                'description' => 'String value',
                'uoM' => 'String value',
                'promotion' => true,
                'breakQty' => 42,
                'price' => 42,
                'currency' => 'String value',
                'vat' => 'String value',
                'effectiveDate' => '2025-11-22T10:40:04+00:00',
                'expirationDate' => '2025-11-22T10:40:04+00:00',
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'warehouse' => 'String value',
                'timeStamp' => 'String value',
                'errorInfo' => 'String value',
            ],
            1 => [
                'recordId' => 42,
                'priceType' => 'String value',
                'priceCode' => 'String value',
                'inventoryId' => 'mock-id-123',
                'description' => 'String value',
                'uoM' => 'String value',
                'promotion' => true,
                'breakQty' => 42,
                'price' => 42,
                'currency' => 'String value',
                'vat' => 'String value',
                'effectiveDate' => '2025-11-22T10:40:04+00:00',
                'expirationDate' => '2025-11-22T10:40:04+00:00',
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'warehouse' => 'String value',
                'timeStamp' => 'String value',
                'errorInfo' => 'String value',
            ],
        ], 200),
    ]);

    $request = new CustomerSalesPriceGetCustomerSalesPricesRequest(
        greaterThanValue: 'test string',
        numberToRead: 123,
        skipRecords: 123,
        priceType: 'test string',
        priceCode: 'test string',
        inventoryId: 'test string',
        effectiveAsOf: 'test string',
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerSalesPriceGetCustomerSalesPricesRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toHaveCount(2);
    expect($collection->first())
        ->recordId->toBe(42)
        ->priceType->toBe('String value')
        ->priceCode->toBe('String value')
        ->inventoryId->toBe('mock-id-123')
        ->description->toBe('String value')
        ->uoM->toBe('String value')
        ->promotion->toBe(true)
        ->breakQty->toBe(42)
        ->price->toBe(42)
        ->currency->toBe('String value')
        ->vat->toBe('String value')
        ->effectiveDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->expirationDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->warehouse->toBe('String value')
        ->timeStamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the customerSalesPricePostCustomerSalesPriceRequest method in the CustomerSalesPrice resource', function () {
    $bodyData = new CustomerSalesPriceUpdateDto(
        priceType: 'String value',
        priceCode: 'String value',
        inventoryId: 'mock-id-123',
        uoM: 'String value',
        promotion: true,
        breakQty: 42,
        price: 42,
        currency: 'String value',
        vat: 'String value',
        effectiveDate: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        expirationDate: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        warehouse: 'String value'
    );

    Saloon::fake([
        CustomerSalesPricePostCustomerSalesPriceRequest::class => MockResponse::make([], 201),
    ]);

    $request = new CustomerSalesPricePostCustomerSalesPriceRequest(
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerSalesPricePostCustomerSalesPriceRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the customerSalesPriceGetCustomerSalesPriceByrecordIdRequest method in the CustomerSalesPrice resource', function () {
    Saloon::fake([
        CustomerSalesPriceGetCustomerSalesPriceByrecordIdRequest::class => MockResponse::make([
            'recordId' => 42,
            'priceType' => 'String value',
            'priceCode' => 'String value',
            'inventoryId' => 'mock-id-123',
            'description' => 'String value',
            'uoM' => 'String value',
            'promotion' => true,
            'breakQty' => 42,
            'price' => 42,
            'currency' => 'String value',
            'vat' => 'String value',
            'effectiveDate' => '2025-11-22T10:40:04+00:00',
            'expirationDate' => '2025-11-22T10:40:04+00:00',
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'warehouse' => 'String value',
            'timeStamp' => 'String value',
            'errorInfo' => 'String value',
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
        ->promotion->toBe(true)
        ->breakQty->toBe(42)
        ->price->toBe(42)
        ->currency->toBe('String value')
        ->vat->toBe('String value')
        ->effectiveDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->expirationDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->warehouse->toBe('String value')
        ->timeStamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the customerSalesPricePutCustomerSalesPriceByrecordIdRequest method in the CustomerSalesPrice resource', function () {
    $bodyData = new CustomerSalesPriceUpdateDto(
        priceType: 'String value',
        priceCode: 'String value',
        inventoryId: 'mock-id-123',
        uoM: 'String value',
        promotion: true,
        breakQty: 42,
        price: 42,
        currency: 'String value',
        vat: 'String value',
        effectiveDate: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        expirationDate: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        warehouse: 'String value'
    );

    Saloon::fake([
        CustomerSalesPricePutCustomerSalesPriceByrecordIdRequest::class => MockResponse::make([], 201),
    ]);

    $request = new CustomerSalesPricePutCustomerSalesPriceByrecordIdRequest(
        recordId: 123,
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerSalesPricePutCustomerSalesPriceByrecordIdRequest::class);

    expect($response->status())->toBe(201);
});
