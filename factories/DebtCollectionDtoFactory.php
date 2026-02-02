<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DebtCollectionDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DebtCollectionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'caseNumber' => $this->faker->word(),
            'caseType' => $this->faker->word(),
            'caseStatus' => $this->faker->word(),
            'caseUrl' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DebtCollectionDto::class;
    }
}
