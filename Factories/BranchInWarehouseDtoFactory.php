<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BranchInWarehouseDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BranchInWarehouseDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'number' => $this->faker->word(),
            'name' => $this->faker->name(),
        ];
    }

    protected function modelClass(): string
    {
        return BranchInWarehouseDto::class;
    }
}
