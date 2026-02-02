<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Country &gt; The country where the warehouse is located.
 *
 * @method static \Pionect\VismaSdk\Factories\CountryInWarehouseAddressDtoFactory testFactory()
 */
class CountryInWarehouseAddressDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $name = null,
        public ?string $errorInfo = null,
    ) {}
}
