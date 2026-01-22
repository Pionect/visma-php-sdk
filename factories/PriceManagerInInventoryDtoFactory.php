<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PriceManagerInInventoryDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PriceManagerInInventoryDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'name' => $this->faker->name(),
        ];
    }

    protected function modelClass(): string
    {
        return PriceManagerInInventoryDto::class;
    }
}
