<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ProjectInExpenseReceiptDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ProjectInExpenseReceiptDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'internalId' => $this->faker->numberBetween(1, 1000),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return ProjectInExpenseReceiptDto::class;
    }
}
