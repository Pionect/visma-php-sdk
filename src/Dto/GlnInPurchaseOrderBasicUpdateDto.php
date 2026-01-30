<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field if Supplier or VatRegistrationId is not specified.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\GlnInPurchaseOrderBasicUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\GlnInPurchaseOrderBasicUpdateDtoFactory factory()
 */
class GlnInPurchaseOrderBasicUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
