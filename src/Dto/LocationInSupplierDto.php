<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Purchase settings tab &gt; Default location settings section &gt;
 *
 * @method static \Pionect\VismaSdk\Factories\LocationInSupplierDtoFactory testFactory()
 */
class LocationInSupplierDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $countryId = null,
        public ?string $id = null,
        public ?string $name = null,
    ) {}
}
