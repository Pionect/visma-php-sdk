<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomerContractQueryParameters;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerContractQueryParametersFactory extends Factory
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
            'contractTemplate' => $this->faker->word(),
            'status' => $this->faker->word(),
            'customer' => $this->faker->word(),
            'expandSummary' => $this->faker->boolean(),
            'expandDetails' => $this->faker->boolean(),
            'attributes' => $this->faker->word(),
            'expandAttributes' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerContractQueryParameters::class;
    }
}
