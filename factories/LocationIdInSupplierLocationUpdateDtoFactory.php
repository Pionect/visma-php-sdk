<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\LocationIdInSupplierLocationUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class LocationIdInSupplierLocationUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return LocationIdInSupplierLocationUpdateDto::class;
    }
}
