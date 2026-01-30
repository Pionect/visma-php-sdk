<?php

use Pionect\VismaSdk\Dto\PurchaseOrderBasicUpdateDto;
use Pionect\VismaSdk\Requests\PurchaseOrderBasic\PurchaseOrderBasicGetAllOrderBasicRequest;
use Pionect\VismaSdk\Requests\PurchaseOrderBasic\PurchaseOrderBasicGetPurchaseOrderBasicBypurchaseOrderNumberRequest;
use Pionect\VismaSdk\Requests\PurchaseOrderBasic\PurchaseOrderBasicPostRequest;
use Pionect\VismaSdk\Requests\PurchaseOrderBasic\PurchaseOrderBasicPutBypurchaseOrderNumberRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the purchaseOrderBasicGetPurchaseOrderBasicBypurchaseOrderNumberRequest method in the PurchaseOrderBasic resource', function () {
    Saloon::fake([
        PurchaseOrderBasicGetPurchaseOrderBasicBypurchaseOrderNumberRequest::class => MockResponse::make([
            'orderType' => 'String value',
            'orderNbr' => 'String value',
            'hold' => true,
            'status' => 'String value',
            'date' => '2025-11-22T10:40:04+00:00',
            'promisedOn' => '2025-11-22T10:40:04+00:00',
            'description' => 'String value',
            'supplier' => null,
            'location' => null,
            'owner' => null,
            'currency' => 'String value',
            'supplierRef' => 'String value',
            'exchangeRate' => 42,
            'lineTotal' => 42,
            'lineTotalInBaseCurrency' => 42,
            'vatExemptTotal' => 42,
            'vatExemptTotalInBaseCurrency' => 42,
            'taxTotal' => 42,
            'taxTotalInBaseCurrency' => 42,
            'orderTotal' => 42,
            'orderTotalInBaseCurrency' => 42,
            'controlTotal' => 42,
            'controlTotalInBaseCurrency' => 42,
            'branch' => null,
            'lines' => [],
            'taxDetails' => [],
            'purchaseReceipts' => [],
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'note' => 'String value',
            'customStr1' => 'String value',
            'customStr2' => 'String value',
            'customStr3' => 'String value',
            'customStr4' => 'String value',
            'customStr5' => 'String value',
            'customDec1' => 42,
            'customDec2' => 42,
            'customInt1' => 42,
            'customInt2' => 42,
            'customDateTimeUtc1' => '2025-11-22T10:40:04+00:00',
            'timeStamp' => 'String value',
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new PurchaseOrderBasicGetPurchaseOrderBasicBypurchaseOrderNumberRequest(
        purchaseOrderNumber: 'test string',
        includeCustomFreeFields: true,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(PurchaseOrderBasicGetPurchaseOrderBasicBypurchaseOrderNumberRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->orderType->toBe('String value')
        ->orderNbr->toBe('String value')
        ->hold->toBe(true)
        ->status->toBe('String value')
        ->date->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->promisedOn->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->description->toBe('String value')
        ->supplier->toBeNull()
        ->location->toBeNull()
        ->owner->toBeNull()
        ->currency->toBe('String value')
        ->supplierRef->toBe('String value')
        ->exchangeRate->toBe(42)
        ->lineTotal->toBe(42)
        ->lineTotalInBaseCurrency->toBe(42)
        ->vatExemptTotal->toBe(42)
        ->vatExemptTotalInBaseCurrency->toBe(42)
        ->taxTotal->toBe(42)
        ->taxTotalInBaseCurrency->toBe(42)
        ->orderTotal->toBe(42)
        ->orderTotalInBaseCurrency->toBe(42)
        ->controlTotal->toBe(42)
        ->controlTotalInBaseCurrency->toBe(42)
        ->branch->toBeNull()
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->note->toBe('String value')
        ->customStr1->toBe('String value')
        ->customStr2->toBe('String value')
        ->customStr3->toBe('String value')
        ->customStr4->toBe('String value')
        ->customStr5->toBe('String value')
        ->customDec1->toBe(42)
        ->customDec2->toBe(42)
        ->customInt1->toBe(42)
        ->customInt2->toBe(42)
        ->customDateTimeUtc1->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->timeStamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the purchaseOrderBasicPutBypurchaseOrderNumberRequest method in the PurchaseOrderBasic resource', function () {
    $bodyData = new PurchaseOrderBasicUpdateDto(
        orderType: 'String value',
        orderNumber: 'String value',
        hold: true,
        date: '2025-11-22T10:40:04+00:00',
        promisedOn: '2025-11-22T10:40:04+00:00',
        description: 'String value',
        supplier: null,
        location: 'String value',
        gln: null,
        vatRegistrationId: null,
        owner: 'String value',
        currency: 'String value',
        exchangeRate: 42,
        supplierRef: 'String value',
        controlTotal: 42,
        branch: 'String value',
        lines: [],
        changeDatesOnLines: true,
        note: 'String value',
        overrideNumberSeries: true,
        customStr1: null,
        customStr2: null,
        customStr3: null,
        customStr4: null,
        customStr5: null,
        customDec1: null,
        customDec2: null,
        customInt1: null,
        customInt2: null,
        customDateTimeUtc1: '2025-11-22T10:40:04+00:00',
        timeStamp: 'String value'
    );

    Saloon::fake([
        PurchaseOrderBasicPutBypurchaseOrderNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new PurchaseOrderBasicPutBypurchaseOrderNumberRequest(
        purchaseOrderNumber: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(PurchaseOrderBasicPutBypurchaseOrderNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the purchaseOrderBasicGetAllOrderBasicRequest method in the PurchaseOrderBasic resource', function () {
    Saloon::fake([
        PurchaseOrderBasicGetAllOrderBasicRequest::class => MockResponse::make([
            0 => [
                'orderType' => 'String value',
                'orderNbr' => 'String value',
                'hold' => true,
                'status' => 'String value',
                'date' => '2025-11-22T10:40:04+00:00',
                'promisedOn' => '2025-11-22T10:40:04+00:00',
                'description' => 'String value',
                'supplier' => null,
                'location' => null,
                'owner' => null,
                'currency' => 'String value',
                'supplierRef' => 'String value',
                'exchangeRate' => 42,
                'lineTotal' => 42,
                'lineTotalInBaseCurrency' => 42,
                'vatExemptTotal' => 42,
                'vatExemptTotalInBaseCurrency' => 42,
                'taxTotal' => 42,
                'taxTotalInBaseCurrency' => 42,
                'orderTotal' => 42,
                'orderTotalInBaseCurrency' => 42,
                'controlTotal' => 42,
                'controlTotalInBaseCurrency' => 42,
                'branch' => null,
                'lines' => [],
                'taxDetails' => [],
                'purchaseReceipts' => [],
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'note' => 'String value',
                'customStr1' => 'String value',
                'customStr2' => 'String value',
                'customStr3' => 'String value',
                'customStr4' => 'String value',
                'customStr5' => 'String value',
                'customDec1' => 42,
                'customDec2' => 42,
                'customInt1' => 42,
                'customInt2' => 42,
                'customDateTimeUtc1' => '2025-11-22T10:40:04+00:00',
                'timeStamp' => 'String value',
                'errorInfo' => 'String value',
            ],
            1 => [
                'orderType' => 'String value',
                'orderNbr' => 'String value',
                'hold' => true,
                'status' => 'String value',
                'date' => '2025-11-22T10:40:04+00:00',
                'promisedOn' => '2025-11-22T10:40:04+00:00',
                'description' => 'String value',
                'supplier' => null,
                'location' => null,
                'owner' => null,
                'currency' => 'String value',
                'supplierRef' => 'String value',
                'exchangeRate' => 42,
                'lineTotal' => 42,
                'lineTotalInBaseCurrency' => 42,
                'vatExemptTotal' => 42,
                'vatExemptTotalInBaseCurrency' => 42,
                'taxTotal' => 42,
                'taxTotalInBaseCurrency' => 42,
                'orderTotal' => 42,
                'orderTotalInBaseCurrency' => 42,
                'controlTotal' => 42,
                'controlTotalInBaseCurrency' => 42,
                'branch' => null,
                'lines' => [],
                'taxDetails' => [],
                'purchaseReceipts' => [],
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'note' => 'String value',
                'customStr1' => 'String value',
                'customStr2' => 'String value',
                'customStr3' => 'String value',
                'customStr4' => 'String value',
                'customStr5' => 'String value',
                'customDec1' => 42,
                'customDec2' => 42,
                'customInt1' => 42,
                'customInt2' => 42,
                'customDateTimeUtc1' => '2025-11-22T10:40:04+00:00',
                'timeStamp' => 'String value',
                'errorInfo' => 'String value',
            ],
        ], 200),
    ]);

    $request = new PurchaseOrderBasicGetAllOrderBasicRequest(
        greaterThanValue: 'test string',
        numberToRead: 123,
        skipRecords: 123,
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        orderType: 'test string',
        orderStatus: 'test string',
        supplier: 'test string',
        branch: 'test string',
        orderDate: 'test string',
        orderDateCondition: 'test string',
        deliveryDate: 'test string',
        deliveryDateCondition: 'test string',
        includeCustomFreeFields: true,
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(PurchaseOrderBasicGetAllOrderBasicRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toBeArray()
        ->and($collection)->toHaveCount(2);

    $firstItem = $collection[0];

    expect($firstItem)
        ->orderType->toBe('String value')
        ->orderNbr->toBe('String value')
        ->hold->toBe(true)
        ->status->toBe('String value')
        ->date->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->promisedOn->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->description->toBe('String value')
        ->supplier->toBeNull()
        ->location->toBeNull()
        ->owner->toBeNull()
        ->currency->toBe('String value')
        ->supplierRef->toBe('String value')
        ->exchangeRate->toBe(42)
        ->lineTotal->toBe(42)
        ->lineTotalInBaseCurrency->toBe(42)
        ->vatExemptTotal->toBe(42)
        ->vatExemptTotalInBaseCurrency->toBe(42)
        ->taxTotal->toBe(42)
        ->taxTotalInBaseCurrency->toBe(42)
        ->orderTotal->toBe(42)
        ->orderTotalInBaseCurrency->toBe(42)
        ->controlTotal->toBe(42)
        ->controlTotalInBaseCurrency->toBe(42)
        ->branch->toBeNull()
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->note->toBe('String value')
        ->customStr1->toBe('String value')
        ->customStr2->toBe('String value')
        ->customStr3->toBe('String value')
        ->customStr4->toBe('String value')
        ->customStr5->toBe('String value')
        ->customDec1->toBe(42)
        ->customDec2->toBe(42)
        ->customInt1->toBe(42)
        ->customInt2->toBe(42)
        ->customDateTimeUtc1->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->timeStamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the purchaseOrderBasicPostRequest method in the PurchaseOrderBasic resource', function () {
    $bodyData = new PurchaseOrderBasicUpdateDto(
        orderType: 'String value',
        orderNumber: 'String value',
        hold: true,
        date: '2025-11-22T10:40:04+00:00',
        promisedOn: '2025-11-22T10:40:04+00:00',
        description: 'String value',
        supplier: null,
        location: 'String value',
        gln: null,
        vatRegistrationId: null,
        owner: 'String value',
        currency: 'String value',
        exchangeRate: 42,
        supplierRef: 'String value',
        controlTotal: 42,
        branch: 'String value',
        lines: [],
        changeDatesOnLines: true,
        note: 'String value',
        overrideNumberSeries: true,
        customStr1: null,
        customStr2: null,
        customStr3: null,
        customStr4: null,
        customStr5: null,
        customDec1: null,
        customDec2: null,
        customInt1: null,
        customInt2: null,
        customDateTimeUtc1: '2025-11-22T10:40:04+00:00',
        timeStamp: 'String value'
    );

    Saloon::fake([
        PurchaseOrderBasicPostRequest::class => MockResponse::make([], 201),
    ]);

    $request = new PurchaseOrderBasicPostRequest(
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(PurchaseOrderBasicPostRequest::class);

    expect($response->status())->toBe(201);
});
