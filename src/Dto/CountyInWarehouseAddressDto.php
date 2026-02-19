<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * County &gt; The county where the warehouse is located.
 *
 * @method static \Pionect\VismaSdk\Factories\CountyInWarehouseAddressDtoFactory testFactory()
 */
class CountyInWarehouseAddressDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Click the magnifier > The identifier */
        public ?string $id = null,
        /** Click the magnifier > The displayed name */
        public ?string $name = null,
    ) {}
}
