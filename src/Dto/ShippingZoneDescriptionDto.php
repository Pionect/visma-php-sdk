<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ShippingZoneDescriptionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ShippingZoneDescriptionDtoFactory factory()
 */
class ShippingZoneDescriptionDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
