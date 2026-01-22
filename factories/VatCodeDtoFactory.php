<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\VatCodeDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class VatCodeDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return VatCodeDto::class;
    }
}
