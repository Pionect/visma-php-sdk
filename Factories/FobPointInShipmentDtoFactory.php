<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\FobPointInShipmentDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\FobPointInShipmentDto>
 */
class FobPointInShipmentDtoFactory extends Factory
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
        return FobPointInShipmentDto::class;
    }
}
