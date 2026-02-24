<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: The top part Location* &gt; The supplier location from which the items should be
 * received or to which they should be returned.
 *
 * @method static \Pionect\VismaSdk\Factories\LocationInPurchaseReceiptBasicDtoFactory testFactory()
 */
class LocationInPurchaseReceiptBasicDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\LocationInPurchaseReceiptBasicDtoFactory> */
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
