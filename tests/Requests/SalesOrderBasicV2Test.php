<?php

// auto-generated

use Pionect\VismaSdk\Requests\SalesOrderBasicV2\SalesOrderBasicV2CreateShipmentActionBysaleOrderNumberRequest;
use Pionect\VismaSdk\Requests\SalesOrderBasicV2\SalesOrderBasicV2PrepareInvoiceActionByorderTypeorderNumberRequest;
use Pionect\VismaSdk\Requests\SalesOrderBasicV2\SalesOrderBasicV2SendEmailActionByorderTypeorderNumberRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Http\Request;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the salesOrderBasicV2createShipmentActionBysaleOrderNumber method in the SalesOrderBasicV2 resource', function () {
    $mockClient = Saloon::fake([
        SalesOrderBasicV2CreateShipmentActionBysaleOrderNumberRequest::class => MockResponse::make([], 200),
    ]);

    // Create DTO with sample data
    $dto = \Pionect\VismaSdk\Dto\CreateShipmentActionResultDto::factory()->state([
        'referenceNumber' => 'test value',
        'shipmentDto' => 'test value',
        'actionId' => 'action_id-123',
        'actionResult' => 'test value',
    ])->make();

    $request = new SalesOrderBasicV2CreateShipmentActionBysaleOrderNumberRequest(saleOrderNumberId: 'sale_order_number_id-123', data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderBasicV2CreateShipmentActionBysaleOrderNumberRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->toHaveKey('data')
            ->data->type->toBe('salesOrderBasicV2s')
            ->data->attributes->scoped(fn ($attributes) => $attributes
            ->referenceNumber->toBe('test value')
            ->shipmentDto->toBe('test value')
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value')
            );

        return true;
    });
});

it('calls the salesOrderBasicV2prepareInvoiceActionByorderTypeorderNumber method in the SalesOrderBasicV2 resource', function () {
    $mockClient = Saloon::fake([
        SalesOrderBasicV2PrepareInvoiceActionByorderTypeorderNumberRequest::class => MockResponse::make([], 200),
    ]);

    // Create DTO with sample data
    $dto = \Pionect\VismaSdk\Dto\PrepareInvoiceActionResultDto::factory()->state([
        'referenceNumber' => 'test value',
        'customerInvoiceDto' => 'test value',
        'actionId' => 'action_id-123',
        'actionResult' => 'test value',
    ])->make();

    $request = new SalesOrderBasicV2PrepareInvoiceActionByorderTypeorderNumberRequest(orderTypeId: 'order_type_id-123', orderNumberId: 'order_number_id-123', data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderBasicV2PrepareInvoiceActionByorderTypeorderNumberRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->toHaveKey('data')
            ->data->type->toBe('salesOrderBasicV2s')
            ->data->attributes->scoped(fn ($attributes) => $attributes
            ->referenceNumber->toBe('test value')
            ->customerInvoiceDto->toBe('test value')
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value')
            );

        return true;
    });
});

it('calls the salesOrderBasicV2sendEmailActionByorderTypeorderNumber method in the SalesOrderBasicV2 resource', function () {
    $mockClient = Saloon::fake([
        SalesOrderBasicV2SendEmailActionByorderTypeorderNumberRequest::class => MockResponse::make([], 200),
    ]);

    // Create DTO with sample data
    $dto = \Pionect\VismaSdk\Dto\SendEmailActionResultDto::factory()->state([
        'actionId' => 'action_id-123',
        'actionResult' => 'test value',
        'errorInfo' => 'test value',
    ])->make();

    $request = new SalesOrderBasicV2SendEmailActionByorderTypeorderNumberRequest(orderTypeId: 'order_type_id-123', orderNumberId: 'order_number_id-123', data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderBasicV2SendEmailActionByorderTypeorderNumberRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->toHaveKey('data')
            ->data->type->toBe('salesOrderBasicV2s')
            ->data->attributes->scoped(fn ($attributes) => $attributes
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value')
            ->errorInfo->toBe('test value')
            );

        return true;
    });
});
