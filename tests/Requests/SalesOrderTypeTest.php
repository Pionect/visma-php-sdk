<?php

// auto-generated

use Pionect\VismaSdk\Requests\SalesOrderType\SalesOrderTypeGetAllSalesOrderTypesCollectionRequest;
use Pionect\VismaSdk\Requests\SalesOrderType\SalesOrderTypeGetSalesOrderTypeByorderTypeRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector(
        clientId: 'replace',
        clientSecret: 'replace'
    );
});

it('calls the salesOrderTypeGetSalesOrderTypeByorderType method in the SalesOrderType resource', function () {
    Saloon::fake([
        SalesOrderTypeGetSalesOrderTypeByorderTypeRequest::class => MockResponse::make([
            'orderType' => 'Mock value',
            'active' => true,
            'description' => 'Mock value',
            'behavior' => 'Mock value',
            'defaultOperation' => 'Mock value',
            'customerDocumentType' => 'Mock value',
            'errorInfo' => 'Mock value',
            'metadata' => 'Mock value',
        ], 200),
    ]);

    $request = new SalesOrderTypeGetSalesOrderTypeByorderTypeRequest(
        orderTypeId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderTypeGetSalesOrderTypeByorderTypeRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->orderType->toBe('Mock value')
        ->active->toBeTrue()
        ->description->toBe('Mock value')
        ->behavior->toBe('Mock value')
        ->defaultOperation->toBe('Mock value')
        ->customerDocumentType->toBe('Mock value')
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the salesOrderTypeGetAllSalesOrderTypesCollection method in the SalesOrderType resource', function () {
    Saloon::fake([
        SalesOrderTypeGetAllSalesOrderTypesCollectionRequest::class => MockResponse::make([
            0 => [
                'orderType' => 'Mock value',
                'active' => true,
                'description' => 'Mock value',
                'behavior' => 'Mock value',
                'defaultOperation' => 'Mock value',
                'customerDocumentType' => 'Mock value',
                'errorInfo' => 'Mock value',
                'metadata' => 'Mock value',
            ],
            1 => [
                'orderType' => 'Mock value',
                'active' => true,
                'description' => 'Mock value',
                'behavior' => 'Mock value',
                'defaultOperation' => 'Mock value',
                'customerDocumentType' => 'Mock value',
                'errorInfo' => 'Mock value',
                'metadata' => 'Mock value',
            ],
        ], 200),
    ]);

    $request = (new SalesOrderTypeGetAllSalesOrderTypesCollectionRequest(orderBy: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', pageNumber: 123, pageSize: 123));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (SalesOrderTypeGetAllSalesOrderTypesCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->orderType->toBe('Mock value')
        ->active->toBeTrue()
        ->description->toBe('Mock value')
        ->behavior->toBe('Mock value')
        ->defaultOperation->toBe('Mock value')
        ->customerDocumentType->toBe('Mock value')
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});
