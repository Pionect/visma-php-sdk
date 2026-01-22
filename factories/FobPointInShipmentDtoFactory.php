<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\FobPointInShipmentDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class FobPointInShipmentDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return FobPointInShipmentDto::class;
    }
}
