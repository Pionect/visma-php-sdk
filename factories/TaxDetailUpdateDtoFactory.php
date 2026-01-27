<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\TaxDetailUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class TaxDetailUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'taxId' => $this->faker->uuid(),
            'taxableAmount' => $this->faker->randomFloat(2, 0, 1000),
            'vatAmount' => $this->faker->randomFloat(2, 0, 1000),
        ];
    }

    protected function modelClass(): string
    {
        return TaxDetailUpdateDto::class;
    }
}
