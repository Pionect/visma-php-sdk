<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\LocationInPurchaseOrderBasicDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class LocationInPurchaseOrderBasicDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'name' => $this->faker->name(),
        ];
    }

    protected function modelClass(): string
    {
        return LocationInPurchaseOrderBasicDto::class;
    }
}
