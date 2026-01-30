<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field if Supplier or GLN is not specified.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\VatRegistrationIdInPurchaseOrderUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\VatRegistrationIdInPurchaseOrderUpdateDtoFactory testFactory()
 */
class VatRegistrationIdInPurchaseOrderUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
