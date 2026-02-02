<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CountryInShipmentAddressDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CountryInShipmentAddressDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'id' => $this->faker->word(),
            'name' => $this->faker->name(),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CountryInShipmentAddressDto::class;
    }
}
