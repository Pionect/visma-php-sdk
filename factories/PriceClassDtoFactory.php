<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PriceClassDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PriceClassDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return PriceClassDto::class;
    }
}
