<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomInt1inShipmentCreateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomInt1inShipmentCreateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return CustomInt1inShipmentCreateDto::class;
    }
}
