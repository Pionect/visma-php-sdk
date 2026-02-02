<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\WarehouseInInventoryTransferDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class WarehouseInInventoryTransferDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'id' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return WarehouseInInventoryTransferDto::class;
    }
}
