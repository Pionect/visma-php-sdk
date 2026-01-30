<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field if Supplier or VatRegistrationId is not specified.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\GlnInPurchaseOrderUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\GlnInPurchaseOrderUpdateDtoFactory testFactory()
 */
class GlnInPurchaseOrderUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
