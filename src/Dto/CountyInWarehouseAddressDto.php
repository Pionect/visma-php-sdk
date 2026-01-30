<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * County &gt; The county where the warehouse is located.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CountyInWarehouseAddressDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CountyInWarehouseAddressDtoFactory factory()
 */
class CountyInWarehouseAddressDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $name = null,
    ) {}
}
