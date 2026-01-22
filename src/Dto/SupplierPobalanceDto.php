<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class SupplierPobalanceDto extends Model
{
    #[Property]
    public ?\supplierInSupplierPOBalanceDto $supplier;

    /** The total amount of order on hold */
    #[Property]
    public ?float $totalPoonHoldOrderTotal;

    /** The total amount of the order line on hold */
    #[Property]
    public ?float $totalPoonHoldLineTotal;

    /** The total open amount of the order */
    #[Property]
    public ?float $totalOpenPoorderTotal;

    /** The total open amount of the order line */
    #[Property]
    public ?float $totalOpenPolineTotal;

    /** The total closed amount of the order */
    #[Property]
    public ?float $totalClosedPoorderTotal;

    /** The total closed amount of the order line */
    #[Property]
    public ?float $totalClosedPolineTotal;

    /** The date and time when the purchase order was last modified. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;
}
