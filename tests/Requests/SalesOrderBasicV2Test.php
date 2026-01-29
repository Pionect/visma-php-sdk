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
        'actionId' => 'action_id-123',
        'actionResult' => 'test value',
        'errorInfo' => 'test value',
    ])->make();

    $request = new SalesOrderBasicV2CreateShipmentActionBysaleOrderNumberRequest(saleOrderNumber: 'test value', data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderBasicV2CreateShipmentActionBysaleOrderNumberRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->referenceNumber->toBe('test value')
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value')
            ->errorInfo->toBe('test value');

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
        'actionId' => 'action_id-123',
        'actionResult' => 'test value',
        'errorInfo' => 'test value',
    ])->make();

    $request = new SalesOrderBasicV2PrepareInvoiceActionByorderTypeorderNumberRequest(orderType: 'test value', orderNumber: 'test value', data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderBasicV2PrepareInvoiceActionByorderTypeorderNumberRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->referenceNumber->toBe('test value')
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value')
            ->errorInfo->toBe('test value');

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

    $request = new SalesOrderBasicV2SendEmailActionByorderTypeorderNumberRequest(orderType: 'test value', orderNumber: 'test value', data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderBasicV2SendEmailActionByorderTypeorderNumberRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value')
            ->errorInfo->toBe('test value');

        return true;
    });
});
