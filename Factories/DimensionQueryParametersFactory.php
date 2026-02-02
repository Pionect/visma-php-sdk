<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DimensionQueryParameters;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DimensionQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'greaterThanValue' => $this->faker->word(),
            'numberToRead' => $this->faker->numberBetween(1, 100),
            'skipRecords' => $this->faker->numberBetween(1, 100),
            'orderBy' => $this->faker->word(),
            'lastModifiedDateTime' => $this->faker->word(),
            'lastModifiedDateTimeCondition' => $this->faker->word(),
            'expandSegmentsValues' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return DimensionQueryParameters::class;
    }
}
