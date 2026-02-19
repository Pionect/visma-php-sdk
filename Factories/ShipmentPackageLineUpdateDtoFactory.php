<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ShipmentPackageLineUpdateDto;
use Pionect\VismaSdk\Enums\AttributeDetailUpdateOperationEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ShipmentPackageLineUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->randomElement(AttributeDetailUpdateOperationEnum::cases()),
            'lineNumber' => $this->faker->numberBetween(1, 100),
            'confirmed' => $this->faker->boolean(),
            'boxId' => $this->faker->uuid(),
            'description' => $this->faker->sentence(),
            'weight' => null,
            'volume' => null,
            'declaredValue' => null,
            'codAmount' => null,
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
