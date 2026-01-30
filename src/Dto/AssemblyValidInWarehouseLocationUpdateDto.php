<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Assembly allowed &gt; You select this check box if assembly operations are allowed at this location.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\AssemblyValidInWarehouseLocationUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\AssemblyValidInWarehouseLocationUpdateDtoFactory testFactory()
 */
class AssemblyValidInWarehouseLocationUpdateDto extends Model
{
    public function __construct(
        public ?bool $value = null,
    ) {}
}
