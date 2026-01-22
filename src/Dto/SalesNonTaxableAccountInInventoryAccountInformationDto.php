<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Sales - non-taxable account &gt; The income account to be used for this stock item to record
 * non-taxable sales.
 */
class SalesNonTaxableAccountInInventoryAccountInformationDto extends Model
{
    /** Number of item */
    #[Property]
    public ?string $number;

    /** Name of item/description */
    #[Property]
    public ?string $description;
}
