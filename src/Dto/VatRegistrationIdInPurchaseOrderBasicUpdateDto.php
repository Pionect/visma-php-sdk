<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field if Supplier or GLN is not specified.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\VatRegistrationIdInPurchaseOrderBasicUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\VatRegistrationIdInPurchaseOrderBasicUpdateDtoFactory factory()
 */
class VatRegistrationIdInPurchaseOrderBasicUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
