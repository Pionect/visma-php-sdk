<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\TaxDetailUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class TaxDetailUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'taxId' => $this->faker->word(),
            'taxableAmount' => $this->faker->word(),
            'vatAmount' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return TaxDetailUpdateDto::class;
    }
}
