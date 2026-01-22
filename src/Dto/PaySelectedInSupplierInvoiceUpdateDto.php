<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Financial details tab &gt; The Default Payment Info section &gt; When set to true indicates that
 * the document is approved for payment.
 */
class PaySelectedInSupplierInvoiceUpdateDto extends Model
{
    #[Property]
    public ?bool $value;
}
