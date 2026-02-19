<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\KitSpecificationStockComponentsUpdateDto;
use Pionect\VismaSdk\Enums\AttributeDetailUpdateOperationEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class KitSpecificationStockComponentsUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->randomElement(AttributeDetailUpdateOperationEnum::cases()),
            'lineNbr' => $this->faker->numberBetween(1, 100),
            'compInventoryId' => $this->faker->uuid(),
            'dfltCompQty' => null,
            'uom' => $this->faker->word(),
            'allowQtyVariation' => $this->faker->boolean(),
            'minCompQty' => null,
            'maxCompQty' => null,
            'disassemblyCoeff' => null,
            'allowSubstitution' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return KitSpecificationStockComponentsUpdateDto::class;
    }
}
