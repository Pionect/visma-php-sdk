<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Financial details tab &gt; The VAT info section &gt; Customer VAT zone &gt; If the invoice was
 * created from an opportunity that has a VAT zone specified, the VAT zone specified for the
 * opportunity.
 */
class CustomerVatZoneInCustomerCreditWriteOffDto extends Model
{
    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
