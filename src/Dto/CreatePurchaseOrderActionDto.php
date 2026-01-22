<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class CreatePurchaseOrderActionDto extends Model
{
    /** Mandatory field */
    #[Property]
    public ?string $orderType;

    /** Supplier */
    #[Property]
    public ?bool $preferSupplierFromSoline;
}
