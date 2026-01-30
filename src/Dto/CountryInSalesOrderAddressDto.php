<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Country &gt; The country.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CountryInSalesOrderAddressDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CountryInSalesOrderAddressDtoFactory testFactory()
 */
class CountryInSalesOrderAddressDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $name = null,
        public ?string $errorInfo = null,
    ) {}
}
