<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\KitSpecificationNonStockComponentsUpdateDto;
use Pionect\VismaSdk\Enums\AttributeDetailUpdateOperationEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\KitSpecificationNonStockComponentsUpdateDto>
 */
class KitSpecificationNonStockComponentsUpdateDtoFactory extends Factory
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
        ];
    }

    protected function modelClass(): string
    {
        return KitSpecificationNonStockComponentsUpdateDto::class;
    }
}
