<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ShipViaInShipmentDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ShipViaInShipmentDtoFactory extends Factory
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
        return ShipViaInShipmentDto::class;
    }
}
