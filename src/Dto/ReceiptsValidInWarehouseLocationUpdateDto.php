<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Receipts allowed &gt; You select this check box if receipts are allowed at this location.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ReceiptsValidInWarehouseLocationUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ReceiptsValidInWarehouseLocationUpdateDtoFactory factory()
 */
class ReceiptsValidInWarehouseLocationUpdateDto extends Model
{
    public function __construct(
        public ?bool $value = null,
    ) {}
}
