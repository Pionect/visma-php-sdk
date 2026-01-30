<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Project task &gt; The project task to associate with this location by default.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ProjectTaskIdInWarehouseLocationUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectTaskIdInWarehouseLocationUpdateDtoFactory testFactory()
 */
class ProjectTaskIdInWarehouseLocationUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
