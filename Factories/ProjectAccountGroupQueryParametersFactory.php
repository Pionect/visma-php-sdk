<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ProjectAccountGroupQueryParameters;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ProjectAccountGroupQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'expandAttribute' => $this->faker->boolean(),
            'greaterThanValue' => $this->faker->word(),
            'numberToRead' => $this->faker->numberBetween(1, 100),
            'skipRecords' => $this->faker->numberBetween(1, 100),
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
        return ProjectAccountGroupQueryParameters::class;
    }
}
