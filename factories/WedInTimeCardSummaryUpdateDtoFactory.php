<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\WedInTimeCardSummaryUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class WedInTimeCardSummaryUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return WedInTimeCardSummaryUpdateDto::class;
    }
}
