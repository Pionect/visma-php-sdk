<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\TaxZoneInFinancialsDetailDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class TaxZoneInFinancialsDetailDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
            'defaultVatCategory' => $this->faker->word(),
            'defaultTaxCategory' => $this->faker->word(),
            'errorInfo' => $this->faker->word(),
            'metadata' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return TaxZoneInFinancialsDetailDto::class;
    }
}
