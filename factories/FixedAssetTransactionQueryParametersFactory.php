<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\FixedAssetTransactionQueryParameters;
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
            'status' => $this->faker->word(),
            'transactionType' => $this->faker->word(),
            'transactionFromDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'transactionToDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
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
