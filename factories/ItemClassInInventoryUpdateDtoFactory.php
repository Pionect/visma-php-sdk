<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ItemClassInInventoryUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ItemClassInInventoryUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ItemClassInInventoryUpdateDto::class;
    }
}
