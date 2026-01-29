<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SupplierInvoiceLandedCostDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierInvoiceLandedCostDtoFactory factory()
 */
class SupplierInvoiceLandedCostDto extends Model
{
    /** Landed Costs Tab &gt; Number at the left indicating the line number of the table. */
    #[Property]
    public ?int $lineNumber;

    /** Landed Costs Tab &gt; Landed cost code &gt; The Landed Cost Code ID lf the Landed Cost Code */
    #[Property]
    public ?string $landedCostCodeId;

    /** Landed Costs Tab &gt; Description &gt; The description of the landed cost */
    #[Property]
    public ?string $description;

    /** Landed Costs Tab &gt; Amount &gt; The amount of the landed cost */
    #[Property]
    public ?float $amount;

    /** Landed Costs Tab &gt; VAT Category &gt; The ID of VAT cateogry */
    #[Property]
    public ?string $vatCategoryId;

    /** Landed Costs Tab &gt; Purchase Receipt Type &gt; The purchase receipt type */
    #[Property]
    public ?string $purchaseReceiptType;

    /** Landed Costs Tab &gt; Purchase order receipt no. &gt; The purchase order receipt number */
    #[Property]
    public ?string $purcahseOrderReceiptNumber;

    /** Landed Costs Tab &gt; Item ID &gt; The ID of the inventory item */
    #[Property]
    public ?string $inventoryId;

    /** Landed Costs Tab &gt; Warehouse &gt; The ID of the warehouse */
    #[Property]
    public ?string $siteId;

    /** Landed Costs Tab &gt; Location &gt; The ID of the warehouse location */
    #[Property]
    public ?string $locationId;
}
