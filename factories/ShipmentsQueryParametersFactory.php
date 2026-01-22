<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\ShipmentsQueryParameters;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ShipmentsQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'customerId' => $this->faker->numberBetween(1, 1000),
            'customerNumber' => $this->faker->word(),
            'greaterThanValue' => $this->faker->word(),
            'numberToRead' => $this->faker->numberBetween(1, 100),
            'skipRecords' => $this->faker->numberBetween(1, 100),
            'orderBy' => $this->faker->word(),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'lastModifiedDateTimeCondition' => $this->faker->word(),
            'status' => $this->faker->word(),
            'pageSize' => $this->faker->numberBetween(1, 100),
            'pageNumber' => $this->faker->numberBetween(1, 100),
            'shipmentType' => $this->faker->word(),
            'shipmentDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'shipmentDateCondition' => $this->faker->word(),
            'includeCustomFreeFields' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return ShipmentsQueryParameters::class;
    }
}
