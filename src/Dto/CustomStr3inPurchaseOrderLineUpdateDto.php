<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * A free custom colum of type string with max length 100.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomStr3inPurchaseOrderLineUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomStr3inPurchaseOrderLineUpdateDtoFactory testFactory()
 */
class CustomStr3inPurchaseOrderLineUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
