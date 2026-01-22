<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomInt1inShipmentDetailLineAddDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomInt1inShipmentDetailLineAddDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return CustomInt1inShipmentDetailLineAddDto::class;
    }
}
