<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomStr3inShipmentDetailLineUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomStr3inShipmentDetailLineUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomStr3inShipmentDetailLineUpdateDto::class;
    }
}
