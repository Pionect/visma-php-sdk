<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\WithoutWithVatDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class WithoutWithVatDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'withoutVat' => $this->faker->randomFloat(2, 0, 1000),
            'withVat' => $this->faker->randomFloat(2, 0, 1000),
        ];
    }

    protected function modelClass(): string
    {
        return WithoutWithVatDto::class;
    }
}
