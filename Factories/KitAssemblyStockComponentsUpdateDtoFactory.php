<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\KitAssemblyStockComponentsUpdateDto;
use Pionect\VismaSdk\Enums\AttributeDetailUpdateOperationEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\KitAssemblyStockComponentsUpdateDto>
 */
class KitAssemblyStockComponentsUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->randomElement(AttributeDetailUpdateOperationEnum::cases()),
            'lineNbr' => $this->faker->numberBetween(1, 100),
            'itemId' => $this->faker->uuid(),
            'location' => $this->faker->word(),
            'uoM' => $this->faker->word(),
            'quantity' => null,
            'unitCost' => null,
            'reasonCode' => $this->faker->word(),
            'stockComponentLineAllocations' => [],
        ];
    }

    protected function modelClass(): string
    {
        return KitAssemblyStockComponentsUpdateDto::class;
    }
}
