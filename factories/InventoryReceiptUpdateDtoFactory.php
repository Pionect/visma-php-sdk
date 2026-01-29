<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\InventoryReceiptUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class InventoryReceiptUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'transferNumber' => TransferNumberInInventoryReceiptUpdateDtoFactory::new()->make(),
            'controlCost' => ControlCostInInventoryReceiptUpdateDtoFactory::new()->make(),
            'receiptLines' => [],
            'referenceNumber' => ReferenceNumberInInventoryReceiptUpdateDtoFactory::new()->make(),
            'hold' => HoldInInventoryReceiptUpdateDtoFactory::new()->make(),
            'date' => DateInInventoryReceiptUpdateDtoFactory::new()->make(),
            'postPeriod' => PostPeriodInInventoryReceiptUpdateDtoFactory::new()->make(),
            'externalReference' => ExternalReferenceInInventoryReceiptUpdateDtoFactory::new()->make(),
            'description' => DescriptionInInventoryReceiptUpdateDtoFactory::new()->make(),
            'controlQuantity' => ControlQuantityInInventoryReceiptUpdateDtoFactory::new()->make(),
            'branchNumber' => BranchNumberInInventoryReceiptUpdateDtoFactory::new()->make(),
        ];
    }

    protected function modelClass(): string
    {
        return InventoryReceiptUpdateDto::class;
    }
}
