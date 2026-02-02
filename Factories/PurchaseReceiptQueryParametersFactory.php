<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PurchaseReceiptQueryParameters;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PurchaseReceiptQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'receiptType' => $this->faker->word(),
            'status' => $this->faker->word(),
            'greaterThanValue' => $this->faker->word(),
            'numberToRead' => $this->faker->numberBetween(1, 100),
            'skipRecords' => $this->faker->numberBetween(1, 100),
            'lastModifiedDateTime' => $this->faker->word(),
            'lastModifiedDateTimeCondition' => $this->faker->word(),
            'supplier' => $this->faker->word(),
            'poOrderNbr' => $this->faker->word(),
            'branch' => $this->faker->word(),
            'finPeriod' => $this->faker->word(),
            'receiptDate' => $this->faker->word(),
            'receiptDateCondition' => $this->faker->word(),
            'dueDate' => $this->faker->word(),
            'dueDateCondition' => $this->faker->word(),
            'includeCustomFreeFields' => $this->faker->boolean(),
            'pageNumber' => $this->faker->numberBetween(1, 100),
            'pageSize' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return PurchaseReceiptQueryParameters::class;
    }
}
