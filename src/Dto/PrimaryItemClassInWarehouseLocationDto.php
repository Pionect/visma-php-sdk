<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Primary item class &gt; The primary item class for this location; items of this class are received
 * the most often or stored here in the highest volumes.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PrimaryItemClassInWarehouseLocationDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PrimaryItemClassInWarehouseLocationDtoFactory factory()
 */
class PrimaryItemClassInWarehouseLocationDto extends Model
{
    public function __construct(
        public ?string $type = null,
        public ?array $attributes = null,
        public ?string $id = null,
        public ?string $description = null,
        public ?string $errorInfo = null,
    ) {}
}
