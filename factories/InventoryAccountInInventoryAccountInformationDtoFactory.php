<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\InventoryAccountInInventoryAccountInformationDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class InventoryAccountInInventoryAccountInformationDtoFactory extends Factory
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
        return InventoryAccountInInventoryAccountInformationDto::class;
    }
}
