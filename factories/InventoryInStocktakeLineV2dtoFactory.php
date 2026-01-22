<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\InventoryInStocktakeLineV2dto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class InventoryInStocktakeLineV2dtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'internalId' => $this->faker->numberBetween(1, 1000),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return InventoryInStocktakeLineV2dto::class;
    }
}
