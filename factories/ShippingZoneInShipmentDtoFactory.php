<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ShippingZoneInShipmentDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ShippingZoneInShipmentDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return ShippingZoneInShipmentDto::class;
    }
}
