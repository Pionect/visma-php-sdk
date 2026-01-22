<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\WarehouseInShipmentDetailLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class WarehouseInShipmentDetailLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return WarehouseInShipmentDetailLineDto::class;
    }
}
