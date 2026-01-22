<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\WarehouseDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class WarehouseDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'warehouseId' => $this->faker->uuid(),
            'branch' => $this->faker->word(),
            'replenishmentClass' => $this->faker->word(),
            'active' => $this->faker->boolean(),
            'lockSitePicountEntry' => $this->faker->boolean(),
            'description' => $this->faker->sentence(),
            'locationEntry' => $this->faker->word(),
            'avgDefaultCost' => $this->faker->word(),
            'fifoDefaultCost' => $this->faker->word(),
            'receiptLocation' => $this->faker->word(),
            'shipLocation' => $this->faker->word(),
            'returnLocation' => $this->faker->word(),
            'dropShipLocation' => $this->faker->word(),
            'contact' => $this->faker->word(),
            'address' => $this->faker->word(),
            'locations' => [],
            'timestamp' => $this->faker->word(),
            'metadata' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return WarehouseDto::class;
    }
}
