<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomStr4inShipmentDetailLineAddDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomStr4inShipmentDetailLineAddDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomStr4inShipmentDetailLineAddDto::class;
    }
}
