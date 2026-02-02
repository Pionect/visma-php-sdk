<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\VatQueryParameters;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class VatQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'numberToRead' => $this->faker->numberBetween(1, 100),
            'skipRecords' => $this->faker->numberBetween(1, 100),
            'lastModifiedDateTime' => $this->faker->word(),
            'lastModifiedDateTimeCondition' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return VatQueryParameters::class;
    }
}
