<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: The top part &gt; Location* &gt; The supplier's location. Main location by default.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LocationInSupplierPaymentDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LocationInSupplierPaymentDtoFactory factory()
 */
class LocationInSupplierPaymentDto extends Model
{
    public function __construct(
        public ?string $countryId = null,
        public ?string $id = null,
        public ?string $name = null,
    ) {}
}
