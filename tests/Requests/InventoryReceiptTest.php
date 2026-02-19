<?php

use Pionect\VismaSdk\Dto\InventoryReceiptUpdateDto;
use Pionect\VismaSdk\Enums\InventoryAdjustmentStatusEnum;
use Pionect\VismaSdk\Requests\InventoryReceipt\InventoryReceiptGetAllRequest;
use Pionect\VismaSdk\Requests\InventoryReceipt\InventoryReceiptGetByinventoryReceiptNumberRequest;
use Pionect\VismaSdk\Requests\InventoryReceipt\InventoryReceiptPostRequest;
use Pionect\VismaSdk\Requests\InventoryReceipt\InventoryReceiptPutByinventoryReceiptNumberRequest;
use Pionect\VismaSdk\Requests\InventoryReceipt\InventoryReceiptReleaseDocumentByinvoiceNumberRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the inventoryReceiptGetByinventoryReceiptNumberRequest method in the InventoryReceipt resource', function () {
    Saloon::fake([
        InventoryReceiptGetByinventoryReceiptNumberRequest::class => MockResponse::make([
            'totalCost' => 42,
            'controlCost' => 42,
            'transferNumber' => 'String value',
            'receiptLines' => [],
            'referenceNumber' => 'String value',
            'status' => 'Hold',
            'hold' => true,
            'date' => '2025-11-22T10:40:04+00:00',
            'postPeriod' => 'String value',
            'externalReference' => 'String value',
            'description' => 'String value',
            'totalQuantity' => 42,
            'controlQuantity' => 42,
            'batchNumber' => 'String value',
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'branchNumber' => [
                'number' => 'String value',
                'name' => 'String value',
            ],
            'attachments' => [],
            'timestamp' => 'String value',
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new InventoryReceiptGetByinventoryReceiptNumberRequest(
        inventoryReceiptNumber: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(InventoryReceiptGetByinventoryReceiptNumberRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->totalCost->toBe(42)
        ->controlCost->toBe(42)
        ->transferNumber->toBe('String value')
        ->referenceNumber->toBe('String value')
        ->status->toEqual(InventoryAdjustmentStatusEnum::HOLD)
        ->hold->toBe(true)
        ->date->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->postPeriod->toBe('String value')
        ->externalReference->toBe('String value')
        ->description->toBe('String value')
        ->totalQuantity->toBe(42)
        ->controlQuantity->toBe(42)
        ->batchNumber->toBe('String value')
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->branchNumber->number->toBe('String value')
        ->branchNumber->name->toBe('String value')
        ->timestamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the inventoryReceiptPutByinventoryReceiptNumberRequest method in the InventoryReceipt resource', function () {
    $bodyData = new InventoryReceiptUpdateDto(
        transferNumber: 'String value',
        controlCost: 42,
        receiptLines: [],
        referenceNumber: 'String value',
        hold: true,
        date: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        postPeriod: 'String value',
        externalReference: 'String value',
        description: 'String value',
        controlQuantity: 42,
        branchNumber: 'String value'
    );

    Saloon::fake([
        InventoryReceiptPutByinventoryReceiptNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new InventoryReceiptPutByinventoryReceiptNumberRequest(
        inventoryReceiptNumber: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(InventoryReceiptPutByinventoryReceiptNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the inventoryReceiptGetAllRequest method in the InventoryReceipt resource', function () {
    Saloon::fake([
        InventoryReceiptGetAllRequest::class => MockResponse::make([
            0 => [
                'totalCost' => 42,
                'controlCost' => 42,
                'transferNumber' => 'String value',
                'receiptLines' => [],
                'referenceNumber' => 'String value',
                'status' => 'Hold',
                'hold' => true,
                'date' => '2025-11-22T10:40:04+00:00',
                'postPeriod' => 'String value',
                'externalReference' => 'String value',
                'description' => 'String value',
                'totalQuantity' => 42,
                'controlQuantity' => 42,
                'batchNumber' => 'String value',
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'branchNumber' => [
                    'number' => 'String value',
                    'name' => 'String value',
                ],
                'attachments' => [],
                'timestamp' => 'String value',
                'errorInfo' => 'String value',
            ],
            1 => [
                'totalCost' => 42,
                'controlCost' => 42,
                'transferNumber' => 'String value',
                'receiptLines' => [],
                'referenceNumber' => 'String value',
                'status' => 'Hold',
                'hold' => true,
                'date' => '2025-11-22T10:40:04+00:00',
                'postPeriod' => 'String value',
                'externalReference' => 'String value',
                'description' => 'String value',
                'totalQuantity' => 42,
                'controlQuantity' => 42,
                'batchNumber' => 'String value',
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'branchNumber' => [
                    'number' => 'String value',
                    'name' => 'String value',
                ],
                'attachments' => [],
                'timestamp' => 'String value',
                'errorInfo' => 'String value',
            ],
        ], 200),
    ]);

    $request = new InventoryReceiptGetAllRequest(
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

    Saloon::assertSent(InventoryReceiptGetAllRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toHaveCount(2);
    expect($collection->first())
        ->totalCost->toBe(42)
        ->controlCost->toBe(42)
        ->transferNumber->toBe('String value')
        ->referenceNumber->toBe('String value')
        ->status->toEqual(InventoryAdjustmentStatusEnum::HOLD)
        ->hold->toBe(true)
        ->date->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->postPeriod->toBe('String value')
        ->externalReference->toBe('String value')
        ->description->toBe('String value')
        ->totalQuantity->toBe(42)
        ->controlQuantity->toBe(42)
        ->batchNumber->toBe('String value')
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->branchNumber->number->toBe('String value')
        ->branchNumber->name->toBe('String value')
        ->timestamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the inventoryReceiptPostRequest method in the InventoryReceipt resource', function () {
    $bodyData = new InventoryReceiptUpdateDto(
        transferNumber: 'String value',
        controlCost: 42,
        receiptLines: [],
        referenceNumber: 'String value',
        hold: true,
        date: \Carbon\Carbon::parse('2025-11-22T10:40:04+00:00'),
        postPeriod: 'String value',
        externalReference: 'String value',
        description: 'String value',
        controlQuantity: 42,
        branchNumber: 'String value'
    );

    Saloon::fake([
        InventoryReceiptPostRequest::class => MockResponse::make([], 201),
    ]);

    $request = new InventoryReceiptPostRequest(
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(InventoryReceiptPostRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the inventoryReceiptReleaseDocumentByinvoiceNumberRequest method in the InventoryReceipt resource', function () {
    $bodyData = [];

    Saloon::fake([
        InventoryReceiptReleaseDocumentByinvoiceNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new InventoryReceiptReleaseDocumentByinvoiceNumberRequest(
        invoiceNumber: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(InventoryReceiptReleaseDocumentByinvoiceNumberRequest::class);

    expect($response->status())->toBe(201);
});
