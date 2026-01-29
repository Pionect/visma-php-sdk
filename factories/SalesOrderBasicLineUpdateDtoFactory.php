<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SalesOrderBasicLineUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SalesOrderBasicLineUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'branchNumber' => $this->faker->word(),
            'operation' => $this->faker->word(),
            'lineNbr' => $this->faker->numberBetween(1, 100),
            'inventoryId' => InventoryIdInSalesOrderBasicLineUpdateDtoFactory::new()->make(),
            'inventoryNumber' => InventoryNumberInSalesOrderBasicLineUpdateDtoFactory::new()->make(),
            'warehouse' => $this->faker->word(),
            'uom' => $this->faker->word(),
            'quantity' => $this->faker->randomFloat(2, 0, 1000),
            'unitCost' => $this->faker->randomFloat(2, 0, 1000),
            'unitPrice' => $this->faker->randomFloat(2, 0, 1000),
            'discountPercent' => $this->faker->randomFloat(2, 0, 1000),
            'discountAmount' => $this->faker->randomFloat(2, 0, 1000),
            'discountCode' => $this->faker->word(),
            'manualDiscount' => $this->faker->boolean(),
            'discUnitPrice' => $this->faker->randomFloat(2, 0, 1000),
            'lineDescription' => $this->faker->sentence(),
            'note' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return SalesOrderBasicLineUpdateDto::class;
    }
}
