<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ContactQueryParameters;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ContactQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'displayName' => $this->faker->company(),
            'active' => $this->faker->word(),
            'firstName' => $this->faker->company(),
            'lastName' => $this->faker->company(),
            'businessAccount' => $this->faker->word(),
            'email' => $this->faker->safeEmail(),
            'greaterThanValue' => $this->faker->word(),
            'numberToRead' => $this->faker->numberBetween(1, 100),
            'skipRecords' => $this->faker->numberBetween(1, 100),
            'orderBy' => $this->faker->word(),
            'lastModifiedDateTime' => $this->faker->word(),
            'lastModifiedDateTimeCondition' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ContactQueryParameters::class;
    }
}
