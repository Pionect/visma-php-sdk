<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\MonInTimeCardSummaryUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class MonInTimeCardSummaryUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return MonInTimeCardSummaryUpdateDto::class;
    }
}
