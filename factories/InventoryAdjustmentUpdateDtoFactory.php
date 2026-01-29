<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\InventoryAdjustmentUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class InventoryAdjustmentUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'controlCost' => ControlCostInInventoryAdjustmentUpdateDtoFactory::new()->make(),
            'adjustmentLines' => [],
            'referenceNumber' => ReferenceNumberInInventoryAdjustmentUpdateDtoFactory::new()->make(),
            'hold' => HoldInInventoryAdjustmentUpdateDtoFactory::new()->make(),
            'date' => DateInInventoryAdjustmentUpdateDtoFactory::new()->make(),
            'postPeriod' => PostPeriodInInventoryAdjustmentUpdateDtoFactory::new()->make(),
            'externalReference' => ExternalReferenceInInventoryAdjustmentUpdateDtoFactory::new()->make(),
            'description' => DescriptionInInventoryAdjustmentUpdateDtoFactory::new()->make(),
            'controlQuantity' => ControlQuantityInInventoryAdjustmentUpdateDtoFactory::new()->make(),
            'branchNumber' => BranchNumberInInventoryAdjustmentUpdateDtoFactory::new()->make(),
        ];
    }

    protected function modelClass(): string
    {
        return InventoryAdjustmentUpdateDto::class;
    }
}
