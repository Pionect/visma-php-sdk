<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\CashTransactionDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CashTransactionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'tranType' => $this->faker->word(),
            'referenceNbr' => $this->faker->word(),
            'status' => $this->faker->word(),
            'hold' => $this->faker->boolean(),
            'tranDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'finPeriod' => $this->faker->word(),
            'financialPeriod' => $this->faker->word(),
            'cashAccount' => $this->faker->word(),
            'currency' => $this->faker->word(),
            'entryType' => $this->faker->word(),
            'disbReceipt' => $this->faker->word(),
            'documentRef' => $this->faker->word(),
            'owner' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'amount' => $this->faker->randomFloat(2, 0, 1000),
            'vatTaxableTotal' => $this->faker->randomFloat(2, 0, 1000),
            'vatExemptTotal' => $this->faker->randomFloat(2, 0, 1000),
            'taxTotal' => $this->faker->randomFloat(2, 0, 1000),
            'controlTotal' => $this->faker->randomFloat(2, 0, 1000),
            'taxAmount' => $this->faker->randomFloat(2, 0, 1000),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'transactionDetails' => [],
            'taxDetails' => [],
            'financialsDetail' => $this->faker->word(),
            'timeStamp' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
        ];
    }

    protected function modelClass(): string
    {
        return CashTransactionDto::class;
    }
}
