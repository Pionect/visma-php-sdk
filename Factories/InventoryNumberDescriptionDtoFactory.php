<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\InventoryNumberDescriptionDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class InventoryNumberDescriptionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'number' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return InventoryNumberDescriptionDto::class;
    }
}
