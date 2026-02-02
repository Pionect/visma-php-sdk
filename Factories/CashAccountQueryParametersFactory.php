<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CashAccountQueryParameters;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CashAccountQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'greaterThanValue' => $this->faker->word(),
            'numberToRead' => $this->faker->numberBetween(1, 100),
            'skipRecords' => $this->faker->numberBetween(1, 100),
            'lastModifiedDateTime' => $this->faker->word(),
            'lastModifiedDateTimeCondition' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CashAccountQueryParameters::class;
    }
}
