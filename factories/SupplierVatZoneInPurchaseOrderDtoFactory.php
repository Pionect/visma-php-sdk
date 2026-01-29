<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SupplierVatZoneInPurchaseOrderDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SupplierVatZoneInPurchaseOrderDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'id' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'defaultVatCategory' => $this->faker->word(),
            'defaultTaxCategory' => $this->faker->word(),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return SupplierVatZoneInPurchaseOrderDto::class;
    }
}
