<?php

use Pionect\VismaSdk\Dto\SalesOrderBasicUpdateDto;
use Pionect\VismaSdk\Requests\SalesOrderBasic\SalesOrderBasicCreateHeaderAttachmentByorderNumberorderTypeRequest;
use Pionect\VismaSdk\Requests\SalesOrderBasic\SalesOrderBasicCreateHeaderAttachmentByorderNumberRequest;
use Pionect\VismaSdk\Requests\SalesOrderBasic\SalesOrderBasicCreateLineAttachmentByorderNumberlineNumberRequest;
use Pionect\VismaSdk\Requests\SalesOrderBasic\SalesOrderBasicCreateLineAttachmentByorderNumberorderTypelineNumberRequest;
use Pionect\VismaSdk\Requests\SalesOrderBasic\SalesOrderBasicCreateShipmentActionBysaleOrderNumberRequest;
use Pionect\VismaSdk\Requests\SalesOrderBasic\SalesOrderBasicDeleteLineAttachmentByorderNumberorderTypelineNumberfileIdRequest;
use Pionect\VismaSdk\Requests\SalesOrderBasic\SalesOrderBasicDeleteOrderAttachmentByorderNumberorderTypefileIdRequest;
use Pionect\VismaSdk\Requests\SalesOrderBasic\SalesOrderBasicGetAllOrdersRequest;
use Pionect\VismaSdk\Requests\SalesOrderBasic\SalesOrderBasicGetByorderNbrRequest;
use Pionect\VismaSdk\Requests\SalesOrderBasic\SalesOrderBasicGetOrderByTypeByorderTypeorderNbrRequest;
use Pionect\VismaSdk\Requests\SalesOrderBasic\SalesOrderBasicPostRequest;
use Pionect\VismaSdk\Requests\SalesOrderBasic\SalesOrderBasicPutByorderNbrRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the salesOrderBasicGetByorderNbrRequest method in the SalesOrderBasic resource', function () {
    Saloon::fake([
        SalesOrderBasicGetByorderNbrRequest::class => MockResponse::make([
            'lines' => [],
            'orderType' => 'String value',
            'orderNo' => 'String value',
            'status' => 'String value',
            'hold' => true,
            'date' => '2025-11-22T10:40:04+00:00',
            'requestOn' => '2025-11-22T10:40:04+00:00',
            'customerOrder' => 'String value',
            'customerRefNo' => 'String value',
            'customer' => null,
            'contactId' => 42,
            'location' => null,
            'currency' => 'String value',
            'description' => 'String value',
            'orderTotal' => 42,
            'orderTotalInBaseCurrency' => 42,
            'vatTaxableTotal' => 42,
            'vatTaxableTotalInBaseCurrency' => 42,
            'vatExemptTotal' => 42,
            'vatExemptTotalInBaseCurrency' => 42,
            'taxTotal' => 42,
            'taxTotalInBaseCurrency' => 42,
            'exchangeRate' => 42,
            'discountTotal' => 42,
            'discountTotalInBaseCurrency' => 42,
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'branchNumber' => null,
            'note' => 'String value',
            'attachments' => [],
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new SalesOrderBasicGetByorderNbrRequest(
        orderNbr: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderBasicGetByorderNbrRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->orderType->toBe('String value')
        ->orderNo->toBe('String value')
        ->status->toBe('String value')
        ->hold->toBe(true)
        ->date->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->requestOn->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->customerOrder->toBe('String value')
        ->customerRefNo->toBe('String value')
        ->customer->toBeNull()
        ->contactId->toBe(42)
        ->location->toBeNull()
        ->currency->toBe('String value')
        ->description->toBe('String value')
        ->orderTotal->toBe(42)
        ->orderTotalInBaseCurrency->toBe(42)
        ->vatTaxableTotal->toBe(42)
        ->vatTaxableTotalInBaseCurrency->toBe(42)
        ->vatExemptTotal->toBe(42)
        ->vatExemptTotalInBaseCurrency->toBe(42)
        ->taxTotal->toBe(42)
        ->taxTotalInBaseCurrency->toBe(42)
        ->exchangeRate->toBe(42)
        ->discountTotal->toBe(42)
        ->discountTotalInBaseCurrency->toBe(42)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->branchNumber->toBeNull()
        ->note->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the salesOrderBasicPutByorderNbrRequest method in the SalesOrderBasic resource', function () {
    $bodyData = new SalesOrderBasicUpdateDto(
        lines: [],
        orderType: null,
        orderNumber: 'String value',
        hold: true,
        date: '2025-11-22T10:40:04+00:00',
        requestOn: '2025-11-22T10:40:04+00:00',
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
        SalesOrderBasicPutByorderNbrRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SalesOrderBasicPutByorderNbrRequest(
        orderNbr: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderBasicPutByorderNbrRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the salesOrderBasicGetOrderByTypeByorderTypeorderNbrRequest method in the SalesOrderBasic resource', function () {
    Saloon::fake([
        SalesOrderBasicGetOrderByTypeByorderTypeorderNbrRequest::class => MockResponse::make([
            'lines' => [],
            'orderType' => 'String value',
            'orderNo' => 'String value',
            'status' => 'String value',
            'hold' => true,
            'date' => '2025-11-22T10:40:04+00:00',
            'requestOn' => '2025-11-22T10:40:04+00:00',
            'customerOrder' => 'String value',
            'customerRefNo' => 'String value',
            'customer' => null,
            'contactId' => 42,
            'location' => null,
            'currency' => 'String value',
            'description' => 'String value',
            'orderTotal' => 42,
            'orderTotalInBaseCurrency' => 42,
            'vatTaxableTotal' => 42,
            'vatTaxableTotalInBaseCurrency' => 42,
            'vatExemptTotal' => 42,
            'vatExemptTotalInBaseCurrency' => 42,
            'taxTotal' => 42,
            'taxTotalInBaseCurrency' => 42,
            'exchangeRate' => 42,
            'discountTotal' => 42,
            'discountTotalInBaseCurrency' => 42,
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'branchNumber' => null,
            'note' => 'String value',
            'attachments' => [],
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new SalesOrderBasicGetOrderByTypeByorderTypeorderNbrRequest(
        orderType: 'test string',
        orderNbr: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderBasicGetOrderByTypeByorderTypeorderNbrRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->orderType->toBe('String value')
        ->orderNo->toBe('String value')
        ->status->toBe('String value')
        ->hold->toBe(true)
        ->date->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->requestOn->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->customerOrder->toBe('String value')
        ->customerRefNo->toBe('String value')
        ->customer->toBeNull()
        ->contactId->toBe(42)
        ->location->toBeNull()
        ->currency->toBe('String value')
        ->description->toBe('String value')
        ->orderTotal->toBe(42)
        ->orderTotalInBaseCurrency->toBe(42)
        ->vatTaxableTotal->toBe(42)
        ->vatTaxableTotalInBaseCurrency->toBe(42)
        ->vatExemptTotal->toBe(42)
        ->vatExemptTotalInBaseCurrency->toBe(42)
        ->taxTotal->toBe(42)
        ->taxTotalInBaseCurrency->toBe(42)
        ->exchangeRate->toBe(42)
        ->discountTotal->toBe(42)
        ->discountTotalInBaseCurrency->toBe(42)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->branchNumber->toBeNull()
        ->note->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the salesOrderBasicGetAllOrdersRequest method in the SalesOrderBasic resource', function () {
    Saloon::fake([
        SalesOrderBasicGetAllOrdersRequest::class => MockResponse::make([
            0 => [
                'lines' => [],
                'orderType' => 'String value',
                'orderNo' => 'String value',
                'status' => 'String value',
                'hold' => true,
                'date' => '2025-11-22T10:40:04+00:00',
                'requestOn' => '2025-11-22T10:40:04+00:00',
                'customerOrder' => 'String value',
                'customerRefNo' => 'String value',
                'customer' => null,
                'contactId' => 42,
                'location' => null,
                'currency' => 'String value',
                'description' => 'String value',
                'orderTotal' => 42,
                'orderTotalInBaseCurrency' => 42,
                'vatTaxableTotal' => 42,
                'vatTaxableTotalInBaseCurrency' => 42,
                'vatExemptTotal' => 42,
                'vatExemptTotalInBaseCurrency' => 42,
                'taxTotal' => 42,
                'taxTotalInBaseCurrency' => 42,
                'exchangeRate' => 42,
                'discountTotal' => 42,
                'discountTotalInBaseCurrency' => 42,
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'branchNumber' => null,
                'note' => 'String value',
                'attachments' => [],
                'errorInfo' => 'String value',
            ],
            1 => [
                'lines' => [],
                'orderType' => 'String value',
                'orderNo' => 'String value',
                'status' => 'String value',
                'hold' => true,
                'date' => '2025-11-22T10:40:04+00:00',
                'requestOn' => '2025-11-22T10:40:04+00:00',
                'customerOrder' => 'String value',
                'customerRefNo' => 'String value',
                'customer' => null,
                'contactId' => 42,
                'location' => null,
                'currency' => 'String value',
                'description' => 'String value',
                'orderTotal' => 42,
                'orderTotalInBaseCurrency' => 42,
                'vatTaxableTotal' => 42,
                'vatTaxableTotalInBaseCurrency' => 42,
                'vatExemptTotal' => 42,
                'vatExemptTotalInBaseCurrency' => 42,
                'taxTotal' => 42,
                'taxTotalInBaseCurrency' => 42,
                'exchangeRate' => 42,
                'discountTotal' => 42,
                'discountTotalInBaseCurrency' => 42,
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'branchNumber' => null,
                'note' => 'String value',
                'attachments' => [],
                'errorInfo' => 'String value',
            ],
        ], 200),
    ]);

    $request = new SalesOrderBasicGetAllOrdersRequest(
        orderType: 'test string',
        status: 'test string',
        greaterThanValue: 'test string',
        numberToRead: 123,
        skipRecords: 123,
        orderBy: 'test string',
        showNotes: true,
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderBasicGetAllOrdersRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toHaveCount(2);
    expect($collection->first())
        ->orderType->toBe('String value')
        ->orderNo->toBe('String value')
        ->status->toBe('String value')
        ->hold->toBe(true)
        ->date->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->requestOn->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->customerOrder->toBe('String value')
        ->customerRefNo->toBe('String value')
        ->customer->toBeNull()
        ->contactId->toBe(42)
        ->location->toBeNull()
        ->currency->toBe('String value')
        ->description->toBe('String value')
        ->orderTotal->toBe(42)
        ->orderTotalInBaseCurrency->toBe(42)
        ->vatTaxableTotal->toBe(42)
        ->vatTaxableTotalInBaseCurrency->toBe(42)
        ->vatExemptTotal->toBe(42)
        ->vatExemptTotalInBaseCurrency->toBe(42)
        ->taxTotal->toBe(42)
        ->taxTotalInBaseCurrency->toBe(42)
        ->exchangeRate->toBe(42)
        ->discountTotal->toBe(42)
        ->discountTotalInBaseCurrency->toBe(42)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->branchNumber->toBeNull()
        ->note->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the salesOrderBasicPostRequest method in the SalesOrderBasic resource', function () {
    $bodyData = new SalesOrderBasicUpdateDto(
        lines: [],
        orderType: null,
        orderNumber: 'String value',
        hold: true,
        date: '2025-11-22T10:40:04+00:00',
        requestOn: '2025-11-22T10:40:04+00:00',
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
        SalesOrderBasicPostRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SalesOrderBasicPostRequest(
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderBasicPostRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the salesOrderBasicCreateShipmentActionBysaleOrderNumberRequest method in the SalesOrderBasic resource', function () {
    $bodyData = new SalesOrderBasicUpdateDto(
        lines: [],
        orderType: null,
        orderNumber: 'String value',
        hold: true,
        date: '2025-11-22T10:40:04+00:00',
        requestOn: '2025-11-22T10:40:04+00:00',
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
        SalesOrderBasicCreateShipmentActionBysaleOrderNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SalesOrderBasicCreateShipmentActionBysaleOrderNumberRequest(
        saleOrderNumber: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderBasicCreateShipmentActionBysaleOrderNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the salesOrderBasicCreateHeaderAttachmentByorderNumberRequest method in the SalesOrderBasic resource', function () {
    $bodyData = new SalesOrderBasicUpdateDto(
        lines: [],
        orderType: null,
        orderNumber: 'String value',
        hold: true,
        date: '2025-11-22T10:40:04+00:00',
        requestOn: '2025-11-22T10:40:04+00:00',
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
        SalesOrderBasicCreateHeaderAttachmentByorderNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SalesOrderBasicCreateHeaderAttachmentByorderNumberRequest(
        orderNumber: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderBasicCreateHeaderAttachmentByorderNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the salesOrderBasicCreateHeaderAttachmentByorderNumberorderTypeRequest method in the SalesOrderBasic resource', function () {
    $bodyData = new SalesOrderBasicUpdateDto(
        lines: [],
        orderType: null,
        orderNumber: 'String value',
        hold: true,
        date: '2025-11-22T10:40:04+00:00',
        requestOn: '2025-11-22T10:40:04+00:00',
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
        SalesOrderBasicCreateHeaderAttachmentByorderNumberorderTypeRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SalesOrderBasicCreateHeaderAttachmentByorderNumberorderTypeRequest(
        orderNumber: 'test string',
        orderType: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderBasicCreateHeaderAttachmentByorderNumberorderTypeRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the salesOrderBasicCreateLineAttachmentByorderNumberlineNumberRequest method in the SalesOrderBasic resource', function () {
    $bodyData = new SalesOrderBasicUpdateDto(
        lines: [],
        orderType: null,
        orderNumber: 'String value',
        hold: true,
        date: '2025-11-22T10:40:04+00:00',
        requestOn: '2025-11-22T10:40:04+00:00',
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
        SalesOrderBasicCreateLineAttachmentByorderNumberlineNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SalesOrderBasicCreateLineAttachmentByorderNumberlineNumberRequest(
        orderNumber: 'test string',
        lineNumber: 123,
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderBasicCreateLineAttachmentByorderNumberlineNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the salesOrderBasicCreateLineAttachmentByorderNumberorderTypelineNumberRequest method in the SalesOrderBasic resource', function () {
    $bodyData = new SalesOrderBasicUpdateDto(
        lines: [],
        orderType: null,
        orderNumber: 'String value',
        hold: true,
        date: '2025-11-22T10:40:04+00:00',
        requestOn: '2025-11-22T10:40:04+00:00',
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
        SalesOrderBasicCreateLineAttachmentByorderNumberorderTypelineNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new SalesOrderBasicCreateLineAttachmentByorderNumberorderTypelineNumberRequest(
        orderNumber: 'test string',
        orderType: 'test string',
        lineNumber: 123,
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderBasicCreateLineAttachmentByorderNumberorderTypelineNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the salesOrderBasicDeleteLineAttachmentByorderNumberorderTypelineNumberfileIdRequest method in the SalesOrderBasic resource', function () {
    Saloon::fake([
        SalesOrderBasicDeleteLineAttachmentByorderNumberorderTypelineNumberfileIdRequest::class => MockResponse::make([], 204),
    ]);

    $request = new SalesOrderBasicDeleteLineAttachmentByorderNumberorderTypelineNumberfileIdRequest(
        orderNumber: 'test string',
        orderType: 'test string',
        lineNumber: 123,
        fileId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderBasicDeleteLineAttachmentByorderNumberorderTypelineNumberfileIdRequest::class);

    expect($response->status())->toBe(204);
});

it('calls the salesOrderBasicDeleteOrderAttachmentByorderNumberorderTypefileIdRequest method in the SalesOrderBasic resource', function () {
    Saloon::fake([
        SalesOrderBasicDeleteOrderAttachmentByorderNumberorderTypefileIdRequest::class => MockResponse::make([], 204),
    ]);

    $request = new SalesOrderBasicDeleteOrderAttachmentByorderNumberorderTypefileIdRequest(
        orderNumber: 'test string',
        orderType: 'test string',
        fileId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderBasicDeleteOrderAttachmentByorderNumberorderTypefileIdRequest::class);

    expect($response->status())->toBe(204);
});
