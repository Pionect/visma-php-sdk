<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ProjectBudgetDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ProjectBudgetDtoFactory extends Factory
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
            'actualQty' => $this->faker->randomFloat(2, 0, 1000),
            'actualAmount' => $this->faker->randomFloat(2, 0, 1000),
            'committedQty' => $this->faker->randomFloat(2, 0, 1000),
            'committedAmount' => $this->faker->randomFloat(2, 0, 1000),
            'committedOpenQty' => $this->faker->randomFloat(2, 0, 1000),
            'committedOpenAmount' => $this->faker->randomFloat(2, 0, 1000),
            'committedReceivedQty' => $this->faker->randomFloat(2, 0, 1000),
            'committedInvoicedQty' => $this->faker->randomFloat(2, 0, 1000),
            'committedInvoicedAmount' => $this->faker->randomFloat(2, 0, 1000),
            'errorInfo' => $this->faker->word(),
            'metadata' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ProjectBudgetDto::class;
    }
}
