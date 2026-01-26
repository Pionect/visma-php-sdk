<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\InventoryTransfer\InventoryTransferGetAllCollectionRequest;
use Pionect\VismaSdk\Requests\InventoryTransfer\InventoryTransferGetByinventoryTransferNumberRequest;
use Pionect\VismaSdk\Requests\InventoryTransfer\InventoryTransferReleaseDocumentBytransferNumberRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Http\Request;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector(
        clientId: 'replace',
        clientSecret: 'replace'
    );
});

it('calls the inventoryTransferGetByinventoryTransferNumber method in the InventoryTransfer resource', function () {
    Saloon::fake([
        InventoryTransferGetByinventoryTransferNumberRequest::class => MockResponse::make([
            'warehouse' => 'Mock value',
            'toWarehouse' => 'Mock value',
            'transferLines' => [],
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
        ], 200),
    ]);

    $request = new InventoryTransferGetByinventoryTransferNumberRequest(
        inventoryTransferNumberId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(InventoryTransferGetByinventoryTransferNumberRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->warehouse->toBe('Mock value')
        ->toWarehouse->toBe('Mock value')
        ->referenceNumber->toBe('Mock value')
        ->status->toBe('Mock value')
        ->hold->toBeTrue()
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

it('calls the inventoryTransferGetAllCollection method in the InventoryTransfer resource', function () {
    Saloon::fake([
        InventoryTransferGetAllCollectionRequest::class => MockResponse::make([
            0 => [
                'warehouse' => 'Mock value',
                'toWarehouse' => 'Mock value',
                'transferLines' => [],
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
            1 => [
                'warehouse' => 'Mock value',
                'toWarehouse' => 'Mock value',
                'transferLines' => [],
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
        ], 200),
    ]);

    $request = (new InventoryTransferGetAllCollectionRequest(warehouse: 'test string', toWarehouse: 'test string', status: 'test string', date: 'test string', dateCondition: 'test string', greaterThanValue: 'test string', numberToRead: 123, skipRecords: 123, orderBy: 'test string', lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', pageNumber: 123, pageSize: 123));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (InventoryTransferGetAllCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->warehouse->toBe('Mock value')
        ->toWarehouse->toBe('Mock value')
        ->referenceNumber->toBe('Mock value')
        ->status->toBe('Mock value')
        ->hold->toBeTrue()
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

it('calls the inventoryTransferReleaseDocumentBytransferNumber method in the InventoryTransfer resource', function () {
    $mockClient = Saloon::fake([
        InventoryTransferReleaseDocumentBytransferNumberRequest::class => MockResponse::make([], 200),
    ]);

    // Create DTO with sample data
    $dto = \Pionect\VismaSdk\Dto\ReleaseInventoryDocumentActionResultDto::factory()->state([
        'actionId' => 'action_id-123',
        'actionResult' => 'test value',
        'errorInfo' => 'test value',
    ])->make();

    $request = new InventoryTransferReleaseDocumentBytransferNumberRequest(transferNumberId: 'transfer_number_id-123', data: $dto);
    $this->vismaConnector->send($request);

    Saloon::assertSent(InventoryTransferReleaseDocumentBytransferNumberRequest::class);

    $mockClient->assertSent(function (Request $request) {
        expect($request->body()->all())
            ->toHaveKey('data')
            ->data->type->toBe('inventoryTransfers')
            ->data->attributes->scoped(fn ($attributes) => $attributes
            ->actionId->toBe('action_id-123')
            ->actionResult->toBe('test value')
            ->errorInfo->toBe('test value')
            );

        return true;
    });
});
