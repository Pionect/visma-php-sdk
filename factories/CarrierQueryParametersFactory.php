<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CarrierQueryParameters;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CarrierQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'numberToRead' => $this->faker->numberBetween(1, 100),
            'skipRecords' => $this->faker->numberBetween(1, 100),
            'lastModifiedDateTime' => $this->faker->word(),
            'lastModifiedDateTimeCondition' => $this->faker->word(),
            'pageNumber' => $this->faker->numberBetween(1, 100),
            'pageSize' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return CarrierQueryParameters::class;
    }
}
