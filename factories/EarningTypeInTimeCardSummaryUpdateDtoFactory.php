<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\EarningTypeInTimeCardSummaryUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class EarningTypeInTimeCardSummaryUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return EarningTypeInTimeCardSummaryUpdateDto::class;
    }
}
