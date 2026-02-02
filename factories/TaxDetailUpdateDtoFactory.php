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
            'taxableAmount' => null,
            'vatAmount' => null,
        ];
    }

    protected function modelClass(): string
    {
        return TaxDetailUpdateDto::class;
    }
}
