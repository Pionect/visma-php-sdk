<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ShipmentUpdateDeleteLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ShipmentUpdateDeleteLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'deleteSoline' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ShipmentUpdateDeleteLineDto::class;
    }
}
