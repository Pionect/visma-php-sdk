<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * A free custom colum of type int
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomInt2inPurchaseOrderBasicUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomInt2inPurchaseOrderBasicUpdateDtoFactory testFactory()
 */
class CustomInt2inPurchaseOrderBasicUpdateDto extends Model
{
    public function __construct(
        public ?int $value = null,
    ) {}
}
