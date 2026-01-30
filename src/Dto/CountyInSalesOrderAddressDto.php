<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * County &gt; The county or province.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CountyInSalesOrderAddressDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CountyInSalesOrderAddressDtoFactory factory()
 */
class CountyInSalesOrderAddressDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $name = null,
    ) {}
}
