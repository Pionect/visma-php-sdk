<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ShipmentUpdateDeleteLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\ShipmentUpdateDeleteLineDto>
 */
class ShipmentUpdateDeleteLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'deleteSoline' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return ShipmentUpdateDeleteLineDto::class;
    }
}
