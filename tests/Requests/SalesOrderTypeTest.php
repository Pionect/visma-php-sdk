<?php

// Generated 2026-01-30 14:10:14

use Pionect\VismaSdk\Requests\SalesOrderType\SalesOrderTypeGetAllSalesOrderTypesRequest;
use Pionect\VismaSdk\Requests\SalesOrderType\SalesOrderTypeGetSalesOrderTypeByorderTypeRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the salesOrderTypeGetSalesOrderTypeByorderTypeRequest method in the SalesOrderType resource', function () {
    Saloon::fake([
        SalesOrderTypeGetSalesOrderTypeByorderTypeRequest::class => MockResponse::make([
            'orderType' => 'String value',
            'active' => true,
            'description' => 'String value',
            'behavior' => 'String value',
            'defaultOperation' => 'String value',
            'customerDocumentType' => 'String value',
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new SalesOrderTypeGetSalesOrderTypeByorderTypeRequest(
        orderType: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderTypeGetSalesOrderTypeByorderTypeRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->orderType->toBe('String value')
        ->active->toBe(true)
        ->description->toBe('String value')
        ->behavior->toBe('String value')
        ->defaultOperation->toBe('String value')
        ->customerDocumentType->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the salesOrderTypeGetAllSalesOrderTypesRequest method in the SalesOrderType resource', function () {
    Saloon::fake([
        SalesOrderTypeGetAllSalesOrderTypesRequest::class => MockResponse::make([
            0 => [
                'orderType' => 'String value',
                'active' => true,
                'description' => 'String value',
                'behavior' => 'String value',
                'defaultOperation' => 'String value',
                'customerDocumentType' => 'String value',
                'errorInfo' => 'String value',
            ],
            1 => [
                'orderType' => 'String value',
                'active' => true,
                'description' => 'String value',
                'behavior' => 'String value',
                'defaultOperation' => 'String value',
                'customerDocumentType' => 'String value',
                'errorInfo' => 'String value',
            ],
        ], 200),
    ]);

    $request = new SalesOrderTypeGetAllSalesOrderTypesRequest(
        orderBy: 'test string',
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderTypeGetAllSalesOrderTypesRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toBeArray()
        ->and($collection)->toHaveCount(2);

    $firstItem = $collection[0];

    expect($firstItem)
        ->orderType->toBe('String value')
        ->active->toBe(true)
        ->description->toBe('String value')
        ->behavior->toBe('String value')
        ->defaultOperation->toBe('String value')
        ->customerDocumentType->toBe('String value')
        ->errorInfo->toBe('String value');
});
