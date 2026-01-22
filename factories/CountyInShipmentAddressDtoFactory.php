<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CountyInShipmentAddressDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CountyInShipmentAddressDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'name' => $this->faker->name(),
        ];
    }

    protected function modelClass(): string
    {
        return CountyInShipmentAddressDto::class;
    }
}
