<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ToWarehouseInShipmentDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ToWarehouseInShipmentDtoFactory extends Factory
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
        return ToWarehouseInShipmentDto::class;
    }
}
