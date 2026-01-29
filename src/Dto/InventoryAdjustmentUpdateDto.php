<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a inventory issue in InventoryIssueController. Used by getting data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\InventoryAdjustmentUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\InventoryAdjustmentUpdateDtoFactory factory()
 */
class InventoryAdjustmentUpdateDto extends Model
{
    #[Property]
    public ?controlCostInInventoryAdjustmentUpdateDto $controlCost;

    /** The inventory adjustment lines */
    #[Property]
    public ?array $adjustmentLines;

    #[Property]
    public ?referenceNumberInInventoryAdjustmentUpdateDto $referenceNumber;

    #[Property]
    public ?holdInInventoryAdjustmentUpdateDto $hold;

    #[Property]
    public ?dateInInventoryAdjustmentUpdateDto $date;

    #[Property]
    public ?postPeriodInInventoryAdjustmentUpdateDto $postPeriod;

    #[Property]
    public ?externalReferenceInInventoryAdjustmentUpdateDto $externalReference;

    #[Property]
    public ?descriptionInInventoryAdjustmentUpdateDto $description;

    #[Property]
    public ?controlQuantityInInventoryAdjustmentUpdateDto $controlQuantity;

    #[Property]
    public ?branchNumberInInventoryAdjustmentUpdateDto $branchNumber;
}
