<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Financial details tab &gt; The VAT info section &gt; Dunning letter date
 */
class CustomerVatZoneInCustomerOverdueChargeDto extends Model
{
    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
