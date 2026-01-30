<?php

use Pionect\VismaSdk\Dto\CreateShipmentActionDto;
use Pionect\VismaSdk\Dto\SalesOrderBasicUpdateDto;
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
    $bodyData = new CreateShipmentActionDto(
        orderType: 'String value',
        returnShipmentDto: true,
        shipmentDate: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        shipmentWarehouse: 'String value',
        operation: 'String value'
    );

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
    $bodyData = [];

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
    $bodyData = [];

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
    $bodyData = [];

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
    $bodyData = [];

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
    $bodyData = [];

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
    $bodyData = [];

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
    $bodyData = new SalesOrderBasicUpdateDto(
        lines: [],
        orderType: null,
        orderNumber: 'String value',
        hold: true,
        date: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        requestOn: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        customerOrder: 'String value',
        customerRefNo: 'String value',
        customer: null,
        location: 'String value',
        contactId: 42,
        gln: null,
        vatRegistrationId: null,
        currency: 'String value',
        description: 'String value',
        recalculateShipment: true,
        branchNumber: 'String value',
        note: 'String value',
        overrideNumberSeries: true
    );

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
