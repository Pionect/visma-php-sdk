<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\LotSerialClassQueryParameters;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class LotSerialClassQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
            'trackingMethod' => $this->faker->word(),
            'trackExpirationDate' => $this->faker->boolean(),
            'requiredForDropShip' => $this->faker->boolean(),
            'assignmentMethod' => $this->faker->word(),
            'issueMethod' => $this->faker->word(),
            'autoIncrementalValueBetweenClasses' => $this->faker->boolean(),
            'autoIncrementalValue' => $this->faker->word(),
            'autoGenerateNextNumber' => $this->faker->boolean(),
            'lastModifiedDateTime' => $this->faker->word(),
            'lastModifiedDateTimeCondition' => $this->faker->word(),
            'pageNumber' => $this->faker->numberBetween(1, 100),
            'pageSize' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return LotSerialClassQueryParameters::class;
    }
}
