<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\JournalTransactionLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class JournalTransactionLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'lineNumber' => $this->faker->numberBetween(1, 100),
            'accountNumber' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'subaccount' => $this->faker->word(),
            'referenceNumber' => $this->faker->word(),
            'debitAmount' => $this->faker->randomFloat(2, 0, 1000),
            'debitAmountInCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'creditAmount' => $this->faker->randomFloat(2, 0, 1000),
            'creditAmountInCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'transactionDescription' => $this->faker->sentence(),
            'vatCode' => $this->faker->word(),
            'vat' => $this->faker->word(),
            'branch' => $this->faker->word(),
            'customerSupplier' => $this->faker->word(),
            'transactionType' => $this->faker->word(),
            'module' => $this->faker->word(),
            'uom' => $this->faker->word(),
            'project' => $this->faker->word(),
            'projectTask' => $this->faker->word(),
            'attachments' => [],
            'quantity' => $this->faker->randomFloat(2, 0, 1000),
            'inventoryNumber' => $this->faker->word(),
            'note' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return JournalTransactionLineDto::class;
    }
}
