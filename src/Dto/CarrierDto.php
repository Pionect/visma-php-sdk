<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a Carrier in CarrierController. Used for getting data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CarrierDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CarrierDtoFactory factory()
 */
class CarrierDto extends Model
{
    public function __construct(
        public ?string $carrierId = null,
        public ?string $carrierDescription = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
    ) {}
}
