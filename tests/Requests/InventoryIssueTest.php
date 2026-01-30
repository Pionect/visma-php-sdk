<?php

use Pionect\VismaSdk\Dto\InventoryIssueUpdateDto;
use Pionect\VismaSdk\Requests\InventoryIssue\InventoryIssueGetAllRequest;
use Pionect\VismaSdk\Requests\InventoryIssue\InventoryIssueGetByinventoryIssueNumberRequest;
use Pionect\VismaSdk\Requests\InventoryIssue\InventoryIssuePostRequest;
use Pionect\VismaSdk\Requests\InventoryIssue\InventoryIssuePutByinventoryIssueNumberRequest;
use Pionect\VismaSdk\Requests\InventoryIssue\InventoryIssueReleaseDocumentByinvoiceNumberRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the inventoryIssueGetByinventoryIssueNumberRequest method in the InventoryIssue resource', function () {
    Saloon::fake([
        InventoryIssueGetByinventoryIssueNumberRequest::class => MockResponse::make([
            'totalAmount' => 42,
            'controlAmount' => 42,
            'issueLines' => [],
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

    $request = new InventoryIssueGetByinventoryIssueNumberRequest(
        inventoryIssueNumber: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(InventoryIssueGetByinventoryIssueNumberRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->totalAmount->toBe(42)
        ->controlAmount->toBe(42)
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

it('calls the inventoryIssuePutByinventoryIssueNumberRequest method in the InventoryIssue resource', function () {
    $bodyData = new InventoryIssueUpdateDto(
        controlAmount: null,
        issueLines: [],
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
        InventoryIssuePutByinventoryIssueNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new InventoryIssuePutByinventoryIssueNumberRequest(
        inventoryIssueNumber: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(InventoryIssuePutByinventoryIssueNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the inventoryIssueGetAllRequest method in the InventoryIssue resource', function () {
    Saloon::fake([
        InventoryIssueGetAllRequest::class => MockResponse::make([
            0 => [
                'totalAmount' => 42,
                'controlAmount' => 42,
                'issueLines' => [],
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
                'totalAmount' => 42,
                'controlAmount' => 42,
                'issueLines' => [],
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

    $request = new InventoryIssueGetAllRequest(
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

    Saloon::assertSent(InventoryIssueGetAllRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toBeArray()
        ->and($collection)->toHaveCount(2);

    $firstItem = $collection[0];

    expect($firstItem)
        ->totalAmount->toBe(42)
        ->controlAmount->toBe(42)
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

it('calls the inventoryIssuePostRequest method in the InventoryIssue resource', function () {
    $bodyData = new InventoryIssueUpdateDto(
        controlAmount: null,
        issueLines: [],
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
        InventoryIssuePostRequest::class => MockResponse::make([], 201),
    ]);

    $request = new InventoryIssuePostRequest(
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(InventoryIssuePostRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the inventoryIssueReleaseDocumentByinvoiceNumberRequest method in the InventoryIssue resource', function () {
    $bodyData = new InventoryIssueUpdateDto(
        controlAmount: null,
        issueLines: [],
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
        InventoryIssueReleaseDocumentByinvoiceNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new InventoryIssueReleaseDocumentByinvoiceNumberRequest(
        invoiceNumber: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(InventoryIssueReleaseDocumentByinvoiceNumberRequest::class);

    expect($response->status())->toBe(201);
});
