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
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector(
        clientId: 'replace',
        clientSecret: 'replace'
    );
});

it('calls the salesOrderBasicGetByorderNbr method in the SalesOrderBasic resource', function () {
    Saloon::fake([
        SalesOrderBasicGetByorderNbrRequest::class => MockResponse::make([
            'lines' => [],
            'orderType' => 'Mock value',
            'orderNo' => 'Mock value',
            'status' => 'Mock value',
            'hold' => true,
            'date' => '2025-11-22T10:40:04.065Z',
            'requestOn' => '2025-11-22T10:40:04.065Z',
            'customerOrder' => 'Mock value',
            'customerRefNo' => 'Mock value',
            'customer' => 'Mock value',
            'contactId' => 42,
            'location' => 'Mock value',
            'currency' => 'Mock value',
            'description' => 'Mock value',
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
            'branchNumber' => 'Mock value',
            'note' => 'Mock value',
            'attachments' => [],
            'errorInfo' => 'Mock value',
            'metadata' => 'Mock value',
        ], 200),
    ]);

    $request = new SalesOrderBasicGetByorderNbrRequest(
        orderNbrId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderBasicGetByorderNbrRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->orderType->toBe('Mock value')
        ->orderNo->toBe('Mock value')
        ->status->toBe('Mock value')
        ->hold->toBeTrue()
        ->date->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->requestOn->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->customerOrder->toBe('Mock value')
        ->customerRefNo->toBe('Mock value')
        ->customer->toBe('Mock value')
        ->contactId->toBe(42)
        ->location->toBe('Mock value')
        ->currency->toBe('Mock value')
        ->description->toBe('Mock value')
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
        ->branchNumber->toBe('Mock value')
        ->note->toBe('Mock value')
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the salesOrderBasicGetOrderByTypeByorderTypeorderNbr method in the SalesOrderBasic resource', function () {
    Saloon::fake([
        SalesOrderBasicGetOrderByTypeByorderTypeorderNbrRequest::class => MockResponse::make([
            'lines' => [],
            'orderType' => 'Mock value',
            'orderNo' => 'Mock value',
            'status' => 'Mock value',
            'hold' => true,
            'date' => '2025-11-22T10:40:04.065Z',
            'requestOn' => '2025-11-22T10:40:04.065Z',
            'customerOrder' => 'Mock value',
            'customerRefNo' => 'Mock value',
            'customer' => 'Mock value',
            'contactId' => 42,
            'location' => 'Mock value',
            'currency' => 'Mock value',
            'description' => 'Mock value',
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
            'branchNumber' => 'Mock value',
            'note' => 'Mock value',
            'attachments' => [],
            'errorInfo' => 'Mock value',
            'metadata' => 'Mock value',
        ], 200),
    ]);

    $request = new SalesOrderBasicGetOrderByTypeByorderTypeorderNbrRequest(
        orderTypeId: 'test string',
        orderNbrId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderBasicGetOrderByTypeByorderTypeorderNbrRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->orderType->toBe('Mock value')
        ->orderNo->toBe('Mock value')
        ->status->toBe('Mock value')
        ->hold->toBeTrue()
        ->date->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->requestOn->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->customerOrder->toBe('Mock value')
        ->customerRefNo->toBe('Mock value')
        ->customer->toBe('Mock value')
        ->contactId->toBe(42)
        ->location->toBe('Mock value')
        ->currency->toBe('Mock value')
        ->description->toBe('Mock value')
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
        ->branchNumber->toBe('Mock value')
        ->note->toBe('Mock value')
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the salesOrderBasicGetAllOrdersCollection method in the SalesOrderBasic resource', function () {
    Saloon::fake([
        SalesOrderBasicGetAllOrdersCollectionRequest::class => MockResponse::make([
            0 => [
                'lines' => [],
                'orderType' => 'Mock value',
                'orderNo' => 'Mock value',
                'status' => 'Mock value',
                'hold' => true,
                'date' => '2025-11-22T10:40:04.065Z',
                'requestOn' => '2025-11-22T10:40:04.065Z',
                'customerOrder' => 'Mock value',
                'customerRefNo' => 'Mock value',
                'customer' => 'Mock value',
                'contactId' => 42,
                'location' => 'Mock value',
                'currency' => 'Mock value',
                'description' => 'Mock value',
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
                'branchNumber' => 'Mock value',
                'note' => 'Mock value',
                'attachments' => [],
                'errorInfo' => 'Mock value',
                'metadata' => 'Mock value',
            ],
            1 => [
                'lines' => [],
                'orderType' => 'Mock value',
                'orderNo' => 'Mock value',
                'status' => 'Mock value',
                'hold' => true,
                'date' => '2025-11-22T10:40:04.065Z',
                'requestOn' => '2025-11-22T10:40:04.065Z',
                'customerOrder' => 'Mock value',
                'customerRefNo' => 'Mock value',
                'customer' => 'Mock value',
                'contactId' => 42,
                'location' => 'Mock value',
                'currency' => 'Mock value',
                'description' => 'Mock value',
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
                'branchNumber' => 'Mock value',
                'note' => 'Mock value',
                'attachments' => [],
                'errorInfo' => 'Mock value',
                'metadata' => 'Mock value',
            ],
        ], 200),
    ]);

    $request = (new SalesOrderBasicGetAllOrdersCollectionRequest(orderType: 'test string', status: 'test string', greaterThanValue: 'test string', numberToRead: 123, skipRecords: 123, orderBy: 'test string', showNotes: true, lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', pageNumber: 123, pageSize: 123));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (SalesOrderBasicGetAllOrdersCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->orderType->toBe('Mock value')
        ->orderNo->toBe('Mock value')
        ->status->toBe('Mock value')
        ->hold->toBeTrue()
        ->date->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->requestOn->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->customerOrder->toBe('Mock value')
        ->customerRefNo->toBe('Mock value')
        ->customer->toBe('Mock value')
        ->contactId->toBe(42)
        ->location->toBe('Mock value')
        ->currency->toBe('Mock value')
        ->description->toBe('Mock value')
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
        ->branchNumber->toBe('Mock value')
        ->note->toBe('Mock value')
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
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

    $request = new SalesOrderBasicCreateShipmentActionBysaleOrderNumberRequest(saleOrderNumberId: 'sale_order_number_id-123', data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(SalesOrderBasicCreateShipmentActionBysaleOrderNumberRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->toHaveKey('data')
            ->data->type->toBe('salesOrderBasics')
            ->data->attributes->scoped(fn ($attributes) => $attributes
            ->referenceNumber->toBe('test value')
            ->shipmentDto->toBe('test value')
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value')
            );

        return true;
    });
});
