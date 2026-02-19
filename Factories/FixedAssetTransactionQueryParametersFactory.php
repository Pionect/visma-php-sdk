<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\FixedAssetTransactionQueryParameters;
use Pionect\VismaSdk\Enums\FixedAssetRegisterStatusEnum;
use Pionect\VismaSdk\Enums\FixedAssetTransactionTransactionTypeEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class FixedAssetTransactionQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'refNo' => $this->faker->word(),
            'assetId' => $this->faker->uuid(),
            'bookId' => $this->faker->uuid(),
            'fromPeriod' => $this->faker->word(),
            'toPeriod' => $this->faker->word(),
            'accountId' => $this->faker->uuid(),
            'subAccountId' => $this->faker->uuid(),
            'status' => $this->faker->randomElement(FixedAssetRegisterStatusEnum::cases()),
            'transactionType' => $this->faker->randomElement(FixedAssetTransactionTransactionTypeEnum::cases()),
            'transactionFromDate' => $this->faker->word(),
            'transactionToDate' => $this->faker->word(),
            'lastModifiedDateTime' => $this->faker->word(),
            'lastModifiedDateTimeCondition' => $this->faker->word(),
            'pageNumber' => $this->faker->numberBetween(1, 100),
            'pageSize' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return FixedAssetTransactionQueryParameters::class;
    }
}
