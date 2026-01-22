<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\InventoryIssue\InventoryIssueGetAllCollectionRequest;
use Pionect\VismaSdk\Requests\InventoryIssue\InventoryIssueGetByinventoryIssueNumberRequest;
use Pionect\VismaSdk\Requests\InventoryIssue\InventoryIssueReleaseDocumentByinvoiceNumberRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Http\Request;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the inventoryIssueGetByinventoryIssueNumber method in the InventoryIssue resource', function () {
    Saloon::fake([
        InventoryIssueGetByinventoryIssueNumberRequest::class => MockResponse::make([
            'data' => [
                'type' => 'inventoryIssues',
                'id' => 'mock-id-123',
                'attributes' => [
                    'totalAmount' => 3.14,
                    'controlAmount' => 3.14,
                    'issueLines' => [],
                    'referenceNumber' => 'Mock value',
                    'status' => 'Mock value',
                    'hold' => true,
                    'date' => '2025-11-22T10:40:04.065Z',
                    'postPeriod' => 'Mock value',
                    'externalReference' => 'Mock value',
                    'description' => 'Mock value',
                    'totalQuantity' => 3.14,
                    'controlQuantity' => 3.14,
                    'batchNumber' => 'Mock value',
                    'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                    'branchNumber' => 'Mock value',
                    'attachments' => [],
                    'timestamp' => 'Mock value',
                    'errorInfo' => 'Mock value',
                    'metadata' => 'Mock value',
                ],
            ],
        ], 200),
    ]);

    $request = new InventoryIssueGetByinventoryIssueNumberRequest(
        inventoryIssueNumberId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(InventoryIssueGetByinventoryIssueNumberRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->totalAmount->toBe(3.14)
        ->controlAmount->toBe(3.14)
        ->referenceNumber->toBe('Mock value')
        ->status->toBe('Mock value')
        ->hold->toBe(true)
        ->date->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->postPeriod->toBe('Mock value')
        ->externalReference->toBe('Mock value')
        ->description->toBe('Mock value')
        ->totalQuantity->toBe(3.14)
        ->controlQuantity->toBe(3.14)
        ->batchNumber->toBe('Mock value')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->branchNumber->toBe('Mock value')
        ->timestamp->toBe('Mock value')
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the inventoryIssueGetAllCollection method in the InventoryIssue resource', function () {
    Saloon::fake([
        InventoryIssueGetAllCollectionRequest::class => MockResponse::make([
            'data' => [
                0 => [
                    'type' => 'inventoryIssues',
                    'id' => 'mock-id-1',
                    'attributes' => [
                        'totalAmount' => 3.14,
                        'controlAmount' => 3.14,
                        'issueLines' => [],
                        'referenceNumber' => 'Mock value',
                        'status' => 'Mock value',
                        'hold' => true,
                        'date' => '2025-11-22T10:40:04.065Z',
                        'postPeriod' => 'Mock value',
                        'externalReference' => 'Mock value',
                        'description' => 'Mock value',
                        'totalQuantity' => 3.14,
                        'controlQuantity' => 3.14,
                        'batchNumber' => 'Mock value',
                        'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                        'branchNumber' => 'Mock value',
                        'attachments' => [],
                        'timestamp' => 'Mock value',
                        'errorInfo' => 'Mock value',
                        'metadata' => 'Mock value',
                    ],
                ],
                1 => [
                    'type' => 'inventoryIssues',
                    'id' => 'mock-id-2',
                    'attributes' => [
                        'totalAmount' => 3.14,
                        'controlAmount' => 3.14,
                        'issueLines' => [],
                        'referenceNumber' => 'Mock value',
                        'status' => 'Mock value',
                        'hold' => true,
                        'date' => '2025-11-22T10:40:04.065Z',
                        'postPeriod' => 'Mock value',
                        'externalReference' => 'Mock value',
                        'description' => 'Mock value',
                        'totalQuantity' => 3.14,
                        'controlQuantity' => 3.14,
                        'batchNumber' => 'Mock value',
                        'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                        'branchNumber' => 'Mock value',
                        'attachments' => [],
                        'timestamp' => 'Mock value',
                        'errorInfo' => 'Mock value',
                        'metadata' => 'Mock value',
                    ],
                ],
            ],
        ], 200),
    ]);

    $request = (new InventoryIssueGetAllCollectionRequest(status: 'test string', date: 'test string', dateCondition: 'test string', greaterThanValue: 'test string', numberToRead: 123, skipRecords: 123, orderBy: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', pageNumber: 123, pageSize: 123));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (InventoryIssueGetAllCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->totalAmount->toBe(3.14)
        ->controlAmount->toBe(3.14)
        ->referenceNumber->toBe('Mock value')
        ->status->toBe('Mock value')
        ->hold->toBe(true)
        ->date->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->postPeriod->toBe('Mock value')
        ->externalReference->toBe('Mock value')
        ->description->toBe('Mock value')
        ->totalQuantity->toBe(3.14)
        ->controlQuantity->toBe(3.14)
        ->batchNumber->toBe('Mock value')
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->branchNumber->toBe('Mock value')
        ->timestamp->toBe('Mock value')
        ->errorInfo->toBe('Mock value')
        ->metadata->toBe('Mock value');
});

it('calls the inventoryIssueReleaseDocumentByinvoiceNumber method in the InventoryIssue resource', function () {
    $mockClient = Saloon::fake([
        InventoryIssueReleaseDocumentByinvoiceNumberRequest::class => MockResponse::make([], 200),
    ]);

    // Create DTO with sample data
    $dto = \Pionect\VismaSdk\Dto\ReleaseInventoryDocumentActionResultDto::factory()->state([
        'actionId' => 'action_id-123',
        'actionResult' => 'test value',
        'errorInfo' => 'test value',
    ])->make();

    $request = new InventoryIssueReleaseDocumentByinvoiceNumberRequest(invoiceNumberId: 'invoice_number_id-123', data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(InventoryIssueReleaseDocumentByinvoiceNumberRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->toHaveKey('data')
            ->data->type->toBe('inventoryIssues')
            ->data->attributes->scoped(fn ($attributes) => $attributes
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value')
            ->errorInfo->toBe('test value')
            );

        return true;
    });
});
