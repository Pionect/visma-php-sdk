<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PriceClassInInventoryDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PriceClassInInventoryDtoFactory extends Factory
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
        return PriceClassInInventoryDto::class;
    }
}
