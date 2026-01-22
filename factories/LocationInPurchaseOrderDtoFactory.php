<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\LocationInPurchaseOrderDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class LocationInPurchaseOrderDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'name' => $this->faker->name(),
        ];
    }

    protected function modelClass(): string
    {
        return LocationInPurchaseOrderDto::class;
    }
}
