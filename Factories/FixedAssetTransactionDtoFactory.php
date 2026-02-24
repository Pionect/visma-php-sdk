<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\FixedAssetTransactionDto;
use Pionect\VismaSdk\Enums\FixedAssetTransactionOriginEnum;
use Pionect\VismaSdk\Enums\FixedAssetTransactionTransactionTypeEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\FixedAssetTransactionDto>
 */
class FixedAssetTransactionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'refNo' => $this->faker->word(),
            'lineNo' => $this->faker->numberBetween(1, 100),
            'branchId' => $this->faker->uuid(),
            'origin' => $this->faker->randomElement(FixedAssetTransactionOriginEnum::cases()),
            'assetId' => $this->faker->uuid(),
            'transactionDescription' => $this->faker->sentence(),
            'bookId' => $this->faker->uuid(),
            'transactionType' => $this->faker->randomElement(FixedAssetTransactionTransactionTypeEnum::cases()),
            'accounts' => null,
            'transactionAmount' => null,
            'batchNo' => $this->faker->word(),
            'transactionPeriodId' => $this->faker->uuid(),
            'transactionDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'register' => null,
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return FixedAssetTransactionDto::class;
    }
}
