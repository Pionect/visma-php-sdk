<?php

use Pionect\VismaSdk\Enums\SalesOrderLineOperationEnum;
use Pionect\VismaSdk\Enums\SalesOrderTypeBehaviorEnum;
use Pionect\VismaSdk\Enums\SalesOrderTypeCustomerDocumentTypeEnum;
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
            'behavior' => 'SalesOrder',
            'defaultOperation' => 'Issue',
            'customerDocumentType' => 'Invoice',
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
        ->behavior->toEqual(SalesOrderTypeBehaviorEnum::SALES_ORDER)
        ->defaultOperation->toEqual(SalesOrderLineOperationEnum::ISSUE)
        ->customerDocumentType->toEqual(SalesOrderTypeCustomerDocumentTypeEnum::INVOICE)
        ->errorInfo->toBe('String value');
});

it('calls the salesOrderTypeGetAllSalesOrderTypesRequest method in the SalesOrderType resource', function () {
    Saloon::fake([
        SalesOrderTypeGetAllSalesOrderTypesRequest::class => MockResponse::make([
            0 => [
                'orderType' => 'String value',
                'active' => true,
                'description' => 'String value',
                'behavior' => 'SalesOrder',
                'defaultOperation' => 'Issue',
                'customerDocumentType' => 'Invoice',
                'errorInfo' => 'String value',
            ],
            1 => [
                'orderType' => 'String value',
                'active' => true,
                'description' => 'String value',
                'behavior' => 'SalesOrder',
                'defaultOperation' => 'Issue',
                'customerDocumentType' => 'Invoice',
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

    expect($collection)->toHaveCount(2);
    expect($collection->first())
        ->orderType->toBe('String value')
        ->active->toBe(true)
        ->description->toBe('String value')
        ->behavior->toEqual(SalesOrderTypeBehaviorEnum::SALES_ORDER)
        ->defaultOperation->toEqual(SalesOrderLineOperationEnum::ISSUE)
        ->customerDocumentType->toEqual(SalesOrderTypeCustomerDocumentTypeEnum::INVOICE)
        ->errorInfo->toBe('String value');
});
