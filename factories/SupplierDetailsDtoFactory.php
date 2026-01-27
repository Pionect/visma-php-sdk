<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\SupplierDetailsDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SupplierDetailsDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->word(),
            'active' => $this->faker->boolean(),
            'default' => $this->faker->boolean(),
            'supplierId' => $this->faker->uuid(),
            'location' => $this->faker->word(),
            'purchaseUnit' => $this->faker->word(),
            'supplierItemId' => $this->faker->uuid(),
            'override' => $this->faker->boolean(),
            'shipmentLeadTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'minOrderFreq' => $this->faker->numberBetween(1, 100),
            'minOrderQty' => $this->faker->randomFloat(2, 0, 1000),
            'maxOrderQty' => $this->faker->randomFloat(2, 0, 1000),
            'lotSize' => $this->faker->randomFloat(2, 0, 1000),
            'eoq' => $this->faker->randomFloat(2, 0, 1000),
            'currencyId' => $this->faker->uuid(),
        ];
    }

    protected function modelClass(): string
    {
        return SupplierDetailsDto::class;
    }
}
