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
            'totalAmount' => 3.14,
            'controlAmount' => 3.14,
            'issueLines' => [],
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

it('calls the inventoryIssueGetAllCollection method in the InventoryIssue resource', function () {
    Saloon::fake([
        InventoryIssueGetAllCollectionRequest::class => MockResponse::make([
            0 => [
                'totalAmount' => 3.14,
                'controlAmount' => 3.14,
                'issueLines' => [],
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
                'totalAmount' => 3.14,
                'controlAmount' => 3.14,
                'issueLines' => [],
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

    $request = (new InventoryIssueGetAllCollectionRequest(status: 'test string', date: 'test string', dateCondition: 'test string', greaterThanValue: 'test string', numberToRead: 123, skipRecords: 123, orderBy: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', pageNumber: 123, pageSize: 123));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (InventoryIssueGetAllCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->totalAmount->toBe(3.14)
        ->controlAmount->toBe(3.14)
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
