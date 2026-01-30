<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Pick priority &gt; The order of which location should have priority.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PickPriorityInWarehouseLocationUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PickPriorityInWarehouseLocationUpdateDtoFactory testFactory()
 */
class PickPriorityInWarehouseLocationUpdateDto extends Model
{
    public function __construct(
        public ?int $value = null,
    ) {}
}
