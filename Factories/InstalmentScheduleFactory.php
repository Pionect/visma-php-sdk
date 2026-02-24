<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\InstalmentSchedule;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\InstalmentSchedule>
 */
class InstalmentScheduleFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'days' => $this->faker->numberBetween(1, 100),
            'percent' => null,
        ];
    }

    protected function modelClass(): string
    {
        return InstalmentSchedule::class;
    }
}
