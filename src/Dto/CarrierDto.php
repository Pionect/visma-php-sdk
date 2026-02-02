<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a Carrier in CarrierController. Used for getting data.
 *
 * @method static \Pionect\VismaSdk\Factories\CarrierDtoFactory testFactory()
 */
class CarrierDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $carrierId = null,
        public ?string $carrierDescription = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
    ) {}
}
