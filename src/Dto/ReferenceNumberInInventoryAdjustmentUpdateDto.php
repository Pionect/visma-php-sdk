<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The unique reference number of the receipt, which the system automatically assigns according to the
 * numbering sequence selected for receipts on the Inventory Preferences IN.10.10.00) form.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ReferenceNumberInInventoryAdjustmentUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ReferenceNumberInInventoryAdjustmentUpdateDtoFactory testFactory()
 */
class ReferenceNumberInInventoryAdjustmentUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
