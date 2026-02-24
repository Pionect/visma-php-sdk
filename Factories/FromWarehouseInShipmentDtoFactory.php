<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\FromWarehouseInShipmentDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\FromWarehouseInShipmentDto>
 */
class FromWarehouseInShipmentDtoFactory extends Factory
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
        return FromWarehouseInShipmentDto::class;
    }
}
