<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SubaccountQueryParameters;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SubaccountQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'lastModifiedDateTime' => $this->faker->word(),
            'lastModifiedDateTimeCondition' => $this->faker->word(),
            'active' => $this->faker->boolean(),
            'pageNumber' => $this->faker->numberBetween(1, 100),
            'pageSize' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return SubaccountQueryParameters::class;
    }
}
