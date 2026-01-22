<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\InventoryItemInInventoryIssueLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class InventoryItemInInventoryIssueLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'number' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return InventoryItemInInventoryIssueLineDto::class;
    }
}
