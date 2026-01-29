<?php

// auto-generated

use Pionect\VismaSdk\Requests\SalesOrderType\SalesOrderTypeGetAllSalesOrderTypesCollectionRequest;
use Pionect\VismaSdk\Requests\SalesOrderType\SalesOrderTypeGetSalesOrderTypeByorderTypeRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the salesOrderTypeGetSalesOrderTypeByorderType method in the SalesOrderType resource', function () {
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
        ->active->toBeTrue()
        ->description->toBe('String value')
        ->behavior->toBe('String value')
        ->defaultOperation->toBe('String value')
        ->customerDocumentType->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the salesOrderTypeGetAllSalesOrderTypesCollection method in the SalesOrderType resource', function () {
    Saloon::fake([
        SalesOrderTypeGetAllSalesOrderTypesCollectionRequest::class => MockResponse::make([
            0 => [
                'orderType' => 'String value',
                'active' => true,
                'description' => 'String value',
                'behavior' => 'String value',
                'defaultOperation' => 'String value',
                'customerDocumentType' => 'String value',
                'errorInfo' => 'String value',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
            1 => [
                'orderType' => 'String value',
                'active' => true,
                'description' => 'String value',
                'behavior' => 'String value',
                'defaultOperation' => 'String value',
                'customerDocumentType' => 'String value',
                'errorInfo' => 'String value',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
        ], 200),
    ]);

    $request = (new SalesOrderTypeGetAllSalesOrderTypesCollectionRequest(orderBy: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', pageNumber: 123, pageSize: 123));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (SalesOrderTypeGetAllSalesOrderTypesCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->orderType->toBe('String value')
        ->active->toBeTrue()
        ->description->toBe('String value')
        ->behavior->toBe('String value')
        ->defaultOperation->toBe('String value')
        ->customerDocumentType->toBe('String value')
        ->errorInfo->toBe('String value');
});
