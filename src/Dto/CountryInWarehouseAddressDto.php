<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Country &gt; The country where the warehouse is located.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CountryInWarehouseAddressDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CountryInWarehouseAddressDtoFactory factory()
 */
class CountryInWarehouseAddressDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $name = null,
        public ?string $errorInfo = null,
    ) {}
}
