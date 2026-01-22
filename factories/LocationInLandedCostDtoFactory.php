<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\LocationInLandedCostDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class LocationInLandedCostDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'countryId' => $this->faker->uuid(),
            'name' => $this->faker->name(),
        ];
    }

    protected function modelClass(): string
    {
        return LocationInLandedCostDto::class;
    }
}
