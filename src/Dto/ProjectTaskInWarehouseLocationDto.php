<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Project task &gt; The project task to associate with this location by default.
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectTaskInWarehouseLocationDtoFactory testFactory()
 */
class ProjectTaskInWarehouseLocationDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $internalId = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
