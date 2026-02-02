<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ProjectTaskInProjectTransactionLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ProjectTaskInProjectTransactionLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'internalId' => $this->faker->numberBetween(1, 1000),
            'id' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return ProjectTaskInProjectTransactionLineDto::class;
    }
}
