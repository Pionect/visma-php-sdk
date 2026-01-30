<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\InventoryTransferUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class InventoryTransferUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'warehouseId' => $this->faker->uuid(),
            'toWarehouseId' => $this->faker->uuid(),
            'transferLines' => [],
            'referenceNumber' => $this->faker->word(),
            'hold' => null,
            'date' => null,
            'postPeriod' => null,
            'externalReference' => null,
            'description' => $this->faker->sentence(),
            'controlQuantity' => null,
            'branchNumber' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return InventoryTransferUpdateDto::class;
    }
}
