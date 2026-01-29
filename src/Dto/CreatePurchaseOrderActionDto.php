<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CreatePurchaseOrderActionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CreatePurchaseOrderActionDtoFactory factory()
 */
class CreatePurchaseOrderActionDto extends Model
{
    /** Mandatory field */
    #[Property]
    public ?string $orderType;

    /** Supplier */
    #[Property]
    public ?bool $preferSupplierFromSoline;
}
