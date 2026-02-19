<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Document details tab &gt; Location &gt; The location where the item has been received.
 *
 * @method static \Pionect\VismaSdk\Factories\LocationInPurchaseReceiptLineDtoFactory testFactory()
 */
class LocationInPurchaseReceiptLineDto extends SpatieData
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
