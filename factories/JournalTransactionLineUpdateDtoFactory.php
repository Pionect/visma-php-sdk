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
            'lineNumber' => $this->faker->numberBetween(1, 100),
            'accountNumber' => $this->faker->word(),
            'subaccount' => [],
            'project' => $this->faker->word(),
            'projectTask' => $this->faker->word(),
            'referenceNumber' => $this->faker->word(),
            'transactionDescription' => $this->faker->sentence(),
            'debitAmountInCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'creditAmountInCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'vatCodeId' => $this->faker->uuid(),
            'vatId' => $this->faker->uuid(),
            'branch' => $this->faker->word(),
            'uom' => $this->faker->word(),
            'quantity' => $this->faker->randomFloat(2, 0, 1000),
            'note' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return JournalTransactionLineUpdateDto::class;
    }
}
