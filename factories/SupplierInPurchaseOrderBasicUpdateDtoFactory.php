<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SupplierInPurchaseOrderBasicUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SupplierInPurchaseOrderBasicUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return SupplierInPurchaseOrderBasicUpdateDto::class;
    }
}
