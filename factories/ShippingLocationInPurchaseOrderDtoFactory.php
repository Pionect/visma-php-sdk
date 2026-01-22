<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ShippingLocationInPurchaseOrderDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ShippingLocationInPurchaseOrderDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'name' => $this->faker->name(),
        ];
    }

    protected function modelClass(): string
    {
        return ShippingLocationInPurchaseOrderDto::class;
    }
}
