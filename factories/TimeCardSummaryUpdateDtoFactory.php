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
            'lineNumber' => $this->faker->word(),
            'earningType' => $this->faker->word(),
            'project' => $this->faker->word(),
            'projectTask' => $this->faker->word(),
            'mon' => $this->faker->word(),
            'tue' => $this->faker->word(),
            'wed' => $this->faker->word(),
            'thu' => $this->faker->word(),
            'fri' => $this->faker->word(),
            'sat' => $this->faker->word(),
            'sun' => $this->faker->word(),
            'invoiceable' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return TimeCardSummaryUpdateDto::class;
    }
}
