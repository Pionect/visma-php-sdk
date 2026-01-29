<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\WarehouseInStocktakeLineV2dto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class WarehouseInStocktakeLineV2dtoFactory extends Factory
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
        return WarehouseInStocktakeLineV2dto::class;
    }
}
