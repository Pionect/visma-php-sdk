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
            'type' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'weight' => null,
            'uom' => $this->faker->word(),
            'volume' => null,
            'volumeUom' => $this->faker->word(),
            'declaredValue' => null,
            'coDamount' => null,
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
