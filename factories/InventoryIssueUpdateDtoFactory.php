<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\InventoryIssueUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class InventoryIssueUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'controlAmount' => ControlAmountInInventoryIssueUpdateDtoFactory::new()->make(),
            'issueLines' => [],
            'referenceNumber' => ReferenceNumberInInventoryIssueUpdateDtoFactory::new()->make(),
            'hold' => HoldInInventoryIssueUpdateDtoFactory::new()->make(),
            'date' => DateInInventoryIssueUpdateDtoFactory::new()->make(),
            'postPeriod' => PostPeriodInInventoryIssueUpdateDtoFactory::new()->make(),
            'externalReference' => ExternalReferenceInInventoryIssueUpdateDtoFactory::new()->make(),
            'description' => DescriptionInInventoryIssueUpdateDtoFactory::new()->make(),
            'controlQuantity' => ControlQuantityInInventoryIssueUpdateDtoFactory::new()->make(),
            'branchNumber' => BranchNumberInInventoryIssueUpdateDtoFactory::new()->make(),
        ];
    }

    protected function modelClass(): string
    {
        return InventoryIssueUpdateDto::class;
    }
}
