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
            'subaccount' => null,
            'referenceNumber' => $this->faker->word(),
            'debitAmount' => null,
            'debitAmountInCurrency' => null,
            'creditAmount' => null,
            'creditAmountInCurrency' => null,
            'transactionDescription' => $this->faker->sentence(),
            'vatCode' => null,
            'vat' => null,
            'branch' => $this->faker->word(),
            'customerSupplier' => $this->faker->word(),
            'transactionType' => $this->faker->word(),
            'module' => $this->faker->word(),
            'uom' => $this->faker->word(),
            'project' => null,
            'projectTask' => null,
            'attachments' => [],
            'quantity' => null,
            'inventoryNumber' => $this->faker->word(),
            'note' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return JournalTransactionLineDto::class;
    }
}
