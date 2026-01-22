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
            'lineNumber' => $this->faker->word(),
            'branchNumber' => $this->faker->word(),
            'inventoryNumber' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'quantity' => $this->faker->word(),
            'uom' => $this->faker->word(),
            'price' => $this->faker->word(),
            'amount' => $this->faker->word(),
            'offsetAccount' => $this->faker->word(),
            'offsetSubaccount' => [],
            'vatCode' => $this->faker->word(),
            'notInvoiceable' => $this->faker->word(),
            'project' => $this->faker->word(),
            'projectTask' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CashTransactionDetailUpdateDto::class;
    }
}
