<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\CustomerSalesPriceDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerSalesPriceDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'recordId' => $this->faker->numberBetween(1, 1000),
            'priceType' => $this->faker->word(),
            'priceCode' => $this->faker->word(),
            'inventoryId' => $this->faker->uuid(),
            'description' => $this->faker->sentence(),
            'uoM' => $this->faker->word(),
            'promotion' => $this->faker->boolean(),
            'breakQty' => $this->faker->randomFloat(2, 0, 1000),
            'price' => $this->faker->randomFloat(2, 0, 1000),
            'currency' => $this->faker->word(),
            'vat' => $this->faker->word(),
            'effectiveDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'expirationDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'warehouse' => $this->faker->word(),
            'timeStamp' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'errorInfo' => $this->faker->word(),
            'metadata' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerSalesPriceDto::class;
    }
}
