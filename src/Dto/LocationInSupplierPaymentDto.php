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
        /** Location*. */
        public ?string $countryId = null,
        /** Click the magnifier > The identifier */
        public ?string $id = null,
        /** Click the magnifier > The displayed name */
        public ?string $name = null,
    ) {}
}
