<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\PurchaseOrderQueryParameters;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PurchaseOrderQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'greaterThanValue' => $this->faker->word(),
            'numberToRead' => $this->faker->numberBetween(1, 100),
            'skipRecords' => $this->faker->numberBetween(1, 100),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'lastModifiedDateTimeCondition' => $this->faker->word(),
            'orderType' => $this->faker->word(),
            'orderStatus' => $this->faker->word(),
            'supplier' => $this->faker->word(),
            'branch' => $this->faker->word(),
            'orderDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'orderDateCondition' => $this->faker->word(),
            'deliveryDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'deliveryDateCondition' => $this->faker->word(),
            'includeCustomFreeFields' => $this->faker->boolean(),
            'pageNumber' => $this->faker->numberBetween(1, 100),
            'pageSize' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return PurchaseOrderQueryParameters::class;
    }
}
