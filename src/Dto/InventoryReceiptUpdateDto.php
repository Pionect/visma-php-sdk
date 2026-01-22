<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a inventory issue in InventoryIssueController. Used by getting data.
 */
class InventoryReceiptUpdateDto extends Model
{
    #[Property]
    public ?\transferNumberInInventoryReceiptUpdateDto $transferNumber;

    #[Property]
    public ?\controlCostInInventoryReceiptUpdateDto $controlCost;

    /** The inventory issue lines */
    #[Property]
    public ?array $receiptLines;

    #[Property]
    public ?\referenceNumberInInventoryReceiptUpdateDto $referenceNumber;

    #[Property]
    public ?\holdInInventoryReceiptUpdateDto $hold;

    #[Property]
    public ?\dateInInventoryReceiptUpdateDto $date;

    #[Property]
    public ?\postPeriodInInventoryReceiptUpdateDto $postPeriod;

    #[Property]
    public ?\externalReferenceInInventoryReceiptUpdateDto $externalReference;

    #[Property]
    public ?\descriptionInInventoryReceiptUpdateDto $description;

    #[Property]
    public ?\controlQuantityInInventoryReceiptUpdateDto $controlQuantity;

    #[Property]
    public ?\branchNumberInInventoryReceiptUpdateDto $branchNumber;
}
