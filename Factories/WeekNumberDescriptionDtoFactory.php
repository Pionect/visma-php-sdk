<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\WeekNumberDescriptionDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class WeekNumberDescriptionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'number' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return WeekNumberDescriptionDto::class;
    }
}
