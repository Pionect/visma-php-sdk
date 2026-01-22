<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomInt2inShipmentCreateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomInt2inShipmentCreateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return CustomInt2inShipmentCreateDto::class;
    }
}
