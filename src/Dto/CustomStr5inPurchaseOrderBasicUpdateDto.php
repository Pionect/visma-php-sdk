<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * A free custom colum of type string with max length 100.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomStr5inPurchaseOrderBasicUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomStr5inPurchaseOrderBasicUpdateDtoFactory factory()
 */
class CustomStr5inPurchaseOrderBasicUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
