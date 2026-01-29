<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\InventoryTransferDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class InventoryTransferDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'warehouse' => WarehouseInInventoryTransferDtoFactory::new()->make(),
            'toWarehouse' => ToWarehouseInInventoryTransferDtoFactory::new()->make(),
            'transferLines' => [],
            'referenceNumber' => $this->faker->word(),
            'status' => $this->faker->word(),
            'hold' => $this->faker->boolean(),
            'date' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'postPeriod' => $this->faker->word(),
            'externalReference' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'totalQuantity' => $this->faker->randomFloat(2, 0, 1000),
            'controlQuantity' => $this->faker->randomFloat(2, 0, 1000),
            'batchNumber' => $this->faker->word(),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'branchNumber' => BranchNumberInInventoryTransferDtoFactory::new()->make(),
            'attachments' => [],
            'timestamp' => $this->faker->word(),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return InventoryTransferDto::class;
    }
}
