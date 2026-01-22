<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\SupplierDetailsLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SupplierDetailsLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'active' => $this->faker->boolean(),
            'default' => $this->faker->boolean(),
            'supplierId' => $this->faker->uuid(),
            'supplierName' => $this->faker->company(),
            'location' => $this->faker->word(),
            'warehouse' => $this->faker->word(),
            'purchaseUnit' => $this->faker->word(),
            'supplierItemId' => $this->faker->uuid(),
            'shipmentLeadTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'leadTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'minOrderFreq' => $this->faker->numberBetween(1, 100),
            'minOrderQty' => $this->faker->randomFloat(2, 0, 1000),
            'maxOrderQty' => $this->faker->randomFloat(2, 0, 1000),
            'lotSize' => $this->faker->randomFloat(2, 0, 1000),
            'eoq' => $this->faker->randomFloat(2, 0, 1000),
            'currencyId' => $this->faker->uuid(),
            'lastSupplierPrice' => $this->faker->randomFloat(2, 0, 1000),
            'override' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return SupplierDetailsLineDto::class;
    }
}
