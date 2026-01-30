<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Project &gt; The project to associate with this location by default.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ProjectInWarehouseLocationDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectInWarehouseLocationDtoFactory factory()
 */
class ProjectInWarehouseLocationDto extends Model
{
    public function __construct(
        public ?int $internalId = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
