<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ShipmentPackageLineUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ShipmentPackageLineUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->word(),
            'lineNumber' => $this->faker->numberBetween(1, 100),
            'confirmed' => $this->faker->boolean(),
            'boxId' => $this->faker->uuid(),
            'description' => $this->faker->sentence(),
            'weight' => $this->faker->randomFloat(2, 0, 1000),
            'volume' => $this->faker->randomFloat(2, 0, 1000),
            'declaredValue' => $this->faker->randomFloat(2, 0, 1000),
            'codAmount' => $this->faker->randomFloat(2, 0, 1000),
            'trackingNumber' => $this->faker->word(),
            'customRefNbr1' => $this->faker->word(),
            'customRefNbr2' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ShipmentPackageLineUpdateDto::class;
    }
}
