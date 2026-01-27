<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\InventorySummaryDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class InventorySummaryDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'inventory' => $this->faker->word(),
            'warehouse' => $this->faker->word(),
            'location' => $this->faker->word(),
            'available' => $this->faker->randomFloat(2, 0, 1000),
            'availableForShipment' => $this->faker->randomFloat(2, 0, 1000),
            'notAvailable' => $this->faker->randomFloat(2, 0, 1000),
            'soBooked' => $this->faker->randomFloat(2, 0, 1000),
            'soAllocated' => $this->faker->randomFloat(2, 0, 1000),
            'soShipped' => $this->faker->randomFloat(2, 0, 1000),
            'soBackOrdered' => $this->faker->randomFloat(2, 0, 1000),
            'inIssues' => $this->faker->randomFloat(2, 0, 1000),
            'inReceipts' => $this->faker->randomFloat(2, 0, 1000),
            'inTransit' => $this->faker->randomFloat(2, 0, 1000),
            'inAssemblyDemand' => $this->faker->randomFloat(2, 0, 1000),
            'inAssemblySupply' => $this->faker->randomFloat(2, 0, 1000),
            'purchasePrepared' => $this->faker->randomFloat(2, 0, 1000),
            'purchaseOrders' => $this->faker->randomFloat(2, 0, 1000),
            'poReceipts' => $this->faker->randomFloat(2, 0, 1000),
            'expired' => $this->faker->randomFloat(2, 0, 1000),
            'onHand' => $this->faker->randomFloat(2, 0, 1000),
            'soToPurchase' => $this->faker->randomFloat(2, 0, 1000),
            'purchaseForSo' => $this->faker->randomFloat(2, 0, 1000),
            'purchaseForSoprepared' => $this->faker->randomFloat(2, 0, 1000),
            'purchaseForSoreceipts' => $this->faker->randomFloat(2, 0, 1000),
            'soToDropShip' => $this->faker->randomFloat(2, 0, 1000),
            'dropShipForSo' => $this->faker->randomFloat(2, 0, 1000),
            'dropShipForSoprepared' => $this->faker->randomFloat(2, 0, 1000),
            'dropShipForSoreceipts' => $this->faker->randomFloat(2, 0, 1000),
            'baseUnit' => $this->faker->word(),
            'estimatedUnitCost' => $this->faker->randomFloat(2, 0, 1000),
            'estimatedTotalCost' => $this->faker->randomFloat(2, 0, 1000),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return InventorySummaryDto::class;
    }
}
