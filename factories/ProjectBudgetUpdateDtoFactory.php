<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ProjectBudgetUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ProjectBudgetUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'projectId' => $this->faker->uuid(),
            'projectTaskId' => $this->faker->uuid(),
            'accountGroupId' => $this->faker->uuid(),
            'inventoryNumber' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'uom' => $this->faker->word(),
            'rate' => $this->faker->randomFloat(2, 0, 1000),
            'originalBudgetQty' => $this->faker->randomFloat(2, 0, 1000),
            'originalBudgetAmount' => $this->faker->randomFloat(2, 0, 1000),
            'revisedBudgetQty' => $this->faker->randomFloat(2, 0, 1000),
            'revisedBudgetAmount' => $this->faker->randomFloat(2, 0, 1000),
        ];
    }

    protected function modelClass(): string
    {
        return ProjectBudgetUpdateDto::class;
    }
}
