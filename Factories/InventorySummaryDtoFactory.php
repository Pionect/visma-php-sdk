<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\InventorySummaryDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\InventorySummaryDto>
 */
class InventorySummaryDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'inventory' => null,
            'warehouse' => null,
            'location' => null,
            'available' => null,
            'availableForShipment' => null,
            'notAvailable' => null,
            'soBooked' => null,
            'soAllocated' => null,
            'soShipped' => null,
            'soBackOrdered' => null,
            'inIssues' => null,
            'inReceipts' => null,
            'inTransit' => null,
            'inAssemblyDemand' => null,
            'inAssemblySupply' => null,
            'purchasePrepared' => null,
            'purchaseOrders' => null,
            'poReceipts' => null,
            'expired' => null,
            'onHand' => null,
            'soToPurchase' => null,
            'purchaseForSo' => null,
            'purchaseForSoprepared' => null,
            'purchaseForSoreceipts' => null,
            'soToDropShip' => null,
            'dropShipForSo' => null,
            'dropShipForSoprepared' => null,
            'dropShipForSoreceipts' => null,
            'baseUnit' => $this->faker->word(),
            'estimatedUnitCost' => null,
            'estimatedTotalCost' => null,
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return InventorySummaryDto::class;
    }
}
