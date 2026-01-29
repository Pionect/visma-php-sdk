<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
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
    /** Click the magnifier &gt; The identifier */
    #[Property]
    public ?string $id;

    /** Click the magnifier &gt; The displayed name */
    #[Property]
    public ?string $name;
}
