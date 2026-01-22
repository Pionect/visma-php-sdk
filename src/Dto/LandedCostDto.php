<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a Landed Cost Line for Purchase Receipt in PurchaseReceiptController. Used for
 * getting data.
 */
class LandedCostDto extends Model
{
    /** Landed costs tab &gt; Line number */
    #[Property]
    public ?int $lineNbr;

    /** Mandatory field: Landed costs tab &gt; Landed costs* &gt; Landed cost code &gt; The landed cost code associated with the landed costs incurred for this purchase or transfer receipt. */
    #[Property]
    public ?string $landedCostCode;

    /** Mandatory field: Landed costs tab &gt; Description* &gt; The description of the landed cost code. */
    #[Property]
    public ?string $description;

    #[Property]
    public ?string $purchaseInvoiceNbr;

    #[Property]
    public ?\supplierInLandedCostDto $supplier;

    #[Property]
    public ?\locationInLandedCostDto $location;

    /** Landed costs tab &gt; Purchase invoice date &gt; The date of the purchase invoice for the landed cost. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $apBillDate;

    /** Landed costs tab &gt; Currency &gt; The currency used for the landed cost. */
    #[Property]
    public ?string $currency;

    /** Landed costs tab &gt; Amount &gt; A non-zero amount of the landed cost. */
    #[Property]
    public ?float $amount;

    #[Property]
    public ?\taxCategoryInLandedCostDto $taxCategory;

    #[Property]
    public ?\termsInLandedCostDto $terms;

    #[Property]
    public ?\InventoryNumberDescriptionDto $inventory;

    /** Landed costs tab &gt; Supplier document type &gt; The type of the supplier document generated for the landed cost. */
    #[Property]
    public ?string $apDocType;

    /** Landed costs tab &gt; Supplier ref. &gt; The reference number of the supplier document generated for the landed cost. */
    #[Property]
    public ?string $apRefNbr;

    /** Landed costs tab &gt; Inventory doc. type &gt; The type of the document generated in the Inventory workspace for this landed cost. */
    #[Property]
    public ?string $inDocType;

    /** Landed costs tab &gt; Inventory ref. no. &gt; The reference number of the document generated in the Inventory workspace for this landed cost. */
    #[Property]
    public ?string $inRefNbr;

    /** Landed costs tab &gt; Postpone creation of purchase invoice &gt; A check box that indicates (if selected) that a related supplier ledger invoice for the incurred landed costs must be created later. */
    #[Property]
    public ?bool $postponePurchaseInvoiceCreation;
}
