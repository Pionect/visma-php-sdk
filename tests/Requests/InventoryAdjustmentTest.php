<?php

use Pionect\VismaSdk\Dto\InventoryAdjustmentUpdateDto;
use Pionect\VismaSdk\Requests\InventoryAdjustment\InventoryAdjustmentGetAllRequest;
use Pionect\VismaSdk\Requests\InventoryAdjustment\InventoryAdjustmentGetByinventoryAdjustmentNumberRequest;
use Pionect\VismaSdk\Requests\InventoryAdjustment\InventoryAdjustmentPostRequest;
use Pionect\VismaSdk\Requests\InventoryAdjustment\InventoryAdjustmentPutByinventoryAdjustmentNumberRequest;
use Pionect\VismaSdk\Requests\InventoryAdjustment\InventoryAdjustmentReleaseDocumentByadjRefNumberRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the inventoryAdjustmentGetByinventoryAdjustmentNumberRequest method in the InventoryAdjustment resource', function () {
    Saloon::fake([
        InventoryAdjustmentGetByinventoryAdjustmentNumberRequest::class => MockResponse::make([
            'totalCost' => 42,
            'controlCost' => 42,
            'adjusmentLines' => [],
            'referenceNumber' => 'String value',
            'status' => 'String value',
            'hold' => true,
            'date' => '2025-11-22T10:40:04+00:00',
            'postPeriod' => 'String value',
            'externalReference' => 'String value',
            'description' => 'String value',
            'totalQuantity' => 42,
            'controlQuantity' => 42,
            'batchNumber' => 'String value',
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'branchNumber' => null,
            'attachments' => [],
            'timestamp' => 'String value',
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new InventoryAdjustmentGetByinventoryAdjustmentNumberRequest(
        inventoryAdjustmentNumber: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(InventoryAdjustmentGetByinventoryAdjustmentNumberRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->totalCost->toBe(42)
        ->controlCost->toBe(42)
        ->referenceNumber->toBe('String value')
        ->status->toBe('String value')
        ->hold->toBe(true)
        ->date->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->postPeriod->toBe('String value')
        ->externalReference->toBe('String value')
        ->description->toBe('String value')
        ->totalQuantity->toBe(42)
        ->controlQuantity->toBe(42)
        ->batchNumber->toBe('String value')
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->branchNumber->toBeNull()
        ->timestamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the inventoryAdjustmentPutByinventoryAdjustmentNumberRequest method in the InventoryAdjustment resource', function () {
    $bodyData = new InventoryAdjustmentUpdateDto(
        controlCost: null,
        adjustmentLines: [],
        referenceNumber: null,
        hold: null,
        date: null,
        postPeriod: null,
        externalReference: null,
        description: null,
        controlQuantity: null,
        branchNumber: null
    );

    Saloon::fake([
        InventoryAdjustmentPutByinventoryAdjustmentNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new InventoryAdjustmentPutByinventoryAdjustmentNumberRequest(
        inventoryAdjustmentNumber: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(InventoryAdjustmentPutByinventoryAdjustmentNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the inventoryAdjustmentGetAllRequest method in the InventoryAdjustment resource', function () {
    Saloon::fake([
        InventoryAdjustmentGetAllRequest::class => MockResponse::make([
            0 => [
                'totalCost' => 42,
                'controlCost' => 42,
                'adjusmentLines' => [],
                'referenceNumber' => 'String value',
                'status' => 'String value',
                'hold' => true,
                'date' => '2025-11-22T10:40:04+00:00',
                'postPeriod' => 'String value',
                'externalReference' => 'String value',
                'description' => 'String value',
                'totalQuantity' => 42,
                'controlQuantity' => 42,
                'batchNumber' => 'String value',
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'branchNumber' => null,
                'attachments' => [],
                'timestamp' => 'String value',
                'errorInfo' => 'String value',
            ],
            1 => [
                'totalCost' => 42,
                'controlCost' => 42,
                'adjusmentLines' => [],
                'referenceNumber' => 'String value',
                'status' => 'String value',
                'hold' => true,
                'date' => '2025-11-22T10:40:04+00:00',
                'postPeriod' => 'String value',
                'externalReference' => 'String value',
                'description' => 'String value',
                'totalQuantity' => 42,
                'controlQuantity' => 42,
                'batchNumber' => 'String value',
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'branchNumber' => null,
                'attachments' => [],
                'timestamp' => 'String value',
                'errorInfo' => 'String value',
            ],
        ], 200),
    ]);

    $request = new InventoryAdjustmentGetAllRequest(
        status: 'test string',
        date: 'test string',
        dateCondition: 'test string',
        greaterThanValue: 'test string',
        numberToRead: 123,
        skipRecords: 123,
        orderBy: 'test string',
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(InventoryAdjustmentGetAllRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toBeArray()
        ->and($collection)->toHaveCount(2);

    $firstItem = $collection[0];

    expect($firstItem)
        ->totalCost->toBe(42)
        ->controlCost->toBe(42)
        ->referenceNumber->toBe('String value')
        ->status->toBe('String value')
        ->hold->toBe(true)
        ->date->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->postPeriod->toBe('String value')
        ->externalReference->toBe('String value')
        ->description->toBe('String value')
        ->totalQuantity->toBe(42)
        ->controlQuantity->toBe(42)
        ->batchNumber->toBe('String value')
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->branchNumber->toBeNull()
        ->timestamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the inventoryAdjustmentPostRequest method in the InventoryAdjustment resource', function () {
    $bodyData = new InventoryAdjustmentUpdateDto(
        controlCost: null,
        adjustmentLines: [],
        referenceNumber: null,
        hold: null,
        date: null,
        postPeriod: null,
        externalReference: null,
        description: null,
        controlQuantity: null,
        branchNumber: null
    );

    Saloon::fake([
        InventoryAdjustmentPostRequest::class => MockResponse::make([], 201),
    ]);

    $request = new InventoryAdjustmentPostRequest(
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(InventoryAdjustmentPostRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the inventoryAdjustmentReleaseDocumentByadjRefNumberRequest method in the InventoryAdjustment resource', function () {
    $bodyData = new InventoryAdjustmentUpdateDto(
        controlCost: null,
        adjustmentLines: [],
        referenceNumber: null,
        hold: null,
        date: null,
        postPeriod: null,
        externalReference: null,
        description: null,
        controlQuantity: null,
        branchNumber: null
    );

    Saloon::fake([
        InventoryAdjustmentReleaseDocumentByadjRefNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new InventoryAdjustmentReleaseDocumentByadjRefNumberRequest(
        adjRefNumber: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(InventoryAdjustmentReleaseDocumentByadjRefNumberRequest::class);

    expect($response->status())->toBe(201);
});
