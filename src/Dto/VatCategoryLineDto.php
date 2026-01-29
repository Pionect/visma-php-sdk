<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\VatCategoryLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\VatCategoryLineDtoFactory factory()
 */
class VatCategoryLineDto extends Model
{
    /** Mandatory field: VAT ID* &gt; The ID of the VAT included in the category. */
    #[Property]
    public ?string $vatId;

    /** Vendor code &gt; The vendor number associated with the VAT category line. */
    #[Property]
    public ?string $vendorCd;

    /** Description &gt; The detailed description of the VAT item. */
    #[Property]
    public ?string $description;

    /** VAT type &gt; The type of VAT, which defines how it is processed. */
    #[Property]
    public ?string $type;

    /** Calculate on &gt; The way the VAT amount is calculated, which can be one of the following options: Extract from item amount, Document amount, Document and VAT amount. */
    #[Property]
    public ?string $calculateOn;

    /** Cash discount &gt; The method of calculating the taxable amount if a discount is applied (based on the credit terms). It can be one of the following options: Reduce VAT amount, Does not affect VAT amount. */
    #[Property]
    public ?string $cashDiscount;

    #[Property]
    public ?array $vatRates;
}
