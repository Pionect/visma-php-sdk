<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field if Supplier or GLN is not specified.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\VatRegistrationIdInPurchaseOrderUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\VatRegistrationIdInPurchaseOrderUpdateDtoFactory factory()
 */
class VatRegistrationIdInPurchaseOrderUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
