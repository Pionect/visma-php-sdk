<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\InventoryTransferUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class InventoryTransferUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'warehouseId' => $this->faker->uuid(),
            'toWarehouseId' => $this->faker->uuid(),
            'transferLines' => [],
            'referenceNumber' => ReferenceNumberInInventoryTransferUpdateDtoFactory::new()->make(),
            'hold' => HoldInInventoryTransferUpdateDtoFactory::new()->make(),
            'date' => DateInInventoryTransferUpdateDtoFactory::new()->make(),
            'postPeriod' => PostPeriodInInventoryTransferUpdateDtoFactory::new()->make(),
            'externalReference' => ExternalReferenceInInventoryTransferUpdateDtoFactory::new()->make(),
            'description' => DescriptionInInventoryTransferUpdateDtoFactory::new()->make(),
            'controlQuantity' => ControlQuantityInInventoryTransferUpdateDtoFactory::new()->make(),
            'branchNumber' => BranchNumberInInventoryTransferUpdateDtoFactory::new()->make(),
        ];
    }

    protected function modelClass(): string
    {
        return InventoryTransferUpdateDto::class;
    }
}
