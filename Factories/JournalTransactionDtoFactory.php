<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\JournalTransactionDto;
use Pionect\VismaSdk\Enums\JournalTransactionLineModuleEnum;
use Pionect\VismaSdk\Enums\JournalTransactionStatusEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\JournalTransactionDto>
 */
class JournalTransactionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'module' => $this->faker->randomElement(JournalTransactionLineModuleEnum::cases()),
            'batchNumber' => $this->faker->word(),
            'status' => $this->faker->randomElement(JournalTransactionStatusEnum::cases()),
            'hold' => $this->faker->boolean(),
            'transactionDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'postPeriod' => $this->faker->word(),
            'financialPeriod' => $this->faker->word(),
            'ledger' => $this->faker->word(),
            'ledgerDescription' => $this->faker->sentence(),
            'currencyId' => $this->faker->uuid(),
            'exchangeRate' => null,
            'autoReversing' => $this->faker->boolean(),
            'reversingEntry' => $this->faker->boolean(),
            'description' => $this->faker->sentence(),
            'originalBatchNumber' => $this->faker->word(),
            'debitTotal' => null,
            'debitTotalInCurrency' => null,
            'creditTotal' => null,
            'creditTotalInCurrency' => null,
            'controlTotal' => null,
            'controlTotalInCurrency' => null,
            'createVatTransaction' => $this->faker->boolean(),
            'skipVatAmountValidation' => $this->faker->boolean(),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'transactionCode' => $this->faker->word(),
            'transactionCodeDescription' => $this->faker->sentence(),
            'branch' => $this->faker->word(),
            'timeStamp' => $this->faker->word(),
            'journalTransactionLines' => [],
            'attachments' => [],
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return JournalTransactionDto::class;
    }
}
