<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\InventoryIssueUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class InventoryIssueUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'controlAmount' => null,
            'issueLines' => [],
            'referenceNumber' => $this->faker->word(),
            'hold' => null,
            'date' => null,
            'postPeriod' => null,
            'externalReference' => null,
            'description' => $this->faker->sentence(),
            'controlQuantity' => null,
            'branchNumber' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return InventoryIssueUpdateDto::class;
    }
}
