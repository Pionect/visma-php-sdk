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
            'lineNumber' => $this->faker->word(),
            'confirmed' => $this->faker->word(),
            'boxId' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'weight' => $this->faker->word(),
            'volume' => $this->faker->word(),
            'declaredValue' => $this->faker->word(),
            'codAmount' => $this->faker->word(),
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
