<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ShippingZoneDescriptionDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ShippingZoneDescriptionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return ShippingZoneDescriptionDto::class;
    }
}
