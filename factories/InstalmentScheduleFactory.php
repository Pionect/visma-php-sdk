<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\InstalmentSchedule;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class InstalmentScheduleFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'days' => $this->faker->numberBetween(1, 100),
            'percent' => $this->faker->randomFloat(2, 0, 1000),
        ];
    }

    protected function modelClass(): string
    {
        return InstalmentSchedule::class;
    }
}
