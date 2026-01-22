<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PackageDetailLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PackageDetailLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'lineNumber' => $this->faker->numberBetween(1, 100),
            'confirmed' => $this->faker->boolean(),
            'boxId' => $this->faker->uuid(),
            'description' => $this->faker->sentence(),
            'weight' => $this->faker->randomFloat(2, 0, 1000),
            'uom' => $this->faker->word(),
            'volume' => $this->faker->randomFloat(2, 0, 1000),
            'volumeUom' => $this->faker->word(),
            'declaredValue' => $this->faker->randomFloat(2, 0, 1000),
            'coDamount' => $this->faker->randomFloat(2, 0, 1000),
            'trackingNumber' => $this->faker->word(),
            'customRefNbr1' => $this->faker->word(),
            'customRefNbr2' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return PackageDetailLineDto::class;
    }
}
