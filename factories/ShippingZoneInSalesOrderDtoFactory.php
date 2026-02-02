<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ShippingZoneInSalesOrderDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ShippingZoneInSalesOrderDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'id' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return ShippingZoneInSalesOrderDto::class;
    }
}
