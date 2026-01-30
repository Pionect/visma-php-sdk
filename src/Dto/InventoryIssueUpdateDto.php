<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a inventory issue in InventoryIssueController. Used by getting data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\InventoryIssueUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\InventoryIssueUpdateDtoFactory testFactory()
 */
class InventoryIssueUpdateDto extends Model
{
    public function __construct(
        public ?ControlAmountInInventoryIssueUpdateDto $controlAmount = null,
        public ?array $issueLines = null,
        public ?ReferenceNumberInInventoryIssueUpdateDto $referenceNumber = null,
        public ?HoldInInventoryIssueUpdateDto $hold = null,
        public ?DateInInventoryIssueUpdateDto $date = null,
        public ?PostPeriodInInventoryIssueUpdateDto $postPeriod = null,
        public ?ExternalReferenceInInventoryIssueUpdateDto $externalReference = null,
        public ?DescriptionInInventoryIssueUpdateDto $description = null,
        public ?ControlQuantityInInventoryIssueUpdateDto $controlQuantity = null,
        public ?BranchNumberInInventoryIssueUpdateDto $branchNumber = null,
    ) {}
}
