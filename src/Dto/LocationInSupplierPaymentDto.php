<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: The top part &gt; Location* &gt; The supplier's location. Main location by default.
 *
 * @method static \Pionect\VismaSdk\Factories\LocationInSupplierPaymentDtoFactory testFactory()
 */
class LocationInSupplierPaymentDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $countryId = null,
        public ?string $id = null,
        public ?string $name = null,
    ) {}
}
