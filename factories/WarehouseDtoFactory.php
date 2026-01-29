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
            'branch' => BranchInWarehouseDtoFactory::new()->make(),
            'replenishmentClass' => ReplenishmentClassInWarehouseDtoFactory::new()->make(),
            'active' => $this->faker->boolean(),
            'lockSitePicountEntry' => $this->faker->boolean(),
            'description' => $this->faker->sentence(),
            'locationEntry' => $this->faker->word(),
            'avgDefaultCost' => $this->faker->word(),
            'fifoDefaultCost' => $this->faker->word(),
            'receiptLocation' => ReceiptLocationInWarehouseDtoFactory::new()->make(),
            'shipLocation' => ShipLocationInWarehouseDtoFactory::new()->make(),
            'returnLocation' => ReturnLocationInWarehouseDtoFactory::new()->make(),
            'dropShipLocation' => DropShipLocationInWarehouseDtoFactory::new()->make(),
            'contact' => ContactInWarehouseDtoFactory::new()->make(),
            'address' => AddressInWarehouseDtoFactory::new()->make(),
            'locations' => [],
            'timestamp' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return WarehouseDto::class;
    }
}
