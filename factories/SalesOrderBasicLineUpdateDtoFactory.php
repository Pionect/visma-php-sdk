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
            'lineNbr' => $this->faker->word(),
            'inventoryId' => $this->faker->word(),
            'inventoryNumber' => $this->faker->word(),
            'warehouse' => $this->faker->word(),
            'uom' => $this->faker->word(),
            'quantity' => $this->faker->word(),
            'unitCost' => $this->faker->word(),
            'unitPrice' => $this->faker->word(),
            'discountPercent' => $this->faker->word(),
            'discountAmount' => $this->faker->word(),
            'discountCode' => $this->faker->word(),
            'manualDiscount' => $this->faker->word(),
            'discUnitPrice' => $this->faker->word(),
            'lineDescription' => $this->faker->sentence(),
            'note' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return SalesOrderBasicLineUpdateDto::class;
    }
}
