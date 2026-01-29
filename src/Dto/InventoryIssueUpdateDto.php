<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a inventory issue in InventoryIssueController. Used by getting data.
 */
class InventoryIssueUpdateDto extends Model
{
    #[Property]
    public ?controlAmountInInventoryIssueUpdateDto $controlAmount;

    /** The inventory issue lines */
    #[Property]
    public ?array $issueLines;

    #[Property]
    public ?referenceNumberInInventoryIssueUpdateDto $referenceNumber;

    #[Property]
    public ?holdInInventoryIssueUpdateDto $hold;

    #[Property]
    public ?dateInInventoryIssueUpdateDto $date;

    #[Property]
    public ?postPeriodInInventoryIssueUpdateDto $postPeriod;

    #[Property]
    public ?externalReferenceInInventoryIssueUpdateDto $externalReference;

    #[Property]
    public ?descriptionInInventoryIssueUpdateDto $description;

    #[Property]
    public ?controlQuantityInInventoryIssueUpdateDto $controlQuantity;

    #[Property]
    public ?branchNumberInInventoryIssueUpdateDto $branchNumber;
}
