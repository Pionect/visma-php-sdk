<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\LocationIdNameDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class LocationIdNameDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'name' => $this->faker->name(),
        ];
    }

    protected function modelClass(): string
    {
        return LocationIdNameDto::class;
    }
}
