<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\JournalTransactionLineUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class JournalTransactionLineUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->word(),
            'lineNumber' => $this->faker->word(),
            'accountNumber' => $this->faker->word(),
            'subaccount' => [],
            'project' => $this->faker->word(),
            'projectTask' => $this->faker->word(),
            'referenceNumber' => $this->faker->word(),
            'transactionDescription' => $this->faker->sentence(),
            'debitAmountInCurrency' => $this->faker->word(),
            'creditAmountInCurrency' => $this->faker->word(),
            'vatCodeId' => $this->faker->word(),
            'vatId' => $this->faker->word(),
            'branch' => $this->faker->word(),
            'uom' => $this->faker->word(),
            'quantity' => $this->faker->word(),
            'note' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return JournalTransactionLineUpdateDto::class;
    }
}
