<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SalesOrderBasicLineUpdateDto;
use Pionect\VismaSdk\Enums\AttributeDetailUpdateOperationEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SalesOrderBasicLineUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'branchNumber' => $this->faker->word(),
            'operation' => $this->faker->randomElement(AttributeDetailUpdateOperationEnum::cases()),
            'lineNbr' => $this->faker->numberBetween(1, 100),
            'inventoryId' => $this->faker->uuid(),
            'inventoryNumber' => $this->faker->word(),
            'warehouse' => $this->faker->word(),
            'uom' => $this->faker->word(),
            'quantity' => null,
            'unitCost' => null,
            'unitPrice' => null,
            'discountPercent' => null,
            'discountAmount' => null,
            'discountCode' => $this->faker->word(),
            'manualDiscount' => $this->faker->boolean(),
            'discUnitPrice' => null,
            'lineDescription' => $this->faker->sentence(),
            'note' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return SalesOrderBasicLineUpdateDto::class;
    }
}
