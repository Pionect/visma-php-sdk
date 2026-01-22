<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\LocationIdInLocationUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class LocationIdInLocationUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return LocationIdInLocationUpdateDto::class;
    }
}
