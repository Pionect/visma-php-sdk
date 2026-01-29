<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * VAT ID &gt; The ID of the specific VAT applied.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\VatIdInTaxDetailDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\VatIdInTaxDetailDtoFactory factory()
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
