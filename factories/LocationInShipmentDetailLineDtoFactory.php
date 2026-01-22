<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\LocationInShipmentDetailLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class LocationInShipmentDetailLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'countryId' => $this->faker->uuid(),
            'name' => $this->faker->name(),
        ];
    }

    protected function modelClass(): string
    {
        return LocationInShipmentDetailLineDto::class;
    }
}
