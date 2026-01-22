<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
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
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'lastModifiedDateTimeCondition' => $this->faker->word(),
            'createdDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
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
