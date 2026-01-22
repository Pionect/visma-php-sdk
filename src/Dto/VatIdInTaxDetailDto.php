<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * VAT ID &gt; The ID of the specific VAT applied.
 */
class VatIdInTaxDetailDto extends Model
{
    /** Number of item */
    #[Property]
    public ?string $number;

    /** Name of item/description */
    #[Property]
    public ?string $description;
}
