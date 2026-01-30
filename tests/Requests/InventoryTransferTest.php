<?php

use Pionect\VismaSdk\Dto\InventoryTransferUpdateDto;
use Pionect\VismaSdk\Requests\InventoryTransfer\InventoryTransferGetAllRequest;
use Pionect\VismaSdk\Requests\InventoryTransfer\InventoryTransferGetByinventoryTransferNumberRequest;
use Pionect\VismaSdk\Requests\InventoryTransfer\InventoryTransferPostRequest;
use Pionect\VismaSdk\Requests\InventoryTransfer\InventoryTransferPutByinventoryTransferNumberRequest;
use Pionect\VismaSdk\Requests\InventoryTransfer\InventoryTransferReleaseDocumentBytransferNumberRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the inventoryTransferGetByinventoryTransferNumberRequest method in the InventoryTransfer resource', function () {
    Saloon::fake([
        InventoryTransferGetByinventoryTransferNumberRequest::class => MockResponse::make([
            'warehouse' => null,
            'toWarehouse' => null,
            'transferLines' => [],
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

    $request = new InventoryTransferGetByinventoryTransferNumberRequest(
        inventoryTransferNumber: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(InventoryTransferGetByinventoryTransferNumberRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->warehouse->toBeNull()
        ->toWarehouse->toBeNull()
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

it('calls the inventoryTransferPutByinventoryTransferNumberRequest method in the InventoryTransfer resource', function () {
    $bodyData = new InventoryTransferUpdateDto(
        warehouseId: 'mock-id-123',
        toWarehouseId: 'mock-id-123',
        transferLines: [],
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
        InventoryTransferPutByinventoryTransferNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new InventoryTransferPutByinventoryTransferNumberRequest(
        inventoryTransferNumber: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(InventoryTransferPutByinventoryTransferNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the inventoryTransferGetAllRequest method in the InventoryTransfer resource', function () {
    Saloon::fake([
        InventoryTransferGetAllRequest::class => MockResponse::make([
            0 => [
                'warehouse' => null,
                'toWarehouse' => null,
                'transferLines' => [],
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
                'warehouse' => null,
                'toWarehouse' => null,
                'transferLines' => [],
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

    $request = new InventoryTransferGetAllRequest(
        warehouse: 'test string',
        toWarehouse: 'test string',
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

    Saloon::assertSent(InventoryTransferGetAllRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toBeArray()
        ->and($collection)->toHaveCount(2);

    $firstItem = $collection[0];

    expect($firstItem)
        ->warehouse->toBeNull()
        ->toWarehouse->toBeNull()
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

it('calls the inventoryTransferPostRequest method in the InventoryTransfer resource', function () {
    $bodyData = new InventoryTransferUpdateDto(
        warehouseId: 'mock-id-123',
        toWarehouseId: 'mock-id-123',
        transferLines: [],
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
        InventoryTransferPostRequest::class => MockResponse::make([], 201),
    ]);

    $request = new InventoryTransferPostRequest(
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(InventoryTransferPostRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the inventoryTransferReleaseDocumentBytransferNumberRequest method in the InventoryTransfer resource', function () {
    $bodyData = new InventoryTransferUpdateDto(
        warehouseId: 'mock-id-123',
        toWarehouseId: 'mock-id-123',
        transferLines: [],
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
        InventoryTransferReleaseDocumentBytransferNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new InventoryTransferReleaseDocumentBytransferNumberRequest(
        transferNumber: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(InventoryTransferReleaseDocumentBytransferNumberRequest::class);

    expect($response->status())->toBe(201);
});
