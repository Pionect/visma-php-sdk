<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ProjectInJournalTransactionLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ProjectInJournalTransactionLineDtoFactory extends Factory
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
        return ProjectInJournalTransactionLineDto::class;
    }
}
