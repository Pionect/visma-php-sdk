<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SalesCategoryLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SalesCategoryLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'categoryId' => $this->faker->numberBetween(1, 1000),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return SalesCategoryLineDto::class;
    }
}
