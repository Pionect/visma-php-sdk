<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\CashTransactionDto;
use Pionect\VismaSdk\Enums\CashTransactionStatusEnum;
use Pionect\VismaSdk\Enums\CashTransactionTranTypeEnum;
use Pionect\VismaSdk\Enums\EntryTypeDisableReceiptEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CashTransactionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'tranType' => $this->faker->randomElement(CashTransactionTranTypeEnum::cases()),
            'referenceNbr' => $this->faker->word(),
            'status' => $this->faker->randomElement(CashTransactionStatusEnum::cases()),
            'hold' => $this->faker->boolean(),
            'tranDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'finPeriod' => $this->faker->word(),
            'financialPeriod' => $this->faker->word(),
            'cashAccount' => null,
            'currency' => $this->faker->word(),
            'entryType' => null,
            'disbReceipt' => $this->faker->randomElement(EntryTypeDisableReceiptEnum::cases()),
            'documentRef' => $this->faker->word(),
            'owner' => null,
            'description' => $this->faker->sentence(),
            'amount' => null,
            'vatTaxableTotal' => null,
            'vatExemptTotal' => null,
            'taxTotal' => null,
            'controlTotal' => null,
            'taxAmount' => null,
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'transactionDetails' => [],
            'taxDetails' => [],
            'financialsDetail' => null,
            'timeStamp' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CashTransactionDto::class;
    }
}
