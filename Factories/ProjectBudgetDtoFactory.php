<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ProjectBudgetDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\ProjectBudgetDto>
 */
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
            'rate' => null,
            'originalBudgetQty' => null,
            'originalBudgetAmount' => null,
            'revisedBudgetQty' => null,
            'revisedBudgetAmount' => null,
            'actualQty' => null,
            'actualAmount' => null,
            'type' => $this->faker->word(),
            'committedQty' => null,
            'committedAmount' => null,
            'committedOpenQty' => null,
            'committedOpenAmount' => null,
            'committedReceivedQty' => null,
            'committedInvoicedQty' => null,
            'committedInvoicedAmount' => null,
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ProjectBudgetDto::class;
    }
}
