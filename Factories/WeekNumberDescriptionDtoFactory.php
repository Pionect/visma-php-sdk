<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\WeekNumberDescriptionDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\WeekNumberDescriptionDto>
 */
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
