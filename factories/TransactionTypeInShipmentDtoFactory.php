<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\TransactionTypeInShipmentDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class TransactionTypeInShipmentDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'id' => $this->faker->numberBetween(1, 100),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return TransactionTypeInShipmentDto::class;
    }
}
