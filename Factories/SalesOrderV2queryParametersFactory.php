<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SalesOrderV2queryParameters;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SalesOrderV2queryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'orderType' => $this->faker->word(),
            'status' => $this->faker->word(),
            'greaterThanValue' => $this->faker->word(),
            'showNotes' => $this->faker->boolean(),
            'lastModifiedDateTime' => $this->faker->word(),
            'lastModifiedDateTimeCondition' => $this->faker->word(),
            'pageNumber' => $this->faker->numberBetween(1, 100),
            'pageSize' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return SalesOrderV2queryParameters::class;
    }
}
