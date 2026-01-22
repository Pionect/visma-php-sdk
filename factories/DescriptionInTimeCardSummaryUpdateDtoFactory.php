<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DescriptionInTimeCardSummaryUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DescriptionInTimeCardSummaryUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DescriptionInTimeCardSummaryUpdateDto::class;
    }
}
