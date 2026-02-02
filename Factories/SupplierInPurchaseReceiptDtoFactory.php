<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SupplierInPurchaseReceiptDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SupplierInPurchaseReceiptDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'internalId' => $this->faker->numberBetween(1, 1000),
            'number' => $this->faker->word(),
            'name' => $this->faker->name(),
        ];
    }

    protected function modelClass(): string
    {
        return SupplierInPurchaseReceiptDto::class;
    }
}
