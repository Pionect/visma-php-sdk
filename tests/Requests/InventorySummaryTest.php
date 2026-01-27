<?php

// auto-generated

use Pionect\VismaSdk\Requests\InventorySummary\InventorySummaryGetAllInventorySummaryByinventoryNumberRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the inventorySummaryGetAllInventorySummaryByinventoryNumber method in the InventorySummary resource', function () {
    Saloon::fake([
        InventorySummaryGetAllInventorySummaryByinventoryNumberRequest::class => MockResponse::make([
            'inventory' => null,
            'warehouse' => null,
            'location' => null,
            'available' => 3.14,
            'availableForShipment' => 3.14,
            'notAvailable' => 3.14,
            'soBooked' => 3.14,
            'soAllocated' => 3.14,
            'soShipped' => 3.14,
            'soBackOrdered' => 3.14,
            'inIssues' => 3.14,
            'inReceipts' => 3.14,
            'inTransit' => 3.14,
            'inAssemblyDemand' => 3.14,
            'inAssemblySupply' => 3.14,
            'purchasePrepared' => 3.14,
            'purchaseOrders' => 3.14,
            'poReceipts' => 3.14,
            'expired' => 3.14,
            'onHand' => 3.14,
            'soToPurchase' => 3.14,
            'purchaseForSo' => 3.14,
            'purchaseForSoprepared' => 3.14,
            'purchaseForSoreceipts' => 3.14,
            'soToDropShip' => 3.14,
            'dropShipForSo' => 3.14,
            'dropShipForSoprepared' => 3.14,
            'dropShipForSoreceipts' => 3.14,
            'baseUnit' => 'String value',
            'estimatedUnitCost' => 3.14,
            'estimatedTotalCost' => 3.14,
            'errorInfo' => 'String value',
            'id' => 'mock-id-123',
        ], 200),
    ]);

    $request = new InventorySummaryGetAllInventorySummaryByinventoryNumberRequest(
        inventoryNumberId: 'test string',
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
        ->available->toBe(3.14)
        ->availableForShipment->toBe(3.14)
        ->notAvailable->toBe(3.14)
        ->soBooked->toBe(3.14)
        ->soAllocated->toBe(3.14)
        ->soShipped->toBe(3.14)
        ->soBackOrdered->toBe(3.14)
        ->inIssues->toBe(3.14)
        ->inReceipts->toBe(3.14)
        ->inTransit->toBe(3.14)
        ->inAssemblyDemand->toBe(3.14)
        ->inAssemblySupply->toBe(3.14)
        ->purchasePrepared->toBe(3.14)
        ->purchaseOrders->toBe(3.14)
        ->poReceipts->toBe(3.14)
        ->expired->toBe(3.14)
        ->onHand->toBe(3.14)
        ->soToPurchase->toBe(3.14)
        ->purchaseForSo->toBe(3.14)
        ->purchaseForSoprepared->toBe(3.14)
        ->purchaseForSoreceipts->toBe(3.14)
        ->soToDropShip->toBe(3.14)
        ->dropShipForSo->toBe(3.14)
        ->dropShipForSoprepared->toBe(3.14)
        ->dropShipForSoreceipts->toBe(3.14)
        ->baseUnit->toBe('String value')
        ->estimatedUnitCost->toBe(3.14)
        ->estimatedTotalCost->toBe(3.14)
        ->errorInfo->toBe('String value')
        ->id->toBe('mock-id-123');
});
