<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\ItemClassTypeEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * Primary item class &gt; The primary item class for this location; items of this class are received
 * the most often or stored here in the highest volumes.
 *
 * @method static \Pionect\VismaSdk\Factories\PrimaryItemClassInWarehouseLocationDtoFactory testFactory()
 */
class PrimaryItemClassInWarehouseLocationDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\PrimaryItemClassInWarehouseLocationDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?ItemClassTypeEnum $type = null,
        /** @var ClassAttributeDto[]|null */
        public ?array $attributes = null,
        /** The identifier. */
        public ?string $id = null,
        /** The description. */
        public ?string $description = null,
        public ?string $errorInfo = null,
    ) {}
}
