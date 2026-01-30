<?php

use Pionect\VismaSdk\Requests\SalesOrderBasicV2\SalesOrderBasicV2CreateHeaderAttachmentByorderNumberorderTypeRequest;
use Pionect\VismaSdk\Requests\SalesOrderBasicV2\SalesOrderBasicV2CreateHeaderAttachmentByorderNumberRequest;
use Pionect\VismaSdk\Requests\SalesOrderBasicV2\SalesOrderBasicV2CreateLineAttachmentByorderNumberlineNumberRequest;
use Pionect\VismaSdk\Requests\SalesOrderBasicV2\SalesOrderBasicV2CreateLineAttachmentByorderNumberorderTypelineNumberRequest;
use Pionect\VismaSdk\Requests\SalesOrderBasicV2\SalesOrderBasicV2CreateShipmentActionBysaleOrderNumberRequest;
use Pionect\VismaSdk\Requests\SalesOrderBasicV2\SalesOrderBasicV2PostRequest;
use Pionect\VismaSdk\Requests\SalesOrderBasicV2\SalesOrderBasicV2PrepareInvoiceActionByorderTypeorderNumberRequest;
use Pionect\VismaSdk\Requests\SalesOrderBasicV2\SalesOrderBasicV2SendEmailActionByorderTypeorderNumberRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the salesOrderBasicV2createShipmentActionBysaleOrderNumberRequest method in the SalesOrderBasicV2 resource', function () {
    $bodyData = [
        'name' => 'Test value',
    ];

    Saloon::fake([
        SalesOrderBasicV2CreateShipmentActionBysaleOrderNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SalesOrderBasicV2CreateShipmentActionBysaleOrderNumberRequest(
        saleOrderNumber: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderBasicV2CreateShipmentActionBysaleOrderNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the salesOrderBasicV2prepareInvoiceActionByorderTypeorderNumberRequest method in the SalesOrderBasicV2 resource', function () {
    $bodyData = [
        'name' => 'Test value',
    ];

    Saloon::fake([
        SalesOrderBasicV2PrepareInvoiceActionByorderTypeorderNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SalesOrderBasicV2PrepareInvoiceActionByorderTypeorderNumberRequest(
        orderType: 'test string',
        orderNumber: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderBasicV2PrepareInvoiceActionByorderTypeorderNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the salesOrderBasicV2sendEmailActionByorderTypeorderNumberRequest method in the SalesOrderBasicV2 resource', function () {
    $bodyData = [
        'name' => 'Test value',
    ];

    Saloon::fake([
        SalesOrderBasicV2SendEmailActionByorderTypeorderNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SalesOrderBasicV2SendEmailActionByorderTypeorderNumberRequest(
        orderType: 'test string',
        orderNumber: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderBasicV2SendEmailActionByorderTypeorderNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the salesOrderBasicV2createHeaderAttachmentByorderNumberRequest method in the SalesOrderBasicV2 resource', function () {
    $bodyData = [
        'name' => 'Test value',
    ];

    Saloon::fake([
        SalesOrderBasicV2CreateHeaderAttachmentByorderNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SalesOrderBasicV2CreateHeaderAttachmentByorderNumberRequest(
        orderNumber: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderBasicV2CreateHeaderAttachmentByorderNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the salesOrderBasicV2createHeaderAttachmentByorderNumberorderTypeRequest method in the SalesOrderBasicV2 resource', function () {
    $bodyData = [
        'name' => 'Test value',
    ];

    Saloon::fake([
        SalesOrderBasicV2CreateHeaderAttachmentByorderNumberorderTypeRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SalesOrderBasicV2CreateHeaderAttachmentByorderNumberorderTypeRequest(
        orderNumber: 'test string',
        orderType: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderBasicV2CreateHeaderAttachmentByorderNumberorderTypeRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the salesOrderBasicV2createLineAttachmentByorderNumberlineNumberRequest method in the SalesOrderBasicV2 resource', function () {
    $bodyData = [
        'name' => 'Test value',
    ];

    Saloon::fake([
        SalesOrderBasicV2CreateLineAttachmentByorderNumberlineNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SalesOrderBasicV2CreateLineAttachmentByorderNumberlineNumberRequest(
        orderNumber: 'test string',
        lineNumber: 123,
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderBasicV2CreateLineAttachmentByorderNumberlineNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the salesOrderBasicV2createLineAttachmentByorderNumberorderTypelineNumberRequest method in the SalesOrderBasicV2 resource', function () {
    $bodyData = [
        'name' => 'Test value',
    ];

    Saloon::fake([
        SalesOrderBasicV2CreateLineAttachmentByorderNumberorderTypelineNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SalesOrderBasicV2CreateLineAttachmentByorderNumberorderTypelineNumberRequest(
        orderNumber: 'test string',
        orderType: 'test string',
        lineNumber: 123,
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderBasicV2CreateLineAttachmentByorderNumberorderTypelineNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the salesOrderBasicV2postRequest method in the SalesOrderBasicV2 resource', function () {
    $bodyData = [
        'name' => 'Test value',
    ];

    Saloon::fake([
        SalesOrderBasicV2PostRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SalesOrderBasicV2PostRequest(
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderBasicV2PostRequest::class);

    expect($response->status())->toBe(201);
});
