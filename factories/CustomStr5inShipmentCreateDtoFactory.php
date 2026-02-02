<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomStr5inShipmentCreateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomStr5inShipmentCreateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomStr5inShipmentCreateDto::class;
    }
}
