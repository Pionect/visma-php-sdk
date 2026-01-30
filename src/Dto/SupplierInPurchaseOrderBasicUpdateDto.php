<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field if GLN or VatRegistrationId is not specified.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SupplierInPurchaseOrderBasicUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierInPurchaseOrderBasicUpdateDtoFactory factory()
 */
class SupplierInPurchaseOrderBasicUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
