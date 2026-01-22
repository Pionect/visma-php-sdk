<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\EarningTypeInTimeCardSummaryDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class EarningTypeInTimeCardSummaryDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'code' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'isOvertime' => $this->faker->boolean(),
            'isBillable' => $this->faker->boolean(),
            'isActive' => $this->faker->boolean(),
            'overtimeMultiplier' => $this->faker->randomFloat(2, 0, 1000),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
        ];
    }

    protected function modelClass(): string
    {
        return EarningTypeInTimeCardSummaryDto::class;
    }
}
