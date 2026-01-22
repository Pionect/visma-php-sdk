<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomStr3inShipmentUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomStr3inShipmentUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomStr3inShipmentUpdateDto::class;
    }
}
