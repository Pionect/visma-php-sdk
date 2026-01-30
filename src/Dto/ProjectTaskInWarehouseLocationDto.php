<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Project task &gt; The project task to associate with this location by default.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ProjectTaskInWarehouseLocationDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectTaskInWarehouseLocationDtoFactory testFactory()
 */
class ProjectTaskInWarehouseLocationDto extends Model
{
    public function __construct(
        public ?int $internalId = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
