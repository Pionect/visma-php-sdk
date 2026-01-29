<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Transfers allowed &gt; You select this check box if transfers are allowed for this location.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\TransfersValidInWarehouseLocationUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\TransfersValidInWarehouseLocationUpdateDtoFactory factory()
 */
class TransfersValidInWarehouseLocationUpdateDto extends Model
{
    #[Property]
    public ?bool $value;
}
