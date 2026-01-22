<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PriceManagerDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PriceManagerDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'name' => $this->faker->name(),
        ];
    }

    protected function modelClass(): string
    {
        return PriceManagerDto::class;
    }
}
