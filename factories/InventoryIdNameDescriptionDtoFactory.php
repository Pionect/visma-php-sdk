<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\InventoryIdNameDescriptionDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class InventoryIdNameDescriptionDtoFactory extends Factory
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
        return InventoryIdNameDescriptionDto::class;
    }
}
