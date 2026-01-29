<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ShippingLocationInPurchaseOrderDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ShippingLocationInPurchaseOrderDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'id' => $this->faker->numberBetween(1, 100),
            'name' => $this->faker->name(),
        ];
    }

    protected function modelClass(): string
    {
        return ShippingLocationInPurchaseOrderDto::class;
    }
}
