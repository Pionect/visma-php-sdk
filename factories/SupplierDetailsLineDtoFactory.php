<?php

namespace Pionect\VismaSdk\Factories;

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
            'shipmentLeadTime' => $this->faker->numberBetween(1, 100),
            'leadTime' => $this->faker->numberBetween(1, 100),
            'minOrderFreq' => $this->faker->numberBetween(1, 100),
            'minOrderQty' => null,
            'maxOrderQty' => null,
            'lotSize' => null,
            'eoq' => null,
            'currencyId' => $this->faker->uuid(),
            'lastSupplierPrice' => null,
            'override' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return SupplierDetailsLineDto::class;
    }
}
