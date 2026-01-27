<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ItemClassInInventoryDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ItemClassInInventoryDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'attributes' => [],
            'description' => $this->faker->sentence(),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ItemClassInInventoryDto::class;
    }
}
