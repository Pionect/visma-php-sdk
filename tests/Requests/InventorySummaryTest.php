<?php

// Generated 2026-01-30 15:19:40

use Pionect\VismaSdk\Requests\InventorySummary\InventorySummaryGetAllInventorySummaryByinventoryNumberRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the inventorySummaryGetAllInventorySummaryByinventoryNumberRequest method in the InventorySummary resource', function () {
    Saloon::fake([
        InventorySummaryGetAllInventorySummaryByinventoryNumberRequest::class => MockResponse::make([
            'inventory' => null,
            'warehouse' => null,
            'location' => null,
            'available' => 42,
            'availableForShipment' => 42,
            'notAvailable' => 42,
            'soBooked' => 42,
            'soAllocated' => 42,
            'soShipped' => 42,
            'soBackOrdered' => 42,
            'inIssues' => 42,
            'inReceipts' => 42,
            'inTransit' => 42,
            'inAssemblyDemand' => 42,
            'inAssemblySupply' => 42,
            'purchasePrepared' => 42,
            'purchaseOrders' => 42,
            'poReceipts' => 42,
            'expired' => 42,
            'onHand' => 42,
            'soToPurchase' => 42,
            'purchaseForSo' => 42,
            'purchaseForSoprepared' => 42,
            'purchaseForSoreceipts' => 42,
            'soToDropShip' => 42,
            'dropShipForSo' => 42,
            'dropShipForSoprepared' => 42,
            'dropShipForSoreceipts' => 42,
            'baseUnit' => 'String value',
            'estimatedUnitCost' => 42,
            'estimatedTotalCost' => 42,
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new InventorySummaryGetAllInventorySummaryByinventoryNumberRequest(
        inventoryNumber: 'test string',
        warehouse: 'test string',
        location: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(InventorySummaryGetAllInventorySummaryByinventoryNumberRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->inventory->toBeNull()
        ->warehouse->toBeNull()
        ->location->toBeNull()
        ->available->toBe(42)
        ->availableForShipment->toBe(42)
        ->notAvailable->toBe(42)
        ->soBooked->toBe(42)
        ->soAllocated->toBe(42)
        ->soShipped->toBe(42)
        ->soBackOrdered->toBe(42)
        ->inIssues->toBe(42)
        ->inReceipts->toBe(42)
        ->inTransit->toBe(42)
        ->inAssemblyDemand->toBe(42)
        ->inAssemblySupply->toBe(42)
        ->purchasePrepared->toBe(42)
        ->purchaseOrders->toBe(42)
        ->poReceipts->toBe(42)
        ->expired->toBe(42)
        ->onHand->toBe(42)
        ->soToPurchase->toBe(42)
        ->purchaseForSo->toBe(42)
        ->purchaseForSoprepared->toBe(42)
        ->purchaseForSoreceipts->toBe(42)
        ->soToDropShip->toBe(42)
        ->dropShipForSo->toBe(42)
        ->dropShipForSoprepared->toBe(42)
        ->dropShipForSoreceipts->toBe(42)
        ->baseUnit->toBe('String value')
        ->estimatedUnitCost->toBe(42)
        ->estimatedTotalCost->toBe(42)
        ->errorInfo->toBe('String value');
});
