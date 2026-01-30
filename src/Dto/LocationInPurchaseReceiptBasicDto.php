<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: The top part Location* &gt; The supplier location from which the items should be
 * received or to which they should be returned.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LocationInPurchaseReceiptBasicDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LocationInPurchaseReceiptBasicDtoFactory testFactory()
 */
class LocationInPurchaseReceiptBasicDto extends Model
{
    public function __construct(
        public ?string $countryId = null,
        public ?string $id = null,
        public ?string $name = null,
    ) {}
}
