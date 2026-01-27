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
            'hold' => $this->faker->word(),
            'date' => $this->faker->word(),
            'postPeriod' => $this->faker->word(),
            'externalReference' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'controlQuantity' => $this->faker->word(),
            'branchNumber' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return InventoryTransferUpdateDto::class;
    }
}
