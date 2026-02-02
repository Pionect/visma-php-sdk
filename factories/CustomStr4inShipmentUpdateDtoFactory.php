<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomStr4inShipmentUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomStr4inShipmentUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomStr4inShipmentUpdateDto::class;
    }
}
