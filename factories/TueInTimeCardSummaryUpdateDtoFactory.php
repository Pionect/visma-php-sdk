<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\TueInTimeCardSummaryUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class TueInTimeCardSummaryUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return TueInTimeCardSummaryUpdateDto::class;
    }
}
