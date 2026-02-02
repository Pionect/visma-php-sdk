<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: The top part Location* &gt; The supplier location from which the items should be
 * received or to which they should be returned.
 *
 * @method static \Pionect\VismaSdk\Factories\LocationInPurchaseReceiptDtoFactory testFactory()
 */
class LocationInPurchaseReceiptDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $countryId = null,
        public ?string $id = null,
        public ?string $name = null,
    ) {}
}
