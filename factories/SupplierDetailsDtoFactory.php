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
            'active' => $this->faker->word(),
            'default' => $this->faker->word(),
            'supplierId' => $this->faker->word(),
            'location' => $this->faker->word(),
            'purchaseUnit' => $this->faker->word(),
            'supplierItemId' => $this->faker->word(),
            'override' => $this->faker->word(),
            'shipmentLeadTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'minOrderFreq' => $this->faker->word(),
            'minOrderQty' => $this->faker->word(),
            'maxOrderQty' => $this->faker->word(),
            'lotSize' => $this->faker->word(),
            'eoq' => $this->faker->word(),
            'currencyId' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return SupplierDetailsDto::class;
    }
}
