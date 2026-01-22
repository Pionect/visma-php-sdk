<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\InventoryAdjustment\InventoryAdjustmentGetAllCollectionRequest;
use Pionect\VismaSdk\Requests\InventoryAdjustment\InventoryAdjustmentGetByinventoryAdjustmentNumberRequest;
use Pionect\VismaSdk\Requests\InventoryAdjustment\InventoryAdjustmentReleaseDocumentByadjRefNumberRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Http\Request;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the inventoryAdjustmentGetByinventoryAdjustmentNumber method in the InventoryAdjustment resource', function () {
    Saloon::fake([
        InventoryAdjustmentGetByinventoryAdjustmentNumberRequest::class => MockResponse::make([
            'data' => [
                'type' => 'inventoryAdjustments',
                'id' => 'mock-id-123',
                'attributes' => [
                    'totalCost' => 3.14,
                    'controlCost' => 3.14,
                    'adjusmentLines' => [],
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

    $request = new InventoryAdjustmentGetByinventoryAdjustmentNumberRequest(
        inventoryAdjustmentNumberId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(InventoryAdjustmentGetByinventoryAdjustmentNumberRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->totalCost->toBe(3.14)
        ->controlCost->toBe(3.14)
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

it('calls the inventoryAdjustmentGetAllCollection method in the InventoryAdjustment resource', function () {
    Saloon::fake([
        InventoryAdjustmentGetAllCollectionRequest::class => MockResponse::make([
            'data' => [
                0 => [
                    'type' => 'inventoryAdjustments',
                    'id' => 'mock-id-1',
                    'attributes' => [
                        'totalCost' => 3.14,
                        'controlCost' => 3.14,
                        'adjusmentLines' => [],
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
                    'type' => 'inventoryAdjustments',
                    'id' => 'mock-id-2',
                    'attributes' => [
                        'totalCost' => 3.14,
                        'controlCost' => 3.14,
                        'adjusmentLines' => [],
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

    $request = (new InventoryAdjustmentGetAllCollectionRequest(status: 'test string', date: 'test string', dateCondition: 'test string', greaterThanValue: 'test string', numberToRead: 123, skipRecords: 123, orderBy: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', pageNumber: 123, pageSize: 123));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (InventoryAdjustmentGetAllCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->totalCost->toBe(3.14)
        ->controlCost->toBe(3.14)
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

it('calls the inventoryAdjustmentReleaseDocumentByadjRefNumber method in the InventoryAdjustment resource', function () {
    $mockClient = Saloon::fake([
        InventoryAdjustmentReleaseDocumentByadjRefNumberRequest::class => MockResponse::make([], 200),
    ]);

    // Create DTO with sample data
    $dto = \Pionect\VismaSdk\Dto\ReleaseInventoryDocumentActionResultDto::factory()->state([
        'actionId' => 'action_id-123',
        'actionResult' => 'test value',
        'errorInfo' => 'test value',
    ])->make();

    $request = new InventoryAdjustmentReleaseDocumentByadjRefNumberRequest(adjRefNumberId: 'adj_ref_number_id-123', data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(InventoryAdjustmentReleaseDocumentByadjRefNumberRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->toHaveKey('data')
            ->data->type->toBe('inventoryAdjustments')
            ->data->attributes->scoped(fn ($attributes) => $attributes
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value')
            ->errorInfo->toBe('test value')
            );

        return true;
    });
});
