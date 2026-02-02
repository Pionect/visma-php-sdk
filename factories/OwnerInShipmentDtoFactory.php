<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\OwnerInShipmentDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class OwnerInShipmentDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'id' => $this->faker->word(),
            'name' => $this->faker->name(),
        ];
    }

    protected function modelClass(): string
    {
        return OwnerInShipmentDto::class;
    }
}
