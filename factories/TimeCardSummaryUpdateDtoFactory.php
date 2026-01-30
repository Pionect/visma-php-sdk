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
            'earningType' => null,
            'project' => null,
            'projectTask' => null,
            'mon' => null,
            'tue' => null,
            'wed' => null,
            'thu' => null,
            'fri' => null,
            'sat' => null,
            'sun' => null,
            'invoiceable' => null,
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return TimeCardSummaryUpdateDto::class;
    }
}
