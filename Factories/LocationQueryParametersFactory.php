<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\LocationQueryParameters;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class LocationQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'locationId' => $this->faker->uuid(),
            'gln' => $this->faker->word(),
            'numberToRead' => $this->faker->numberBetween(1, 100),
            'skipRecords' => $this->faker->numberBetween(1, 100),
            'greaterThanValue' => $this->faker->word(),
            'lastModifiedDateTime' => $this->faker->word(),
            'lastModifiedDateTimeCondition' => $this->faker->word(),
            'createdDateTime' => $this->faker->word(),
            'createdDateTimeCondition' => $this->faker->word(),
            'pageNumber' => $this->faker->numberBetween(1, 100),
            'pageSize' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return LocationQueryParameters::class;
    }
}
