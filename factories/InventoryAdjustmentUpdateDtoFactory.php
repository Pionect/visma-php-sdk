<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\InventoryAdjustmentUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class InventoryAdjustmentUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'controlCost' => null,
            'adjustmentLines' => [],
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
        return InventoryAdjustmentUpdateDto::class;
    }
}
