<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\PurchaseReceiptV2queryParameters;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PurchaseReceiptV2queryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'receiptType' => $this->faker->word(),
            'status' => $this->faker->word(),
            'greaterThanValue' => $this->faker->word(),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'lastModifiedDateTimeCondition' => $this->faker->word(),
            'supplier' => $this->faker->word(),
            'poOrderNbr' => $this->faker->word(),
            'expandNote' => $this->faker->boolean(),
            'branch' => $this->faker->word(),
            'finPeriod' => $this->faker->word(),
            'receiptDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'receiptDateCondition' => $this->faker->word(),
            'dueDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'dueDateCondition' => $this->faker->word(),
            'includeCustomFreeFields' => $this->faker->boolean(),
            'pageNumber' => $this->faker->numberBetween(1, 100),
            'pageSize' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return PurchaseReceiptV2queryParameters::class;
    }
}
