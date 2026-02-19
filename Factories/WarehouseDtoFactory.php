<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\WarehouseDto;
use Pionect\VismaSdk\Enums\WarehouseAvgDefaultCostEnum;
use Pionect\VismaSdk\Enums\WarehouseLocationEntryEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class WarehouseDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'warehouseId' => $this->faker->uuid(),
            'branch' => null,
            'replenishmentClass' => null,
            'active' => $this->faker->boolean(),
            'lockSitePicountEntry' => $this->faker->boolean(),
            'description' => $this->faker->sentence(),
            'locationEntry' => $this->faker->randomElement(WarehouseLocationEntryEnum::cases()),
            'avgDefaultCost' => $this->faker->randomElement(WarehouseAvgDefaultCostEnum::cases()),
            'fifoDefaultCost' => $this->faker->randomElement(WarehouseAvgDefaultCostEnum::cases()),
            'receiptLocation' => null,
            'shipLocation' => null,
            'returnLocation' => null,
            'dropShipLocation' => null,
            'contact' => null,
            'address' => null,
            'locations' => [],
            'timestamp' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return WarehouseDto::class;
    }
}
