<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SupplierInvoiceLandedCostUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierInvoiceLandedCostUpdateDtoFactory factory()
 */
class SupplierInvoiceLandedCostUpdateDto extends Model
{
    #[Property]
    public ?string $operation;

    #[Property]
    public ?lineNumberInSupplierInvoiceLandedCostUpdateDto $lineNumber;

    #[Property]
    public ?landedCostCodeIdInSupplierInvoiceLandedCostUpdateDto $landedCostCodeId;

    #[Property]
    public ?descriptionInSupplierInvoiceLandedCostUpdateDto $description;

    #[Property]
    public ?amountInSupplierInvoiceLandedCostUpdateDto $amount;

    #[Property]
    public ?taxCategoryIdInSupplierInvoiceLandedCostUpdateDto $taxCategoryId;

    #[Property]
    public ?poReceiptNumberInSupplierInvoiceLandedCostUpdateDto $poReceiptNumber;

    #[Property]
    public ?inventoryIdInSupplierInvoiceLandedCostUpdateDto $inventoryId;

    #[Property]
    public ?siteIdInSupplierInvoiceLandedCostUpdateDto $siteId;

    #[Property]
    public ?locationIdInSupplierInvoiceLandedCostUpdateDto $locationId;
}
