<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomInt1inShipmentUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomInt1inShipmentUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return CustomInt1inShipmentUpdateDto::class;
    }
}
