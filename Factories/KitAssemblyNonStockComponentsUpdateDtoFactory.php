<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\KitAssemblyNonStockComponentsUpdateDto;
use Pionect\VismaSdk\Enums\AttributeDetailUpdateOperationEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class KitAssemblyNonStockComponentsUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->randomElement(AttributeDetailUpdateOperationEnum::cases()),
            'lineNbr' => $this->faker->numberBetween(1, 100),
            'itemId' => $this->faker->uuid(),
            'uoM' => $this->faker->word(),
            'quantity' => null,
            'unitCost' => null,
            'reasonCode' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return KitAssemblyNonStockComponentsUpdateDto::class;
    }
}
