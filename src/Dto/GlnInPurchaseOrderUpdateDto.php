<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field if Supplier or VatRegistrationId is not specified.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\GlnInPurchaseOrderUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\GlnInPurchaseOrderUpdateDtoFactory factory()
 */
class GlnInPurchaseOrderUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
