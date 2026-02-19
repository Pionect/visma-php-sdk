<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Primary item &gt; The primary item for this location, which is the item that is received the most
 * often or stored here in the highest volumes.
 *
 * @method static \Pionect\VismaSdk\Factories\PrimaryItemInWarehouseLocationDtoFactory testFactory()
 */
class PrimaryItemInWarehouseLocationDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Number of item */
        public ?string $number = null,
        /** Name of item/description */
        public ?string $description = null,
    ) {}
}
