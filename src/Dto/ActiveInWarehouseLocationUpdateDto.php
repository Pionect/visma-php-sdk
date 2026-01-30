<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Active &gt; This check box indicates whether this location is active.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ActiveInWarehouseLocationUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ActiveInWarehouseLocationUpdateDtoFactory factory()
 */
class ActiveInWarehouseLocationUpdateDto extends Model
{
    public function __construct(
        public ?bool $value = null,
    ) {}
}
