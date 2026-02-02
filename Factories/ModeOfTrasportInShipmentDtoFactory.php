<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ModeOfTrasportInShipmentDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ModeOfTrasportInShipmentDtoFactory extends Factory
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
        return ModeOfTrasportInShipmentDto::class;
    }
}
