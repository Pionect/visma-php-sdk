<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\VatCategoryDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\VatCategoryDtoFactory factory()
 */
class VatCategoryDto extends Model
{
    /** Mandatory field: The top part &gt; VAT category ID* &gt; The unique ID of the VAT category. An alphanumeric string of up to six characters can be used. */
    #[Property]
    public ?string $vatCategoryId;

    /** The top part &gt; Description &gt; A detailed description of the category. */
    #[Property]
    public ?string $description;

    /** The top part &gt; Active &gt; A check box that means (if selected) that this VAT category is active. */
    #[Property]
    public ?bool $active;

    /** The top part &gt; Exclude listed taxes &gt; A check box that indicates (if selected) this VAT category should exclude the listed taxes from VAT zones. */
    #[Property]
    public ?bool $excludeListedTaxes;

    /** Systemgenerated information. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;

    /** The table &gt; */
    #[Property]
    public ?array $vatCategoryLines;
}
