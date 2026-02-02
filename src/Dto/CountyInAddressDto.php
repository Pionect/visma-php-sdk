<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * County &gt; The county or province.
 *
 * @method static \Pionect\VismaSdk\Factories\CountyInAddressDtoFactory testFactory()
 */
class CountyInAddressDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $name = null,
    ) {}
}
