<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\CustomerSalesPriceQueryParameters;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerSalesPriceQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'greaterThanValue' => $this->faker->word(),
            'numberToRead' => $this->faker->numberBetween(1, 100),
            'skipRecords' => $this->faker->numberBetween(1, 100),
            'priceType' => $this->faker->word(),
            'priceCode' => $this->faker->word(),
            'inventoryId' => $this->faker->uuid(),
            'effectiveAsOf' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'lastModifiedDateTimeCondition' => $this->faker->word(),
            'pageNumber' => $this->faker->numberBetween(1, 100),
            'pageSize' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerSalesPriceQueryParameters::class;
    }
}
