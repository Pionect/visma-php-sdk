<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomDec2inShipmentCreateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomDec2inShipmentCreateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->randomFloat(2, 0, 1000),
        ];
    }

    protected function modelClass(): string
    {
        return CustomDec2inShipmentCreateDto::class;
    }
}
