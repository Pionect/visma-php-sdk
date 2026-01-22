<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomStr5inShipmentDetailLineAddDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomStr5inShipmentDetailLineAddDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomStr5inShipmentDetailLineAddDto::class;
    }
}
