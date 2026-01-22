<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SupplierInPurchaseOrderUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SupplierInPurchaseOrderUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return SupplierInPurchaseOrderUpdateDto::class;
    }
}
