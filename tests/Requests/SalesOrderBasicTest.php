<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\SalesOrderBasic\SalesOrderBasicCreateShipmentActionBysaleOrderNumberRequest;
use Pionect\VismaSdk\Requests\SalesOrderBasic\SalesOrderBasicGetAllOrdersCollectionRequest;
use Pionect\VismaSdk\Requests\SalesOrderBasic\SalesOrderBasicGetByorderNbrRequest;
use Pionect\VismaSdk\Requests\SalesOrderBasic\SalesOrderBasicGetOrderByTypeByorderTypeorderNbrRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Http\Request;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the salesOrderBasicGetByorderNbr method in the SalesOrderBasic resource', function () {
    Saloon::fake([
        SalesOrderBasicGetByorderNbrRequest::class => MockResponse::make([
            'lines' => [],
            'orderType' => 'String value',
            'orderNo' => 'String value',
            'status' => 'String value',
            'hold' => true,
            'date' => '2025-11-22T10:40:04.065Z',
            'requestOn' => '2025-11-22T10:40:04.065Z',
            'customerOrder' => 'String value',
            'customerRefNo' => 'String value',
            'customer' => null,
            'contactId' => 42,
            'location' => null,
            'currency' => 'String value',
            'description' => 'String value',
            'orderTotal' => 3.14,
            'orderTotalInBaseCurrency' => 3.14,
            'vatTaxableTotal' => 3.14,
            'vatTaxableTotalInBaseCurrency' => 3.14,
            'vatExemptTotal' => 3.14,
            'vatExemptTotalInBaseCurrency' => 3.14,
            'taxTotal' => 3.14,
            'taxTotalInBaseCurrency' => 3.14,
            'exchangeRate' => 3.14,
            'discountTotal' => 3.14,
            'discountTotalInBaseCurrency' => 3.14,
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
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
        ->hold->toBeTrue()
        ->date->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->requestOn->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->customerOrder->toBe('String value')
        ->customerRefNo->toBe('String value')
        ->customer->toBeNull()
        ->contactId->toBe(42)
        ->location->toBeNull()
        ->currency->toBe('String value')
        ->description->toBe('String value')
        ->orderTotal->toBe(3.14)
        ->orderTotalInBaseCurrency->toBe(3.14)
        ->vatTaxableTotal->toBe(3.14)
        ->vatTaxableTotalInBaseCurrency->toBe(3.14)
        ->vatExemptTotal->toBe(3.14)
        ->vatExemptTotalInBaseCurrency->toBe(3.14)
        ->taxTotal->toBe(3.14)
        ->taxTotalInBaseCurrency->toBe(3.14)
        ->exchangeRate->toBe(3.14)
        ->discountTotal->toBe(3.14)
        ->discountTotalInBaseCurrency->toBe(3.14)
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->branchNumber->toBeNull()
        ->note->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the salesOrderBasicGetOrderByTypeByorderTypeorderNbr method in the SalesOrderBasic resource', function () {
    Saloon::fake([
        SalesOrderBasicGetOrderByTypeByorderTypeorderNbrRequest::class => MockResponse::make([
            'lines' => [],
            'orderType' => 'String value',
            'orderNo' => 'String value',
            'status' => 'String value',
            'hold' => true,
            'date' => '2025-11-22T10:40:04.065Z',
            'requestOn' => '2025-11-22T10:40:04.065Z',
            'customerOrder' => 'String value',
            'customerRefNo' => 'String value',
            'customer' => null,
            'contactId' => 42,
            'location' => null,
            'currency' => 'String value',
            'description' => 'String value',
            'orderTotal' => 3.14,
            'orderTotalInBaseCurrency' => 3.14,
            'vatTaxableTotal' => 3.14,
            'vatTaxableTotalInBaseCurrency' => 3.14,
            'vatExemptTotal' => 3.14,
            'vatExemptTotalInBaseCurrency' => 3.14,
            'taxTotal' => 3.14,
            'taxTotalInBaseCurrency' => 3.14,
            'exchangeRate' => 3.14,
            'discountTotal' => 3.14,
            'discountTotalInBaseCurrency' => 3.14,
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
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
        ->hold->toBeTrue()
        ->date->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->requestOn->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->customerOrder->toBe('String value')
        ->customerRefNo->toBe('String value')
        ->customer->toBeNull()
        ->contactId->toBe(42)
        ->location->toBeNull()
        ->currency->toBe('String value')
        ->description->toBe('String value')
        ->orderTotal->toBe(3.14)
        ->orderTotalInBaseCurrency->toBe(3.14)
        ->vatTaxableTotal->toBe(3.14)
        ->vatTaxableTotalInBaseCurrency->toBe(3.14)
        ->vatExemptTotal->toBe(3.14)
        ->vatExemptTotalInBaseCurrency->toBe(3.14)
        ->taxTotal->toBe(3.14)
        ->taxTotalInBaseCurrency->toBe(3.14)
        ->exchangeRate->toBe(3.14)
        ->discountTotal->toBe(3.14)
        ->discountTotalInBaseCurrency->toBe(3.14)
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->branchNumber->toBeNull()
        ->note->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the salesOrderBasicGetAllOrdersCollection method in the SalesOrderBasic resource', function () {
    Saloon::fake([
        SalesOrderBasicGetAllOrdersCollectionRequest::class => MockResponse::make([
            0 => [
                'lines' => [],
                'orderType' => 'String value',
                'orderNo' => 'String value',
                'status' => 'String value',
                'hold' => true,
                'date' => '2025-11-22T10:40:04.065Z',
                'requestOn' => '2025-11-22T10:40:04.065Z',
                'customerOrder' => 'String value',
                'customerRefNo' => 'String value',
                'customer' => null,
                'contactId' => 42,
                'location' => null,
                'currency' => 'String value',
                'description' => 'String value',
                'orderTotal' => 3.14,
                'orderTotalInBaseCurrency' => 3.14,
                'vatTaxableTotal' => 3.14,
                'vatTaxableTotalInBaseCurrency' => 3.14,
                'vatExemptTotal' => 3.14,
                'vatExemptTotalInBaseCurrency' => 3.14,
                'taxTotal' => 3.14,
                'taxTotalInBaseCurrency' => 3.14,
                'exchangeRate' => 3.14,
                'discountTotal' => 3.14,
                'discountTotalInBaseCurrency' => 3.14,
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'branchNumber' => null,
                'note' => 'String value',
                'attachments' => [],
                'errorInfo' => 'String value',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
            1 => [
                'lines' => [],
                'orderType' => 'String value',
                'orderNo' => 'String value',
                'status' => 'String value',
                'hold' => true,
                'date' => '2025-11-22T10:40:04.065Z',
                'requestOn' => '2025-11-22T10:40:04.065Z',
                'customerOrder' => 'String value',
                'customerRefNo' => 'String value',
                'customer' => null,
                'contactId' => 42,
                'location' => null,
                'currency' => 'String value',
                'description' => 'String value',
                'orderTotal' => 3.14,
                'orderTotalInBaseCurrency' => 3.14,
                'vatTaxableTotal' => 3.14,
                'vatTaxableTotalInBaseCurrency' => 3.14,
                'vatExemptTotal' => 3.14,
                'vatExemptTotalInBaseCurrency' => 3.14,
                'taxTotal' => 3.14,
                'taxTotalInBaseCurrency' => 3.14,
                'exchangeRate' => 3.14,
                'discountTotal' => 3.14,
                'discountTotalInBaseCurrency' => 3.14,
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'branchNumber' => null,
                'note' => 'String value',
                'attachments' => [],
                'errorInfo' => 'String value',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
        ], 200),
    ]);

    $request = (new SalesOrderBasicGetAllOrdersCollectionRequest(orderType: 'test string', status: 'test string', greaterThanValue: 'test string', numberToRead: 123, skipRecords: 123, orderBy: 'test string', showNotes: true, lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', pageNumber: 123, pageSize: 123));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (SalesOrderBasicGetAllOrdersCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->orderType->toBe('String value')
        ->orderNo->toBe('String value')
        ->status->toBe('String value')
        ->hold->toBeTrue()
        ->date->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->requestOn->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->customerOrder->toBe('String value')
        ->customerRefNo->toBe('String value')
        ->customer->toBeNull()
        ->contactId->toBe(42)
        ->location->toBeNull()
        ->currency->toBe('String value')
        ->description->toBe('String value')
        ->orderTotal->toBe(3.14)
        ->orderTotalInBaseCurrency->toBe(3.14)
        ->vatTaxableTotal->toBe(3.14)
        ->vatTaxableTotalInBaseCurrency->toBe(3.14)
        ->vatExemptTotal->toBe(3.14)
        ->vatExemptTotalInBaseCurrency->toBe(3.14)
        ->taxTotal->toBe(3.14)
        ->taxTotalInBaseCurrency->toBe(3.14)
        ->exchangeRate->toBe(3.14)
        ->discountTotal->toBe(3.14)
        ->discountTotalInBaseCurrency->toBe(3.14)
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->branchNumber->toBeNull()
        ->note->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the salesOrderBasicCreateShipmentActionBysaleOrderNumber method in the SalesOrderBasic resource', function () {
    $mockClient = Saloon::fake([
        SalesOrderBasicCreateShipmentActionBysaleOrderNumberRequest::class => MockResponse::make([], 200),
    ]);

    // Create DTO with sample data
    $dto = \Pionect\VismaSdk\Dto\CreateShipmentActionResultDto::factory()->state([
        'referenceNumber' => 'test value',
        'shipmentDto' => 'test value',
        'actionId' => 'action_id-123',
        'actionResult' => 'test value',
    ])->make();

    $request = new SalesOrderBasicCreateShipmentActionBysaleOrderNumberRequest(saleOrderNumber: 'test value', data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderBasicCreateShipmentActionBysaleOrderNumberRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->referenceNumber->toBe('test value')
            ->shipmentDto->toBe('test value')
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value');

        return true;
    });
});
