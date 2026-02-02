<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\TaxDetailDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class TaxDetailDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'taxId' => $this->faker->uuid(),
            'recordId' => $this->faker->numberBetween(1, 1000),
            'vatId' => null,
            'vatRate' => null,
            'taxableAmount' => null,
            'vatAmount' => null,
        ];
    }

    protected function modelClass(): string
    {
        return TaxDetailDto::class;
    }
}
