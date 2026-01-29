<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\InventoryReceipt\InventoryReceiptGetAllCollectionRequest;
use Pionect\VismaSdk\Requests\InventoryReceipt\InventoryReceiptGetByinventoryReceiptNumberRequest;
use Pionect\VismaSdk\Requests\InventoryReceipt\InventoryReceiptReleaseDocumentByinvoiceNumberRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Http\Request;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the inventoryReceiptGetByinventoryReceiptNumber method in the InventoryReceipt resource', function () {
    Saloon::fake([
        InventoryReceiptGetByinventoryReceiptNumberRequest::class => MockResponse::make([
            'totalCost' => 3.14,
            'controlCost' => 3.14,
            'transferNumber' => 'String value',
            'receiptLines' => [],
            'referenceNumber' => 'String value',
            'status' => 'String value',
            'hold' => true,
            'date' => '2025-11-22T10:40:04.065Z',
            'postPeriod' => 'String value',
            'externalReference' => 'String value',
            'description' => 'String value',
            'totalQuantity' => 3.14,
            'controlQuantity' => 3.14,
            'batchNumber' => 'String value',
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'branchNumber' => null,
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
        ->totalCost->toBe(3.14)
        ->controlCost->toBe(3.14)
        ->transferNumber->toBe('String value')
        ->referenceNumber->toBe('String value')
        ->status->toBe('String value')
        ->hold->toBeTrue()
        ->date->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->postPeriod->toBe('String value')
        ->externalReference->toBe('String value')
        ->description->toBe('String value')
        ->totalQuantity->toBe(3.14)
        ->controlQuantity->toBe(3.14)
        ->batchNumber->toBe('String value')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->branchNumber->toBeNull()
        ->timestamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the inventoryReceiptGetAllCollection method in the InventoryReceipt resource', function () {
    Saloon::fake([
        InventoryReceiptGetAllCollectionRequest::class => MockResponse::make([
            0 => [
                'totalCost' => 3.14,
                'controlCost' => 3.14,
                'transferNumber' => 'String value',
                'receiptLines' => [],
                'referenceNumber' => 'String value',
                'status' => 'String value',
                'hold' => true,
                'date' => '2025-11-22T10:40:04.065Z',
                'postPeriod' => 'String value',
                'externalReference' => 'String value',
                'description' => 'String value',
                'totalQuantity' => 3.14,
                'controlQuantity' => 3.14,
                'batchNumber' => 'String value',
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'branchNumber' => null,
                'attachments' => [],
                'timestamp' => 'String value',
                'errorInfo' => 'String value',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
            1 => [
                'totalCost' => 3.14,
                'controlCost' => 3.14,
                'transferNumber' => 'String value',
                'receiptLines' => [],
                'referenceNumber' => 'String value',
                'status' => 'String value',
                'hold' => true,
                'date' => '2025-11-22T10:40:04.065Z',
                'postPeriod' => 'String value',
                'externalReference' => 'String value',
                'description' => 'String value',
                'totalQuantity' => 3.14,
                'controlQuantity' => 3.14,
                'batchNumber' => 'String value',
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'branchNumber' => null,
                'attachments' => [],
                'timestamp' => 'String value',
                'errorInfo' => 'String value',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
        ], 200),
    ]);

    $request = (new InventoryReceiptGetAllCollectionRequest(status: 'test string', date: 'test string', dateCondition: 'test string', greaterThanValue: 'test string', numberToRead: 123, skipRecords: 123, orderBy: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', pageNumber: 123, pageSize: 123));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (InventoryReceiptGetAllCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->totalCost->toBe(3.14)
        ->controlCost->toBe(3.14)
        ->transferNumber->toBe('String value')
        ->referenceNumber->toBe('String value')
        ->status->toBe('String value')
        ->hold->toBeTrue()
        ->date->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->postPeriod->toBe('String value')
        ->externalReference->toBe('String value')
        ->description->toBe('String value')
        ->totalQuantity->toBe(3.14)
        ->controlQuantity->toBe(3.14)
        ->batchNumber->toBe('String value')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->branchNumber->toBeNull()
        ->timestamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the inventoryReceiptReleaseDocumentByinvoiceNumber method in the InventoryReceipt resource', function () {
    $mockClient = Saloon::fake([
        InventoryReceiptReleaseDocumentByinvoiceNumberRequest::class => MockResponse::make([], 200),
    ]);

    // Create DTO with sample data
    $dto = \Pionect\VismaSdk\Dto\ReleaseInventoryDocumentActionResultDto::factory()->state([
        'actionId' => 'action_id-123',
        'actionResult' => 'test value',
        'errorInfo' => 'test value',
    ])->make();

    $request = new InventoryReceiptReleaseDocumentByinvoiceNumberRequest(invoiceNumber: 'test value', data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(InventoryReceiptReleaseDocumentByinvoiceNumberRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value')
            ->errorInfo->toBe('test value');

        return true;
    });
});
