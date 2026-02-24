<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\WeekInTimeCardDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\WeekInTimeCardDto>
 */
class WeekInTimeCardDtoFactory extends Factory
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
        return WeekInTimeCardDto::class;
    }
}
