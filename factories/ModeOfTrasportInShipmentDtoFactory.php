<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ModeOfTrasportInShipmentDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ModeOfTrasportInShipmentDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return ModeOfTrasportInShipmentDto::class;
    }
}
