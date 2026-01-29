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
            'vatId' => VatIdInTaxDetailDtoFactory::new()->make(),
            'vatRate' => $this->faker->randomFloat(2, 0, 1000),
            'taxableAmount' => $this->faker->randomFloat(2, 0, 1000),
            'vatAmount' => $this->faker->randomFloat(2, 0, 1000),
        ];
    }

    protected function modelClass(): string
    {
        return TaxDetailDto::class;
    }
}
