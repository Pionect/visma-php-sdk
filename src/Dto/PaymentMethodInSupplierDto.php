<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Payment settings tab &gt; Payment settings section &gt; Payment method &gt; The default payment
 * method to be used for the supplier.
 */
class PaymentMethodInSupplierDto extends Model
{
    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
