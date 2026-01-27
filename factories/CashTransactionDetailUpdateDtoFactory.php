<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CashTransactionDetailUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CashTransactionDetailUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->word(),
            'lineNumber' => $this->faker->numberBetween(1, 100),
            'branchNumber' => $this->faker->word(),
            'inventoryNumber' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'quantity' => $this->faker->randomFloat(2, 0, 1000),
            'uom' => $this->faker->word(),
            'price' => $this->faker->randomFloat(2, 0, 1000),
            'amount' => $this->faker->randomFloat(2, 0, 1000),
            'offsetAccount' => $this->faker->word(),
            'offsetSubaccount' => [],
            'vatCode' => $this->faker->word(),
            'notInvoiceable' => $this->faker->boolean(),
            'project' => $this->faker->word(),
            'projectTask' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CashTransactionDetailUpdateDto::class;
    }
}
