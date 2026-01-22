<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\TransactionTypeInShipmentDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class TransactionTypeInShipmentDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return TransactionTypeInShipmentDto::class;
    }
}
