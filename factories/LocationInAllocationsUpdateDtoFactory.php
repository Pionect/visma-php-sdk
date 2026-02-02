<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\LocationInAllocationsUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class LocationInAllocationsUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return LocationInAllocationsUpdateDto::class;
    }
}
