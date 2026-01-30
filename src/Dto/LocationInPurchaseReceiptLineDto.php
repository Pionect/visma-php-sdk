<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Document details tab &gt; Location &gt; The location where the item has been received.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LocationInPurchaseReceiptLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LocationInPurchaseReceiptLineDtoFactory factory()
 */
class LocationInPurchaseReceiptLineDto extends Model
{
    public function __construct(
        public ?string $countryId = null,
        public ?string $id = null,
        public ?string $name = null,
    ) {}
}
