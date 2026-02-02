<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\TimeCardSummaryUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class TimeCardSummaryUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->word(),
            'lineNumber' => $this->faker->numberBetween(1, 100),
            'earningType' => $this->faker->word(),
            'project' => $this->faker->word(),
            'projectTask' => $this->faker->word(),
            'mon' => $this->faker->numberBetween(1, 100),
            'tue' => $this->faker->numberBetween(1, 100),
            'wed' => $this->faker->numberBetween(1, 100),
            'thu' => $this->faker->numberBetween(1, 100),
            'fri' => $this->faker->numberBetween(1, 100),
            'sat' => $this->faker->numberBetween(1, 100),
            'sun' => $this->faker->numberBetween(1, 100),
            'invoiceable' => $this->faker->boolean(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return TimeCardSummaryUpdateDto::class;
    }
}
