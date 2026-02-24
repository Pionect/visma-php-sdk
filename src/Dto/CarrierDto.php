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
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\CarrierDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /**
         * Mandatory field: The top part > Ship via* > The unique code associated with
         * the non-integrated carrier, the method of the integrated carrier, or the
         * shipping option of your company.
         */
        public ?string $carrierId = null,
        /**
         * Mandatory field: The top part > Description* > A description of this shipping
         * service or option.
         */
        public ?string $carrierDescription = null,
        /**
         * This information is not visible in the window.  It is collected from the
         * system.
         */
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
    ) {}
}
