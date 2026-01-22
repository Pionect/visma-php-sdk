<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomStr1inShipmentDetailLineAddDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomStr1inShipmentDetailLineAddDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomStr1inShipmentDetailLineAddDto::class;
    }
}
