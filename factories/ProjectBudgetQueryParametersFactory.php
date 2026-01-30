<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ProjectBudgetQueryParameters;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ProjectBudgetQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'project' => $this->faker->word(),
            'lastModifiedDateTime' => $this->faker->word(),
            'lastModifiedDateTimeCondition' => $this->faker->word(),
            'pageNumber' => $this->faker->numberBetween(1, 100),
            'pageSize' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return ProjectBudgetQueryParameters::class;
    }
}
