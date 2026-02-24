<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ProjectBudgetUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\ProjectBudgetUpdateDto>
 */
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
            'rate' => null,
            'originalBudgetQty' => null,
            'originalBudgetAmount' => null,
            'revisedBudgetQty' => null,
            'revisedBudgetAmount' => null,
        ];
    }

    protected function modelClass(): string
    {
        return ProjectBudgetUpdateDto::class;
    }
}
