<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\InventoryIssueUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class InventoryIssueUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'controlAmount' => $this->faker->word(),
            'issueLines' => [],
            'referenceNumber' => $this->faker->word(),
            'hold' => $this->faker->word(),
            'date' => $this->faker->word(),
            'postPeriod' => $this->faker->word(),
            'externalReference' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'controlQuantity' => $this->faker->word(),
            'branchNumber' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return InventoryIssueUpdateDto::class;
    }
}
