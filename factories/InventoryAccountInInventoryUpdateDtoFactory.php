<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\InventoryAccountInInventoryUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class InventoryAccountInInventoryUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return InventoryAccountInInventoryUpdateDto::class;
    }
}
