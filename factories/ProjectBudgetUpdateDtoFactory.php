<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ProjectBudgetUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ProjectBudgetUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'projectId' => $this->faker->word(),
            'projectTaskId' => $this->faker->word(),
            'accountGroupId' => $this->faker->word(),
            'inventoryNumber' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'uom' => $this->faker->word(),
            'rate' => $this->faker->word(),
            'originalBudgetQty' => $this->faker->word(),
            'originalBudgetAmount' => $this->faker->word(),
            'revisedBudgetQty' => $this->faker->word(),
            'revisedBudgetAmount' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ProjectBudgetUpdateDto::class;
    }
}
